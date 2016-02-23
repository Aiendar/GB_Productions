<?php
$db = new mysqli("127.0.0.1", "administrator", "E6Z570tbYF4plNEhabIF", "GolanBrothers");
	if (!$db) {die('Could not connect: ' . mysql_error());}

$query = 'SELECT * FROM calendar;';
$res = $db->query($query);
$num_rows = $db->affected_rows;
//echo $num_rows;
//echo '<br>';
//$data = file_get_contents("php://input");
//$objdata = json_decode($data);
//$dater = $objdata->thedater; 
//echo "<script> console.log($dater);</script>";
//fetch_array();
	$array = $res->fetch_all(); 
//for($i = 0; $i < $num_rows; $i++){
	//$row = $array[$i];
	//echo $row[0];
	//echo ' ';
	//echo $row[1];
	//echo '<br>';
//}

echo json_encode($array);


?>