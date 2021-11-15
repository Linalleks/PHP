<?php

require 'config.php';

if (empty(array_diff($errors, ['', NULL]))) {
  $current = "Логин: " . $login . "\nСообщение: " . $message;
  if (!is_dir('ads')) mkdir('ads');
  file_put_contents("ads/{$login}.txt", $current);
}

$req = http_build_query(compact('login', 'message'));

header('Location: index.php?' . $req);

die;