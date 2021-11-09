<?php

require 'functions.php';

$login = $_POST['login'] ?? '';
$message = $_POST['message'] ?? '';

$errors['login'] = valid_login($login);
$errors['message'] = valid_message($message);