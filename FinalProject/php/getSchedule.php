<?php

	$db = new mysqli("127.0.0.1", "administrator", "E6Z570tbYF4plNEhabIF", "GolanBrothers");
	if (!$db) {die('Could not connect: ' . mysql_error());}
	$query = 'SELECT * FROM calendar ORDER BY theDate';
	$res = $db->query($query);
	$num_rows = $db->affected_rows;
	$array = $res->fetch_all(); 
	for($i = 0; $i < $num_rows; $i++){
		$row = $array[$i];
	}
	date_default_timezone_set('America/Los_Angeles');
	$datetime = new DateTime('today');

	$allEvents;

	$D1events = array();
	$D2events = array();
	$D3events = array();
	$D4events = array();
	$D5events = array();
	$arraycount = count($array);		
	for($x = 0; $x < $arraycount; $x++){
		$date = date_create_from_format("Y-m-d H:i:s", $array[$x][1]);
		$interval = date_diff($datetime, $date);
		$inv = $interval->format('%d');
		if ($inv <=0){
			array_push($D1events, $array[$x]);
		}
		else if ($inv <=1){
			array_push($D2events, $array[$x]);
		}
		else if ($inv <=2){
			array_push($D3events, $array[$x]);
		}
		else if ($inv <=3){
			array_push($D4events, $array[$x]);
		}
		else if ($inv <=4){
			array_push($D5events, $array[$x]);
		}
	}
	$allEvents = array( $D1events,  $D2events, $D3events,  $D4events,  $D5events); 


	echo json_encode($allEvents);
	//error_log($json);
	//echo $json;
	?>