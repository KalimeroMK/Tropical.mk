<?php require_once 'header.php';
session_start();
if (isset($_SESSION['user_email'])) { ?>

<div class="container">
    <table class="table table-hover">

    <tr><td>Наслов</td><td>Град</td><td>Опис </td><td>Датум</td><td>Држава </td><td>Цена </td><td>Статус </td><td>Додади Галерија </td><td>Избриши </td><td>Промени </td><td>Прегледај </td></tr>

        <?php

        $sql = mysqli_query($con, "SELECT * FROM tekst");
        if (mysqli_connect_errno($con)) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        while ($row = mysqli_fetch_array($sql)) {
            echo "<tr>";
            echo '<td>' . $row['title'] . '</td>';
            echo '<td>' . $row['grad'] . '</td>';
            echo '<td>' . $row['type'] . '</td>';
            echo '<td>' . $row['date'] . '</td>';
            echo '<td>' . $row['drzava'] . '</td>';
            echo '<td>' . $row['cena'] . '</td>';
            if ($row['approved'] == 1) {
                echo '<td><a href="process/approve.php?id=' . $row['id'] . '&status=off" class="btn btn-success">Одобрен</a></td>';
            }
            else {
              echo '<td><a href="process/approve.php?id=' . $row['id'] . '&status=on" class="btn btn-danger">Исклучен</a></td>';
          }
          echo '<td> <form action="addgallery.php" method="get"><input type="hidden" name="id" value="' . $row['id'] . '"  /><button class="btn btn-info btn-xs" type="submit"><span class="glyphicon glyphicon-camera"></span> Додади Галерија</button></form></td>';
          echo '<td> <form action="process/deleteponuda.php" method="post"><input type="hidden" name="id" value="' . $row['id'] . '"  /><button class="btn btn-danger btn-xs" type="submit">Избриши</button></form></td>';
          echo '<td> <form action="update.php" method="post"><input type="hidden" name="id" value="' . $row['id'] . '"  /><button class="btn btn-warning btn-xs" type="submit">Промени</button></form></td>';
          echo '<td> <form action="viewarticle.php" method="get"><input type="hidden" name="id" value="' . $row['id'] . '"  /><button class="btn btn-success btn-xs" type="submit">Прегледај</button></form></td>';
          echo "</tr>";
      }
      ?>
  </table>
<?php
    }
    else {
    echo 'Please <a href="index.php">Log in</a>';
    }
    ?>
<?php require_once 'footer.php'; ?>