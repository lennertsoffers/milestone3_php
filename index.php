<?php
$conn = new mysqli("mariadb", "root", "1", "milestone3");

// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM user";
$result = $conn->query($sql);

$row = mysqli_fetch_assoc($result);

echo "<h1>" . $row["surname"] . " " . $row["name"] . " has reached milestone3</h1>";

$conn->close();
