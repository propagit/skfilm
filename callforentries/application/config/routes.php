<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/


$route['default_controller'] = "stk";
$route['page-(:any)'] = "stk/page/$1";
$route['search'] = "stk/search";
$route['search/(:any)'] = "stk/search/$1";
$route['advancesearch'] = "stk/advancesearch";
$route['advancesearch/(:any)'] = "stk/advancesearch/$1";
$route['details'] = "stk/details";
$route['details/(:any)'] = "stk/details/$1";
$route['subscribe'] = "stk/subscribe";
$route['adredirect'] = "stk/adredirect";
$route['adredirect/(:any)'] = "stk/adredirect/$1";

$route['VIP-pack'] = "stk/vippack";
$route['enter'] = "stk/submit_form";
$route['enter/(:any)'] = "stk/submit_form/$1";
$route['enter'] = "stk/enter";
$route['process-payment'] = "stk/process_payment";
$route['process-payment/(:any)'] = "stk/process_payment/$1";
$route['payment_return'] = "stk/payment_return";
$route['payment_return/(:any)'] = "stk/payment_return/$1";
$route['apply_form'] = "stk/submit_form";
$route['admin'] = "admin/cms";
$route['admin/fsm/(:num)'] = "admin/fsm/index/$1";
$route['scaffolding_trigger'] = "";


/**
* Admin
*/

//Validation
//$route['admin'] = "admin/store";
//$route['admin/login'] = "admin/authorize/login";
//$route['admin/logout'] = "admin/authorize/logout";
//$route['admin/validate'] = "admin/authorize/validate";

//Dashboard
//$route['admin/dashboard'] = "backend/store";

/* End of file routes.php */
/* Location: ./application/config/routes.php */