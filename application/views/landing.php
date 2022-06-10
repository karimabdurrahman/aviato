<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>LANDS DULU SKUY</h1>

                    <?php foreach ($produts as $row) { ?>

                    <tr>
                      <br>
                      <td><?php echo $row['id']; ?></td>
                      <td><?php echo $row['name']; ?></td>
                      <td><?php echo $row['detail']; ?></td>
                      <td><?php echo $row['price']; ?></td>
                      <td> <img src="<?php echo $row['image']; ?>" alt=""> </td>
                      <br>
        <?php } ?>
  </body>
</html>
