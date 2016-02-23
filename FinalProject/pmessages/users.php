<?php
session_start();

$db = new mysqli("127.0.0.1", "administrator", "E6Z570tbYF4plNEhabIF", "GolanBrothers");
	if (!$db) {die('Could not connect: ' . mysql_error());}
$user = $_SESSION['username'];
error_log($user);
error_log('this');
$query = "SELECT username FROM users WHERE username <> '$user';";
$res = $db->query($query);
$num_rows = $db->affected_rows;
$array = $res->fetch_all(); 
error_log($array[0][0]);
echo json_encode($array);

?>