<?php

	session_start();

	$db = new mysqli("127.0.0.1", "administrator", "E6Z570tbYF4plNEhabIF", "GolanBrothers");
	if (!$db) {die('Could not connect: ' . mysql_error());}

	$data = file_get_contents("php://input");
 	$objdata = json_decode($data);
 	//$output = (string)$objdatthisEventa;
 	$theContent = $objdata->theContent;
 	$theTitle = $objdata->theTitle;
 	error_log($theContent);

 	$username = $_SESSION['username'];
 	//$query = "INSERT INTO captainmessages (content, posterId, title) VALUES('$theContent', '$username', '$theTitle');";

 	$stmt = $db->prepare("INSERT INTO captainmessages(content, posterId, title) VALUES(?, ?, ?)");
 	$stmt->bind_param("sss", $theContent, $username, $theTitle);
 	$stmt->execute();
 	$stmt->close();
 	//$query = "INSERT INTO messages (content, posterId) VALUES('$theContent', '$username');";

 	//$res = $db->query($query);

 	
 	error_log($db->error);
 	$db->close();



?>