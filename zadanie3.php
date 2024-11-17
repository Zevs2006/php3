<?php
// Генерация массива из десяти случайных чисел от 1 до 30
$numbers = [];
for ($i = 0; $i < 10; $i++) {
    $numbers[] = rand(1, 30);
}

// Вывод массива
echo "Массив чисел:\n";
echo implode(", ", $numbers) . "\n";

// Находим и выводим все четные числа
echo "Четные числа:\n";
foreach ($numbers as $num) {
    if ($num % 2 == 0) {
        echo $num . " ";
    }
}
echo "\n";

// Считаем сумму всех чисел, которые больше 10
$sumGreaterThan10 = 0;
foreach ($numbers as $num) {
    if ($num > 10) {
        $sumGreaterThan10 += $num;
    }
}
echo "Сумма чисел больше 10: $sumGreaterThan10\n";

// Выводим количество чисел меньше 5
$countLessThan5 = 0;
foreach ($numbers as $num) {
    if ($num < 5) {
        $countLessThan5++;
    }
}
echo "Количество чисел меньше 5: $countLessThan5\n";
?>
