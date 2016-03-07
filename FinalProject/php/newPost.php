<?php

	session_start();

	$db = new mysqli("127.0.0.1", "administrator", "E6Z570tbYF4plNEhabIF", "GolanBrothers");
	if (!$db) {die('Could not connect: ' . mysql_error());}

	$data = file_get_contents("php://input");
 	$objdata = json_decode($data);
 	//$output = (string)$objdatthisEventa;
 	$theContent = $objdata->theContent;
 	error_log($theContent);


 	$username = $_SESSION['username'];

 	$stmt = $db->prepare("INSERT INTO messages(content, posterID) VALUES(?, ?)");
 	$stmt->bind_param("ss", $theContent, $username);
 	$stmt->execute();
 	$stmt->close();
 	//$query = "INSERT INTO messages (content, posterId) VALUES('$theContent', '$username');";

 	//$res = $db->query($query);

 	
 	error_log($db->error);
 	$db->close();


/*
$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
;
*/

?>



