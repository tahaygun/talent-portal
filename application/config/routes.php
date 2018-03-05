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
$route['details/(:any)'] = 'process/opendetailspage/$1';
$route['edit/(:any)'] = 'process/editpage/$1';
$route['editnow'] = 'process/editnow';
$route['logout'] = 'process/logout';

$route['admin-home'] = 'adminprocess/adminpostingpage';
$route['post-requests'] = 'adminprocess/postrequests';
$route['highlighted-posts'] = 'adminprocess/highlightedposts';

$route['404_override'] = '';
$route['translate_uri_dashes'] = false;
