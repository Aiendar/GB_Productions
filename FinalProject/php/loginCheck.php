<?php
	$access;
	error_log('die');
	session_start();
	$data = file_get_contents("php://input");
 	$objdata = json_decode($data);
 	$username = $objdata->username;
 	$password = $objdata->password;
 	error_log($username.$password);
 	
	$db = new mysqli("127.0.0.1", "administrator", "E6Z570tbYF4plNEhabIF", "GolanBrothers")
		or die("I died ".$db->error);
	$query = "SELECT * ";
	$query .= "FROM Users ";
	$query .= "WHERE username = '$username' AND password = '$password';";
	$res=$db->query($query);
	if($res->num_rows == 1){
		$_SESSION['access'] = 'yes'; 
		
		$row = $res->fetch_array();
		if($row['isCaptain'] == 'y')
			$_SESSION['captain'] = 'yes';
		else
			$_SESSION['captain'] = 'no';
		$_SESSION['username'] = $row['username'];
		$access = 'AccessGranted';
	}
	else
	{
		$access = "AccessDenied";
	}
	error_log($_SESSION['access']);
	echo $access;
?>