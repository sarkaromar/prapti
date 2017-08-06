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
|	https://codeigniter.com/user_guide/general/routing.html
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

$route['default_controller'] = 'home';

// about us
$route['vision'] = 'home/vision';
$route['mission'] = 'home/mission';
$route['message_from_chairman'] = 'home/msg_from_chrmn';
$route['core_values'] = 'home/core_values';
$route['corporate_goal'] = 'home/corporate_goal';
$route['organogram'] = 'home/organogram';
$route['client'] = 'home/client';

// projects
$route['on_going_project'] = 'home/on_going_project';
$route['completed_project'] = 'home/completed_project';

// what we do
$route['roads_and_highway'] = 'home/roads_and_highway';
$route['bridge'] = 'home/bridge';
$route['material_supply'] = 'home/material_supply';
$route['optical_fiber'] = 'home/optical_fiber';
$route['civil'] = 'home/civil';

// equipments
$route['equipments'] = 'home/equipments';

// careers
$route['careers'] = 'home/careers';

// gallery
$route['on_going_project_gallery'] = 'home/on_going_project_gallery';
$route['completed_project_gallery'] = 'home/completed_project_gallery';

// contact
$route['contact'] = 'home/contact';
$route['send_msg'] = 'home/send_msg';

// default
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;