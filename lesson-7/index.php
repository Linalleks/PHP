<?php
  $dir = __DIR__;
  $error['login'] = "";
  $error['ava'] = "";

  if (isset($_POST['login']) && !empty($_POST['login'])) {
    $login = $_POST['login'];
    if (isset($_FILES['avatar']) || !empty($_FILES['avatar'])) {
      $format = $_FILES['avatar']['type'];

      if ($_FILES['avatar']['size'] <= 2000000) {
        if ($format === 'image/jpeg' || $format === 'image/png' || $format === 'image/gif') {
          $ava_dir = $dir . '/avatars';

          if (!is_dir($ava_dir)) {
            mkdir($ava_dir);
            chmod($ava_dir, 0777);
          }

          $new_ava = "{$ava_dir}/" . md5($_POST['login']);

          foreach (glob($new_ava . ".*") as $file) {
            unlink($file);
          }

          $new_ava .= substr($_FILES['avatar']['name'], -4);

          if (move_uploaded_file($_FILES['avatar']['tmp_name'], $new_ava)) {
            chmod($new_ava, 0777);
          } else {
            $error['ava'] = "Ошибка загрузки аватара.";
          }
        } else {
          $error['ava'] = "Неподходящий формат файла. ({$format})";
        }
      } else {
        $error['ava'] = "Слишком большой размер файла. ({$_FILES['avatar']['size']})";
      }
    } else {
      $error['ava'] = "Добавьте файл аватара.";
    }
  } else {
    $error['login'] = "Логин не должен быть пустым.";
  }
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
  <form action="" method="post" enctype="multipart/form-data">
    <input type="text" name="login">
      <?php if ($error['login']) { ?>
        <small style="color: red;"><?=$error['login']?></small>
      <?php } ?>
      <br><br>
    <input type="file" name="avatar">
    <?php if ($error['ava']) { ?>
      <br><small style="color: red;"><?=$error['ava']?></small>
    <?php }?>
    <br><br>
    <input type="submit">
  </form>
  <?php if (empty($error['login']) && empty($error['ava'])) { ?>
    <p><?=$login?></p>
    <img src="<?=str_replace($dir . '/', '', $new_ava)?>" style="width: 150px; height: 150px; border: 3px solid #7922CC; border-radius: 50%; object-fit: cover;" alt="<?=$login?>">
  <?php } ?>
</body>
</html>