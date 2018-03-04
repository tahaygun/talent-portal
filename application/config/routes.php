<?php
defined('BASEPATH') or exit('No direct script access allowed');
$route['default_controller'] = 'process';
$route['homepage'] = 'process';
$route['joinpage'] = 'process/openjoinpage';
$route['register'] = 'process/register';
$route['login'] = 'process/login';
$route['mypage'] = 'process/openmainpage';
$route['search'] = 'process/search';
$route['details'] = 'process/opendetailspage';
$route['logout'] = 'process/logout';

$route['admin-home'] = 'adminprocess/adminpostingpage';
$route['post-requests'] = 'adminprocess/postrequests';
$route['highlighted-posts'] = 'adminprocess/highlightedposts';

$route['404_override'] = '';
$route['translate_uri_dashes'] = false;
