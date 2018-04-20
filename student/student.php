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
        <input type ="text" name ="matric" value="<?= $_POST['matric']?>" id="matric" required><br>

        <label for ="selectClass">Select Class</label>
        <select id ="selectClass" name="code_class">
            <option value="java-code">Java Class</option>
            <option value="python-code">Python Class</option>
        </select>
        <input type ="submit" name ="login" value ="Login">

    </fieldset>

</form>

</body>

</html>