<?php

session_start();
$_SESSION['POSTDATA'] = $_POST;

require 'config.php';

if (empty(array_diff($errors, ['', NULL]))) {
  $current = "Логин: " . $login . "\nСообщение: " . $message;
  if (!is_dir('ads')) mkdir('ads');
  file_put_contents('ads/логин_из_формы.txt', $current);
}

header('Location: ' . $_SERVER['HTTP_REFERER']);

die;