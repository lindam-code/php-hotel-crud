<?php include __DIR__ . '/../env.php'; ?>
<?php include __DIR__ . '/../database.php'; ?>

<?php
  $room_id = $_POST['roomid'];
  $room_number = $_POST['roomnumber'];
  $floor = $_POST['floor'];
  $beds = $_POST['beds'];

  $sql = "UPDATE `stanze`
          SET `room_number` = $room_number,
              `floor` = $floor,
              `beds` = $beds,
              `updated_at` = NOW()

          WHERE `id` = $room_id
        ";

  $update = $conn->query($sql);

  if ($update) {
    // se avvenuto correttamente l'update torno alla pagina principale e avviso
    header('Location:'.$basePath.'?stanzamodificata='.$room_number);
  } else {
    die("query error");
  }
  $conn->close();
 ?>
