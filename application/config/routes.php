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
$route['default_controller'] = 'DefaultView/defaultPage';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;




$route['strouhanka'] = 'DefaultView/strouhanka';
$route['tabulka'] = 'DefaultView/tabulka';
$route['login'] = 'Login/login';
$route['login-finish'] = 'Login/loginFinish';
$route['register1'] = 'Login/register1';
$route['register-finish1'] = 'Login/registerFinish1';
$route['register2'] = 'Login/register2';
$route['register-finish2'] = 'Login/registerFinish2';
$route['register3'] = 'Login/register3';
$route['register-finish3'] = 'Login/registerFinish3';


$route['admin/dashboard'] = 'Dashboard/dashboard';
$route['admin/logout'] = 'Dashboard/logout';
$route['admin/users'] = 'Users/index';
$route['admin/users/add-user'] = 'Users/addUser';
$route['admin/users/add-user-final'] = 'Users/addUserFinal';
$route['admin/users/delete-user/(:num)'] = 'Users/deleteUser/$1';
$route['admin/users/edit-user/(:num)'] = 'Users/editUser/$1';
$route['admin/users/edit-user-final/(:num)'] = 'Users/editUserFinal/$1';
$route['admin/categories'] = 'Categories/index';
$route['admin/articles'] = 'Articles/index';
