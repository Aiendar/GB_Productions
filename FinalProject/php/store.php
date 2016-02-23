<html>
	<?php 
		$db = new mysqli("127.0.0.1", "administrator", "E6Z570tbYF4plNEhabIF", "GolanBrothers");
		if (!$db) {die('Could not connect: ' . mysql_error());}


		$event = $_POST['event'];
		$date = $_POST['date'];
		$eventId = $_POST['eventId'];
		$eventDesc = $_POST['eventDesc'];
		error_log($eventDesc);
		$query = "SELECT eventname ";
		$query .= "FROM calendar ";
		$query .= "WHERE eventname = '$event' AND theDate = '$date'";
		$db->query($query);

		if($db->affected_rows == 0 && $event != null && $date != null){
			$query = 'INSERT INTO calendar ';
			$query .= "VALUES('$event', '$date', '$eventDesc', '$eventId');";
			$db->query($query)
			or die($db->error);
			//header( 'Location: /xampp/FinalProject/EventScheduler.php/' ) ;
			$string ='<script>var txt;var r =false';
			$string .=';if (r == true) {console.log("something"); }';
			 $string .= 'else {console.log("error");window.location.replace("http://localhost/xampp/FinalProject/EventScheduler.php");}</script>';
			 echo $string; 

		}
		else{
			$string ='<script>var txt;var r = window.alert("Event already exists, or one of the fields was empty.")';
			$string .=';if (r == true) {console.log("something"); }';
			 $string .= 'else {console.log("error");window.location.replace("http://localhost/xampp/FinalProject/EventScheduler.php");}</script>';
			 echo $string; 
		}
		 
	?>
</html>