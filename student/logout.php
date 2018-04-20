<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 4/20/18
 * Time: 10:18 PM
 */
include '../vendor/autoload.php';
include "../init.php";
use App\Auto\Mems\Session;
use App\Auto\Mems\Redirect;
if (!Session::exists('login')){
    Redirect::to('../student/student.php');
}
Session::delete('login');
Session::delete('student');
Redirect::to('student.php')

?>