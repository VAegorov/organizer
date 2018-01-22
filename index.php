<?php
require_once "models/helper.php";

$now = getdate();
$cal = makeCal(2018, 2);
/*echo "<pre>";
var_dump($cal);
echo "</pre>";*/

include "views/first.php";