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
/*Capsule::schema()->create('admin',function (Blueprint $blueprint){
    $blueprint->increments('id');
    $blueprint->string('instructor_id');
    $blueprint->string('name')->nullable();
    $blueprint->string('password');
    $blueprint->timestamps();
});*/
/*Capsule::schema()->create('instructions',function (Blueprint $table){
    $table->increments('id');
    $table->text('details');
    $table->integer('course_id')->nullable();
    $table->integer('admin_id');
    $table->timestamps();
});*/
Capsule::schema()->create('questions', function (Blueprint $table){
    $table->increments('id');
    $table->longText('question');
    $table->integer('semester_id');
    $table->string('course')->default('java');
    $table->longText('answer')->nullable();
    $table->integer('duration')->nullable();
    $table->timestamps();
});