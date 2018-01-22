<?php
function connect()
{
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db_name = '#';
    $link = mysqli_connect($host, $user, $password, $db_name);
    mysqli_set_charset($link, "UTF8") or die($link);
    return $link;
}

function current_date()
{
    return date("d-m-Y");
}

//создание календаря
function makeCal($year, $month) {
    // Получаем номер дня недели для 1 числа месяца.
    $wday = date('N', mktime(0, 0, 0, $month, 1, $year));
    // Начинаем с этого числа в месяце (если меньше нуля
    // или больше длины месяца, тогда в календаре будет пропуск).
    $n = - ($wday - 2);
    $cal = [];
    // Цикл по строкам.
    for ($y = 0; $y < 6; $y++) {
        // Будущая строка. Вначале пуста.
        $row = [];
        $notEmpty = false;
        // Цикл внутри строки по дням недели.
        for ($x = 0; $x < 7; $x++, $n++) {
            // Текущее число >0 и < длины месяца?
            if (checkdate($month, $n, $year)) {
                // Да. Заполняем клетку.
                $row[] = $n;
                $notEmpty = true;
            } else {
                // Нет. Клетка пуста.
                $row[] = "";
            }
        }
        // Если в данной строке нет ни одного непустого элемента,
        // значит, месяц кончился.
        if (!$notEmpty) break;
        // Добавляем строку в массив.
        $cal[] = $row;
    }
    return $cal;
}

function monthRu($month)
{
    $arr = [1=>'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь',
            'Ноябрь', 'Декабрь'];
    $month_ru = $arr[$month];
    return $month_ru;
}

function setWeekDay($day, $month, $year)
{
    //получаем день недели выбранной даты(1-понед)
    $wday = date('N', mktime(0, 0, 0, $month, $day, $year));
    $week_day = [];
    //$day_isx = mktime(0, 0, 0, $month, $day, $year);//в формате timestamp
    $day_isx = "$day-$month-$year";
    $d = date_create("$day_isx");
    for ($i= $wday; $i <= 7; $i++) {
        $week_day[$i] = date_format($d, 'd-m-Y');
        $d = date_modify($d, '1 day');
    }
    $d = date_create("$day_isx");
    for ($i= $wday; $i >= 1; $i--) {
        $week_day[$i] = date_format($d, 'd-m-Y');
        $d = date_modify($d, "-1 day");
    }

    return $week_day;
}
