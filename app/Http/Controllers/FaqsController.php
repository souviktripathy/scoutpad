<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Validator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use App\Models\Faq;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Carbon\Carbon;
use App\Models\SaveCustomDesign;


class FaqsController extends Controller
{
  
  public $carbonObject;
 
  


  public function __construct(){
    
    $this->carbonObject         =   new Carbon();
    
}	
  
  public function getFaqs(){
    
   
      $get_posts_for_faq = DB::table('faqs')
                              ->where(['faqs.status' => 1])  
                               ->orderBy('faqs.sort_order', 'asc')
                               ->get()
                               ->toArray();   
    
    return $get_posts_for_faq;
  }
  public function getFaqsOthers(){
    
   
      $get_posts_for_faq = DB::table('faqs')
                              ->where(['faqs.status' => 1,'faqs.is_main' => 0])  
                               ->orderBy('faqs.sort_order', 'asc')
                               ->get()
                               ->toArray();   
    
    return $get_posts_for_faq;
  }
  public function getFaqsMain(){
    
   
      $get_posts_for_faq = DB::table('faqs')
                              ->where(['faqs.status' => 1,'faqs.is_main' => 1])  
                               ->orderBy('faqs.sort_order', 'asc')
                               ->get()
                               ->toArray();   
    
    return $get_posts_for_faq;
  }
  
  public function getFaq($id){
    $where = '';
    $get_posts_for_faq = DB::table('faqs')
                               ->where(['faqs.id' => $id])
                               ->get()
                               ->first(); 
    
    return $get_posts_for_faq;
  }
  
   public function saveFaq($params=null,Request $request){
      ///echo $params; exit();
    if( $request->isMethod('post') && Session::token() == $request->Input('_token')){ 
        
        
        
        
      if($request->Input('sc_post_type') == 'add_post'){
          $post  =  new Faq;
           $main=0;
           if ($request->Input('faq_main')) {
            $main=1;   
           }
         
          $post->question      =   strip_tags($request->Input('faq_question'));
          $post->answer        =   strip_tags($request->Input('faq_answer'));
          $post->sort_order    =   $request->Input('faq_order');
          $post->status        =   $request->Input('faq_status');
          $post->is_main        =   $main;
          
          if($post->save()){  
              Session::flash('success-message', 'Records saved successfully.');
              return redirect()->route('admin-add-faq', '');
          }
          
          
      } elseif ($request->Input('sc_post_type') == 'update_post'){
          $main=0;
           if ($request->Input('faq_main')) {
            $main=1;   
           }
          
          $data = array(
                        'question'   =>  strip_tags($request->Input('faq_question')),
                        'answer'     =>  strip_tags($request->Input('faq_answer')),
                        'sort_order' =>  $request->Input('faq_order'),
                        'status'     =>  $request->Input('faq_status'),
                        'is_main'     =>  $main
                       
          );
          
          
          if( Faq::where('id', $params)->update($data)){
            
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