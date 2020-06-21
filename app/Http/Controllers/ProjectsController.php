<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Validator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use App\Models\Project;
use App\Models\ProjectImage;
use App\Models\CaseStudy;
use App\Models\UserProject;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Carbon\Carbon;
use App\Models\SaveCustomDesign;


class ProjectsController extends Controller
{
  
  public $carbonObject;
 
  


  public function __construct(){
    
    $this->carbonObject         =   new Carbon();
    
}	
  
  public function getProjects(){
    $where = '';
    $get_posts_for_project = DB::table('projects')
                               ->orderBy('projects.id', 'desc')
                               ->get()
                               ->toArray(); 
    
    return $get_posts_for_project;
  }
  
  public function getProjectImages($id){
    $where['project_id'] = $id;
    $get_posts_for_project = DB::table('project_images')
                                ->where($where)
                               ->orderBy('id', 'desc')
                               ->get()
                               ->toArray(); 
    
    return $get_posts_for_project;
  }
  
  
  public function getProjectsByFilter($status,$show){
    $where['projects.status'] = $status;
    $where['projects.show_home'] = $show;
    $get_posts_for_project = DB::table('projects')
                               ->where($where)
                               ->orderBy('projects.id', 'desc')
                               ->get()
                               ->toArray(); 
    
    return $get_posts_for_project;
  }

  public function getUsersUpcomingProjects(){

      $where['projects.status'] = 2;
      
      $userId=get_loggedin_user_details()->id;
      $where2['user_id'] = $userId;
      $userprojectids = DB::table('user_project')
      ->select('project_id')
      ->where(['user_id' => $userId])
      ->get()
      ->toArray(); 
      $array = json_decode(json_encode($userprojectids), true);
     
      
      $projects = Project::whereNotIn('id', $array)->where($where)->select('*')->get();
      
      
      return $projects;
    }


    public function getUsersContracts(){
      $userId=get_loggedin_user_details()->id;
      $where['user_project.user_id'] = $userId;
      
      $contracts = DB::table('projects')
                                 ->join('user_project','projects.id','=','user_project.project_id')
                                 
                                 ->where($where)
                                 ->orderBy('user_project.created_at', 'desc')
                                 ->get()
                                 ->toArray(); 
      
      return $contracts;
    }
    public function getUsersContract($id){
      $userId=get_loggedin_user_details()->id;
      $where['user_project.id'] = $id;
      
      $contract = DB::table('projects')
                                 ->join('user_project','projects.id','=','user_project.project_id')
                                 
                                 ->where($where)
                                 ->orderBy('user_project.created_at', 'desc')
                                 ->get()
                                 ->first(); 
      
      return $contract;
    }

    public function getDocuments($status){
      
      $where['user_project.status'] = $status;
      
      $contracts = DB::table('projects')
                                
                                 ->join('user_project','projects.id','=','user_project.project_id')
                                 ->join('users','users.id','=','user_project.user_id')
                                 ->where($where)
                                 ->orderBy('user_project.created_at', 'desc')
                                 ->get()
                                 ->toArray(); 
      
      return $contracts;
    }



    public function getCaseStudies(){
      
      
      $cases = DB::table('case_studies')
                                 ->join('projects','projects.id','=','case_studies.project_id')
                                 ->get()
                                 ->toArray(); 
      
      return $cases;
    }
  
  public function getProject($id){
    $where = '';
    $get_posts_for_project = DB::table('projects')
                               ->where(['projects.id' => $id])
                              
                               ->get()
                               ->first(); 
    
    return $get_posts_for_project;
  }
  public function getCaseStudyByProject($id){
    $where = '';
    $get_posts_for_project = DB::table('case_studies')
                               ->where(['case_studies.project_id' => $id])
                               
                               ->get()
                               ->first(); 
    
    return $get_posts_for_project;
  }
  public function getProjectCaseStudy($id){
    $where = '';
    $cases = DB::table('case_studies')
                               ->where(['project_id' => $id])
                               ->get()
                               ->first(); 
    
    return $cases;
  }
  
  public function saveProject($params=null,Request $request){
      ///echo $params; exit();
    if( $request->isMethod('post') && Session::token() == $request->Input('_token')){ 
        
        
        
        
      if($request->Input('sc_post_type') == 'add_post'){
          $post  =  new Project;
          $project_image="";
          if ($request->hasFile('project_image')) {
                $file = $request->file('project_image');
                $project_image = time().'.'.$file->getClientOriginalExtension();
                $destinationPath =public_path('uploads/projects/main'); 
                $file->move($destinationPath,$project_image); 
          }
          $project_deck="";
          if ($request->hasFile('project_deck')) {
                $file = $request->file('project_deck');
                $project_deck = time().'.'.$file->getClientOriginalExtension();
                $destinationPath =public_path('uploads/projects/deck'); 
                $file->move($destinationPath,$project_deck); 
          }
          $project_financial="";
          if ($request->hasFile('project_financial')) {
                $file = $request->file('project_financial');
                $project_financial = time().'.'.$file->getClientOriginalExtension();
                $destinationPath =public_path('uploads/projects/financial'); 
                $file->move($destinationPath,$project_financial); 
          }
           $project_pdf="";
          if ($request->hasFile('project_pdf')) {
                $file = $request->file('project_pdf');
                $project_pdf = time().'.'.$file->getClientOriginalExtension();
                $destinationPath =public_path('uploads/projects/pdf'); 
                $file->move($destinationPath,$project_pdf); 
          }
          $project_contract="";
          if ($request->hasFile('project_contract')) {
                $file = $request->file('project_contract');
                $project_contract = time().'.'.$file->getClientOriginalExtension();
                $destinationPath =public_path('uploads/projects/contract'); 
                $file->move($destinationPath,$project_contract); 
          }
          
          
          $showhome=0;
           if ($request->Input('project_show_home')) {
            $showhome=1;   
           }
          $post->name               =   strip_tags($request->Input('project_name'));
          $post->content            =   strip_tags($request->Input('project_content'));
          $post->long_content            =   $request->Input('project_description');
          $post->image              =   $project_image;
          $post->deck              =   $project_deck;
          $post->financial              =   $project_financial;
          $post->pdf              =   $project_pdf;
          $post->contract_doc              =   $project_contract;
          $post->location           =   strip_tags($request->Input('project_location'));
          $post->strategy           =   strip_tags($request->Input('project_strategy'));
          $post->numbers           =   strip_tags($request->Input('project_numbers'));
          $post->risk           =   strip_tags($request->Input('project_risk'));
          $post->purchase_price           =   strip_tags($request->Input('purchase_price'));
          $post->projected_cost           =   strip_tags($request->Input('projected_cost'));
          $post->projected_timeline           =   strip_tags($request->Input('projected_timeline'));
          $post->sale_price           =   strip_tags($request->Input('sale_price'));
          $post->net_profit           =   strip_tags($request->Input('net_profit'));
          $post->projected_returns           =   strip_tags($request->Input('projected_returns'));
          $post->status           =     $request->Input('project_status');
          $post->show_home           =     $showhome;
          
          if($post->save()){  
               if ($request->hasFile('images')) {
                    $allowedfileExtension=['jpg','png','jpeg','gif'];
                    $files = $request->file('images');
                    $imgdata=array();
                    foreach($files as $file){
                          $filename = $file->getClientOriginalName();
                          $extension = $file->getClientOriginalExtension();
                          $check=in_array($extension,$allowedfileExtension); 
                          if($check)
                          {
                          $add_image = time().rand(1000,9999).'.'.$file->getClientOriginalExtension();
                          $destinationPath =public_path('uploads/projects/additional'); 
                          $file->move($destinationPath,$add_image); 
                          $imgdata[] = ['project_id'=>$post->id,'image'=>$add_image ];
                        
                          
                          }


                    }
                    if(!empty($imgdata)){
                      
                        ProjectImage::insert($imgdata);
                    }

                }
              
                if ($request->hasFile('case_file')) {
                  $file = $request->file('case_file');
                  $case_file = time().'.'.$file->getClientOriginalExtension();
                  $destinationPath =public_path('uploads/projects/cases'); 
                  $file->move($destinationPath,$case_file); 
                  $casedata['project_id']=$post->id;
                  $casedata['case_file']=$case_file;
                  $casedata['case_title']=strip_tags($request->Input('case_title'));
                  CaseStudy::insert($casedata);
                } else {
                  $casedata['project_id']=$post->id;
                  $casedata['case_file']="";
                  $casedata['case_title']=strip_tags($request->Input('case_title'));
                  CaseStudy::insert($casedata);

                }
              
              
              Session::flash('success-message', 'Records saved successfully.');
              return redirect()->route('admin-add-project', '');
          }
          
          
      } elseif ($request->Input('sc_post_type') == 'update_post'){
           $showhome=0;
           if ($request->Input('project_show_home')) {
            $showhome=1;   
           }
          
          $data = array(
                        'name'	     =>  strip_tags($request->Input('project_name')),
                        'content'    =>  strip_tags($request->Input('project_content')),
                        'long_content'    =>  $request->Input('project_description'),
                        'location'   =>  strip_tags($request->Input('project_location')),
                        'strategy'   =>  strip_tags($request->Input('project_strategy')),
                        'numbers'   =>  strip_tags($request->Input('project_numbers')),
                        'risk'   =>  strip_tags($request->Input('project_risk')),
                        'purchase_price'   =>  strip_tags($request->Input('purchase_price')),
                        'projected_cost'   =>  strip_tags($request->Input('projected_cost')),
                        'projected_timeline'   =>  strip_tags($request->Input('projected_timeline')),
                        'sale_price'   =>  strip_tags($request->Input('sale_price')),
                        'net_profit'   =>  strip_tags($request->Input('net_profit')),
                        'projected_returns'   =>  strip_tags($request->Input('projected_returns')),
                        'status'     =>  strip_tags($request->Input('project_status')),
                        'show_home'  =>  $showhome
          );
          
          if ($request->hasFile('project_image')) {
                $file = $request->file('project_image');
                $project_image = time().'.'.$file->getClientOriginalExtension();
                $destinationPath =public_path('uploads/projects/main'); 
                $file->move($destinationPath,$project_image); 
                $data['image']=$project_image;
                
          }
         
          if ($request->hasFile('project_deck')) {
                $file = $request->file('project_deck');
                $project_deck = time().'.'.$file->getClientOriginalExtension();
                $destinationPath =public_path('uploads/projects/deck'); 
                $file->move($destinationPath,$project_deck); 
                $data['deck']=$project_deck;
          }
         
          if ($request->hasFile('project_financial')) {
                $file = $request->file('project_financial');
                $project_financial = time().'.'.$file->getClientOriginalExtension();
                $destinationPath =public_path('uploads/projects/financial'); 
                $file->move($destinationPath,$project_financial); 
                $data['financial']=$project_financial;
          }
         
          if ($request->hasFile('project_pdf')) {
                $file = $request->file('project_pdf');
                $project_pdf = time().'.'.$file->getClientOriginalExtension();
                $destinationPath =public_path('uploads/projects/pdf'); 
                $file->move($destinationPath,$project_pdf); 
                $data['pdf']=$project_pdf;
          }

          if ($request->hasFile('project_contract')) {
            $file = $request->file('project_contract');
            $project_contract = time().'.'.$file->getClientOriginalExtension();
            $destinationPath =public_path('uploads/projects/contract'); 
            $file->move($destinationPath,$project_contract); 
            $data['contract_doc']=$project_contract;
      }
          
           if ($request->hasFile('images')) {
                    $allowedfileExtension=['jpg','png','jpeg','gif'];
                    $files = $request->file('images');
                    $imgdata=array();
                    foreach($files as $file){
                          $filename = $file->getClientOriginalName();
                          $extension = $file->getClientOriginalExtension();
                          $check=in_array($extension,$allowedfileExtension); 
                          if($check)
                          {
                          $add_image = time().rand(1000,9999).'.'.$file->getClientOriginalExtension();
                          $destinationPath =public_path('uploads/projects/additional'); 
                          $file->move($destinationPath,$add_image); 
                          $imgdata[] = ['project_id'=>$params,'image'=>$add_image ];
                        
                          
                          }


                    }
                    if(!empty($imgdata)){
                      
                        ProjectImage::insert($imgdata);
                    }

                }

                if ($request->hasFile('case_file')) {
                  $file = $request->file('case_file');
                  $case_file = time().'.'.$file->getClientOriginalExtension();
                  $destinationPath =public_path('uploads/projects/cases'); 
                  $file->move($destinationPath,$case_file); 
                  $casedata['case_file']=$case_file;
                  $casedata['case_title']=strip_tags($request->Input('case_title'));
                  CaseStudy::where('project_id', $params)->update($casedata);
                } else {
                  $casedata['case_file']="";
                  $casedata['case_title']=strip_tags($request->Input('case_title'));
                  CaseStudy::where('project_id', $params)->update($casedata);  

                }
         // exit();
          if( Project::where('id', $params)->update($data)){
            
             Session::flash('success-message', 'Records saved successfully.'); 
             return redirect()-> back(); 
          }
      }

    }
    else{
      return redirect()-> back();
    }
  }
}