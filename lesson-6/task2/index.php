<?php
require 'config.php';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="form_process.php" method="POST">
    <input type="text" name="login" value="<?=$login?>">
    <?= get_error($errors, 'login'); ?>
    <br><br>
    <textarea  name="message" id="" cols="40" rows="5"><?=$message?></textarea>
    <?= get_error($errors, 'message'); ?>
    <br><br>
    <input type="submit">
  </form>
</body>
</html>