<?php include __DIR__ . '/../env.php'; ?>
<?php include __DIR__ . '/../partials/header.php'; ?>

<main>
  <h2>Inserisci i dati di na nuova stanza.</h2>
  <form action="<?php echo $basePath ?>insert/insertdata.php" method="post">
    <div>
      <label for="">Stanza numero: </label>
      <input type="text" name="roomnumber" value="">
    </div>
    <div>
      <label for="">Piano: </label>
      <input type="text" name="floor" value="">
    </div>
    <div>
      <label for="">Numero letti: </label>
      <input type="text" name="beds" value="">
    </div>
    <input type="submit" name="" value="SALVA">
  </form>
</main>
