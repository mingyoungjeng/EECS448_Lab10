<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "joshuajeng", "Treehouse41!", "joshuajeng");

/* check connection */
if ($mysqli->connect_errno) {
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit(); 
}

$query = "INSERT INTO Posts (content, author_id) VALUES ('" . $_POST["content"] . "', '" . $_POST["username"] . "')";

if ($result = $mysqli->query($query)) {
	echo "<p>Success! Post has been saved.</p>";
} else {
	echo "<p>ERROR: Failed to save post. User doesn't exist or content was blank.</p>";
}

/* close connection */
$result->free();
$mysqli->close();

?>