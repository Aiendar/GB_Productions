<?php
	session_start();

	$db = new mysqli("127.0.0.1", "administrator", "E6Z570tbYF4plNEhabIF", "GolanBrothers");
	if (!$db) {die('Could not connect: ' . mysql_error());}

	error_log('getPosts is getting called');

	$query = "SELECT * FROM messages ";
	$query .= "ORDER BY datePosted DESC LIMIT 5;";
	$res = $db->query($query);
	$array = $res->fetch_all();
	echo json_encode($array);
	//$array = $res->fetch_all();
	//echo json_encode($array);

?>