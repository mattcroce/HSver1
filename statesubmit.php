<?php	
	include("connection.php");
	
	if($_POST['submit']=="Submit State") {
	
		$query="SELECT * FROM `network` WHERE `StateCode` = '".mysqli_real_escape_string($link, $_POST['stateInput'])."'";
		
		$result = mysqli_query($link,$query);
		$row=mysqli_fetch_array($result);
		
		if ($row) {		
		$row_count = mysqli_num_rows($result);
		alert($row_count);
		
	} else
		echo "Please enter a state";
	} 
		

?>