<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [

  'uses' => 'Frontend\FrontendController@homePageContent',

  'as'   => 'home-page'

]);

Route::get('/login', [

  'uses' => 'Auth\LoginController@loginPageContent',

  'as'   => 'login-page'

]);

Route::get('/two_factor', [

  'uses' => 'Auth\LoginController@showTwoFactorForm',

  'as'   => '2fa-page'

]);

Route::post('/two_factor', [

  'uses' => 'Auth\LoginController@verifyTwoFactor',

  'as'   => '2fa-page'

]);

Route::get('/learn_more', [

  'uses' => 'Frontend\FrontendController@learnMorePageContent',

  'as'   => 'learn-more'

]);

Route::get('/help', [

  'uses' => 'Frontend\FrontendController@helpPageContent',

  'as'   => 'help-page'

]);
Route::get('/resource-page', [

  'uses' => 'Frontend\FrontendController@resourcesPageContent',

  'as'   => 'resources-page'

]);
Route::post('/frontend_login_submit', [

  'uses' => 'Auth\LoginController@doLogin',

  'as'   => 'frontend-login-submit'

]);

Route::post('/frontend_learnmore_submit', [

  'uses' => 'Frontend\FrontendController@doLearnMore',

  'as'   => 'frontend-learnmore-submit'

]);

Route::get( '/account', [

    'uses' => 'Frontend\UserAccountManageController@userAccountPageContent',

    'as'   => 'user-dashboard-page'

])->middleware('userAdmin', 'verifyLoginPage');


Route::get( '/projects', [

    'uses' => 'Frontend\UserAccountManageController@userProjectsPageContent',

    'as'   => 'user-projects-page'

])->middleware('userAdmin', 'verifyLoginPage');


Route::get( '/projects/details/{id}', [

    'uses' => 'Frontend\UserAccountManageController@projectDetailsPageContent',

    'as'   => 'project-details-page'

])->middleware('userAdmin', 'verifyLoginPage');

Route::get( '/projects/sign/{id}', [

  'uses' => 'Frontend\UserAccountManageController@projectSignPageContent',

  'as'   => 'contract-sign-page'

])->middleware('userAdmin', 'verifyLoginPage');

Route::post( '/projects/sign/{id}', [

  'uses' => 'Frontend\UserAccountManageController@updateContract',

  'as'   => 'contract-sign-page'

])->middleware('userAdmin', 'verifyLoginPage');



Route::get( '/documents', [

    'uses' => 'Frontend\UserAccountManageController@userDocumentsPageContent',

    'as'   => 'user-documents-page'

])->middleware('userAdmin', 'verifyLoginPage');

Route::get( '/cases', [

    'uses' => 'Frontend\UserAccountManageController@userCasesPageContent',

    'as'   => 'user-cases-page'

])->middleware('userAdmin', 'verifyLoginPage');

Route::get( '/tax_forms', [

    'uses' => 'Frontend\UserAccountManageController@userTaxFormPageContent',

    'as'   => 'user-taxform-page'

])->middleware('userAdmin', 'verifyLoginPage');

Route::get( '/reviews', [

    'uses' => 'Frontend\UserAccountManageController@userReviewsPageContent',

    'as'   => 'user-reviews-page'

])->middleware('userAdmin', 'verifyLoginPage');


Route::post('/ajax/interested_invest', [

  'uses' => 'Admin\AdminAjaxController@interestedToInvest',

  'as'   => 'interested-invest'

]);

Route::post('/ajax/return_invest', [

  'uses' => 'Admin\AdminAjaxController@returnToInvest',

  'as'   => 'return-invest'

]);



 Route::get( 'account/logout', [

    'uses' => 'Frontend\UserAccountManageController@userLogout',

    'as'   => 'user-logout'

  ]);
 
 
 
 /******************Admin Routes *******************/
 
 
 Route::get('/admin/login', [

  'uses' => 'Auth\LoginController@adminLoginPageContent',

  'as'   => 'admin-login-page'

]);
 
 
 
 Route::post('/admin_login_submit', [

  'uses' => 'Auth\LoginController@doAdminLogin',

  'as'   => 'admin-login-submit'

]);
 
 Route::get( '/admin/dashboard', [

    'uses' => 'Admin\AdminAccountManageController@adminDashboardPageContent',

    'as'   => 'admin-dashboard-page'

])->middleware('verifyLoginPage', 'admin');
 
 Route::get( '/admin/projects', [

    'uses' => 'Admin\AdminAccountManageController@adminProjectsPageContent',

    'as'   => 'admin-projects-page'

])->middleware('verifyLoginPage', 'admin');
 
 
 Route::get( '/admin/add-project', [

    'uses' => 'Admin\AdminAccountManageController@adminAddProjectPage',

    'as'   => 'admin-add-project'

])->middleware('verifyLoginPage', 'admin');
 
 
 Route::post( '/admin/add-project', [

    'uses' => 'ProjectsController@saveProject',

    'as'   => 'admin-add-project'

])->middleware('verifyLoginPage', 'admin');
 
 
Route::get( '/admin/signed-documents', [

  'uses' => 'Admin\AdminAccountManageController@adminSignedDocumentsPageContent',

  'as'   => 'admin-signed-documents'

])->middleware('verifyLoginPage', 'admin');

Route::get( '/admin/unsigned-documents', [

  'uses' => 'Admin\AdminAccountManageController@adminUnsignedDocumentsPageContent',

  'as'   => 'admin-unsigned-documents'

])->middleware('verifyLoginPage', 'admin');
 
 
 
 Route::post('/ajax/delete_project', [

  'uses' => 'Admin\AdminAjaxController@deleteProject',

  'as'   => 'delete-project'

]);
 
 Route::post('/ajax/delete_project_image', [

  'uses' => 'Admin\AdminAjaxController@deleteProjectImage',

  'as'   => 'delete-project-image'

]);
 
 
 
 Route::get('admin/update_project/{id}', [

    'uses' => 'Admin\AdminAccountManageController@adminUpdateProjectPage',

    'as'   => 'admin-update-project'

  ])->middleware('verifyLoginPage', 'admin');
 
 
 Route::post('admin/update_project/{id}', [

    'uses' => 'ProjectsController@saveProject',

    'as'   => 'admin-update-project'

  ])->middleware('verifyLoginPage', 'admin');
 
 
 
 Route::get( '/admin/testimonials', [

    'uses' => 'Admin\AdminAccountManageController@adminTestimonialsPageContent',

    'as'   => 'admin-testimonials-page'

])->middleware('verifyLoginPage', 'admin');
 
 
 Route::get( '/admin/add-testimonial', [

    'uses' => 'Admin\AdminAccountManageController@adminAddTestimonialPage',

    'as'   => 'admin-add-testimonial'

])->middleware('verifyLoginPage', 'admin');
 
 
 Route::post( '/admin/add-testimonial', [

    'uses' => 'TestimonialsController@saveTestimonial',

    'as'   => 'admin-add-testimonial'

])->middleware('verifyLoginPage', 'admin');
 
 
 Route::post('/ajax/delete_testimonial', [

  'uses' => 'Admin\AdminAjaxController@deleteTestimonial',

  'as'   => 'delete-testimonial'

]);
 
 Route::get('admin/update_testimonial/{id}', [

    'uses' => 'Admin\AdminAccountManageController@adminUpdateTestimonialPage',

    'as'   => 'admin-update-testimonial'

  ])->middleware('verifyLoginPage', 'admin');
 
 
 Route::post('admin/update_testimonial/{id}', [

    'uses' => 'TestimonialsController@saveTestimonial',

    'as'   => 'admin-update-testimonial'

  ])->middleware('verifyLoginPage', 'admin');
 
 
 
 
  Route::get( '/admin/faqs', [

    'uses' => 'Admin\AdminAccountManageController@adminFaqsPageContent',

    'as'   => 'admin-faqs-page'

])->middleware('verifyLoginPage', 'admin');
 
 
 Route::get( '/admin/add-faq', [

    'uses' => 'Admin\AdminAccountManageController@adminAddFaqPage',

    'as'   => 'admin-add-faq'

])->middleware('verifyLoginPage', 'admin');
 
 
 Route::post( '/admin/add-faq', [

    'uses' => 'FaqsController@saveFaq',

    'as'   => 'admin-add-faq'

])->middleware('verifyLoginPage', 'admin');
 
 
 Route::post('/ajax/delete_faq', [

  'uses' => 'Admin\AdminAjaxController@deleteFaq',

  'as'   => 'delete-faq'

]);
 
 Route::get('admin/update_faq/{id}', [

    'uses' => 'Admin\AdminAccountManageController@adminUpdateFaqPage',

    'as'   => 'admin-update-faq'

  ])->middleware('verifyLoginPage', 'admin');
 
 
 Route::post('admin/update_faq/{id}', [

    'uses' => 'FaqsController@saveFaq',

    'as'   => 'admin-update-faq'

  ])->middleware('verifyLoginPage', 'admin');




  
  Route::get( '/admin/tags', [

    'uses' => 'Admin\AdminAccountManageController@adminTagsPageContent',

    'as'   => 'admin-tags-page'

])->middleware('verifyLoginPage', 'admin');
 
 
 Route::get( '/admin/add-tag', [

    'uses' => 'Admin\AdminAccountManageController@adminAddTagPage',

    'as'   => 'admin-add-tag'

])->middleware('verifyLoginPage', 'admin');
 
 
 Route::post( '/admin/add-tag', [

    'uses' => 'TagsController@saveTag',

    'as'   => 'admin-add-tag'

])->middleware('verifyLoginPage', 'admin');
 
 
 Route::post('/ajax/delete_tag', [

  'uses' => 'Admin\AdminAjaxController@deleteTag',

  'as'   => 'delete-tag'

]);
 
 Route::get('admin/update_tag/{id}', [

    'uses' => 'Admin\AdminAccountManageController@adminUpdateTagPage',

    'as'   => 'admin-update-tag'

  ])->middleware('verifyLoginPage', 'admin');
 
 
 Route::post('admin/update_tag/{id}', [

    'uses' => 'TagsController@saveTag',

    'as'   => 'admin-update-tag'

  ])->middleware('verifyLoginPage', 'admin');









  
 
 
  Route::get( '/admin/users', [

    'uses' => 'Admin\AdminAccountManageController@adminUsersPageContent',

    'as'   => 'admin-users-page'

  ])->middleware('verifyLoginPage', 'admin');
 
 
  Route::get( '/admin/add-user', [

    'uses' => 'Admin\AdminAccountManageController@adminAddUserPage',

    'as'   => 'admin-add-user'

])->middleware('verifyLoginPage', 'admin');
 
 
 Route::post( '/admin/add-user', [

    'uses' => 'UserController@saveUser',

    'as'   => 'admin-add-user'

])->middleware('verifyLoginPage', 'admin');
 
Route::get( '/admin/update-user/{id}', [

  'uses' => 'Admin\AdminAccountManageController@adminUpdateUserPage',

  'as'   => 'admin-update-user'

])->middleware('verifyLoginPage', 'admin');


Route::post( '/admin/update-user/{id}', [

  'uses' => 'UserController@saveUser',

  'as'   => 'admin-update-user'

])->middleware('verifyLoginPage', 'admin');


Route::post('/ajax/delete_user', [

  'uses' => 'Admin\AdminAjaxController@deleteUser',

  'as'   => 'delete-user'

]);

Route::post('/ajax/notify_user', [

  'uses' => 'Admin\AdminAjaxController@notify_user',

  'as'   => 'notify-user'

]);

Route::get( '/admin/settings', [

  'uses' => 'Admin\AdminAccountManageController@adminSettingsPage',

  'as'   => 'admin-update-settings'

])->middleware('verifyLoginPage', 'admin');


Route::post( '/admin/settings', [

  'uses' => 'Admin\AdminAccountManageController@saveSettings',

  'as'   => 'admin-update-settings'

])->middleware('verifyLoginPage', 'admin');


 
 Route::get( 'admin/logout', [

    'uses' => 'Admin\AdminAccountManageController@adminLogout',

    'as'   => 'admin-logout'

  ]);
 
 
 
 
 