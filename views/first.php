<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
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
                        <a style="<?= $i == 6 ? 'color:red' : '' ?>"<?= $v ? "href=\"one_week.php?date=$v\"" : "" ?>>
                            <?= $v ? $v : "&nbsp;" ?>
                        </a>
                    </td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
</body>
</html>