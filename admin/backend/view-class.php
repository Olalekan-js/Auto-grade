<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 4/12/18
 * Time: 7:04 AM
 */
include '../../vendor/autoload.php';
include "../../init.php";

use App\Auto\Mems\Validation;
use App\Auto\Mems\Redirect;
use App\Auto\Student;
$validate = new Validation();

$validate->check($_POST,[
    'department' => ['required'=> true]
]);
if ($validate->passed()){
    $student = Student::where('department','LIKE',$_POST['department'])->get();
    if ($student){
        print_r( json_encode($student));
    }
}else{
    //empty class input
    //Redirect::to('../view-class.php');
    echo 'no input';
}