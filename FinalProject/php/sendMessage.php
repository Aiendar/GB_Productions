<?php

	session_start();

	$db = new mysqli("127.0.0.1", "administrator", "E6Z570tbYF4plNEhabIF", "GolanBrothers");
	if (!$db) {die('Could not connect: ' . mysql_error());}

	$data = file_get_contents("php://input");
 	$objdata = json_decode($data);
 	//$output = (string)$objdatthisEventa;
 	$theContent = $objdata->theContent;
 	$theUser = $objdata ->theUser;
 	error_log($theContent);
 	error_log($theUser);

 	$username = $_SESSION['username'];
 	//$query = "INSERT INTO pmessages (content, sender, receiver) VALUES('$theContent', '$username', '$theUser');";
 	$stmt = $db->prepare("INSERT INTO pmessages(content, sender, receiver) VALUES(?, ?, ?)");
 	$stmt->bind_param("sss", $theContent, $username, $theUser);
 	$stmt->execute();
 	$stmt->close();
 	//$query = "INSERT INTO messages (content, posterId) VALUES('$theContent', '$username');";

 	//$res = $db->query($query);

 	
 	error_log($db->error);
 	$db->close();




?>