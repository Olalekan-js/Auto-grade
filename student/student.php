<?php
include '../vendor/autoload.php';
include "../init.php";
use App\Auto\Mems\Session;
use App\Auto\Mems\Redirect;
if (Session::exists('login')){
    Redirect::to('../java/');
}
?>
<!Doctype html>
<html lang ="en">

<head>
    <title>Student Login</title>
    <meta http-equiv ="content-type" content ="text/html; charset =utf-8">
    <link rel ="stylesheet" href ="css/phpFormStyle.css">
</head>
<body>
<form action ="login.php" method ="post">
    <fieldset>

        <legend>Student Login Page</legend>
        <label for ="matric">Registration Number</label>
        <input type ="text" name ="matric" id="matric" required><br>

        <label for ="selectClass">Select Class</label>
        <select id ="selectClass" name="code_class">
            <?php
            $classes = \App\Auto\Classes::orderBy('name')->get();
            foreach ($classes as $class){
            ?>
            <option value="<?= $class->id ?>"><?= $class->name ?></option>
            <?php } ?>
        </select>
        <input type ="submit" name ="login" value ="Login">

    </fieldset>

</form>

</body>

</html>