<?php



function valid_login (string $login):string {
  if(empty($login)) return 'Логин не должен быть пустым';
  if(strlen($login) < 3) return 'Логин не должен быть меньше 3 символов';
  if(strlen($login) > 20) return 'Логин не должен быть более 20 символов';
  if (preg_match("/[А-ЯЁа-яё]/", $login)) return 'Для логина можно использовать только латинские символы';

  return '';
}

function valid_message (string $message):string {
  if(empty($message)) return 'Сообщение не должно быть пустым';
  if(strlen($message) > 250 || count(explode(' ', $message)) > 50) return 'Сообщение не должно быть более 250 символов или более 50 слов';

  return '';
}

function get_error (array $err, string $item) {
  if (!isset($err[$item]) || empty($err[$item])) return '';

  return "<small style=\"color: red;\">$err[$item]</small>";
}