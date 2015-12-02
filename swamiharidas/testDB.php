<?php
	// $connection = mysql_connect('localhost','epagemak_shari','#@R!_d0s') or die ('Not connected');
	
	$connection = mysql_connect('localhost','epagemak_shari','#@R!_d0s');
	mysql_select_db('epagemak_sharidas',$connection) or die('something went wrong');
	$query = "SELECT * FROM `invites`";

	$execute = mysql_query($query);
	if (!$execute) { // add this check.
	    die('Invalid query: ' . mysql_error());
	} else {
		echo "great";
		while($fetch = mysql_fetch_array($execute)){
			echo "<pre>";
			var_dump($fetch);
			echo "</pre>";
		}
	}
?>