<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Validator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use App\Models\Tag;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Carbon\Carbon;
use App\Models\SaveCustomDesign;


class TagsController extends Controller
{
  
  public $carbonObject;
 
  


  public function __construct(){
    
    $this->carbonObject         =   new Carbon();
    
}	
  
  public function getTags(){
    
   
      $get_posts_for_tag = DB::table('tags')
                             
                               ->get()
                               ->toArray();   
    
    return $get_posts_for_tag;
  }
  
  
  
  public function gettag($id){
    $where = '';
    $get_posts_for_tag = DB::table('tags')
                               ->where(['tags.id' => $id])
                               ->get()
                               ->first(); 
    
    return $get_posts_for_tag;
  }
  
   public function savetag($params=null,Request $request){
      ///echo $params; exit();
    if( $request->isMethod('post') && Session::token() == $request->Input('_token')){ 
        
        
        
        
      if($request->Input('sc_post_type') == 'add_post'){
          $post  =  new tag;
          
         
          $post->tag_name      =   strip_tags($request->Input('tag_name'));
         
          
          if($post->save()){  
              Session::flash('success-message', 'Records saved successfully.');
              return redirect()->route('admin-add-tag', '');
          }
          
          
      } elseif ($request->Input('sc_post_type') == 'update_post'){
         
          
          $data = array(
                        'tag_name'   =>  strip_tags($request->Input('tag_name'))
                      
                       
          );
          
          
          if( tag::where('id', $params)->update($data)){
            
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