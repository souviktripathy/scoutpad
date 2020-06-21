<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Cookie;
use Hash;
use Auth;
use Request;
use Session;
use Validator;
use App\Models\User;
use App\Library\GetFunction;
class LoginController extends Controller
{
 

  public function __construct() {
   // $this->middleware('verifyLoginPage');
   $this->classGetFunction =  new GetFunction();
  }
  
  /**
   * 
   * Home page content
   *
   * @param null
   * @return void 
   */
 
  
  public function loginPageContent(){
    $data = array();
    $data['title']="";
   
    return view('frontend.auth.login', $data);
  }
  
  public function adminLoginPageContent(){
    $data = array();
    $data['title']="";
   
    return view('admin.auth.login', $data);
  }
  
  public function showTwoFactorForm(){
    $data = array();
    $data['title']="";
   
    return view('frontend.auth.two_factor', $data);
  }
  
  public function verifyTwoFactor()
    {
        
//echo Session::get('scoutpad_frontend_user_token'); exit();
        if(Request::Input('login_code') == Session::get('scoutpad_frontend_user_token')){            
           // $user = Auth::user();
           // $user->two_factor_expiry = \Carbon\Carbon::now()->addMinutes(config('session.lifetime'));
           // $user->save();    
            Session::put('scoutpad_frontend_user_verified', 1);   
            return redirect()->route('user-projects-page');
        } else {
            return redirect('/two_factor')->with('message', 'Incorrect code.');
        }
    }
  
  public function doLogin(){
    $data = array();
    $data['title']="";
    if( Request::isMethod('post') ){
        $username       =      Request::Input('login_username');
        $password       =      bcrypt(Request::Input('login_password'));
        $userdata       =      ['email' => $username, 'role' => 2];
        $data           =      User::where($userdata)->first();
        
         if(!empty($data) && isset($data->password) && isset($data->id)){
             
             if(Hash::check(Request::Input('login_password'), $password) && Hash::check(Request::Input('login_password'), $data->password)){
                 if($data->user_status==1){
                   $randnum=mt_rand(10000,99999);
                  $userdata = array(
                    'two_factor_token'   =>  $randnum,
                    'two_factor_expiry'     =>  \Carbon\Carbon::now()
                   );
                   User::where('id', $data->id)->update($userdata) ;
                   $mailData['source']  =   'auth_code';
                    $mailData['data']    =   $data;
                    $mailData['authcode']    =   $randnum;
                  // echo $data['lm_name']; exit();
                    $this->classGetFunction->sendCustomMail( $mailData );

                if(Session::has('scoutpad_frontend_user_id')){
                    Session::forget('scoutpad_frontend_user_id');
                    Session::forget('scoutpad_frontend_user_token');
                   
                    Session::put('scoutpad_frontend_user_id', $data->id);
                    Session::put('scoutpad_frontend_user_token', $randnum);
                    
                  }
                  elseif(!Session::has('scoutpad_frontend_user_id')){
                    Session::put('scoutpad_frontend_user_id', $data->id);
                    Session::put('scoutpad_frontend_user_token', $randnum);
                  }
                 $remember = (Request::has('login_remember_me')) ? true : false;

                    if($remember == TRUE){
                      $cookieData  =  array();
                      $cookieData  =  $data->id . '#' . base64_encode(Request::Input('login_password'));

                      
                     
                      return redirect()->route('2fa-page');  
                     // return redirect()->route('user-dashboard-page')->withCookie(cookie()->forever('frontend_remember_me_data', $cookieData));
                    }
                    elseif($remember == FALSE){
                      if(Cookie::has('frontend_remember_me_data')){
                        $cookie = Cookie::forget('frontend_remember_me_data');
                       
                        return redirect()->route('2fa-page');  

                        //return redirect()->route('user-dashboard-page')->withCookie( $cookie );
                      }
                      else {
                       
                        return redirect()->route('2fa-page'); 
                       // return redirect()->route('user-dashboard-page');
                      }
                    }
                 
                 
                  } else {
                    Session::flash('error-message', "Your account seems temporarily suspended. Please contact site administrator.");
                    return redirect()-> back();
                  }       
                 
                  
             } else {
                Session::flash('error-message', "Invalid Login");
                return redirect()-> back();
                 
             }
             
             
         } else {
                Session::flash('error-message', "Invalid Login");
                return redirect()-> back();
                 
             }
        
    }
    //return view('frontend.auth.login', $data);
  }
  
  public function doAdminLogin(){
    $data = array();
    $data['title']="";
    if( Request::isMethod('post') ){
        $username       =      Request::Input('login_username');
        $password       =      bcrypt(Request::Input('login_password'));
        $userdata       =      ['email' => $username, 'user_status' => 1,'role' => 1];
        $data           =      User::where($userdata)->first();
        
         if(!empty($data) && isset($data->password) && isset($data->id)){
             
             if(Hash::check(Request::Input('login_password'), $password) && Hash::check(Request::Input('login_password'), $data->password)){
                 
                if(Session::has('scoutpad_admin_user_id')){
                    Session::forget('scoutpad_admin_user_id');
                    Session::put('scoutpad_admin_user_id', $data->id);
                  }
                  elseif(!Session::has('scoutpad_admin_user_id')){
                    Session::put('scoutpad_admin_user_id', $data->id);
                  }
                 $remember = (Request::has('login_remember_me')) ? true : false;

                    if($remember == TRUE){
                      $cookieData  =  array();
                      $cookieData  =  $data->id . '#' . base64_encode(Request::Input('login_password'));

                      return redirect()->route('admin-dashboard-page')->withCookie(cookie()->forever('admin_remember_me_data', $cookieData));
                    }
                    elseif($remember == FALSE){
                      if(Cookie::has('admin_remember_me_data')){
                        $cookie = Cookie::forget('admin_remember_me_data');
                        return redirect()->route('admin-dashboard-page')->withCookie( $cookie );
                      }
                      else {
                        return redirect()->route('admin-dashboard-page');
                      }
                    }
                 
                 
                 
                  
             } else {
                Session::flash('error-message', "Invalid Login");
                return redirect()-> back();
                 
             }
             
             
         } else {
                Session::flash('error-message', "Invalid Login");
                return redirect()-> back();
                 
             }
        
    }
    //return view('frontend.auth.login', $data);
  }
  
}