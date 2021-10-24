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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});



Auth::routes();
	Route::get('/home', 'Admin\AdminController@index')->name('home')->middleware('admin');
	Route::post('/register', 'Auth\RegisterController@user_create')->name('/register');
	Route::get('password-protected','Frontend\PasswordController@password_protected')->name('password-protected');
	Route::post('password-protected','Frontend\PasswordController@password_save')->name('password-protected');
	
	Route::get('/','Frontend\PasswordController@welcome');
	
	Route::get('/sign-up', 'Frontend\PasswordController@register')->name('sign-up');
	Route::post('/sign-up',"Frontend\PasswordController@sign_up_save")->name('sign-up');
	
	 Route::get('/admin','Auth\LoginController@admin_login');
	 Route::post('/reset-email','Auth\ForgotPasswordController@reset_email')->name('reset-email');
	 Route::post('/reset-password','Auth\ResetPasswordController@reset_password')->name('reset-password');
	 
	Route::group(['middleware' => ['auth', 'admin'],'prefix' => 'admin'], function()  {
   
	Route::get('/customer-services-location/{id}', 'Admin\AdminController@customer_services_location')->name('customer-services-location');
	Route::get('/job-details/{user_type}/{id}', 'Admin\AdminController@job_details')->name('job-details');
	Route::get('/service-provider', 'Admin\AdminController@service_provider')->name('service-provider');
	Route::get('/service-provider-location/{id}', 'Admin\AdminController@service_provider_service_location')->name('service-provider-location');
	Route::get('/admin-task-list', 'Admin\AdminController@task_list')->name('admin-task-list');
	Route::get('/customer', 'Admin\AdminController@customer_info')->name('customer');
	Route::get('/service', 'Admin\AdminController@service')->name('service');
	
	Route::get('/setting', 'Admin\AdminController@setting')->name('setting');
	Route::post("/save-seting",'Admin\AdminController@save_setting')->name("save-seting");
	
	Route::get('/profile', 'Admin\AdminController@profile')->name('profile');
	Route::get('/service-details/{id}', 'Admin\AdminController@service_details')->name('service-details');
	Route::get('/profileinfoupdate','Admin\AdminController@profileinfoupdate')->name('profileinfoupdate');
	Route::get('/customer/filter','Admin\AdminController@customer_filter')->name('customer/filter');
	Route::get('/sp/filter','Admin\AdminController@sp_filter')->name('sp/filter');
	Route::get('/my-profile','Admin\AdminController@my_profile')->name('my-profile');
	Route::post('/update-profile','Admin\AdminController@update_profile')->name('update-profile');
	Route::post('/admin-task-list-filter','Admin\AdminController@admin_task_list_filter')->name('admin-task-list-filter');
     
    Route::get('/live-user','Admin\AdminController@admin_live_user')->name('live-user');  	 
	Route::get('/live-services','Admin\AdminController@live_services')->name('live-services');
	Route::get('/live-service-details/{id}','Admin\AdminController@live_services_details')->name('live-service-details');
	
	Route::get('/services-other','Admin\AdminController@services_other')->name('services-other');
	
	Route::get('/post-task-view/{status}','Admin\AdminController@post_task_view')->name('post-task-view');
});
Route::group(['middleware' => ['auth', 'customer'],'prefix' => 'user'], function()  {
	
	Route::get('/profile','User\ProfileController@my_profile')->name('profile');
	Route::get('/edit-profile','User\ProfileController@edit_profile')->name('edit-profile');
	Route::post('/edit-profile','User\ProfileController@profile_update')->name('edit-profile');
	
	Route::get('/change-password','User\ProfileController@change_password')->name('change-password');
	Route::post('/change-password','User\ProfileController@password_update')->name('change-password');
	
	Route::get('/address-option','User\ProfileController@address_option')->name('address-option');
	
    Route::get('/profile-preview/{id}','User\ProfileController@profile_preview')->name('profile-preview');
	Route::get('/assign-job','User\ProfileController@assign_job')->name('assign-job');
	
	Route::get('/address','User\ProfileController@my_address')->name('address');
	Route::post('/address','User\ProfileController@address_save')->name('address');
	Route::get('/address/delete/{id}','User\ProfileController@address_delete');
	Route::get('/address/edit/{id}','User\ProfileController@address_edit');
	Route::post('/address_update','User\ProfileController@address_update')->name('address_update');
	
	Route::get('/task-list','User\PosttaskController@task_list')->name('task-list');
	Route::get('/post-task','User\PosttaskController@post_task')->name('post-task');
	Route::post("/post-task",'User\PosttaskController@post_task_save')->name('post-task');
	
	Route::post("/u-markCompletedjob",'User\PosttaskController@markCompletedjob')->name('u-markCompletedjob');
	Route::post("/add-reviews",'User\PosttaskController@add_reviews')->name('add-reviews');
	
	Route::get("/user-post-task-images","User\PosttaskController@user_post_task_images")->name("user-post-task-images");
	
	Route::get('/notification-setting','User\ProfileController@notification_setting')->name('notification-setting');
	Route::post('/notification-setting','User\ProfileController@notification_setting_save')->name('notification-setting');
	
	Route::get('/text-notification','User\ProfileController@text_notification')->name('text-notification');
	
	Route::get('/update-user-info','User\ProfileController@update_user_info')->name('update-user-info');
	Route::get('/status-awaiting-assignment','User\ProfileController@status_awaiting_assignment')->name('status-awaiting-assignment');
	Route::get('/status-inprogress','User\ProfileController@status_inprogress')->name('status-inprogress');
	Route::get('/status-open/{id}','User\ProfileController@status_open')->name('status-open');
	Route::get('/statusCompleted-withoutreview','User\ProfileController@statusCompleted_withoutreview')->name('statusCompleted-withoutreview');
	Route::get('/statusCompleted-withreview','User\ProfileController@statusCompleted_withreview')->name('statusCompleted-withreview');
    
	Route::get("/deactivate-request","User\ProfileController@user_deactivate_request")->name('deactivate-request');
    Route::post("/deactivate-request","User\ProfileController@user_deactivate_request_save")->name('deactivate-request');
	
	Route::get('/portfolio_preview/id','User\ProfileController@get_portfolio_by_id_customer')->name('portfolio_preview/id');

     Route::post("/user-tasklist-filter","User\ProfileController@user_list_filter")->name('user-tasklist-filter');
});
   Route::group(['middleware' => ['auth', 'provider'],'prefix' => 'provider'], function()  {
	 Route::get('/signups', 'User\SignupController@signup')->name('signups');
	 Route::post('/business-details-save','User\SignupController@business_details_save')->name('business-details-save');  
 	 
	 Route::get('/payment-card-list','User\SignupController@payment_card_list')->name('payment-card-list');
     Route::post('/add-payment-card','User\SignupController@add_payment_card')->name('add-payment-card');
	 Route::get('/edit-payment-card','User\SignupController@edit_payment_card')->name('edit-payment-card');
	 Route::post('/edit-payment-card','User\SignupController@update_payment_card')->name('edit-payment-card');
	 Route::get('/delete-payment-card/{id}','User\SignupController@delete_payment_card');
	 
	 Route::post('update-provider-info','User\SignupController@update_provider_info')->name('update-provider-info');
	 
	 Route::post('/addlicenseform','User\SignupController@addlicenseform')->name('addlicenseform');
	 Route::get('/business-license-list','User\SignupController@get_business_license_list')->name('business-license-list');
	 Route::get('/edit-business-license','User\SignupController@edit_business_license')->name('edit-business-license');
	 Route::post('/update-business-license','User\SignupController@update_business_license')->name("update-business-license");
	 Route::get('/delete-business-license/{id}','User\SignupController@delete_business_license');
	 
	 Route::post('/save-business-hour','User\SignupController@save_business_hour')->name('save-business-hour');
	 
	 Route::post('/add-portfolio','User\SignupController@add_portfolio')->name('add-portfolio');
	 Route::get('/portfolio-list','User\SignupController@get_portfolio_list')->name('portfolio-list');
	 Route::get('/edit-portfolio','User\SignupController@edit_portfolio')->name('edit-portfolio');
	 Route::post('/update-portfolio','User\SignupController@update_portfolio')->name('update-portfolio');
	 Route::get('/portfolio/id','User\SignupController@get_portfolio_by_id')->name('portfolio/id');
	 Route::get('delete-portfolio/{id}','User\SignupController@delete_portfolio');
	 
	 Route::get("/about-preview","User\ProviderController@about_preview")->name('about-preview');
	 Route::get("/provider-licence-details","User\ProviderController@provider_licence_details")->name('provider-licence-details');
	 Route::get("/provider-ratings-reviews","User\ProviderController@provider_ratings_reviews")->name('provider-ratings-reviews'); 
	 Route::get("/provider-projects-listing","User\ProviderController@provider_projects_listing")->name('provider-projects-listing');  
	 Route::get("/provider-business-details","User\ProviderController@provider_business_details")->name("provider-business-details");
	 
	 Route::get("/provider-change-password","User\ProviderController@provider_change_password")->name("provider-change-password");
	 Route::post("/provider-change-password","User\ProviderController@provider_update_password")->name("provider-change-password");
	 
	 Route::get("/provider-company-info","User\ProviderController@provider_company_info")->name("provider-company-info");
	 Route::post("/provider-company-info","User\ProviderController@provider_company_info_save")->name("provider-company-info");
	 
	 Route::get("/provider-deactivate-request","User\ProviderController@provider_deactivate_request")->name("provider-deactivate-request");
	 Route::post("/provider-deactivate-request","User\ProviderController@provider_deactivate_request_save")->name("provider-deactivate-request");
	 
	 Route::get("/provider-edit-profile","User\ProviderController@provider_edit_profile")->name("provider-edit-profile");
	 Route::post("/provider-update-profile","User\ProviderController@provider_update_profile")->name("provider-update-profile");
	 
	 Route::get("/provider-location-settings","User\ProviderController@provider_location_settings")->name("provider-location-settings");
	 Route::get("/provider-my-profile","User\ProviderController@provider_my_profile")->name("provider-my-profile");
	 Route::get("/provider-notification-settings-combined","User\ProviderController@provider_notification_settings_combined")->name("provider-notification-settings-combined");
	 Route::get("/provider-notification-settings","User\ProviderController@provider_notification_settings")->name("provider-notification-settings");
	 Route::post("/provider-notification-settings","User\ProviderController@provider_notification_settings_save")->name("provider-notification-settings");
	 
	 Route::get("/provider-payment-information","User\ProviderController@provider_payment_information")->name("provider-payment-information");
	 Route::get("/provider-portfolio","User\ProviderController@provider_portfolio")->name("provider-portfolio");
	 Route::get("/provider-search-task","User\ProviderController@provider_search_task")->name("provider-search-task");
	 Route::get("/provider-service-settings","User\ProviderController@provider_service_settings")->name("provider-service-settings");
	 Route::get("/provider-Status-AssignedtoAnotherProfessional","User\ProviderController@provider_Status_AssignedtoAnotherProfessional")->name("provider-Status-AssignedtoAnotherProfessional");
	 Route::get("/provider-Status-inprogress","User\ProviderController@provider_Status_inprogress")->name("provider-Status-inprogress");
	 Route::get("/provider-Status-open/{id}","User\ProviderController@provider_Status_open")->name("provider-Status-open");
	 
	 Route::get("/post-task-images","User\ProviderController@post_task_images")->name("post-task-images");
	 Route::post("/apply-task","User\ProviderController@apply_task")->name('apply-task');
	 
	 
	 
	 Route::get("/provider-StatusAwaitingAssignment-Open","User\ProviderController@provider_StatusAwaitingAssignment_Open")->name("provider-StatusAwaitingAssignment-Open");
	 Route::get("/provider-tasks-list","User\ProviderController@provider_tasks_list")->name("provider-tasks-list");
	 Route::get("/provider-text-notification","User\ProviderController@provider_text_notification")->name("provider-text-notification");
	 Route::get("/provider-transaction-history","User\ProviderController@provider_transaction_history")->name("provider-transaction-history");
	 Route::get("/view-invoice/{id}","User\ProviderController@view_invoice")->name('view-invoice');
	 
	 Route::post("/provider-tasklist-filter","User\ProviderController@provider_list_filter")->name('provider-tasklist-filter');
	 Route::get("/provider-trans","User\ProviderController@provider_trans")->name('provider-trans');
	 Route::get("/update-default-card",'User\SignupController@update_default_card')->name('update-default-card');
	
	});
	
	/*********************** test api **************************************/
	Route::get('/address-test','Frontend\FrontendController@address_test');
	/******************************* Frontend Routes ***********************/
	Route::get('/index','Frontend\FrontendController@index')->name('index');
	Route::get('/Get-Jobs-NYC','Frontend\FrontendController@get_jobs_NYC')->name('Get-Jobs-NYC');
	Route::get('/HowitWorks-customer','Frontend\FrontendController@HowitWorks_customer')->name('HowitWorks-customer');
	Route::get('/HowitWorks-ServiceProviders','Frontend\FrontendController@HowitWorks_ServiceProviders')->name('HowitWorks-ServiceProviders');
	Route::get('/posttask-step1','Frontend\FrontendController@posttask_step1')->name('posttask-step1');
	/* Route::get('/posttask-step2','Frontend\FrontendController@posttask_step2')->name('posttask-step2');
	Route::get('/posttask-step3','Frontend\FrontendController@posttask_step3')->name('posttask-step3');
	Route::get('/posttask-step4','Frontend\FrontendController@posttask_step4')->name('posttask-step4');
	Route::get('/posttask-step5','Frontend\FrontendController@posttask_step5')->name('posttask-step5'); */
	Route::get('/help-support','Frontend\FrontendController@help_support')->name('help-support');
	Route::get('/NYC-Repair-Prices_Main','Frontend\FrontendController@NYC_Repair_Prices_Main')->name('NYC-Repair-Prices_Main');
	Route::get('/NYC-Repair-Price_windowDoor','Frontend\FrontendController@NYC_Repair_Price_windowDoor')->name('NYC-Repair-Price_windowDoor');
	Route::get('/NYC-Repair-Price_roofing','Frontend\FrontendController@NYC_Repair_Price_roofing')->name('NYC-Repair-Price_roofing');
    Route::get('/NYC-Repair-Price_painting','Frontend\FrontendController@NYC_Repair_Price_painting')->name('NYC-Repair-Price_painting');
	Route::get('/NYC-Repair-Price_HVAC-Repair','Frontend\FrontendController@NYC_Repair_Price_HVAC_Repair')->name('NYC-Repair-Price_HVAC-Repair');
	Route::get('/NYC-Repair-Price_Handyman','Frontend\FrontendController@NYC_Repair_Price_Handyman')->name('NYC-Repair-Price_Handyman');
	Route::get('/NYC-Repair-Price_plumbing','Frontend\FrontendController@NYC_Repair_Price_plumbing')->name('NYC-Repair-Price_plumbing');
	Route::get('/NYC-Repair-Price_GeneralContractor','Frontend\FrontendController@NYC_Repair_Price_GeneralContractor')->name('NYC-Repair-Price_GeneralContractor');
	Route::get('/NYC-Repair-Price_Electrician','Frontend\FrontendController@NYC_Repair_Price_Electrician')->name('NYC-Repair-Price_Electrician');
	Route::get('/NYC-Repair-Price_CarpentryCabinets','Frontend\FrontendController@NYC_Repair_Price_CarpentryCabinets')->name('NYC-Repair-Price_CarpentryCabinets');
	Route::get('/about-us','Frontend\FrontendController@about_us')->name('about-us');
	Route::get('/privacy','Frontend\FrontendController@privacy')->name('privacy');
	Route::get('/service-locations','Frontend\FrontendController@service_locations')->name('service-locations');
	Route::get('/Services-Location-Brooklyn','Frontend\FrontendController@Services_Location_Brooklyn')->name('Services-Location-Brooklyn');
	Route::get('/Services-Location-Manhattan','Frontend\FrontendController@Services_Location_Manhattan')->name('Services-Location-Manhattan');
	Route::get('/Services-Location-Queens','Frontend\FrontendController@Services_Location_Queens')->name('Services-Location-Queens');
	Route::get('/Services-Location-StatenIsland','Frontend\FrontendController@Services_Location_StatenIsland')->name('Services-Location-StatenIsland');
	Route::get('/Services-Location-TheBronx','Frontend\FrontendController@Services_Location_TheBronx')->name('Services-Location-TheBronx');
	Route::get('/sitemap','Frontend\FrontendController@sitemap')->name('sitemap');
	Route::get('/terms','Frontend\FrontendController@terms')->name('terms');
	Route::post('/frontend-login','Frontend\FrontendController@login_function')->name('frontend-login');
	Route::post('/frontend-posttask','Frontend\FrontendController@frontend_posttask')->name('frontend-posttask');
	Route::get('logout-custom','Frontend\FrontendController@logout_custom')->name('logout-custom');
	
	Route::get('auth/facebook', 'Auth\LoginController@redirectToFacebook')->name('auth/facebook');
    Route::get('auth/facebook/callback', 'Auth\LoginController@handleFacebookCallback')->name('auth/facebook/callback');
	
	Route::post('/help-profession','Frontend\FrontendController@help_profession')->name('help-profession');
	Route::post('/help-customer','Frontend\FrontendController@help_customer')->name('help-customer');
	
	Route::get('google/redirect', 'Auth\LoginController@redirectToProvider')->name('google/redirect');
    Route::get('google/callback', 'Auth\LoginController@handleProviderCallback')->name('google/callback');
	
	Route::get('save_session','Auth\LoginController@save_session')->name('save_session');
	
	Route::get('/carpentry','Frontend\PasswordController@carpentry')->name('carpentry');
	Route::get('/electrical','Frontend\PasswordController@electrical')->name('electrical');
	Route::get('/general-contracting','Frontend\PasswordController@general_contracting')->name('general-contracting');
	Route::get('/handyman','Frontend\PasswordController@handyman')->name('handyman');
	Route::get('/hvac-technician','Frontend\PasswordController@hvac_technician')->name('hvac-technician');
	Route::get('/painting','Frontend\PasswordController@painting')->name('painting');
	Route::get('/plumbing','Frontend\PasswordController@plumbing')->name('plumbing');
	Route::get('/roofing','Frontend\PasswordController@roofing')->name('roofing');
	Route::get('/unsubscriber/{id}','Frontend\PasswordController@unsubscriber_functional')->name('unsubscriber');
	
	
	
	