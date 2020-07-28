<?php include __DIR__ . '/../env.php'; ?>
<?php include __DIR__ . '/../database.php'; ?>

<?php
  $room_id = $_POST['formid'];

  $sql = "DELETE FROM `stanze` WHERE `id` = $room_id";

  $result = $conn->query($sql);

  if (!$result) {
    die('Eliminazione non avvenuta per un problema tecnico.');
    }
  $conn->close();
 ?>
  <!-- se avviene eliminazione mostro messaggio -->
  <?php include __DIR__ . '/../partials/header.php'; ?>

  <main>
    <p>Eliminazione avvenuta con successo.</p>
  </main>
