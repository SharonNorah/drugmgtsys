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
$route['default_controller']            = 'admin/dashboard';
$route['404_override']                  = '';
$route['translate_uri_dashes']          = FALSE;
$route['auth']                          = 'auth';

$route['admin/create_drug']             = 'admin/drug/create_drug/';
$route['admin/create_drug/(:any)']      = 'admin/drug/create_drug/$1';
$route['admin/edit_drug/(:any)']        = 'admin/drug/edit_drug/$1';
$route['admin/delete_drug/(:any)']      = 'admin/drug/delete_drug/$1';


$route['admin/create_inventories']      = 'admin/inventory/create_inventories/';
$route['admin/create_inventory/(:any)'] = 'admin/inventory/create_inventory/$1';
$route['admin/inventories']             = 'admin/inventory';
$route['admin/list_inventory/(:any)']   = 'admin/inventory/list_inventory/$1';

$route['admin/order']                   = 'admin/order';
$route['admin/create_orders']           = 'admin/order/create_orders/';
$route['admin/create_order/(:any)']     = 'admin/order/create_order/$1';
$route['admin/edit_order/(:any)']       = 'admin/order/edit_order/$1';
$route['admin/list_order/']             = 'admin/order/list_order';
$route['admin/list_order/(:any)']       = 'admin/order/list_order/$1';

$route['admin/center']                   = 'admin/center';
$route['admin/create_center']           = 'admin/order/create_center/';
$route['admin/create_center/(:any)']     = 'admin/order/create_center/$1';
$route['admin/edit_center/(:any)']       = 'admin/order/edit_center/$1';
$route['admin/list_center/']             = 'admin/order/list_center';
$route['admin/list_center/(:any)']       = 'admin/order/list_center/$1';