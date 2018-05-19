<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 4/24/18
 * Time: 10:20 PM
 */
include "../vendor/autoload.php";
include '../init.php';
use App\Auto\Mems\Session;
use App\Auto\Mems\Redirect;
use App\Auto\Mems\Validation;
use App\Auto\Mems\Input;
use App\Auto\Admin;
$_error = [];
if (Session::exists('login')){
    Redirect::to('index.php');
}
if (Input::exists('post')){
    $valid = new Validation;
    $valid->check($_POST,[
        'instructor_id' => ['required'=> true],
        'password' => ['password' => true]
    ]);

    if ($valid->passed()){
        $admin = Admin::where('instructor_id',Input::get('instructor_id'));
        if ($admin->exists()){
            $password = \App\Auto\Mems\Hash::make(Input::get('password'));
            if ($password !== $admin->get()->first()->password){
                $_error['credential'] =  'account not exit';
            }else{
                Session::put('login', true);
                Session::put('admin',$admin->get()->first());
                Redirect::to('index.php');
            }
        }else{
            $_error['credential'] = "no account found ";
        }
    }else{
        $_error = $valid->errors();
    }
}

?>
<!Doctype html>
<html>

<head>

    <title>Admin Page</title>
    <meta http-equiv ="content-type" content ="text/html; charset =utf-8">
    <link rel ="stylesheet" href ="css/phpFormStyle.css">

</head>
<body>

<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">

    <fieldset>

        <legend>Administrator Page</legend>
        <?php
        if (isset($_error)){
            foreach ($_error as $item){
                echo '<div >'.$item.'</div>';
            }
        }
        ?>
        <label for ="name">Instructor ID</label>
        <input type ="text" name ="instructor_id"  id ="name" autofocus required><br>

        <label for ="pass">Password</label>
        <input type ="password" name ="password" id ="pass" required><br>

        <input type ="submit" name ="login" value ="Login">

    </fieldset>

</form>

</body>

</html>
