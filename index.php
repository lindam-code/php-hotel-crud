<?php include __DIR__ . '/env.php'; ?>
<?php include __DIR__ . '/database.php'; ?>
<?php include __DIR__ . '/partials/header.php'; ?>
<?php include __DIR__ . '/server.php'; ?>

     <main>
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
          </tr>
          <!-- Fine singola stanza -->
          <?php  } ?>
        </tbody>
       </table>
       <!-- Fine tabella lista stanze -->
     </main>

   </body>
 </html>
