<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "joshuajeng", "Treehouse41!", "joshuajeng");

/* check connection */
if ($mysqli->connect_errno) {
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit(); 
}

echo "<table>";
echo "<tr><th>Users</th></tr>";

$query = "SELECT user_id FROM Users";
if ($result = $mysqli->query($query)) {
	while ($row = $result->fetch_assoc()) {
		echo "<tr><td>" . $row["user_id"] . "</td><tr>";
	}
}

echo "</table>";

/* close connection */
$result->free();
$mysqli->close();

?>