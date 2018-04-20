<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 4/14/18
 * Time: 8:00 AM
 */
include 'vendor/autoload.php';

use App\Auto\Student;
use Illuminate\Container\Container;
use Illuminate\Database\Capsule\Manager as Capsule;
$capsule = new Capsule;
$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'autograde',
    'username'  => 'root',
    'password'  => 'akeebdeen',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();
/*Student::create([
    'name' => 'Akeeb',
    'matric_number' => 'css/2012/020',
    'department' => 'computer science',
    'result' => 34
]);*/
/*$student = new Student();
$student->name = 'Akeeb Ismail';
$student->matric_number = 'MTH/2012/020';
$student->department = 'Engineering';
$student->result = 56;
$student->save();*/