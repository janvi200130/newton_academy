<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'HomeController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// ........Frontend Routes......... 


$route['/']='HomeController/index';
$route['about']='HomeController/about';
$route['mission']='HomeController/mission';
$route['director-message']='HomeController/director_message';
$route['chairman-message']='HomeController/chairman_message';
$route['courses']='HomeController/courses';
$route['study']='HomeController/study';
$route['contact']='HomeController/contact_data';
$route['registration']='HomeController/registration_form';
$route['login']='HomeController/login';
$route['career']='HomeController/career';
$route['syllabus']='HomeController/syllabus';
$route['scholarship']='HomeController/scholarship_form';
$route['facilities']='HomeController/hostel_facilities';
$route['fees']='HomeController/fees';
$route['enquiry']='HomeController/enquiries';

$route['address1']='HomeController/address1';


// ...........BackEnd Routes............

$route['admin']='AdminController/login';
$route['logout']='AdminController/logout';
$route['dashboard']='AdminController/home';

$route['sign-up']='AdminController/sign_up';
$route['enquiries']='AdminController/enquiry';
$route['contact_us']='AdminController/contact';

$route['address1']='AdminController/address1';
$route['edit-address1']='AdminController/edit_address1';
$route['final-edit-address1']='AdminController/final_edit_address1';

$route['address2']='AdminController/address2';
$route['edit-address2']='AdminController/edit_address2';
$route['final-edit-address2']='AdminController/final_edit_address2';

$route['add-slider']='AdminController/add_slider';
$route['show-slider']='AdminController/show_slider';
$route['edit-slider']='AdminController/edit_slider';
$route['final-edit-slider']='AdminController/final_edit_slider';

$route['show-about']='AdminController/show_about';
$route['edit-about']='AdminController/edit_about';
$route['final-edit-about']='AdminController/final_edit_about';

$route['add-gallery']='AdminController/add_gallery';
$route['show-gallery']='AdminController/show_gallery';

$route['add-director']='AdminController/add_director';
$route['show-gallery']='AdminController/show_gallery';

$route['show-counter']='AdminController/show_counter';
$route['edit-counter']='AdminController/edit_counter';
$route['final-edit-counter']='AdminController/final_edit_counter';

$route['director-msg']='AdminController/director_msg';
$route['edit-director']='AdminController/edit_director';
$route['final-edit-director']='AdminController/final_edit_director';

$route['chairman-msg']='AdminController/chairman_msg';
$route['edit-chairman']='AdminController/edit_chairman';
$route['final-edit-chairman']='AdminController/final_edit_chairman';

$route['add-vission']='AdminController/add_vission';
$route['show-vission']='AdminController/show_vission';
$route['edit-vission']='AdminController/edit_vission';
$route['final-edit-vission']='AdminController/final_edit_vission';

$route['add-mission']='AdminController/add_mission';
$route['show-mission']='AdminController/show_mission';
$route['edit-mission']='AdminController/edit_mission';
$route['final-edit-mission']='AdminController/final_edit_mission';

$route['add-testimonial']='AdminController/add_testimonial';
$route['show-testimonial']='AdminController/show_testimonial';
$route['edit-test']='AdminController/edit_test';
$route['final-edit-test']='AdminController/final_edit_test';

$route['facility']='AdminController/facilities';
$route['show-facility']='AdminController/show_facility';

