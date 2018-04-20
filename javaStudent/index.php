<!Doctype html>
<html lang ="en">

	<head>
	
		<title>Student Login</title>
		<meta http-equiv ="content-type" content ="text/html; charset =utf-8">
		<link rel ="stylesheet" href ="css/phpFormStyle.css">
	
	</head>
	<body>
	
		<form action ="" method ="post">
		
			<fieldset>
				
				<legend>Student Login Page</legend>
			
				<label for ="firstName">First Name</label>
				<input type ="text" name ="firstName" id ="firstName" required autofocus><br>

				<label for ="lastName">Last Name</label>
				<input type ="text" name ="lastName" id ="lastName" required><br>
				
				<label for ="matricNo">Registration Number</label>
				<input type ="text" name ="matricNo" id ="matricNo" required><br>

				<label for ="selectClass">Select Class</label>
				<select id ="selectClass">
					<option>Java Class</option>
					<option>Python Class</option>
				</select>

				<input type ="submit" name ="login" value ="Login">				
			
			</fieldset>
			
		</form>
	
	</body>

</html>