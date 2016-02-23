<?php

	session_start();

	$db = new mysqli("127.0.0.1", "administrator", "E6Z570tbYF4plNEhabIF", "GolanBrothers");
	if (!$db) {die('Could not connect: ' . mysql_error());}


 	//$output = (string)$objdatthisEventa;
	$data = file_get_contents("php://input");
 	$objdata = json_decode($data);
 	//$output = (string)$objdatthisEventa;
 	$theContent = $objdata->comment;
 	$thisDate = $objdata ->date;
 	$postID = $objdata ->postID;
 	error_log($theContent);
 	error_log($thisDate);
 	error_log($postID);

 	$username = $_SESSION['username'];
 	$query = "INSERT INTO comments (content, posterId, messageID) VALUES('$theContent', '$username', '$postID');";

 	$res = $db->query($query);

 	error_log($db->error);


?>