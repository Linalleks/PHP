<?php

if (isset($_GET['url'])) {
  $file = ($_GET['url'] == '') ? 'home' : $_GET['url'];
  $file = (file_exists($file .'.php')) ? $file : '404';
  header('Location: ' . $file . '.php');
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
  <a href="<?=pathinfo($_SERVER['PHP_SELF'],PATHINFO_DIRNAME) . '?url=home' ?>">home</a>
  <a href="<?=pathinfo($_SERVER['PHP_SELF'],PATHINFO_DIRNAME) . '?url=about' ?>">about</a>
  <a href="<?=pathinfo($_SERVER['PHP_SELF'],PATHINFO_DIRNAME) . '?url=page' ?>">page</a>
  <a href="<?=pathinfo($_SERVER['PHP_SELF'],PATHINFO_DIRNAME) . '?url=contact' ?>">contact</a>
</body>
</html>