<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Validator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use App\Models\Project;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Carbon\Carbon;
use App\Models\SaveCustomDesign;


class TestimonialsController extends Controller
{
  
  public $carbonObject;
 
  


  public function __construct(){
    
    $this->carbonObject         =   new Carbon();
    
}	
  
  public function getTestimonials($limit){
    $where = '';
    if($limit>0){
    $get_posts_for_project = DB::table('testimonials')
                               ->orderBy('testimonials.created_at', 'desc')
                               ->limit($limit)
                               ->get()
                               ->toArray(); 
    } else {
      $get_posts_for_project = DB::table('testimonials')
                               ->orderBy('testimonials.created_at', 'desc')
                               ->get()
                               ->toArray();   
    }
    return $get_posts_for_project;
  }
  
  
  
  public function getTestimonial($id){
    $where = '';
    $get_posts_for_project = DB::table('testimonials')
                               ->where(['testimonials.id' => $id])
                               ->get()
                               ->first(); 
    
    return $get_posts_for_project;
  }
  
   public function saveTestimonial($params=null,Request $request){
      ///echo $params; exit();
    if( $request->isMethod('post') && Session::token() == $request->Input('_token')){ 
        
        
        
        
      if($request->Input('sc_post_type') == 'add_post'){
          $post  =  new Testimonial;
          $testimonial_image="";
          if ($request->hasFile('testimonial_image')) {
                $file = $request->file('testimonial_image');
                $testimonial_image = time().'.'.$file->getClientOriginalExtension();
                $destinationPath =public_path('uploads/testimonials'); 
                $file->move($destinationPath,$testimonial_image); 
          }
         
          $post->name               =   strip_tags($request->Input('testimonial_name'));
          $post->designation        =   strip_tags($request->Input('testimonial_designation'));
          $post->location           =   strip_tags($request->Input('testimonial_location'));
          $post->message           =   strip_tags($request->Input('testimonial_content'));
          $post->image              =   $testimonial_image;
          $post->status           =     $request->Input('testimonial_status');
          
          
          if($post->save()){  
              Session::flash('success-message', 'Records saved successfully.');
              return redirect()->route('admin-add-testimonial', '');
          }
          
          
      } elseif ($request->Input('sc_post_type') == 'update_post'){
          
          
          $data = array(
                        'name'	     =>  strip_tags($request->Input('testimonial_name')),
                        'designation'    =>  strip_tags($request->Input('testimonial_designation')),
                        'location'   =>  strip_tags($request->Input('testimonial_location')),
                        'message'    =>  strip_tags($request->Input('testimonial_content')),
                        'status'     =>  strip_tags($request->Input('testimonial_status'))
                       
          );
          
          if ($request->hasFile('testimonial_image')) {
                $file = $request->file('testimonial_image');
                $testimonial_image = time().'.'.$file->getClientOriginalExtension();
                $destinationPath =public_path('uploads/testimonials'); 
                $file->move($destinationPath,$testimonial_image); 
                $data['image']=$testimonial_image;
                
          }
          
          if( Testimonial::where('id', $params)->update($data)){
            
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