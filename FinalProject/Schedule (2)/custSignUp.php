<html>
	<?php 
		$db = new mysqli("127.0.0.1", "administrator", "E6Z570tbYF4plNEhabIF", "GolanBrothers");
		if (!$db) {
		    die('Could not connect: ' . mysql_error());
		}
		$event = $_POST['event'];
		$date = $_POST['date'];
		$query = 'INSERT INTO calendar ';
		$query .= "VALUES('$event', '$date');";
		$db->query($query);
	?>
</html>