<?php

include "months.php" ;
include "translator.php" ;

// Задание 4

echo implode(', ', translate_months($months, readline('Язык перевода: '))) . "\n";

echo translate_month($months, readline('Язык перевода: '), readline('Номер месяца: ')) . "\n";


