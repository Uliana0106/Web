<?php
require_once('config.php');
$text1 = "Дано ціле число N (> 0). Знайти значення виразу
1.1 - 1.2 + 1.3 - ...(N доданків, знаки чергуються). Умовний оператор не використовувати.
Вивести умову задачі, початкові значення та результуючі.";

$n = 10; // дане число N
$sum = 0; // змінна для зберігання суми доданків
$sign = 1; // початковий знак доданку
$num = 1.1; // початкове число

for ($i = 1; $i <= $n; $i++) {
    $sum += $sign * $num; // додавання доданку до суми
    $num += 0.1; // збільшення числа на 0.1
    $sign = -$sign; // зміна знаку доданку
}

$text2 = "Дано дійсне число A. Перший член геометричної прогресії X та
знаменник D. Знайти кількість членів цієї прогресії, сума яких не перебільшує
число A. Вивести умову задачі, початкові значення та результуючі.";

$A = 10; // задане число A
$x = 2; // перший член прогресії
$d = 3; // знаменник прогресії
$sum = $x; // ініціалізуємо суму з першого члена прогресії
$count = 1; // лічильник членів прогресії

while ($sum <= $A) {
    $x *= $d; // обчислюємо наступний член прогресії
    $sum += $x; // додаємо до суми
    $count++; // збільшуємо лічильник
}
$tpl_vars=array(
'text1' => $text1,
'n' => $n,
'sum' => $sum,
'num' => $num ,
'sign' => $sign,

'text2' => $text2,
'A' => $A,
'x' => $x,
'd' => $d,
'sum' => $sum,
'count' => $count,
);
$tpl_file='lab1-6.tmpl';
require_once('tpl_config.php');
?>