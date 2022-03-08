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
$route['default_controller']   = 'main_page';
$route['404_override']         = 'error_404';
$route['translate_uri_dashes'] = FALSE;

$route['akses09']                                  = 'admin/auth';
$route['akses09/keluar']                           = 'admin/auth/logout';
$route['akses09/user']                             = 'admin/user';
$route['akses09/user/edit-profil']                 = 'admin/user/edit_profil';
$route['akses09/user/edit-password']               = 'admin/user/edit_password';
$route['akses09/profil']                           = 'admin/profil';
$route['akses09/web-konten']                       = 'admin/web_konten';
$route['akses09/web-konten/pages/(:any)']          = 'admin/web_konten/pages/$1';
$route['akses09/web-konten/edit/(:num)']           = 'admin/web_konten/edit/$1';
$route['akses09/web-konten/testimoni/edit/(:num)'] = 'admin/testimonial/edit/$1';
$route['akses09/web-konten/schedule/edit/(:num)']  = 'admin/schedule/edit/$1';
$route['akses09/web-konten/courses/edit/(:num)']   = 'admin/courses/edit/$1';
$route['akses09/web-konten/courses/add']           = 'admin/courses/add';
$route['akses09/web-konten/courses/delete/(:num)'] = 'admin/courses/delete/$1';
$route['akses09/web-konten/promo/add']             = 'admin/promo/add';
$route['akses09/web-konten/promo/delete/(:num)']   = 'admin/promo/delete/$1';

$route['(:any)'] = 'main_page/index/$1';