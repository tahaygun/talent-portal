<?php
defined('BASEPATH') or exit('No direct script access allowed');
$route['default_controller'] = 'process';
$route['homepage'] = 'process';
$route['joinpage'] = 'process/openjoinpage';
$route['register'] = 'process/register';
$route['login'] = 'process/login';
$route['mainpageuser'] = 'process/openmainpage';
$route['logout'] = 'process/logout';
$route['404_override'] = '';
$route['translate_uri_dashes'] = false;
