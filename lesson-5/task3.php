<?php

include "functions.php" ;

// Задание 3

$text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel tempus erat. In sollicitudin nisl nisi, in cursus erat pulvinar et. In congue eleifend accumsan. Nam dictum, nibh a justo iaculis, at hendrerit dui condimentum. Nulla et malesuada elit. Etiam eu dolor et nulla lobortis lacinia malesuada quis lacus. Aliquam nec nibh porta, vehicula justo id, sodales eros. Nulla facilisi. Nulla quis dui volutpat, mattis massa ut, interdum nisl.';

$arr = explode(" ", str_replace([".", ","], "", trim($text)));

echo implode(' ', sort_arrstr($arr)) . "\n";

function sort_arrstr (array $arr, $order = true) {
  for($i = 0; $i < count($arr); $i++) {
    $min = $arr[$i];
    for($j = $i + 1; $j < count($arr); $j++) {
      if (strlen($arr[$j]) < strlen($arr[$i])) {
        $arr[$i] = $arr[$j];
        $arr[$j] = $min;
        $min = $arr[$i];
      }
    }
  }

  return $arr;
}