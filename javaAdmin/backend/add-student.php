<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 4/12/18
 * Time: 7:00 AM
 */
include '../../vendor/autoload.php';
include "../../init.php";

use App\Auto\Mems\Validation;
use App\Auto\Mems\Redirect;
$validator = new Validation;

$validator->check($_POST,[
    'student_name' => ['required'=>true,'min'=>3],
    'department'  =>  ['required' => true],
    'matric_number' => ['required' => true,'unique'=>'students']
]);

if ($validator->passed()){
    //add the details to the db
    $student = new \App\Auto\Student();
    $student->name = $_POST['student_name'];
    $student->matric_number = $_POST['matric_number'];
    $student->department = $_POST['department'];
    if ($student->save()){
        Redirect::to('../dashboard.php');

    }else{
        echo 'coud save student ';
    }
}else{
    Redirect::to('../add-student.php');
}