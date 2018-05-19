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
use App\Auto\Classes;
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
            if (Classes::find(Input::get('code_class'))->name== 'Java'){
                Redirect::to('../java/');
            }elseif(Classes::find(Input::get('code_class'))->name == 'Python'){
                Redirect::to('../python');
            }
        }else{
            var_dump($student->first());
         Redirect::to('student.php');
        }
    }else{

        Session::put('errors',$validation->errors());
        Redirect::to('student.php');
    }
}else{
    echo 'no input';
}