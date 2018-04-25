<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 4/12/18
 * Time: 7:10 AM
 */
include '../../vendor/autoload.php';
include "../../init.php";

use App\Auto\Mems\Validation;
use App\Auto\Mems\Redirect;
use App\Auto\Mems\Hash;
use App\Auto\Mems\Input;
use App\Auto\Mems\Session;
if (Input::exists('post')) {
    $validate = new Validation();
    $validate->check($_POST, [
        'instructor_id' => ['required' => true],
        'name' => ['required' => true],
        'password' => ['required'=> true]
    ]);
    if ($validate->passed()) {
        $admin = new \App\Auto\Admin();
        $admin->instructor_id = Input::get('instructor_id');
        $admin->name = Input::get('name');
        $admin->type = 1;
        $admin->password = Hash::make(Input::get('password'));
        $admin->save();
        Redirect::to('../');
    } else {
        Session::put('errors',$validate->errors());
        Redirect::to('../add-instructor.php');
    }
}else{
    Redirect::to('../add-instructor.php');
}