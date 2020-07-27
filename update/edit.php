<?php include __DIR__ . '/../env.php'; ?>
<?php include __DIR__ . '/../database.php'; ?>
<?php include __DIR__ . '/../partials/header.php'; ?>
<?php include __DIR__ . '/server.php'; ?>

<main>
  <h2>Modifica della stanaza numero : <?php echo $room['room_number'] ?></h2>
  <form class="" action="<?php echo $basePath ?>update/update.php" method="post">
    <input type="hidden" name="roomid" value="<?php echo $room['id'] ?>">
    <div>
      <label for="">Stanza numero: </label>
      <input type="text" name="roomnumber" value="<?php echo $room['room_number'] ?>">
    </div>
    <div>
      <label for="">Piano: </label>
      <input type="text" name="floor" value="<?php echo $room['floor'] ?>">
    </div>
    <div>
      <label for="">Numero letti: </label>
      <input type="text" name="beds" value="<?php echo $room['beds'] ?>">
    </div>
    <input type="submit" name="" value="SALVA">
  </form>
</main>
