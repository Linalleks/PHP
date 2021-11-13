<?php

require 'functions.php';

$login = $_REQUEST['login'] ?? '';
$message = $_REQUEST['message'] ?? '';

$errors['login'] = valid_login($login);
$errors['message'] = valid_message($message);