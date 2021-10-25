<?php

// Задание 1

$year = (int) readline("Введите год: ");

if (is_integer($year) && $year > 0) {
  if (($year % 400 == 0) || (($year % 100 != 0) && ($year % 4 == 0)))
    echo "$year год является високосным\n";
    else
    echo "$year год не является високосным\n";
} else {
  echo "Вы ввели некорректное число\n";
}

// Задание 2

$a = (int) readline("A = ");
$b = (int) readline("B = ");
$alfa = (float) readline("edge = ");

$check_enter = is_integer($a) && is_integer($b) && is_float($alfa) && $a > 0 && $b > 0 && $alfa >= 1 && $alfa <= 90 ;

if ($check_enter) {
  if ($alfa == 90) {
    if ($a == $b) {
      $s = $a ** 2;
      echo "Фигура с заданными параметрами является квадратом.\nПлощадь квадрата: $s\n";
    } else {
      $s = $a * $b;
      echo "Фигура с заданными параметрами является прямоугольником.\nПлощадь прямоугольника: $s\n";
    }
  } else {
    if ($a == $b) {
      $s = $a ** 2 * sin($alfa);
      echo "Фигура с заданными параметрами является ромбом.\nПлощадь ромба: $s\n";
    } else {
      $s = $a * $b * sin($alfa);
      echo "Фигура с заданными параметрами является параллелограммом.\nПлощадь параллелограмма: $s\n";
    }
  }
} else {
  echo "Вы ввели некорректные данные\n";
}

// Задание 3

$text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel tempus <a href="http://localhost/1.jpg" class="btn">erat</a>. In sollicitudin <span class="dotted">nisl nisi</span>, in cursus erat pulvinar et. In <a href="https://wikipedia.org/2.png" class="btn">congue</a> eleifend accumsan.';

$a_start = strpos($text, '<a ');

if ($a_start !== false) {
  $a_end = strpos($text, '">', $a_start + 1);
  $a_text = substr($text, $a_start, $a_end - $a_start + 2);

  if (strpos($a_text, 'target="_blank"') === false)
    $a_text = str_replace('">', '" target="_blank"', $a_text);

  if (strpos($a_text, 'class="') !== true)
    $a_text = str_replace('class="', 'class="btn-success ', $a_text);
  else
    $a_text = str_replace('>', ' class="btn-success">', $a_text);

    $a_text = substr_replace($a_text, 'http://example.com/', strpos($a_text, 'href=') + 6, strrpos($a_text, '/') - (strpos($a_text, 'href=') + 5));

  $text = substr($text, 0, $a_start) . $a_text . substr($text, $a_end + 1);

  if (($a_start = strpos($text, '<a ', $a_start + 1)) !== false) {
    $a_end = strpos($text, '">', $a_start + 1);
    $a_text = substr($text, $a_start, $a_end - $a_start + 2);

    if (strpos($a_text, 'target="_blank"') === false)
      $a_text = str_replace('">', '" target="_blank"', $a_text);

    if (strpos($a_text, 'class="') !== true)
      $a_text = str_replace('class="', 'class="btn-primary ', $a_text);
    else
      $a_text = str_replace('>', ' class="btn-primary">', $a_text);

      $a_text = substr_replace($a_text, 'http://example.com/', strpos($a_text, 'href=') + 6, strrpos($a_text, '/') - (strpos($a_text, 'href=') + 5));

    $text = substr($text, 0, $a_start) . $a_text . substr($text, $a_end + 1);
  }

  echo "Обработанный текст:\n$text\n";
}
