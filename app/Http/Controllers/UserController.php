<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Validator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use App\Models\User;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use App\Library\GetFunction;
use Carbon\Carbon;

class UserController extends Controller
{
  
  public $carbonObject;
 
  


  public function __construct(){
    
    $this->carbonObject         =   new Carbon();
    $this->classGetFunction =  new GetFunction();
    
}	
  
  public function getUsers(){
    
   
      $users = DB::table('users')
                              ->where(['users.role' => 2])  
                               ->orderBy('users.id', 'desc')
                               ->get()
                               ->toArray();   
    
    return $users;
  }
 
  
  public function getUser($id){
    $where = '';
    $user = DB::table('users')
            ->where(['users.id' => $id])
            ->get()
            ->first(); 
    
    return $user;
  }
  
  public function saveUser($params=null,Request $request){
    ///echo $params; exit();
  if( $request->isMethod('post') && Session::token() == $request->Input('_token')){ 
    
      
    if($request->Input('sc_post_type') == 'add_post'){
      $user = DB::table('users')->where(['users.email' => $request->Input('user_email')])->get()->first(); 
      
      $tags_string="cc"; 
      if(!empty($request->Input('user_tags'))){
        $tags_string=implode(",",$request->Input('user_tags'));
      }
      $tax_form="";
      if ($request->hasFile('tax_form')) {
            $file = $request->file('tax_form');
            $tax_form = time().'.'.$file->getClientOriginalExtension();
            $destinationPath =public_path('uploads/tax'); 
            $file->move($destinationPath,$tax_form); 
      }

      $contract_form="";
      if ($request->hasFile('contract_form')) {
            $file = $request->file('contract_form');
            $contract_form = time().'.'.$file->getClientOriginalExtension();
            $destinationPath =public_path('uploads/contract'); 
            $file->move($destinationPath,$contract_form); 
      }


      if(empty($user)){ 

        $post  =  new User;
        $post->role    =   2;
        $post->firstname      =   strip_tags($request->Input('user_firstname'));
        $post->lastname        =   strip_tags($request->Input('user_lastname'));
        $post->email    =   $request->Input('user_email');
        $post->phone    =   $request->Input('user_phone');
        $post->tags    =   json_encode($tags_string);
        $post->tax_form    =   $tax_form;
        $post->contract_form    =   $contract_form;
        $post->user_status =   $request->Input('user_status');
        if($request->Input('user_password')!=''){
          $post->password    =   bcrypt($request->Input('user_password'));
        }
       
        if($post->save()){  
            
            $mailData['source']  =   'welcome_email';
            $mailData['data']    =   $post;
            
         
            $this->classGetFunction->sendCustomMail( $mailData );
            Session::flash('success-message', 'Records saved successfully.');
            return redirect()->route('admin-add-user', '');
        }
      } else {
        Session::flash('error-message', 'This email is already exist in the database.');
        return redirect()->route('admin-add-user', '');
      } 
        
    } elseif ($request->Input('sc_post_type') == 'update_post'){
       
      $tags_string="cc"; 
      if(!empty($request->Input('user_tags'))){
        $tags_string=implode(",",$request->Input('user_tags'));
      }
        $data = array(
                      'firstname'   =>  strip_tags($request->Input('user_firstname')),
                      'lastname'     =>  strip_tags($request->Input('user_lastname')),
                      'email' =>  $request->Input('user_email'),
                      'phone' =>  $request->Input('user_phone'),
                      'tags' =>  json_encode($tags_string),
                      'user_status'     =>  $request->Input('user_status'),
                     
                     
        );
        if ($request->hasFile('tax_form')) {
          $file = $request->file('tax_form');
          $tax_form = time().'.'.$file->getClientOriginalExtension();
          $destinationPath =public_path('uploads/tax'); 
          $file->move($destinationPath,$tax_form); 
          $data['tax_form']=$tax_form;
        }
        if ($request->hasFile('contract_form')) {
          $file = $request->file('contract_form');
          $contract_form = time().'.'.$file->getClientOriginalExtension();
          $destinationPath =public_path('uploads/contract'); 
          $file->move($destinationPath,$contract_form); 
          $data['contract_form']=$contract_form;
        }
        if($request->Input('user_password')!=''){
          $data['password']    =   bcrypt($request->Input('user_password'));
        }
        
        if( User::where('id', $params)->update($data)){
          
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