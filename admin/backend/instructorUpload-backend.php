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
use App\Auto\Instruction;

if(!Session::exists('admin')){
    Redirect::to('../login.php');
}
$validate = new Validation();
if(Input::exists()){
    $validate->check($_POST,[
        'course'=> ['required'=> true],
        'detail' => ['required'=> true]
    ]);
    if($validate->passed()){
        $instruct = new Instruction();
        $instruct->course_id = Input::get('course');
        $instruct->details = Input::get('detail');
        $instruct->admin_id = Session::get('admin')->id;
        $instruct->save();
        Redirect::to('../dashboard.php');
    }else{
        echo 'enter valid input';
    }
}