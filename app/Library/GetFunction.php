<?php
namespace App\Library;
use Mail;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Project;
use Session;
use Cookie;
use Request;


class GetFunction
{
  public $CMS;
  public $user;
 


  public function __construct() 
  {
    
  
    
  }
  
  /**
   * Get function for reports
   *
   * @param Start date, End date
   * @return obj
   */
 public static function frontend_user_logged_in(){
    $is_logged_in = false;
    
    if(Session::has('scoutpad_frontend_user_id') && Session::has('scoutpad_frontend_user_verified')){
      $is_logged_in = true;
    }
    
    return $is_logged_in;
  }

public static function admin_user_logged_in(){
    $is_logged_in = false;
    
    if(Session::has('scoutpad_admin_user_id')){
      $is_logged_in = true;
    }
    
    return $is_logged_in;
  }
  
   public static function create_image_url($img_path,$type){
   
       if($type=='project'){ 
        if($img_path!=""){   
        return url('/public/uploads/projects/main') .'/'. $img_path;
        } else{
         return url('/public/common/images/dummy_project.png') ;   
        }
        
       } elseif($type=='testimonial'){ 
        return url('/public/uploads/testimonials') .'/'. $img_path;
       } elseif($type=='tax'){ 
        return url('/public/uploads/tax') .'/'. $img_path;
       } else {
         return '';  
       }
      
    
  }
  
  
   public static function get_project_image_url_additional($img_path){
    return url('/public/uploads/projects/additional') .'/'. $img_path; 
  }
  
   public static function get_file_image($img_path){
    if($img_path!=""){   
    return url('/public/common/images/download-file.png'); 
    } else {
        return "";
    }
  }
   public static function get_file_path($img_path,$type){
   
       if($type=='deck'){ 
         
        return url('/public/uploads/projects/deck') .'/'. $img_path;
       
        
       } elseif($type=='financial'){ 
        return url('/public/uploads/projects/financial') .'/'. $img_path;
       } elseif($type=='cases'){ 
        return url('/public/uploads/projects/cases') .'/'. $img_path;
       } elseif($type=='settings'){ 
        return url('/public/uploads/settings') .'/'. $img_path;
       } elseif($type=='contract'){ 
        return url('/public/uploads/contracts') .'/'. $img_path;
       } elseif($type=='contract_doc'){ 
        return url('/public/uploads/projects/contract') .'/'. $img_path;
       } elseif($type=='tax'){ 
        return url('/public/uploads/tax') .'/'. $img_path;
       } else {
         return url('/public/uploads/projects/pdf') .'/'. $img_path;
       }
      
    
  }
  
  public static function get_project_status($status){
    $type = false;
    
    if($status==1){
      $type = 'Ongoing';
    } elseif($status==2){
      $type = 'Upcoming';
    } else {
      $type = 'Completed';
    } 
    
    return $type;
  }
  
  public static function get_common_status($status){
    $type = false;
    
    if($status==1){
      $type = 'Active';
    } elseif($status==0){
      $type = 'Inactive';
    } else {
      $type = '';
    } 
    
    return $type;
  }

  public static function get_documents_status($status){
    $type = false;
    
    if($status==0){
      $type = 'Pending';
    } elseif($status==0){
      $type = 'Sent to investor';
    } else {
      $type = '';
    } 
    
    return $type;
  }


  
   public static function get_loggedin_user_details(){
    $user=array();
    
    if(Session::has('scoutpad_frontend_user_id')){
      $id=Session::get('scoutpad_frontend_user_id');
      $user = DB::table('users')
                              ->where(['id' => $id])  
                               ->get()
                               ->first();    
      
    }
    
    return $user;
  }
  
  
  public function sendCustomMail($data){
    $view          =  '';
    $get_view_data =  array();
    $site_title    =  'Scoutpads';
    $email         =  'admin@scoutpads.com';
  
    
    if($data['source'] == 'join_request'){ 
     
      $get_view_data['_data'] = $data;
      $get_view_data['_mail_to']='sas.somnath@gmail.com';
      $get_view_data['_subject']    = 'New Joining Request.';
      if(count($get_view_data) > 0){
        Mail::send('emails.join-request', ['data' => $data], function ($m) use ($data) {
             $m->from(get_settings('admin_email'), 'Scoutpads');
             $m->to(get_settings('admin_email'), 'Admin')->subject('New Joining Request.');
         });
     }
     
    }
    if($data['source'] == 'auth_code'){ 
     
      $get_view_data['_data'] = $data;
      $get_view_data['_mail_to']=$data['data']->email;
      $get_view_data['_subject']    = 'Authentication Code.';
      if(count($get_view_data) > 0){
        Mail::send('emails.authentication', ['data' => $data], function ($m) use ($data) {
             $m->from(get_settings('admin_email'), 'Scoutpads');
             $m->to($data['data']->email, $data['data']->firstname)->subject('Authentication Code.');
     });
     
    }
    
  }

  if($data['source'] == 'notify_user'){ 
     
    $get_view_data['_data'] = $data;
    $get_view_data['_mail_to']=$data['data']['email'];
   
    if(count($get_view_data) > 0){
      Mail::send('emails.notify', ['data' => $data], function ($m) use ($data) {
           $m->from(get_settings('admin_email'), 'Scoutpads');
           $m->to($data['data']['email'], $data['data']['name'])->subject('Scoutpads Reminder.');
   });
   
  }
  
} 





  }
  
  
  public static function get_total_users(){
   
    return User::where('role','=','2')->count();
  }
  public static function get_total_ongoing_projects(){
   
    return Project::where('status','=','1')->count();
  }
  public static function get_total_upcoming_projects(){
   
    return Project::where('status','=','2')->count();
  }
  public static function get_total_completed_projects(){
   
    return Project::where('status','=','3')->count();
  }

  public static function get_settings($key){
   
      $settings = DB::table('settings')
                              ->where(['keyword' => $key])  
                               ->get()
                               ->first();    
  
    
    return $settings->value;
  }

  public static function get_average_annual_return(){
   
    $sumret = DB::table("projects")->get()->sum("projected_returns");   
    $get_posts_for_project = DB::table('projects')
                               ->get()
                               ->toArray();

    $average=$sumret/count($get_posts_for_project)  ;                         
  
   return round($average,2);
}
public static function total_capital(){
   
  $sumret = DB::table("user_project")->get()->sum("amount");   
 
 return round($sumret,2);
}

public static function average_investments(){
   
  $sumret = DB::table("user_project")->get()->sum("amount");   
    $get_posts_for_project = DB::table('user_project')
                               ->get()
                               ->toArray();

    $average=$sumret/count($get_posts_for_project)  ;                         
  
   return round($average,2);  
 

                           

 return round($sumret,2);
}

public static function total_capital_by_project($pid){
   
  $sumret = DB::table("user_project")->where(['project_id' => $pid])->get()->sum("amount");   
 
 return round($sumret,2);
}
public static function total_capital_by_user($uid){
   
  $sumret = DB::table("user_project")->where(['user_id' => $uid])->get()->sum("amount");   
 
 return round($sumret,2);
}
public static function total_return_by_user($uid){
   
  $sumret = DB::table("user_project")->where(['user_id' => $uid])->get()->sum("return_amount");   
 
 return round($sumret,2);
}

 public static function get_total_active_users(){
   
    return User::where('role','=','2')->where('user_status','=','1')->count();
  }
  public static function get_total_inactive_users(){
   
    return User::where('role','=','2')->where('user_status','!=','1')->count();
  }

public static function average_return_by_user($uid){
    
  $suminv = DB::table("user_project")->where(['user_id' => $uid])->get()->sum("amount");  
   
  $sumret = DB::table("user_project")->where(['user_id' => $uid])->get()->sum("return_amount");  
  
  $totpro=  DB::table("user_project")->where(['user_id' => $uid])->get()->count();
  
  $av=($sumret-$suminv)/$totpro;
 
 return round($av,2);
}



 public static function get_total_ongoing_projects_by_user($uid){
     
      $where['projects.status'] = '1';
      $where['user_project.user_id'] = $uid;
      $contracts = DB::table('user_project')
                                 ->join('projects','projects.id','=','user_project.project_id')
                                 
                                 ->where($where)
                                 
                                 ->get()
                                 ->toArray();  
   
    return count($contracts);
  }
 
  public static function get_total_completed_projects_by_user($uid){
   
     $where['projects.status'] = '3';
      $where['user_project.user_id'] = $uid;
      $contracts = DB::table('user_project')
                                 ->join('projects','projects.id','=','user_project.project_id')
                                 
                                 ->where($where)
                                 
                                 ->get()
                                 ->toArray();  
   
    return count($contracts);
  }
  
  public static function get_total_projects_by_user($uid){
   
     
      $where['user_project.user_id'] = $uid;
      $contracts = DB::table('user_project')
                                 
                                 
                                 ->where($where)
                                 
                                 ->get()
                                 ->toArray();  
   
    return count($contracts);
  }

  
}