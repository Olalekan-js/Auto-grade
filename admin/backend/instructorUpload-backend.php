<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 4/12/18
 * Time: 7:08 AM
 */
include '../../vendor/autoload.php';
include "../../init.php";

use App\Auto\Mems\Validation;
use App\Auto\Mems\Redirect;
use App\Auto\Mems\Hash;
use App\Auto\Mems\Input;
use App\Auto\Mems\Session;
$validate = new Validation();

$validate->check($_POST,[]);

if ($validate->passed()){

}else{

}