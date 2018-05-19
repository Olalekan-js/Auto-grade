<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 4/24/18
 * Time: 10:47 PM
 */
include 'vendor/autoload.php';

use App\Auto\Admin;
use Illuminate\Container\Container;
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;
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
/*Capsule::schema()->create('questions', function (Blueprint $table){
    $table->increments('id');
    $table->longText('question');
    $table->integer('semester_id')->default(0);
    $table->integer('course_id')->default(0);
    $table->longText('answer')->nullable();
    $table->integer('duration')->nullable();
    $table->string('q_type')->nullable();
    $table->timestamps();
});

Capsule::schema()->create('results', function (Blueprint $table){
    $table->increments('id');
    $table->integer('student_id');
    $table->integer('course_id');
    $table->double('score')->default(0);
    $table->timestamps();
});

Capsule::schema()->create('admin', function (Blueprint $table){
   $table->increments('id');
   $table->string('instructor_id')->default(0);
   $table->string('name')->nullable();
   $table->integer('type')->default();
   $table->string('password')->nullable();
   $table->timestamps();
});

Capsule::schema()->create('instructions', function (Blueprint $table){
   $table->increments('id');
   $table->string('details');
   $table->integer('course_id')->default(0);
   $table->integer('admin_id')->default(0);
   $table->timestamps();
});

Capsule::schema()->create('students', function (Blueprint $table){
   $table->increments('id');
   $table->integer('matric_number');
   $table->string('name')->nullable();
   $table->integer('department_id');
   $table->timestamps();
});

Capsule::schema()->create('departments',function (Blueprint $table){
   $table->increments('id');
   $table->string('name')->nullable();
   $table->string('code');
   $table->timestamps();
});

Capsule::schema()->create('courses',function (Blueprint $table){
   $table->increments('id');
   $table->string('name')->nullable();
   $table->string('code')->nullable();
   $table->timestamps();
});

$departments = [
    'mth'=>'Mathematics',
    'chm' => 'Chemistry',
    'bch' => 'Biochemistry',
    'msc' => 'Material Science',
    'btn' => 'Botany',
    'edu' => 'Education',
    'mee' => 'Mechanical Engineering',
    'mbc' => 'Microbiology',
    'csc' => 'Computer Science and Engineering',
    'eee' => 'Electrical and Electronics Engineering',
    'cve' => 'Civil Engineering',
    'geo' => 'Geology',
    'fst' => 'Food Science and Technology',
    'bld' => 'Building',
    'phy' => 'Physics',
    'esm' => 'Estate Management',
    'zoo' => 'Zoology',
    'qts' => 'Quantity Survey',
    'age' => 'Agriculture Science and Engineering',
    'arc' => 'Architecture',
    'che' => 'Chemical Engineering'
];

foreach ($departments as $code => $dept){

    $name = new \App\Auto\Department();
    $name->code = $code;
    $name->name = $dept;
    $name->save();
}