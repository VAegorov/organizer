<?php
require_once "models/helper.php";

$now = getdate();
$year = $now['year'];
$month = $now['mon'];
$month_ru = monthRu($month);
if (isset($_REQUEST['year_month'])) {
    if (empty($_REQUEST['year_month'])) {
        echo "Вы не выбрали дату";
    } else {
        $year_month = explode('-', $_REQUEST['year_month']);
        $year = $year_month[0];
        $month = (int)$year_month[1];
        $month_ru = monthRu($month);
    }

}

$cal = makeCal($year, $month);
/*echo "<pre>";
var_dump($cal);
echo "</pre>";*/

include "views/first.php";