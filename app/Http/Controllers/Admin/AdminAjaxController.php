<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Illuminate\Support\Facades\Response;
use Request;
use App\Models\Project;
use App\Models\ProjectImage;
use App\Models\UserProject;
use App\Models\Testimonial;
use App\Models\Faq;
use App\Models\Tag;
use Session;

use App\Library\GetFunction;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;



class AdminAjaxController extends Controller
{
  
  
  public $project;
  public $option;
  public $env;
  
  public function __construct() {
    
    $this->project             =  new ProjectsController();
    $this->classGetFunction =  new GetFunction();    
  }
  
   public function deleteProject(){
    $input = Request::all();
    $id=$input['id'];
    
    $get_project = DB::table('projects')
                       ->where(['projects.id' => $id]) 
                       ->select('*')
                       ->get()
                       ->toArray();
    $filepath=$get_project[0]->image;
    if($filepath!=""){
    $destinationPath  = public_path('uploads/projects/main').'/'.$filepath;
    unlink($destinationPath);
    }
    Project::where('id', $id)->delete();
    return response()->json( array( 'status' => 'success', 'attr_new_html' => 'sfgsd' ));

    
  }

  public function notify_user(){
    $input = Request::all();
    $id=$input['id'];
    $pid=$input['pid'];
    $get_user = DB::table('users')
                       ->where(['id' => $id]) 
                       ->select('*')
                       ->get()
                       ->first();

    $get_project = DB::table('projects')
                        ->where(['id' => $pid]) 
                        ->select('*')
                        ->get()
                        ->first();                  

     if(!empty( $get_user)){
       $data=array(
            'email'=>$get_user->email,
            'name'=>$get_user->firstname.' '.$get_user->lastname,
            'project_name'=>$get_project->name

       );
      $mailData['source']  =   'notify_user';
      $mailData['data']    =   $data;
     
   
      $this->classGetFunction->sendCustomMail( $mailData );
      return response()->json( array( 'status' => 'success', 'attr_new_html' => 'sfgsd' ));
     }                  
    

    

    
  }



  
   public function deleteProjectImage(){
    $input = Request::all();
    $id=$input['id'];
    $img=$input['img'];
    
    $filepath=$img;
    if($filepath!=""){
    $destinationPath  = public_path('uploads/projects/additional').'/'.$filepath;
    unlink($destinationPath);
    }
    ProjectImage::where('id', $id)->delete();
    return response()->json( array( 'status' => 'success', 'attr_new_html' => 'sfgsd' ));

    
  }
  
  
  
  
  public function deleteTestimonial(){
    $input = Request::all();
    $id=$input['id'];
    
    $get_testimonial = DB::table('testimonials')
                       ->where(['testimonials.id' => $id]) 
                       ->select('*')
                       ->get()
                       ->toArray();
    $filepath=$get_testimonial[0]->image;
    if($filepath!=""){
    $destinationPath  = public_path('uploads/testimonials').'/'.$filepath;
    unlink($destinationPath);
    }
    Testimonial::where('id', $id)->delete();
    return response()->json( array( 'status' => 'success', 'attr_new_html' => 'sfgsd' ));

    
  }
  
  public function deleteFaq(){
    $input = Request::all();
    $id=$input['id'];  
    Faq::where('id', $id)->delete();
    return response()->json( array( 'status' => 'success', 'attr_new_html' => 'sfgsd' ));
   
  }


  public function deleteTag(){
    $input = Request::all();
    $id=$input['id'];  
    Tag::where('id', $id)->delete();
    return response()->json( array( 'status' => 'success', 'attr_new_html' => 'sfgsd' ));
   
  }

  public function deleteUser(){
    $input = Request::all();
    $id=$input['id'];  
    User::where('id', $id)->delete();
    return response()->json( array( 'status' => 'success', 'attr_new_html' => 'sfgsd' ));
   
  }

  public function interestedToInvest(){
    $input = Request::all();
    $pid=$input['project'];  
    $uid=$input['user'];
    $amount=$input['amount'];  
   
    

    $post  =  new UserProject;
    $post->user_id    =   $uid;
    $post->project_id =   $pid;
    $post->amount =   $amount;
    $post->signed_doc =   "";
    $post->status     =   0;

    if($post->save()){  
    return response()->json( array( 'status' => 'success', 'attr_new_html' => 'sfgsd' ));
    } else {
    return response()->json( array( 'status' => 'error', 'attr_new_html' => 'sfgsd' ));  
    }
   
  } 
   public function returnToInvest(){
    $input = Request::all();
    $pid=$input['project'];  
    $uid=$input['user'];
    $amount=$input['amount'];  
    
    $data = array( 'return_amount'   =>  $amount);
    


    if(UserProject::where('user_id', $uid)->where('project_id', $pid)->update($data)){  
    return response()->json( array( 'status' => 'success', 'attr_new_html' => 'sfgsd' ));
    } else {
    return response()->json( array( 'status' => 'error', 'attr_new_html' => 'sfgsd' ));  
    }
   
  } 
  
}