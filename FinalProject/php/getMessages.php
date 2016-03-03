<?php
	session_start();

	$db = new mysqli("127.0.0.1", "administrator", "E6Z570tbYF4plNEhabIF", "GolanBrothers");
	if (!$db) {die('Could not connect: ' . mysql_error());}

	error_log('getMessages.php is getting called');
	$data = file_get_contents("php://input");
 	$objdata = json_decode($data);
 	$theUser = $objdata->theUser;
 	error_log($theUser);
 	$username = $_SESSION['username'];
	$query = "SELECT sender, content, receiver FROM pmessages WHERE sender =  '$theUser' AND receiver = '$username' OR sender = '$username' and receiver = '$theUser'";
	$query .= "ORDER BY dateSent;";
	$res = $db->query($query);
	//error_log($res);
	$array = $res->fetch_all();
	echo json_encode($array);
	//$array = $res->fetch_all();
	//echo json_encode($array);

?>