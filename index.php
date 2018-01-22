<?php
require_once "models/helper.php";

$now = getdate();
$year = $now['year'];
$month = $now['mon'];
$month_ru = monthRu($month);
$day = $now['mday'];
$date = "$day-$month-$year";

if (isset($_REQUEST['year_month'])) {
    if (empty($_REQUEST['year_month'])) {
        echo "Вы не выбрали дату";
    } else {
        $year_month = explode('-', $_REQUEST['year_month']);
        $year = $year_month[0];
        $month = (int)$year_month[1];
        $month_ru = monthRu($month);
        $date = "$day-$month-$year";
    }
}

if (isset($_REQUEST['date'])) {
    $day = $_REQUEST['date'];
    $month = $_REQUEST['month'];
    $year = $_REQUEST['year'];
    $month_ru = monthRu($month);
    $date = "$day-$month-$year";
}

$cal = makeCal($year, $month);

$week_day = setWeekDay($day, $month, $year);

if (isset($_REQUEST['day'])) {
    $date = $_REQUEST['day'];
    $arr = explode('-', $date);
    $day = (int)$arr[0];
    $month = (int)$arr[1];
    $year = (int)$arr[2];
    $month_ru = monthRu($month);
}
/*echo "<pre>";
var_dump($cal);
echo "</pre>";*/

include "views/first.php";