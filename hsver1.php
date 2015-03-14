
<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="HealthSage">
	<meta name="author" content="HealthSage">
    
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/themes/smoothness/jquery-ui.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
		    
	<link href="http://fonts.googleapis.com/css?family=Goudy+Bookletter+1911" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Raleway:100" rel="stylesheet" type="text/css">
	
	<link rel="stylesheet" type="text/css" href="index.css">
	
	<title>Follow The Sage</title>
</head>

<html>
<body>


	<div class="container-fluid">
		<div class="starter-template">
		<div class="col-md-6 col-md-offset-3">
			<br/>
			<div id="targetState">
				<p> What state and county do you live in?</p>
				<br/>
				<form method="post" role="form" id="stateForm" action="statesubmit.php">
				<input type="text" name="stateSubmit" placeholder="Enter your two-letter state abbreviation"/>
				<input type="text" name="countySubmit" placeholder="Enter your county"/>
				<input type="submit" name="submit" value="Submit"/>
				</form>
				
			</div>
			<br/>
			<br/>
		</div>
		</div>
	</div>
</body>
</html>