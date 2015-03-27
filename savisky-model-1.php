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

	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      function drawVisualization() {
  // Create and populate the data table.
  var data = google.visualization.arrayToDataTable([
    ['Plan Name', 'Premium', 'OOP Spending'],
    ['UPMC Catastrophic',  3358.56,    500],
    ['UPMC Advantage Bronze',  3892.56,    500],
    ['UPMC Advantage Silver',  4358.88,    500]
  ]);

  // Create and draw the visualization.
  new google.visualization.ColumnChart(document.getElementById('chart_div')).
      draw(data,
           {title:"Annual Healthcare Spending by Plan",
            width:600, height:400,
            vAxis: {title: "Dollars"}, isStacked: true,
            hAxis: {title: "Plan Name"}}
      );
}

google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawVisualization);

    </script>
	
	<link rel="stylesheet" type="text/css" href="index.css">
	
	<title>Follow The Sage</title>
</head>


<body>

<!--	<div class="container-fluid">
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
			
			<button name="newPlan"> Add a plan to your calculator </button>
			</br></br>
			<button name="submitPlans"> Follow The Sage! </button>
			</form>
			</div>
		</div>
		</div>
	</div> -->
	
	<div class="container-fluid">
		<div class="starter-template">
		<div class="col-md-6 col-md-offset-3">
			<div id="planDataSubmit">
				</br></br>
				<p> Tell us how much you think you might spend on healthcare this year, not including your insurance premiums:</p></br>
				<input type="textbox" name="medSpend" id="medSpend"/>
				</br></br>					
				<button id="medSpendSubmit" name="medSpendSubmit"> Submit </button>				
			</div>
			<br/>
			<br/>
		</div>
		</div>
	</div>
	
	<div id="chart_div"></div>
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" language="javascript">
	//$(document).ready(function () {
	//	$('button[name="newPlan"]').on('click', function(){
	//		var table = $('table[name="planCompare"]');
	//		var tdPlanName = $('<input />', {'class' : 'form-control formInput', 'type': 'text'});
	//		var tdPremium = $('<input />', {'class' : 'form-control formInput', 'type' : 'text'});
	//		var tdDeductible = $('<input />', {'class' : 'form-control formInput', 'type' : 'text'});
	//		var tdCatLim = $('<input />', {'class' : 'form-control formInput', 'type' : 'text'});
	//		var tdCopay = $('<input />', {'class' : 'form-control formInput', 'type' : 'text'});
	//		var tdCoinsure = $('<input />', {'class' : 'form-control formInput', 'type' : 'text'});
	//		var tdHsaFsa = $('<input />', {'class' : 'form-control formInput', 'type' : 'text'});
	//		
	//		newRow(table,[tdPlanName,tdPremium,tdDeductible,tdCatLim, tdCopay, tdCoinsure, tdHsaFsa]);
	//		});
	//		});
			
	//function newRow($table,cols){
	//	$row = $('<tr/>');
	//	for(i=0; i<cols.length; i++){
	//		$col = $('<td/>');
	//		$col.append(cols[i]);
	//		$row.append($col);
	//		}
	//	$table.append($row);
	//}
		
	$(document).ready(function(){
		$('#medSpend').keypress(function(e){
        if(e.keyCode==13)
        $('#medSpendSubmit').click();
    	});
    	});
    
    $("button#medSpendSubmit").click(function() {
        var inp = $('#medSpend').val();
        var numberRegex = /^[+-]?\d+(\.\d+)?([eE][+-]?\d+)?$/;
        if(jQuery.trim(inp).length == 0) {
          var errMsgBlank
          errMsgBlank = "Cannot be blank. Please enter a number.";
          alert(errMsgBlank);
        } 
        else if(!(numberRegex.test(inp))) {
          var errMsgNum
          errMsgNum = "Must be a number. Please enter a number.";
          alert(errMsgNum);
        }
        else if((jQuery.trim(inp).length > 0) && (numberRegex.test(inp))) {
		var data = google.visualization.arrayToDataTable([
    ['Plan Name', 'Premium', 'OOP Spending'],
    ['UPMC Catastrophic',  3358.56,    parseInt($("#medSpend").val())],
    ['UPMC Advantage Bronze',  3892.56,    parseInt($("#medSpend").val())],
    ['UPMC Advantage Silver',  4358.88,    parseInt($("#medSpend").val())]
  ]);

  // Create and draw the visualization.
  new google.visualization.ColumnChart(document.getElementById('chart_div')).
      draw(data,
           {title:"Annual Healthcare Spending by Plan",
            width:600, height:400,
            vAxis: {title: "Dollars"}, isStacked: true,
            hAxis: {title: "Plan Name"}}
      );
      $('#medSpend').val('');
	}
	});

google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawVisualization);
						
</script>	


</body>
</html>