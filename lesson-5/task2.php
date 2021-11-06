<?php

include "functions.php" ;
// php lesson-5/task2.php
// Задание 2

function true_word_form ($count = 0, array $forms = ['число', 'числа', 'чисел']) {
  while (check_int($count)) {
    echo "Неверно введено количество. Попробуйте ещё раз.\n";
    $count = readline('Количество: ');
  }

  if (in_array($count, range(11,19)) || in_array(substr($count, -1), range(5,9)) || (substr($count, -1) == 0))
    $result = $forms[2];
  elseif (substr($count, -1) == 1)
    $result = $forms[0];
  else
    $result = $forms[1];

  return $result;
}

// echo true_word_form(readline("Количество: "), [readline("1 "), readline("2 "), readline("5 ")]) . "\n";

function numtotext ($sum) {
  while (check_int($sum, 1, 999999)) {
    echo "Некорректная сумма. Попробуйте ещё раз.\n";
    $sum = readline('Сумма: ');
  }

  $thousands = ['тысяча', 'тысячи', 'тысяч'];

  $result = '';

  $hundredstotext = function ($sum, $flag_thousand = false) {

    $str_numb = [
      1 => 'один',
      2 => 'два',
      3 => 'три',
      4 => 'четыре',
      5 => 'пять',
      6 => 'шесть',
      7 => 'семь',
      8 => 'восемь',
      9 => 'девять',
      10 => 'десять',
      11 => 'одиннадцать',
      12 => 'двенадцать',
      13 => 'тринадцать',
      14 => 'четырнадцать',
      15 => 'пятнадцать',
      16 => 'щестнадцать',
      17 => 'семнадцать',
      18 => 'восемнадцать',
      19 => 'девятнадцать',
      20 => 'двадцать',
      30 => 'тридцать',
      40 => 'сорок',
      50 => 'пятьдесят',
      60 => 'шестьдесят',
      70 => 'семьдесят',
      80 => 'восемьдесят',
      90 => 'девяносто',
      100 => 'сто',
      200 => 'двести',
      300 => 'триста',
      400 => 'четыреста',
      500 => 'пятьсот',
      600 => 'шестьсот',
      700 => 'семьсот',
      800 => 'восемьсот',
      900 => 'девятьсот',
    ];

    $result = '';

    if (floor($sum / 100) != 0)
      $result .= $str_numb[floor($sum / 100)*100] . ' ';

    if (in_array($sum % 100, range(11,19)) || (($sum % 100 != 0) && ($sum % 10 == 0))) {
      $result .= $str_numb[$sum % 100] . ' ';
    } else {
      if (floor(($sum % 100) / 10) > 0)
        $result .= $str_numb[floor(($sum % 100) / 10)*10] . ' ';

      if ($flag_thousand)
        switch ($sum % 10) {
          case 1:
            $result .= 'одна';
            break;
          case 2:
            $result .= 'две';
            break;
          default:
            $result .= $str_numb[$sum % 10];
            break;
        }
      else
        $result .= $str_numb[$sum % 10];
    }

    return $result;
  };

  if ($sum > 999)
    $result .= $hundredstotext(floor($sum/1000), true) . ' ' . true_word_form(floor($sum/1000), $thousands) . ' ';

  $result .= $hundredstotext($sum % 1000);

  return $result;
}

echo numtotext(readline('Введите число: '));
