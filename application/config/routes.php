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

$route['bank/tambahsaldo'] = 'bank/tambahsaldo/$1';
$route['bank/adminppob'] = 'bank/index';
$route['bank/updatesaldo'] = 'bank/updatesaldo';
$route['ppob/pembayaran/update'] = 'ppob/confirmpayment';
$route['ppob/bayar/(:any)'] = 'ppob/bayar/$1';
$route['ppob/home'] = 'ppob/index';
$route['ppob/tagihan'] = 'ppob/tagihan';
$route['tarif/update'] = 'tarif/changeTarif';
$route['tarif/edit'] = 'tarif/edit/$1';
$route['tagihan/bayar/(:any)'] = 'penggunaan/bayar/$1';
$route['tarif/create'] = 'tarif/create';
$route['tarif/add'] = 'tarif/index';
$route['penggunaan/edit'] = 'penggunaan/edit/$1';
$route['penggunaan/update'] = 'penggunaan/tambahTagihan';
$route['admin/update'] = 'admin/changeAdmin';
$route['admin/edit'] = 'admin/edit/$1';
$route['admin/create'] = 'admin/create';
$route['admin/add'] = 'admin/index';
$route['pembayaran/update'] = 'pembayaran/confirmpayment';
$route['bayar/payment'] = 'pembayaran/payment/$1';
$route['default_controller'] = 'pages/index';
$route['login'] = 'pages/login';
$route['logout'] = 'pages/logout';
$route['cetak'] = 'pages/cetak_pembayaran';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
