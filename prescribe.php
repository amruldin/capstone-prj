

<?php

require "connect.inc.php";





?>

<!DOCTYPE html>
<html>
<head>
	<title>
	</title>
</head>
<body>

	<h2>Doctor:  .....</h2>
	<h2>Patient > ..... </h2>
	<h2>Prescription ID ...... </h2>

	<h3>Date</h3>

	<form name="prescribe" action="" method="POST">

		<input type="text" name="drugType" id="drugType" placeholder="Drug Type" required>

		<br>

		<input type="text" name="drugGenName" id="drugGenName" placeholder="Generic Name" required>

		<br>

		<input type="text" name="drugTradeName" id="drugTradeName" placeholder="drugTradeName" placeholder="drugTradeName">

		<input type="text area" name="instruction" id="instruction" placeholder="instruction">

		<br>

		<input type="number" name="quantity" id="quantity" required>

		<br>

		<input type="submit" name="addDrug" value="Add">


	</form>

</body>
</html>

<?php





	if(isset($_POST['addDrug']))
	{

		// Add to Prescription
		//ID
		//pid
		//dId
		//date
		//pick up By : NUll
		// RecieverID//Null
		//Ties To Paient
		//Issue By
		//Prepared By
		//Refill Allowed
		//Total Cost



		// Add Drugs

		// pcID 
		// phId : Null
		// PId
		//	DrugType
		//	Drug Gen Name
		//	Drug Trade Name
		// Instructions : Null
		// Quantity.    
		// Unit Cost.  Null
 		// Total Cost. Null 





	}






?>