<!DOCTYPE html>

<html lang="en">

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
			<br/>
			<div id="howManyPlans">
				<label for "howManyPlans"> How many plans would you like to compare? </label>
				<input type="text" name="howManyPlans" id="planNum" value ="" size="15" placeholder="Enter a number"/>
				</br></br>
				<input type="submit" id="howManySubmit" name="howManySubmit" value="Submit"/>
			</div>
		</div>
		</div>
	</div>
	
	<div class="container-fluid">
		<div class="starter-template">
		<div class="col-md-6 col-md-offset-3">
			<div id="planInfo">
				<form method="post" role="form" id="planInfoForm">
				<!-- <label for "premiumSubmit"> Bi-Weekly Premium: </label>
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
				<input type="text" name="hsaFsaContribSubmit" size="43" placeholder="Employer's monthly contribution amount, if any"/></br></br>
				<br/><br/> 
				
				<input type="submit" id="userSubmit" name="submit" value="Submit"/>  -->
				</form>
				
			</div>
			<br/>
			<br/>
		</div>
		</div>
	</div>

<script type="text/javascript" language="javascript">
	$(document).ready(function() {
		$('#howManySubmit').keypress(function(e) {
		if(e.keyCode==13)
		$('#howManySubmit').click();
		});
		});	
	$(document).ready(function () {
		$('#howManySubmit').click(function() {
			var howMany=$('#planNum').val();
			var numberRegex = /^[+-]?\d+(\.\d+)?([eE][+-]?\d+)?$/;
			if(jQuery.trim(howMany).length == 0) {
				var errMsgBlank;
				errMsgBlank = "Cannot be blank. Please enter a number.";
				alert(errMsgBlank);
			}
			else if(!(numberRegex.test(howMany))) {
				var errMsgNum;
				errMsgNum = "Must be a number. Please enter a number.";
				alert(errMsgNum);
			}
			else if((jQuery.trim(howMany).length > 0) && (numberRegex.test(howMany))) {
				$("#howManyPlans").fadeOut( 'slow');
			}//GOOD
			document.write('<table border="1">');
			for(i=0;i<howMany;i++){
				document.write('<tr><td>' "Plan number: " + i '</td></tr>');
			}

				//$('<div id="planInfoSubmit" />').fadeIn('slow').appendTo('#planInfoForm');
				//var newPremiumLabel=document.createElement("label");
				//var premiumLabel=document.createTextNode("Bi-Weekly Premium: " + i);
				//newPremiumLabel.appendChild(premiumLabel);
				//document.getElementById("planInfoForm").appendChild(newPremiumLabel);
				//$('<div><input type="text" id="premiumSubmit" class="field" name="premiumSubmit" value="" /></div>').fadeIn('slow').appendTo('#planInfoSubmit');
				//$('<div><br/><br/></div>').fadeIn('slow').appendTo('#premiumSubmit');
			//	}
			//	$('<div><input name="premiumSubmit" type="button" id="premiumSubmit" class="submit" value="Submit" /></div>').fadeIn('slow').appendTo('#planInfo');
			//$("#planInfo").delay( 800 ).fadeIn( 'slow');//GOOD
			//$('#tickSub').click (function() {
			//	$("#container2").fadeOut('slow');//GOOD
			//	var answers = [];
			//	$.each($('.field'),function() {
			//		answers.push($(this).val());
			//	});
			//	if(answers.length == 0) {
			//		answers="none";
			//	}
			//	var numAns = answers.length;

			//	for(i=0;i<inp;i++) {
			//	$.each(answers, function(index, value) {
			//		alert(value);
			//	});
			//	return false;
			//	}
		});		
			});
			

</script>	


</body>
</html>