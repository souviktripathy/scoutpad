<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Settings;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\FaqsController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\UserController;
use Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;

use Carbon\Carbon;

class AdminAccountManageController extends Controller
{
  
  public $carbonObject;

  public function __construct(){ 
    $this->project       =  new ProjectsController();
    $this->testimonial   =  new TestimonialsController();
    $this->faq           =  new FaqsController();
    $this->tag           =  new TagsController();
    $this->user           =  new UserController();
    $this->carbonObject  =  new Carbon();
  }
  
  /**
   * 
   * User account page content
   *
   * @param null
   * @return null
   */
  public function adminDashboardPageContent(){
    $data = array();
    
    return view('admin.admin-account.admin-dashboard-page', $data);
  }
  
  
  public function adminProjectsPageContent(){
    $data = array();
    $data['projects_data']         =   $this->project->getProjects();
    return view('admin.project.admin-projects-page', $data);
  }

  public function adminSignedDocumentsPageContent(){
    $data = array();
    $status=1;
    $data['documents']  =   $this->project->getDocuments($status);
    return view('admin.project.signed-documents-page', $data);
  }

  public function adminUnsignedDocumentsPageContent(){
    $data = array();
    $status=0;
    $data['documents']  =   $this->project->getDocuments($status);
    return view('admin.project.unsigned-documents-page', $data);
  }

  
  
  public function adminAddProjectPage(){
    $data = array();
    
    return view('admin.project.admin-add-project', $data);
  }
  public function adminUpdateProjectPage($params){
    $data = array();
    $id=$params;
    $data['project_data']         =   $this->project->getProject($id);
    $data['project_images']         =   $this->project->getProjectImages($id);
    $data['case_study']         =   $this->project->getProjectCaseStudy($id);
    return view('admin.project.admin-update-project', $data);
  }
  
  
   public function adminTestimonialsPageContent(){
    $data = array();
    $data['testimonials_data']  = $this->testimonial->getTestimonials(0);
    return view('admin.testimonial.admin-testimonials-page', $data);
  }
  
  
  public function adminAddTestimonialPage(){
    $data = array();
    
    return view('admin.testimonial.admin-add-testimonial', $data);
  }
  public function adminUpdateTestimonialPage($params){
    $data = array();
    $id=$params;
    $data['testimonial_data']         =   $this->testimonial->getTestimonial($id);
    return view('admin.testimonial.admin-update-testimonial', $data);
  }
  
 public function adminFaqsPageContent(){
    $data = array();
    $data['faqs_data']  = $this->faq->getFaqs();
    return view('admin.faq.admin-faqs-page', $data);
  }
  
  
  public function adminAddFaqPage(){
    $data = array();
    
    return view('admin.faq.admin-add-faq', $data);
  }
  public function adminUpdateFaqPage($params){
    $data = array();
    $id=$params;
    $data['faq_data']         =   $this->faq->getFaq($id);
    return view('admin.faq.admin-update-faq', $data);
  }


  public function adminTagsPageContent(){
    $data = array();
    $data['tags_data']  = $this->tag->getTags();
    return view('admin.tag.admin-tags-page', $data);
  }
  
  
  public function adminAddTagPage(){
    $data = array();
    
    return view('admin.tag.admin-add-tag', $data);
  }
  public function adminUpdateTagPage($params){
    $data = array();
    $id=$params;
    $data['tag_data']         =   $this->tag->getTag($id);
    return view('admin.tag.admin-update-tag', $data);
  } 

  
  
  public function adminUsersPageContent(){
    $data = array();
    $data['users_data']  = $this->user->getUsers();
    return view('admin.user.admin-users-page', $data);
  }
  
  
  public function adminAddUserPage(){
    $data = array();
    $data['tags_data']  = $this->tag->getTags(); 
    return view('admin.user.admin-add-user', $data);
  }
  public function adminUpdateUserPage($params){
    $data = array();
    $id=$params;
    $data['tags_data']  = $this->tag->getTags();
    $data['user_data']=$this->user->getUser($id);
    return view('admin.user.admin-update-user', $data);
  }
  
  
  public function adminSettingsPage(){
    $data = array();
    
    return view('admin.admin-account.admin-update-settings', $data);
  }


  public function saveSettings($params=null,Request $request){
    ///echo $params; exit();
  if( $request->isMethod('post') && Session::token() == $request->Input('_token')){ 
      
        $data = array('value'	   =>  strip_tags($request->Input('site_title')));
        Settings::where('keyword', 'site_title')->update($data);

        $data1 = array('value'	   =>  strip_tags($request->Input('admin_email')));
        Settings::where('keyword', 'admin_email')->update($data1);
        
        if ($request->hasFile('tax_form')) {
              $file = $request->file('tax_form');
              $tax_form = time().'.'.$file->getClientOriginalExtension();
              $destinationPath =public_path('uploads/settings'); 
              $file->move($destinationPath,$tax_form); 
             
              $data2 = array('value'	=> $tax_form);
              Settings::where('keyword', 'tax_form')->update($data2);
        }
        Session::flash('success-message', 'Records saved successfully.'); 
        return redirect()-> back(); 
       
  }
  else{
    return redirect()-> back();
  }
}

  
  
  
  
  public function adminUserLogout(){
    if(is_frontend_user_logged_in() && Request::isMethod('post') && Session::token() == Request::Input('_token')){
      Session::forget('scoutpad_frontend_user_id');
      return redirect()->route('login-page');
    }
  }
  
  
  public function adminLogout(){
    if(is_admin_user_logged_in() ){
      Session::forget('scoutpad_admin_user_id');
      return redirect()->route('admin-login-page');
    }
  }
  
}