<?php

include "functions.php" ;
// php lesson-5/task1.php
// Задание 1

function sale_price (array $prices, $sale = 0) {
  if (check_int($sale, 0, 99)) return 0;
  if ($sale == 0) return "Сегодня скидка не действует.\n";

  return "Сумма прайса со скидкой $sale %:\n" . array_sum($prices)*(1 - $sale/100) . "\n";

}

$count = rand(1, 10);

echo "Прайс без скидки:\n";
for ($i = 0; $i < $count; $i++) {
  $prices[] = rand(100, 1000);
  printf('%5s', $prices[$i]);
}
echo "\n";

$sale = readline('Скидка в % = ');
while (check_int($sale, 0, 99)) {
  echo "Неверная скидка. Попробуйте ещё раз.\n";
  $sale = readline('Скидка в % = ');
}

echo sale_price($prices, $sale);