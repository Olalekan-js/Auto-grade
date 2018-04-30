<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 4/12/18
 * Time: 6:40 AM
 */

session_start();
use Illuminate\Database\Capsule\Manager as Capsule;

use Illuminate\Container\Container;
$capsule = new Capsule;
$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'grade',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();
$capsule->setEventDispatcher(new  \Illuminate\Events\Dispatcher(new  Container()));



