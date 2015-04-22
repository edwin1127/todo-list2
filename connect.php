<?php
//why is this important? why does localhost have to be first?
$mysqli = new mysqli('localhost', 'root', 'tasks');

if ($mysqli->connect_error) {
	die('Connect Error ('. $mysqli_->connect_errno . ')'
		.$mysqli->connect_error
}
else {
	echo "Connection made";
}
$mysqli->close();

?>
