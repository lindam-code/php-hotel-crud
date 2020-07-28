<?php include __DIR__ . '/env.php'; ?>
<?php include __DIR__ . '/database.php'; ?>
<?php include __DIR__ . '/partials/header.php'; ?>
<?php include __DIR__ . '/server.php'; ?>

     <main>
      <?php $stanza_modificata = $_GET['stanzamodificata']; ?>
        <?php if ($stanza_modificata) { ?>
          <p>Update della stanza numero: <?php echo $stanza_modificata ?> avvenuto con successo</p>
        <?php } ?>

       <!-- Inizio tabella lista stanze -->
       <table class="room">
        <thead>
          <tr>
            <th>ID</th>
            <th>Room number</th>
            <th>Floor</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($rooms as $room) { ?>
          <!-- Singola stanza -->
          <tr>
            <td><?php echo $room['id']; ?></td>
            <td><?php echo $room['room_number']; ?></td>
            <td><?php echo $room['floor']; ?></td>
            <td>
              <a href="<?php echo $basePath; ?>/show/show.php/?id=<?php echo $room['id']; ?>">Show info</a>
            </td>
            <td>
              <a href="<?php echo $basePath; ?>/update/edit.php/?id=<?php echo $room['id']; ?>">Update</a>
            </td>
            <td>
              <form action="<?php echo $basePath . 'delete/delete.php'?>" method="post">
                <input type="hidden" name="formid" value="<?php echo $room['id']; ?>">
                <input type="submit" value="delete">
              </form>
            </td>
          </tr>
          <!-- Fine singola stanza -->
          <?php  } ?>
        </tbody>
       </table>
       <!-- Fine tabella lista stanze -->

      <div class="">
        <a href="<?php echo $basePath; ?>/insert/insert.php/?id=<?php echo $room['id']; ?>">Inserisci una nuova stanza</a>
      </div>

     </main>

   </body>
 </html>
