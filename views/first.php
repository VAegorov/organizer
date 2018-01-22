<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <title>Organizer</title>
</head>
<body>
    <h1>Органайзер</h1>
    <p><a href="index.php">Сегодня: </a><?=current_date(); ?></p>
    <form method="GET" action="index.php">
        <p>Выберите месяц и год: <input type="month" name="year_month" value="<?php if (isset($_REQUEST['year_month']) && !empty($_REQUEST['year_month'])) echo "{$_REQUEST['year_month']}"; ?>"></p>
        <p><input type="submit" value="Выбрать"></p>
    </form>
    <table border='1'>
        <captuion><?="$month_ru $year"; ?></captuion>
        <tr>
            <td>Пн</td>
            <td>Вт</td>
            <td>Ср</td>
            <td>Чт</td>
            <td>Пт</td>
            <td>Сб</td>
            <td style="color:red">Вс</td>
        </tr>
        <!-- цикл по строкам -->
        <?php foreach ($cal as $row) {?>
            <tr>
                <!-- цикл по столбам -->
                <?php foreach ($row as $i => $v) {?>
                    <!-- воскресенье - "красный" день -->
                    <td>
                        <a style="<?= $i == 6 ? 'color:red' : '' ?>"<?= $v ? "href=\"index.php?date=$v&year=$year&month=$month\"" : "" ?>>
                            <?= $v ? $v : "&nbsp;" ?>
                        </a>
                    </td>
                <?php } ?>
            </tr>
        <?php } ?>

    </table>
    <br>
    <table width="100%" border='1'>
        <form method="GET" action="index.php">
            <tr>
                <th><button class="cellbut" type="submit" name="day" value="<?=$week_day[1]; ?>">Понедельник</button></th>
                <th><button class="cellbut" type="submit" name="day" value="<?=$week_day[2]; ?>">Вторник</button></th>
                <th><button class="cellbut" type="submit" name="day" value="<?=$week_day[3]; ?>">Среда</button></th>
                <th><button class="cellbut" type="submit" name="day" value="<?=$week_day[4]; ?>">Четверг</button></th>
                <th><button class="cellbut" type="submit" name="day" value="<?=$week_day[5]; ?>">Пятница</button></th>
                <th><button class="cellbut" type="submit" name="day" value="<?=$week_day[6]; ?>">Суббота</button></th>
                <th><button class="cellbut" type="submit" name="day" value="<?=$week_day[7]; ?>">Воскресенье</button></th>
            </tr>
        </form>
        <tr>
            <td><?=$week_day[1]; ?></td>
            <td><?=$week_day[2]; ?></td>
            <td><?=$week_day[3]; ?></td>
            <td><?=$week_day[4]; ?></td>
            <td><?=$week_day[5]; ?></td>
            <td><?=$week_day[6]; ?></td>
            <td><?=$week_day[7]; ?></td>
        </tr>
    </table>
    <p>Дата: <?=$date; ?></p>
    <form method="GET" action="">
        <textarea size="100%" name="schedule" rows="30"><?=$schedule_one['schedule'];?></textarea>
        <p><button type="submit" name="save" value="<?=$date; ?>">Сохранить</button></p>
    </form>
</body>
</html>