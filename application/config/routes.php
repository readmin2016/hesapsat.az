<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';

$route['about-us'] = 'pages/about_us';
$route['ilanlar'] = 'pages/ilanlar';
$route['register'] = 'pages/register';
$route['contact'] = 'pages/contact';
$route['faq'] = 'pages/faq';
$route['terms-conditions'] = 'pages/terms_conditions';
$route['komisyon-hesapla'] = 'pages/komisyon_hesapla';
$route['privacy-policy'] = 'pages/privacy_policy';
$route['add-listing'] = 'pages/add_listing';
$route['blog'] = 'pages/blog';
$route['nead-login'] = 'pages/nead_login';
$route['dashboard'] = 'pages/dashboard';
$route['wallet'] = 'pages/wallet';
$route['info/(:any)/(:num)'] = 'pages/info/$1/$2';
$route['finish'] = 'pages/finish';
$route['mylistings'] = 'pages/mylistings';
$route['myfollows'] = 'pages/myfollows';
$route['detay'] = 'pages/detay';
$route['papara'] = 'pages/papara';
$route['ininal'] = 'pages/ininal';
$route['bank_transfer'] = 'pages/bank_transfer';
$route['odeme_bildirim'] = 'pages/odeme_bildirim';
$route['incele'] = 'pages/incele';

$route['category/(:any)/(:any)/(:num)'] = "pages/incele/$1/$2/$3";

$route['chat/(:any)'] = "messages/chat/$1";



$route['images/(:any)/(:num)/(:any)'] = 'pages/images/$1/$2/$3';
$route['form/(:num)'] = 'admin/form/$1';

$route['admin/add_order/(:any)'] = 'admin/add_order/$1';

$route['doping/(:any)/(:num)'] = 'pages/doping/$1/$2';
$route['warning/(:num)'] = 'pages/warning/$1';
$route['payment/(:any)/(:num)/(:num)'] = 'pages/payment/$1/$2/$3';


$route['settings'] = 'settings/options';
$route['address'] = 'settings/address';
$route['security'] = 'settings/security';
$route['delaccount'] = 'settings/delaccount';
$route['bank'] = 'settings/bank';
$route['tconay'] = 'settings/tconay';
$route['mantconay'] = 'settings/mantconay';
$route['activation'] = 'settings/activation';
$route['ilanlarim'] = 'settings/ilanlarim';



$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
