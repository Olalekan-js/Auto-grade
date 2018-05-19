<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>AutoGrade</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   
    <link href="assets/css/animate.min.css" rel="stylesheet"/>-->

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project 
    <link href="assets/css/demo.css" rel="stylesheet" />-->

    <!--  Fonts and icons
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>-->
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
                <a href="" class="simple-text">
                    AutoGrade
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="dashboard.php">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="active" data-toggle="collapse" data-target="#submenu">
                    <a href="#" style="margin: 0;
    line-height: 30px;
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase"><i class="ti-user"></i>Student Management</a>
                    <ul id="submenu" class="collapse">
                        <li class="hide-dot"><a href="add-student.php">Add Student</a></li>
                        <li class="hide-dot"><a href="view-class.php">View Department</a></li>
                        <li class="hide-dot active"><a href="overall-result.php">View Result</a></li>
                    </ul>

                </li>
                <li data-toggle="collapse" data-target="#subcourse">
                    <a href="#" style="margin: 0;
    line-height: 30px;
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase"><i class="ti-book"></i>Course Management</a>
                    <ul id="subcourse" class="collapse">
                        <li class="hide-dot"><a href="instructionUpload.php">Upload Instruction</a></li>
                        <li class="hide-dot"><a href="questions.php">Add Question</a></li>
                    </ul>

                </li>
                <li>
                    <a href="add-instructor.php">
                        <i class="ti-blackboard"></i>
                        <p>Add Instructor</p>
                    </a>
                </li>
                <li><a href="logout.php" class="btn btn--round">logout</a></li>
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
                    <a class="navbar-brand" href="#">Overall Result</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
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
                    <div class="col-lg-12 col-md-7">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Search</h4>
                            </div>
                            <div class="content">
                                    <div class="row">
                                        <!--<div class="col-md-4">
                                            <div class="form-group">
                                                <label>Semester</label>
                                                <select type="text" class="form-control border-input">
                                                    <option>First semester</option>
                                                    <option>Second semester</option>
                                                </select>
                                            </div>
                                        </div>-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Course</label>
                                                <select type="text" id="coursee" class="form-control border-input">
                                                    <option value="1">CSC 201</option>
                                                    <option value="2">CSC 202</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Departmetnt</label>
                                                <input type="text" id="department" value="department" class="form-control border-input" placeholder="Computer Science and Engineering">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" id="submit" class="btn btn-info btn-fill btn-wd">View Overall Result</button>
                                    </div>
                                    <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><b>Computer Science Department</b> <span>Second Semester CSC 201</span></h4>
                                <p class="category">Below is the list of students in this department</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                    <th>ID</th>
                                    <th>Full Name</th>
                                    <th>Matric Number</th>
                                    <th>Score</th>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Oluwadare Matthew</td>
                                        <td>CSC/2013/100</td>
                                        <td>64</td>
                                    </tr>
                                    </tbody>
                                </table>

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
    <script src="assets/js/jquery.js" type="text/javascript"></script>
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
<script>
    $(function () {
        $("#submit").click(function () {
            //check for input
            var dept = $("#department").val();
            var course = $("#coursee").val();
            if (!dept =='' && course !== ''){
                console.log(name);
                $.ajax({
                    type: 'POST',
                    url: 'backend/overall-result.php',
                    data: {
                        "department" : dept,
                        "course" : course
                    },
                    success: function (response) {
                        displayDataInTable(response);

                    },
                    error: function (error) {
                        console.log('error'+error)
                    }
                });
            }
            else {
                console.log('no input');
            }
        })
    });

    function displayDataInTable(res) {
        const data = JSON.parse(res);
        console.log(data);
        for (let i = 0; i < data.length; i++ ){
            const element = data[i];
            $('#table-body')
                .append(
                    "<tr><td>"+ element.id+ "</td><td>"+element.name+ "</td><td>"
                    +element.matric_number +"</td><td>"element.results.semester +"</td><td><a role='button' class='btn btn-success btn-wd'>View Result</a></td> </tr>"
                );
        }
    }
</script>

</html>
