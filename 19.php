<?php

//Выведите результат сравнения $a и $b из п.17 с помощью var_dump.

$a = '78';
$b = 78;

if ($a === $b) {
    echo 'A ecual to B', "<br/>";
} else {
    echo 'Error';
}

var_dump($a === $b);
