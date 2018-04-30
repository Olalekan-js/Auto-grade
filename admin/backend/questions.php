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
        'semester' => ['required' => true],
        'duration' => ['required'],
        'q_type' => ['required'=> true]
    ]);
    if ($validator->passed()) {
        $question = new \App\Auto\Question();
        $question->course = Input::get('course');
        $question->question = Input::get('question');
        $question->answer = Input::get('answer');
        $question->semester_id = Input::get('semester');
        $question->duration = Input::get('duration');
        $question->q_type = Input::get('q_type');
        $question->save();
        Redirect::to('../dashboard.php');
    }
}
