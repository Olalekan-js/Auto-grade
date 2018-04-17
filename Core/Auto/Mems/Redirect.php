<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 04/11/18
 * Time: 8:45 AM
 */
namespace App\Auto\Mems;
class Redirect{
    public static function to($location = null){
        if ($location){
            if (is_numeric($location)){
                switch ($location){
                    case 404:
                        header('HTTP/1.0 404 Not Found');
                        include 'inc/errors/404.php';
                        break;
                }
            }
            header('Location: '.$location);
            exit();
        }
    }
}