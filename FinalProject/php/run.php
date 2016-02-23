<?php
session_start();
  if(isset($_SESSION['access'])){
    if($_SESSION['access'] == 'yes'){}
    else{
      header( 'Location: http://localhost/xampp/FinalProject/login.php' ) ;
    }
  }
  else{
     header(  'Location: http://localhost/xampp/FinalProject/login.php'  ) ;
  }
	$data = file_get_contents("php://input");
 	$objdata = json_decode($data);
 	$user2 = $objdata->user;
 	$user1 = $_SESSION['username'];
 	error_log($user2);
$db = new mysqli("127.0.0.1", "administrator", "E6Z570tbYF4plNEhabIF", "GolanBrothers");
	if (!$db) {die('Could not connect: ' . mysql_error());}
$query = 'SELECT * FROM pmessages ORDER BY dateSent;';
$res = $db->query($query);
$num_rows = $db->affected_rows;
$array = $res->fetch_all(); 
$messArray = array();
for($i = 0; $i < $num_rows; $i++){
	if ($array[$i][1] == $user2 && $array[$i][2]==$user1)	{
		array_push($messArray, array($array[$i][0], $array[$i][3], "to"));
	}
	else if ($array[$i][1] == $user1 && $array[$i][2] == $user2){
		array_push($messArray, array($array[$i][0], $array[$i][3], "from"));
	}
}
echo json_encode($messArray);

?>