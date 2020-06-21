<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserProject;
use Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\ProjectsController;
use Carbon\Carbon;

class UserAccountManageController extends Controller
{
  
  public $carbonObject;

  public function __construct(){ 
   
    $this->carbonObject         =  new Carbon();
    $this->project  =  new ProjectsController();
  }
  
  /**
   * 
   * User account page content
   *
   * @param null
   * @return null
   */
  public function userAccountPageContent(){
    $data = array();
    
    return view('user.user-account.user-dashboard-page', $data);
  }
  
  public function userProjectsPageContent(){
    $data = array();
    $data['upcoming_projects'] = $this->project->getUsersUpcomingProjects();
    return view('user.user-account.user-projects-page', $data);
  }

  public function userDocumentsPageContent(){
    $data = array();
    $data['documents'] = $this->project->getUsersContracts();
    return view('user.user-account.user-contracts-page', $data);
  }

  public function userCasesPageContent(){
    $data = array();
    $data['cases'] = $this->project->getCaseStudies();
    return view('user.user-account.user-cases-page', $data);
  }

  public function projectSignPageContent($params){
    $data = array();
    
    $data['project'] = $this->project->getUsersContract($params);
   // print_r($data['project']); exit();
    
    $userId=get_loggedin_user_details()->id;
    if(!empty( $data['project'])){
      return view('user.user-account.contract-sign-page', $data);
    } else {
      return redirect()->route('user-documents-page');
    }
    
    
  }


  public function updateContract($params,Request $request){
    $data = array();
    
    $data['project'] = $this->project->getUsersContract($params);
    $userId=get_loggedin_user_details()->id;

    if ($request->hasFile('contract_file')) {
      $file = $request->file('contract_file');
      $contract_file = time().'.'.$file->getClientOriginalExtension();
      $destinationPath =public_path('uploads/contracts'); 
      $file->move($destinationPath,$contract_file); 
      $data3['signed_doc']=$contract_file;
      $data3['status']=1;
      UserProject::where('id', $params)->update($data3);
      Session::flash('success-message', 'Congratulation! You have signed contract successfully.'); 
      return redirect()->route('contract-sign-page',$params);
    } else {
      Session::flash('error-message', 'Please upload the signed document!'); 
      return view('user.user-account.contract-sign-page', $data);

    }

    
    
    
  }

  public function userTaxFormPageContent(){
    $data = array();
   
    return view('user.user-account.user-taxform-page', $data);
  }

  public function projectDetailsPageContent($id){
    $data = array();
    $data['pdetails'] = $this->project->getProject($id);
    $data['case'] = $this->project->getCaseStudyByProject($id);
    $data['pimages'] = $this->project->getProjectImages($id);
    return view('user.user-account.project-details-page', $data);
  }
  
  public function userLogout(){
    if(is_frontend_user_logged_in() ){
      Session::forget('scoutpad_frontend_user_id');
      Session::forget('scoutpad_frontend_user_verified');
      return redirect()->route('login-page');
    }
  }
}