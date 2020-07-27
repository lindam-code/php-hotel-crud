<?php

// Connect
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn && $conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM stanze";
$result = $conn->query($sql);
if ($result && $result->num_rows > 0) {
  // ho i risultati popolo un array
  $rooms = [];
  while($row = $result->fetch_assoc()) {
    $rooms[] = $row;
  }
} elseif ($result) {
  // ho zero risultati torno array vuoto
  $rooms = [];
} else {
  die("query error");
}
$conn->close();
?>
