<?php
defined('BASEPATH') or exit('No direct script access allowed');
$route['default_controller'] = 'process';
$route['homepage'] = 'process';
$route['joinpage'] = 'process/openjoinpage';
$route['register'] = 'process/register';
$route['login'] = 'process/login';
$route['mypage'] = 'process/openmainpage';
$route['jobs'] = 'process/jobspage';
$route['search'] = 'process/search';
$route['new-posting'] = 'process/newpostingpage';
$route['create-new'] = 'process/createnewposting';
$route['companies'] = 'process/showcompanylist';
$route['showcompany'] = 'process/showcompanylist';
$route['showcompanyadmin'] = 'process/showcompanylist';
$route['details/(:any)'] = 'process/opendetailspage/$1';
$route['edit/(:any)'] = 'process/editpage/$1';
$route['editnow'] = 'process/editnow';
$route['logout'] = 'process/logout';
$route['delete/(:any)'] = 'process/deletepage/$1';
$route['deletenow/(:any)'] = 'process/deletenow/$1';
$route['deletenow'] = 'process/deletenow';
$route['about-company/(:any)'] = 'process/aboutcompany/$1';

$route['admin-home'] = 'adminprocess/adminpostingpage';
$route['post-requests'] = 'adminprocess/postrequests';
$route['highlighted-posts'] = 'adminprocess/highlightedposts';
$route['editadmin/(:any)'] = 'adminprocess/editpageadmin/$1';
$route['editnowadmin'] = 'adminprocess/editnow';
$route['details-admin'] = 'adminprocess/detailspageadmin';
$route['options-admin'] = 'adminprocess/optionsadmin';
$route['add-admin'] = 'adminprocess/addadmin';
$route['new-posting-admin'] = 'adminprocess/newposting';
$route['create-new-admin'] = 'adminprocess/createnewposting';

$route['404_override'] = '';
$route['translate_uri_dashes'] = false;
