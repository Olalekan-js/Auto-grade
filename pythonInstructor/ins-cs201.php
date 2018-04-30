<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Add Student- AutoGrade</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />

    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">

</head>
<body>

<div class="wrapper">
	<div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    AutoGrade
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="ins-dashboard.php">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li data-toggle="collapse" data-target="#submenu">
                    <a href="#" style="margin: 0;
    line-height: 30px;
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase"><i class="ti-user"></i>Student Management</a>
                    <ul id="submenu" class="collapse">
                        <li class="hide-dot"><a href="ins-add-student.php">Add Student</a></li>
                        <li class="hide-dot"><a href="ins-view-class.php">View Class</a></li>
                        <li class="hide-dot"><a href="ins-overall-result.php">View Result</a></li>
                    </ul>

                </li>
                <li class="active" data-toggle="collapse" data-target="#subcourse">
                    <a href="#" style="margin: 0;
    line-height: 30px;
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase"><i class="ti-book"></i>Course Management</a>
                    <ul id="subcourse" class="collapse">
                        <li class="hide-dot"><a href="ins-upload-instruction.php">Upload Instruction</a></li>
                        <li class="hide-dot active"><a href="ins-cs201.php">CSC 201</a></li>
                        <li class="hide-dot"><a href="ins-cs202.php">CSC 202</a></li>
                    </ul>

                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="ins-cs201.php">Upload Question(s)</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-book"></i>
                                <p>Java Class</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ti-book"></i>
                                <p>Python Class</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Upload CSC 201 Question(s)</h4>
                            </div>
                            <div class="content">
                                <form action="" method="">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <label>Question 1</label>
                                                <textarea type="text" rows="4" class="form-control border-input" placeholder="Type course instruction here..." required>

                                                </textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Upload</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><b>Question Preview</b></h4>
                                <p class="category">Preview the question before final submission</p>
                            </div>
                            <div class="content">
                                <div><b>Course:</b> CSC 201</div>
                                <div><b>Instruction:</b></div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.
                                    Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent
                                </div>
                                <div class="text-right"><button class="btn btn-success">Edit</button> <button class="btn btn-success">Submit</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</html>
