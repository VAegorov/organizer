<?php

require_once "models/helper.php";
$link = connect();
$s = '27-02-2018';
$d = date_create("$s");
$date = date_add($d, date_interval_create_from_date_string('3 day'));
echo date_format($date, 'd-m-Y');

$date = '22-01-2018';
$p = setWeekDay(1, 3, 2000);
echo "<pre>";
var_dump($p);
echo "</pre>";

$dt = new DateTime("2001-03-01");
echo "Начало: ", $dt->format("Y-m-d"), PHP_EOL;
$dt->modify("-1 day");
echo "Конец:  ", $dt->format("Y-m-d"), PHP_EOL;

var_dump(display($link, $date));