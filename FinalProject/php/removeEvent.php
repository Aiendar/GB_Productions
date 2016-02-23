<?php
	$data = file_get_contents("php://input");
 	$objdata = json_decode($data);
 	//$output = (string)$objdata;
 	$thisEvent = $objdata->thisEvent;
 	$thisDate = $objdata ->thisDate;
 	error_log($thisEvent);
 	$db = new mysqli("127.0.0.1", "administrator", "E6Z570tbYF4plNEhabIF", "GolanBrothers");
	if (!$db) {die('Could not connect: ' . mysql_error());}
	$query = "DELETE FROM calendar ";
	$query.= "WHERE eventname = '$thisEvent' AND theDate = '$thisDate'";
	$db->query($query)
		or die("I'm dead". $db->error);
	echo 'success';
?>