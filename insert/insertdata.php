<?php include __DIR__ . '/../env.php'; ?>
<?php include __DIR__ . '/../database.php'; ?>

<?php
  $room_number = $_POST['roomnumber'];
  $floor = $_POST['floor'];
  $beds = $_POST['beds'];

  $sql = "INSERT INTO `stanze` (`room_number`,`floor`,`beds`)
          VALUES ($room_number,$floor,$beds) ";

  $result = $conn->query($sql);

  if (!$result) {
    // se nn avviene la query mostro il messaggio
    die("Inserimento non avvenuto per un problema tecnnico.");
  } 
  $conn->close();
 ?>
 <!-- se avviene l'inserimento mostro messaggio -->
 <?php include __DIR__ . '/../partials/header.php'; ?>

 <main>
   <p>Inserimento avvenuto con successo.</p>
 </main>
