<?php

include "months.php" ;
include "translator.php" ;

// Задание 4

$lang = readline('Язык перевода: ');
echo implode(', ', translate_months($months, $lang)) . "\n";

$lang = readline('Язык перевода: ');
$id_month = readline('Номер месяца: ');
echo translate_month($months, $lang, $id_month) . "\n";


