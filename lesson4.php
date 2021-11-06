<?php

// Задание 1

for ($num = 10; $num < 200; $num += 10) echo "$num, ";
echo "$num.\n";

// Задание 2

$sum = 0;
for ($i = 0; $i < 15; $i++) {
  $arr[] = rand(-100, 100);
  if ($i % 2 == 0) $sum += $arr[$i];
  if ($i == 0) $min = $arr[$i];
  if ($arr[$i] < $min) $min = $arr[$i];
}

echo "Массив случайных чисел:\n" . implode(', ', $arr) . "\n";
echo "Сумма элементов с нечётным индексом (от 1): $sum\n";
echo "Минимальный элемент в массиве: $min\n";

// Задание 3

for ($i = 1; $i < 10; $i++) {
  for ($j = 1; $j <= $i; $j++) echo $i;
  echo "\n";
}

for ($i = 9; $i > 0; $i--) {
  for ($j = 1; $j <= $i; $j++) echo $i;
  echo "\n";
}

// Задание 4

$days = [
 'ru' => ['понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота', 'воскресенье'],
 'en' => ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'],
 'de' => ['montag', 'dienstag', 'mittwoch', 'donnerstag', 'freitag', 'samstag', 'sonntag'],
 'fr' => ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'],
 'it' => ['lunedì', 'martedì', 'mercoledì', 'giovedì', 'venerdì', 'sabato', 'domenica'],
 'es' => ['lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado', 'domingo'],
];

$enter = true;
while ($enter) {
  $lang = readline('Введите язык: ');
  if (isset($days[$lang])) $enter = false;
  else echo "Элемент не существует. Попробуйте ещё раз.\n";
}

echo "Неделя наоборот на языке $lang:\n" . implode(', ', array_reverse($days[$lang])) . "\n\n";

while (!$enter) {
  $index = readline('Введите номер дня недели: ');
  if (isset($days[$lang][$index-1])) $enter = true;
  else echo "Неверный индекс. Попробуйте ещё раз.\n";
}

echo "$index день недели на 6 языках:\n";
foreach ($days as $week) {
  echo $week[$index-1] . ", " ;
}
echo "\n\n";

echo "<ul>\n";
foreach ($days as $lang => $week) {
  echo "<li>$lang\n<ol>\n";
  foreach($week as $day) {
    echo "<li>$day</li>\n";
  }
  echo "</ol>\n</li>";
}
echo "</ul>\n";