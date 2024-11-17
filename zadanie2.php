<?php
// Создаем массив из пяти строковых элементов
$words = ["apple", "banana", "cherry", "date", "elderberry"];

// Выводим каждую строку массива в формате "Слово: [строка]"
echo "Список слов:\n";
foreach ($words as $word) {
    echo "Слово: $word\n";
}

// Находим самую длинную строку
$longestWord = "";
foreach ($words as $word) {
    if (strlen($word) > strlen($longestWord)) {
        $longestWord = $word;
    }
}
echo "Самая длинная строка: $longestWord\n";

// Подсчитываем общее количество символов во всех строках массива
$totalChars = 0;
foreach ($words as $word) {
    $totalChars += strlen($word);
}
echo "Общее количество символов: $totalChars\n";
?>
