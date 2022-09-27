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
$route['default_controller'] = 'welcome';
$route['users/login'] = 'users/login';
$route['users/logout'] = 'users/logout';
$route['dash/dashboard'] = 'dash/dashboard';

$route['culture/dances'] = 'culture/dances';
$route['culture/createdance'] = 'culture/createdance';
$route['culture/adddance'] = 'culture/adddance';
$route['culture/viewdance/(:any)'] = 'culture/viewdance/$1';
$route['culture/editdance/(:any)'] = 'culture/editdance/$1';
$route['culture/deletedance/(:any)'] = 'culture/deletedance/$1';

$route['culture/foods'] = 'culture/foods';
$route['culture/createfood'] = 'culture/createfood';
$route['culture/addfood'] = 'culture/addfood';
$route['culture/viewfood/(:any)'] = 'culture/viewfood/$1';
$route['culture/editfood/(:any)'] = 'culture/editfood/$1';
$route['culture/deletefood/(:any)'] = 'culture/deletefood/$1';

$route['culture/arts'] = 'culture/arts';
$route['culture/createart'] = 'culture/createart';
$route['culture/addart'] = 'culture/addart';
$route['culture/viewart/(:any)'] = 'culture/viewart/$1';
$route['culture/editart/(:any)'] = 'culture/editart/$1';
$route['culture/deleteart/(:any)'] = 'culture/deleteart/$1';

$route['travel/hotels'] = 'travel/hotels';
$route['travel/createhotel'] = 'travel/createhotel';
$route['travel/addhotel'] = 'travel/addhotel';
$route['travel/viewhotel/(:any)'] = 'travel/viewhotel/$1';
$route['travel/edithotel/(:any)'] = 'travel/edithotel/$1';
$route['travel/deletehotel/(:any)'] = 'travel/deletehotel/$1';

$route['travel/helpfultips'] = 'travel/helpfultips';
$route['travel/createtip'] = 'travel/createtip';
$route['travel/addtip'] = 'travel/addtip';
$route['travel/viewtip/(:any)'] = 'travel/viewtip/$1';
$route['travel/edittip/(:any)'] = 'travel/edittip/$1';
$route['travel/deletetip/(:any)'] = 'travel/deletetip/$1';

$route['tender/tenders'] = 'tender';
$route['tender/createtender'] = 'tender/createtender';
$route['tender/addtender'] = 'tender/addtender';
$route['tender/viewtender/(:any)'] = 'tender/viewtender/$1';
$route['tender/edittender/(:any)'] = 'tender/edittender/$1';
$route['tender/deletetender/(:any)'] = 'tender/deletetender/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
