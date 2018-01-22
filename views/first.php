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
    <p>Сегодня: <?=current_date(); ?></p>
    <table border='1'>
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
                        <a style="<?= $i == 6 ? 'color:red' : '' ?>"<?= $v ? "href=\"index.php?date=$v\"" : "" ?>>
                            <?= $v ? $v : "&nbsp;" ?>
                        </a>
                    </td>
                <?php } ?>
            </tr>
        <?php } ?>

    </table>
    <br>
    <table border='1'>
        <form method="GET" action="index.php">
            <tr>
                <th><button type="submit" name="day" value="#дата">Понедельник</button></th>
                <th><button type="submit" name="day" value="">Вторник</button></th>
                <th><button type="submit" name="day" value="">Среда</button></th>
                <th><button type="submit" name="day" value="">Четверг</button></th>
                <th><button type="submit" name="day" value="">Пятница</button></th>
                <th><button type="submit" name="day" value="">Суббота</button></th>
                <th><button type="submit" name="day" value="">Воскресенье</button></th>
            </tr>
        </form>
        <tr>
            <!--<td><?/*=; */?></td>
        <td><?/*=; */?></td>
        <td><?/*=; */?></td>
        <td><?/*=; */?></td>
        <td><?/*=; */?></td>
        <td><?/*=; */?></td>
        <td><?/*=; */?></td>-->
        </tr>
    </table>
    <form>
        <textarea name="schedule" rows="50" cols="100"></textarea>
        <p><button type="submit" name="save" value="#дата">Сохранить</button></p>
    </form>
</body>
</html>