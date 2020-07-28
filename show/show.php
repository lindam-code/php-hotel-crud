<?php include __DIR__ . '/../env.php'; ?>
<?php include __DIR__ . '/../database.php'; ?>
<?php include __DIR__ . '/../partials/header.php'; ?>
<?php include __DIR__ . '/server.php'; ?>

<main>
  <?php if($room) { ?>
    <h2>Stanza numero: <?php echo $room['room_number']; ?></h2>
    <ul>
      <li>ID stanza: <?php echo $room['id']; ?></li>
      <li>Numero stanza: <?php echo $room['room_number']; ?></li>
      <li>Piano: <?php echo $room['floor']; ?></li>
      <li>Numero letti: <?php echo $room['beds']; ?></li>
      <li>Creata il: <?php echo $room['created_at']; ?></li>
      <li>Aggiornata il: <?php echo $room['updated_at']; ?></li>
    </ul>
  <?php } else { ?>
  <p>La stanza non esiste.</p>
  <?php } ?>
</main>
