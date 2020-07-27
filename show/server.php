<?php
  $room_id = $_GET['id'];
  $sql = "SELECT * FROM stanze WHERE `id` = $room_id";
  $result = $conn->query($sql);
  if ($result && $result->num_rows > 0) {
    // ho i risultati popolo un array
    $room = $row = $result->fetch_assoc();
  } elseif ($result) {
    // ho zero risultati torno array vuoto
    $room = false;
  } else {
    die("query error");
  }
  $conn->close();
 ?>
