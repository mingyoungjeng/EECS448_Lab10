<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "joshuajeng", "Treehouse41!", "joshuajeng");

/* check connection */
if ($mysqli->connect_errno) {
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit(); 
}

$query = "INSERT INTO Users VALUES ('" . $_POST["username"] . "')";

if ($result = $mysqli->query($query)) {
	echo "<p>User was registered</p>";
} else {
	echo "<p>ERROR: User failed to be registered. Username already exists or is blank</p>";
}

/* close connection */
$result->free();
$mysqli->close();

?>