<?php
//15. Написать калькулятор. Переменная $a = изменяемое число. Переменная $b = изменяемое число. Переменная $operator = ‘+’ или ‘-’ или ‘/’ или ‘*’ или '%' (остаток от деления). На экран выводить результат в зависимости от значений этих переменных. Не забудьте про деление на 0, если надо - выдавать ошибку что на 0 делить нельзя.
include "form.html";
$firstNum = $_POST['firstNum'];
$secondNum = $_POST['secondNum'];
$operator = $_POST['operator'];

if ($operator == '/' && $secondNum == 0) {
    echo "Test";

} elseif ($operator == '*') {
    $result = $firstNum * $secondNum;
} elseif ($operator == '/') {
    $result = $firstNum / $secondNum;
} elseif ($operator == '+') {
    $result = $firstNum + $secondNum;
} elseif ($operator == '-') {
    $result = $firstNum - $secondNum;
}

echo $result;








