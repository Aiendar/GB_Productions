<?php
	session_start();

	$db = new mysqli("127.0.0.1", "administrator", "E6Z570tbYF4plNEhabIF", "GolanBrothers");
	if (!$db) {die('Could not connect: ' . mysql_error());}

	$data = file_get_contents("php://input");
 	$objdata = json_decode($data);
 	$postID = $objdata ->postID;
	error_log('numComments... I hate you');
	error_log($postID);

	$query = "SELECT * FROM comments WHERE messageID = '$postID'";
	$query .= "ORDER BY datePosted;";
	$res = $db->query($query);
	$NumRows = $res->num_rows;
	error_log($NumRows);
	echo json_encode($NumRows);
	//$array = $res->fetch_all();
	//echo json_encode($array);

?>