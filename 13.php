<?php

//13. Заданы две переменные: s - длина участка, который проехал автомобиль; t - время движения в часах. Вывести скорость автомобиля на заданном участке в км/час и в м/сек.

$s = 100;
$t = 2;

$speed_1 = $s / $t;
echo $speed_1, " км/ч", "<br/>";

$speed_2 = ($speed_1 * 1000) / 3600;
echo $speed_2, " m/sec";