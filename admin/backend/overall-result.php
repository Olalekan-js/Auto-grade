<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 4/12/18
 * Time: 7:06 AM
 */
include '../../vendor/autoload.php';
include "../../init.php";

use App\Auto\Mems\Validation;
use App\Auto\Mems\Redirect;
use App\Auto\Student;
$validate = new Validation();
$validate->check($_POST, [
    'department'  => ['required'=>true],
    'course'  => ['required'=>true]
]);
if ($validate->passed()){
    //select results
    $student = Student::where('department',$_POST['department'])->get();
    $nme = Student::with('results')->where('department', $_POST['department'])->get();
    print_r(json_encode($nme));
}else{

}
