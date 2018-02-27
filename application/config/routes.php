<?php
defined('BASEPATH') OR exit('No direct script access allowed');



//$route['blog']            = 'blog';            // daftar blog
$route['blog/post']       = 'blog/post';       // halaman penulisan blog
$route['blog/submit']     = 'blog/submit';     // proses penyimpanan blog
$route['blog/delete/(:any)']   = 'blog/delete/$1';     // untuk menghapus blog
$route['blog/edit/(:any)']   = 'blog/edit/$1'; //untuk edit blog
$route['blog/subedit/(:any)']   = 'blog/subedit/$1'; 
$route['blog/(:any)']     = 'blog/index/$1';         // baca blog dengan blog_id $1

$route['user/signin']     = 'user/signin';     // proses login user
$route['user/signout']    = 'user/signout';    // proses login user
$route['user/reg']        = 'user/register';   // halaman form registrasi user

$route['isi'] = 'welcome/isi';  // Home
$route['user/login'] = 'user/login';  // Login



$route['user/reg_submit'] = 'user/regsubmit';  // proses registrasi user
$route['user/(any:)']     = 'user/$1';         // halaman profil user dengan user_id $1
$route['user/(:any)']     = 'user/profil/$1';  // halaman profil user dengan user_id $1



$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
