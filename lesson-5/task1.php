<?php

include "functions.php" ;
// php lesson-5/task1.php
// Задание 1

function sale_price (array $prices, $sale = 0): void {
  while (check_int($sale, 0, 99)) {
    echo "Неверная скидка. Попробуйте ещё раз.\n";
    $sale = readline('Скидка в % = ');
  }
  if ($sale == 0) echo "Сегодня скидка не действует.\n";
  else {
    foreach ($prices as $index => $price) $prices[$index] *= (1 - $sale/100);
    echo "Прайс со скидкой $sale %:\n" . implode(', ', $prices) . "\n";
  }
}

$count = rand(1, 10);

echo "Прайс без скидки:\n";

for ($i = 0; $i < $count; $i++) {
  $prices[] = rand(100, 1000);
  printf('%5s', $prices[$i]);
}

echo "\n";

sale_price($prices, readline('Скидка в % = '));