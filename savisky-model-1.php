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
			<div id="planCompareTable">
				<table name="planCompare">
					<tr>
						<th>Plan Name</th>
						<th>Bi-Weekly Premium</th>
						<th>Annual Deductible</th>
						<th>Catastrophic Limit</th>
						<th>Copay Percentage</th>
						<th>Coinsurance Percentage</th>
						<th>HSA/FSA Contribution</th>
					</tr>
				</table>
			</div>
			<button name="newPlan"> Add a plan to your calculator </button>
			</br></br>
			<form method="post" name="submitPlans" id="submitPlans" action="savisky-model-2.php">
			<input type="submit" name=plansDone" id="plansDone" value="I'm done - let's go!"/>
			</form>
		</div>
		</div>
	</div>
	
	<div class="container-fluid">
		<div class="starter-template">
		<div class="col-md-6 col-md-offset-3">
			<div id="planDataSubmit">
				</br></br>
				<p> Ok - looks like we've got enough information to get started.</p>
				<p> Whenever you're ready, click the "Submit" button to Follow The Sage.</p>
				</br></br>					
				<input type="submit" id="userSubmit" name="submit" value="Submit"/>				
			</div>
			<br/>
			<br/>
		</div>
		</div>
	</div>

<script type="text/javascript" language="javascript">
	//$(document).ready(function() {
	//	$('#addPlan').keypress(function(e) {
	//	if(e.keyCode==13)
	//	$('#addPlan').click();
	//	});
	//	});	
	$(document).ready(function () {
		$('button[name="newPlan"]').on('click', function(){
			var table = $('table[name="planCompare"]');
			var tdPlanName = $('<input />', {'class' : 'form-control formInput', 'type': 'text'});
			var tdPremium = $('<input />', {'class' : 'form-control formInput', 'type' : 'text'});
			var tdDeductible = $('<input />', {'class' : 'form-control formInput', 'type' : 'text'});
			var tdCatLim = $('<input />', {'class' : 'form-control formInput', 'type' : 'text'});
			var tdCopay = $('<input />', {'class' : 'form-control formInput', 'type' : 'text'});
			var tdCoinsure = $('<input />', {'class' : 'form-control formInput', 'type' : 'text'});
			var tdHsaFsa = $('<input />', {'class' : 'form-control formInput', 'type' : 'text'});
			
			newRow(table,[tdPlanName,tdPremium,tdDeductible,tdCatLim, tdCopay, tdCoinsure, tdHsaFsa]);
			});
			});
			
		function newRow($table,cols){
			$row = $('<tr/>');
			for(i=0; i<cols.length; i++){
				$col = $('<td/>');
				$col.append(cols[i]);
				$row.append($col);
				}
			$table.append($row);
		}
		
		
						
</script>	


</body>
</html>
