<?php

include "functions.php" ;

function translate_months (array $months, string $lang = 'en') {
  if (empty($lang)) $lang = 'en';
  if (isset($months[$lang]))
    $translate_months = $months[$lang];
  else
    $translate_months = array_fill(0, 12, NULL);

  return $translate_months;
}

function translate_month (array $months, string $lang = 'en', $id_month = 1) {
  if (empty($id_month)) $id_month = 1;
  if (!check_int($id_month, 1, 12))
    if (!is_null(translate_months($months, $lang)[$id_month-1]))
      return translate_months($months, $lang)[$id_month-1];
    else
      return "Перевод для языка $lang отсутствует.";
  else
    return "Месяц №$id_month отсутствует.";
}

// b) написать функцию, которая на вход принимает массив с переводами, язык в виде строки (по умолчанию 'en') и номер месяца (1-12, по умолчанию 1, т.е. январь). Должна возвращать название месяца на указанном языке. Добавить проверку на существование языка в массиве и на правильность номера месяца.