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
<body>
<div class="container-fluid">
<div class="starter-template">
<div class="col-md-6 col-md-offset-3">
<p>
<?php	
	
	$userState=$_REQUEST['stateSubmit'];
	print "You live in the following state: $userState<br>";
	
	$link = mysqli_connect("localhost", "risingre_example", "example1", "risingre_exampledb");
	$query = "SELECT `fips`, `state`, `county` FROM `fips` WHERE `state` = '$userState'";
	$result = mysqli_query($link, $query);
	while ($row = mysqli_fetch_array($result)) {
		echo $row['fips'] . ': ' . $row['state'] . ' ' . $row['county'];
		echo '<br />';
		}
	

?>
</p>
</div>
</div>
</div>

</body>