<?php require 'connect.inc.php'; ?>






<?php

// $prescription = "pc00000001";

// // $_GET['pcId'];

// $getData = "SELECT 'pcId', `pId`, `dId`, `date` FROM `prescription` WHERE 'pcId' = '$prescription'";


// $query = mysql_query("$getData");


// if($query)
// {
// 	echo "success";

// 	while ($tuple = mysql_fetch_array($query))
// 	{
// 		$pId = $tuple['pId'];
// 		$docId = $tuple['dId'];
// 		$date = $tuple['data'];
// 		echo $pId;
// 	}


	


// }
// else
// {
// 	echo mysql_error();

// }



?>

<?php


function search($id)
{

	$queryPresc = "SELECT `pcId`, `pId`, `dId`, `date`, `refillAllowed` FROM `prescription` WHERE pcId = '$id'";


	$run = mysql_query($queryPresc);

	if($run)
	{
		while ($item = mysql_fetch_array($run)) {

			$prescriptionId = $item['pcId'];
			$patientId = $item['pId'];
			$doctorId = $item['dId'];
			$date = $item['date'];
			$refill = $item['refillAllowed'];

			
		}

		echo "<h2> ID: ".$prescriptionId ."</h2>";
		echo "<h3> Date :".$date."</h3>";
		echo "<h3> Refill :".$refill."</h3>";




	}

	search("pc00000001");




	?>

