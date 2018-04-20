<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 4/20/18
 * Time: 9:24 PM
 */
include "../vendor/autoload.php";
include '../init.php';
use App\Auto\Mems\Validation;
use App\Auto\Student;
use App\Auto\Mems\Redirect;
use App\Auto\Mems\Input;
use App\Auto\Mems\Session;
if (Input::exists('post')){

    $validation = new Validation();
    $validation->check($_POST,[
        'matric' => ['required'=>true],
        'code_class' => ['required'=>true]
    ]);
    if ($validation->passed()){
        $student = Student::where('matric_number',Input::get('matric'));
        if ($student->exists()){
            Session::put('login',true);
            Session::put('student', $student->get()->first());
            Session::put('code', Input::get('code_class'));
            if (Input::get('code_class')== 'java-code'){
                Redirect::to('../java/');
            }elseif(Input::get('code_class') == 'python-code'){
                Redirect::to('../python');
            }
        }else{
         Redirect::to('student.php');
        }
    }else{
        Session::put('errors',$validation->errors());
        Redirect::to('student.php');
    }
}else{
    echo 'no input';
}