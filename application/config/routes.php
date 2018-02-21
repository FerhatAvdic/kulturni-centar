<?php
$route['default_controller'] = 'welcome';

$route['news'] = 'news';
$route['news/create'] = 'news/create';
$route['news/edit/(:any)'] = 'news/edit/$1';
$route['news/view/(:any)'] = 'news/view/$1';
$route['news/(:any)'] = 'news/view/$1';

$route['shows'] = 'shows';
$route['shows/create'] = 'shows/create';
$route['shows/addpicture'] = 'shows/addpicture';
$route['shows/edit/(:any)'] = 'shows/edit/$1';
$route['shows/view/(:any)'] = 'shows/view/$1';
$route['shows/(:any)'] = 'shows/view/$1';


$route['reservations/create/(:any)'] = 'reservations/create/$1';
$route['reservations/create'] ='reservations/create';
$route['contact'] = 'contact';
$route['home'] = 'home';
$route['adminboard'] = 'admin';

$route['login'] = 'user_authentication';
$route['user_authentication/user_login_process'] = 'user_authentication/user_login_process';
?>
