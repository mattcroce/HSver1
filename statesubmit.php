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

	//$mysqli = new mysqli(localhost, root,
	//root, HSver1);
 	//if (mysqli_connect_error()) {
 	//die('Connect Error (' . mysqli_connect_errno(). ') ' . mysqli_connect_error());
 	//}
 	//echo 'Connected successfully.';
 	//$mysqli->close();

	$userState=$_REQUEST['stateSubmit'];
	$userCounty=$_REQUEST['countySubmit'];
	$userBenefit=$_REQUEST['benefitSubmit'];

	print "You live in $userCounty, which is located in: $userState<br>";

	echo "<table border='1' style='border-collapse: collapse;border-color: silver;'>";
	echo "<tr style='font-weight: bold;'>";
	echo "<td width='100' align='center'>Unique Plan Ids</td>";
	echo "</tr>";

 	$link = mysqli_connect("localhost", "risingre_example", "example1", "risingre_exampledb");
 	
 	$query = "SELECT COUNT(DISTINCT (StandardComponentId))  FROM `benefitsCostSharing` WHERE `StateCode` = '$userState'";
 			//SELECT `County`, `ServiceAreaiId` FROM `service_area` WHERE `fips` = `County`;
			//"SELECT `serviceareaid` from `plan_attributes` WHERE `serviceareaid` FROM `service_area` = `serviceareaid` AS user_serviceareaid`";
			
	$result = mysqli_query($link, $query);
	while ($row = mysqli_fetch_array($result)) {
	echo "<tr>";
	echo "<td align='center' width='200'>" . $row['COUNT(DISTINCT (StandardComponentId))'] . "</td>";
	echo "</tr>";  
	} 
	echo "</table>";
?>


</p>
</div>
</div>
</div>

</body>