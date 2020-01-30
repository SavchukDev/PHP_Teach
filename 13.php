<?php

//13. Заданы две переменные: s - длина участка, который проехал автомобиль; t - время движения в часах. Вывести скорость автомобиля на заданном участке в км/час и в м/сек.

$s = 100;
$t = 2;

$kilometersPerHour = $s / $t;
echo $kilometersPerHour.' км/ч', '<br/>';

$metersPerSecond = ($kilometersPerHour * 1000) / 3600;
echo $metersPerSecond, ' m/sec';