<?php
//Расширьте конструкцию if из п.5, выводя фразу: "Вам пора на пенсию" при условии, что значение переменной age больше 59.

$age = rand(18, getrandmax());

if (rand(18, 59)) {
    echo "Вам ещё работать и работать";
} else if (rand(60, getrandmax())) {
    echo 'Пенсия';

}
