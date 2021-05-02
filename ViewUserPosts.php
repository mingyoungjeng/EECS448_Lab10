<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "joshuajeng", "Treehouse41!", "joshuajeng");

/* check connection */
if ($mysqli->connect_errno) {
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit(); 
}

echo "<table>";
echo "<tr><th>Posts of " . $_POST["user"] . "</th></tr>";

$query = "SELECT content FROM Posts WHERE author_id='" . $_POST["user"] . "'";
if ($result = $mysqli->query($query)) {
	while ($row = $result->fetch_assoc()) {
		echo "<tr><td>" . $row["content"] . "</td><tr>";
	}
}

echo "</table>";

/* close connection */
$result->free();
$mysqli->close();

?>