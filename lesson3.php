<?php

// Задание 1

$arr = [33, 42, -7, -81, 11, -2, 21, 0, 5, 67];

$index = (int) readline("Индекс = ");
//php lesson3.php

if (is_integer($index)) {
  if (isset($arr[$index]) !== false) {
    if ($arr[$index] === 0) {
      unset($arr[$index]);
      $arr[$index] = 0;
    } else {
      if ($arr[$index] < 0) {
        $arr[$index] = $arr[$index] * -1;
      } else {
        if ($index == count($arr)-1) {
          echo "Элемент с индексом $index последний в массиве\n";
        } else {
          echo "Следующий элемент " . $arr[$index + 1] . "\n" ;
        }
      }
    }
  } else {
    $arr[] = 0;
  }
  echo "Введенный индекс $index\nИтоговый массив: " . implode(", ", $arr) ."\n";
} else {
  echo "Введенный символ не может быть индексом\n";
}
