<?php
include '../vendor/autoload.php';
include "../init.php";
use App\Auto\Mems\Session;
use App\Auto\Mems\Redirect;
if (!Session::exists('login')){
    Redirect::to('../student/student.php');
}
?>
<!Doctype>
<html lang ="en">
<head>
    <title>Instruction | Autograde</title>
    <link rel ="stylesheet" href ="css/instruction.css">
</head>

<body>
<h1>General Instruction</h1>
<h1>Welcome ! <?= Session::get('student')->name?></h1>
<p>
<ul>
    <li>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.
    </li>
    <li>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.
    </li>
    <li>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.
    </li>
</ul>
</p>
<p><a href ="editor/index.php">Continue</a></p>
</body>
</html>