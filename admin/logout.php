<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 4/29/18
 * Time: 9:31 AM
 */

include '../vendor/autoload.php';
include "../init.php";
use App\Auto\Mems\Session;
use App\Auto\Mems\Redirect;
if (!Session::exists('login')){
    Redirect::to('login.php');
}
Session::delete('login');
Session::delete('admin');
Redirect::to('login.php')

?>