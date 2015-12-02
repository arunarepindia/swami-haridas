<?php
	$count = 1;
	$connection = mysql_connect('localhost','epagemak_shari','#@R!_d0s') or die ('Not connected');
	mysql_select_db('epagemak_sharidas',$connection) or die('something went wrong');
	$query = "SELECT * FROM `invited`";
	$execute = mysql_query($query);
	$output = "";
	$output .= '"Serial",';
	$output .= '"Name",';
	$output .= '"Email",';
	$output .= '"Mobile",';
	$output .= '"Invite To",';
	$output .= '"Time",';
	$output .="\n";
	while($fetch = mysql_fetch_array($execute)){
		$serial = $fetch['serial'];
		$name = $fetch['name'];
		$email = $fetch['email'];
		$mobile = $fetch['mobile'];
		$emailI = $fetch['emailI'];
		$time = $fetch['timestamp'];
	    $output .= '"'.$count.'",';
	    $count++;
		$output .= '"'.$name.'",';
		$output .= '"'.$email.'",';
		$output .= '"'.$mobile.'",';
		$output .= '"'.$emailI.'",';
		$output .= '"'.$time.'",';
		$output .="\n";
	}
	$filename = "Sangeet-Nritiya-Mahsotsava-Invites-Dump-".date('d-m-Y').".csv";
	header('Content-type: application/csv');
	header('Content-Disposition: attachment; filename='.$filename);
	echo $output;
	exit;
?>