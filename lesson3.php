<?php

// Задание 1

$arr = [33, 42, -7, -81, 11, -2, 21, 0, 5, 67];

$index = (int) readline("Индекс = ");


if (is_integer($index)) {
  if (isset($arr[$index])) {
    if ($arr[$index] === 0) {
      unset($arr[$index]);
      $arr[$index] = 0;
    } else {
      if ($arr[$index] < 0) {
        $arr[$index] *= -1;
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

// Задание 2

$days = [
  'monday' => 'понедельник',
  'tuesday' => 'вторник',
  'wednesday' => 'среда',
  'thursday' => 'четверг',
  'friday' => 'пятница',
  'saturday' => 'суббота',
  'sunday' => 'воскресенье',
];

$days_ru = array_values($days);
$days_en = array_keys($days);

echo "Дни недели на русском:\n" . implode(', ', $days_ru);
echo "\nДни недели на английском:\n" . implode(', ', $days_en) . "\n";


// Задание 3

$text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel tempus erat. In sollicitudin nisl nisi, in cursus erat pulvinar et. In congue eleifend accumsan. Nam dictum, nibh a justo iaculis, at hendrerit dui condimentum. Nulla et malesuada elit. Etiam eu dolor et nulla lobortis lacinia malesuada quis lacus. Aliquam nec nibh porta, vehicula justo id, sodales eros. Nulla facilisi. Nulla quis dui volutpat, mattis massa ut, interdum nisl.';

if (count(explode(" ", trim($text))) > 50) {
  echo "Превышен лимит количества слов в тексте.\n";
}

$arr_text = explode(". ", trim($text));

echo "\nКоличество предложений в тексте: " . count($arr_text) . "\n";

$clause = implode("-", explode(" ", str_replace([".", ","], "", trim(lcfirst($arr_text[4])))));


echo "\nСсылка из 5го предложения:\nhttp://site.ru/news/$clause\n";