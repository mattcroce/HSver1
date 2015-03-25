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
			<div id="planInfo">
				<form method="post" role="form" id="planInfo" action="savisky-model-2.php">
				<label for "premiumSubmit"> Bi-Weekly Premium: </label>
				<input type="text" name="premiumSubmit" size="30" placeholder="Bi-weekly premium amount"/></br></br>
				<label for "deductibleSubmit"> Annual Deductible: </label>
				<input type="text" name="deductibleSubmit" size="30" placeholder="Annual deductible amount"/></br></br>
				<label for "catastrophicLimit"> Catastrophic Limit: </label>
				<input type="text" name="catastrophicLimitSubmit" size="30" placeholder="Annual catastrophic limit"/></br></br>
				<label for "copayPercent"> Copay Percentage: </label>
				<input type="text" name="copayPercentSubmit" size="30" placeholder="Copay percentage, if any"/></br></br>
				<label for "coInsurePercent"> Coinsurance Percentage: </label>
				<input type="text" name="coInsurePercentSubmit" size="30" placeholder="Coinsurance percentage, if any"/></br></br>
				<label for "hsaFSAContrib"> HSA/FSA Employer Contribution: </label>
				<input type="text" name="hsaFSAContribSubmit" size="43" placeholder="Employer's monthly contribution amount, if any"/></br></br>
				<br/><br/>
				
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