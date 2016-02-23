<?php
	session_start();

	$db = new mysqli("127.0.0.1", "administrator", "E6Z570tbYF4plNEhabIF", "GolanBrothers");
	if (!$db) {die('Could not connect: ' . mysql_error());}

	$data = file_get_contents("php://input");
 	$objdata = json_decode($data);
 	$postID = $objdata ->postID;
	error_log('getComments is getting called');
	error_log($postID);

	$query = "SELECT * FROM comments WHERE messageID = '$postID'";
	$query .= "ORDER BY datePosted;";
	$res = $db->query($query);
	$array = $res->fetch_all();
	error_log($array[0][1]);
	echo json_encode($array);
	//$array = $res->fetch_all();
	//echo json_encode($array);

?>