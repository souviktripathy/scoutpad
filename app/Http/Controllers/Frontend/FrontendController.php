<?php
namespace App\Http\Controllers\Frontend;
use Mail;
use Request;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\FaqsController;
use App\Models\JoinRequest;
use App\Library\GetFunction;
use Illuminate\Support\Facades\Session;
class FrontendController extends Controller
{
 public $classGetFunction;

  public function __construct() {
   $this->project  =  new ProjectsController();
   $this->testimonial  =  new TestimonialsController();
   $this->faq  =  new FaqsController();
   $this->classGetFunction =  new GetFunction();
  }
  
  /**
   * 
   * Home page content
   *
   * @param null
   * @return void 
   */
  public function homePageContent(){
    $data = array();
    $data['title']="";
    $data['ongoing_projects'] = $this->project->getProjectsByFilter(1,1);
    $data['upcoming_projects'] = $this->project->getProjectsByFilter(2,1);
    $data['testimonials_data'] = $this->testimonial->getTestimonials(3);
    return view('frontend.pages.home', $data);
  }
  
  
  public function helpPageContent(){
    $data = array();
    $data['title']="";
    $data['faqs_data'] = $this->faq->getFaqsOthers();
    $data['faqs_data_main'] = $this->faq->getFaqsMain();
    return view('frontend.pages.help', $data);
  }

  public function resourcesPageContent(){
    $data = array();
    $data['title']="";
   
    return view('frontend.pages.resources', $data);
  }
  
  public function learnMorePageContent(){
    $data = array();
    return view('frontend.pages.learnmore', $data);
  }
  
  
  public function doLearnMore(){
    $data = Request::all();  
    $post  =  new JoinRequest;
    $post->name                   =   strip_tags(Request::Input('lm_name'));
    $post->email                  =   strip_tags(Request::Input('lm_email'));
    $post->phone                  =   Request::Input('lm_phone');
    $post->address                =   Request::Input('lm_address');
    $post->occupation             =   Request::Input('lm_occupation');
    $post->income                 =   Request::Input('lm_income');
    $post->social_security_number =   Request::Input('lm_security');
    $post->marital_status         =   Request::Input('lm_mstatus');
    $post->sophisticated_investor =   strip_tags(Request::Input('lm_investor'));
    $post->invested               =   strip_tags(Request::Input('lm_invested'));
    $post->amount_invest          =   strip_tags(Request::Input('lm_invest'));
    $post->when_invest            =   strip_tags(Request::Input('lm_when'));
    $post->hear_about             =   json_encode(Request::Input('lm_hear'));
    $post->country                =   strip_tags(Request::Input('lm_country'));
    $post->additional_info                  =   Request::Input('lm_additional');
    
    if($post->save()){ 
        $mailData['source']  =   'join_request';
        $mailData['data']    =   $data;
       // echo $data['lm_name']; exit();
        $this->classGetFunction->sendCustomMail( $mailData );
        Session::flash('success-message', 'Thank you. We will be in touch to schedule a call.');
        return redirect()->route('learn-more', '');
        
    }
    
    
  }
  
}