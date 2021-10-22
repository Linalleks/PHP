<?php

// Задание 1

$a = 3;
$b = 7;
$h = 4;

$s = ($a + $b) / 2 * $h;
$ss = (($a + $b) / 2) * $h;

echo "<p>Площадь трапеции равна $s</p>";

// Задание 2

$num = (string) 541967;

$sum = substr($num, 0, 2) + substr($num, 2, 2) + substr($num, 4, 2);
$div = floor (strlen($num) / 2 );
$multi = substr($num, 0, $div) * substr($num, $div, strlen($num)-1);

echo "<p>Сумма пар чисел из числа 541967 равна $sum<br>";
echo "Произведение 2х половин числа 541967 равно $multi</p>";

// Задание 3

$text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel tempus erat. In sollicitudin nisl nisi, in cursus erat pulvinar et. In congue eleifend accumsan. Nam dictum nibh a justo iaculis, at hendrerit dui condimentum. Nulla et malesuada elit. Etiam eu dolor et nulla lobortis lacinia malesuada quis lacus. Aliquam nec nibh porta, vehicula justo id, sodales eros. Nulla facilisi. Nulla quis dui volutpat, mattis dolor massa ut, interdum nisl.';

$list = "<ol><li>" . str_replace(array('. ', 'dolor'), array(';</li><li>', '<i>dolor</i>'), mb_strtolower($text . ' '));
$list = substr($list, 0, strlen($list)-4) . "</ol>";

echo  "Задание с текстом:$list" ;
