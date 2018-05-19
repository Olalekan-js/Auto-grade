<?php
include "../vendor/autoload.php";
include "../init.php";

use App\Auto\Mems\Session;
use App\Auto\Mems\Redirect;

if (!Session::exists('admin')){
    Session::delete('login');
    Redirect::to('login.php');
}

Session::delete('admin');
Session::delete('login');
Redirect::to('login.php');

