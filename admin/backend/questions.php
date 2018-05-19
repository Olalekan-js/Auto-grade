<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 4/29/18
 * Time: 9:03 AM
 */
include '../../vendor/autoload.php';
include "../../init.php";

use App\Auto\Mems\Validation;
use App\Auto\Mems\Redirect;
use App\Auto\Mems\Input;
$validator = new Validation;
use App\Auto\Mems\Session;
if (!Session::exists('admin')){
    Redirect::to('../login.php');
}
if (Input::exists('post')) {


    $validator->check($_POST, [
        'question' => ['required' => true,],
        'course' => ['required' => true],
        'answer' => ['required' => true],
        'duration_hour' => ['required'=>true],
        'duration_min' => ['required'=>true],
        'duration_second' => ['required'=>true],
        'q_type' => ['required'=> true]
    ]);
    if ($validator->passed()) {
        $question = new \App\Auto\Question();
        $question->course_id = Input::get('course');
        $question->question = Input::get('question');
        $question->answer = Input::get('answer');
        $question->duration_hour = Input::get('duration_hour');
        $question->duration_min = Input::get('duration_min');
        $question->duration_second = Input::get('duration_second');
        $question->q_class = Input::get('q_type');
        $question->save();
        Redirect::to('../dashboard.php');
    }else{
        var_dump($validator->errors());
    }
}
