<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    require 'array.php';
    ?>

    <table>
        <tbody>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Genre</th>
                    <th>Year</th>
                    <th>Gross</th>
                </tr>
            </thead>
            <?php foreach ($data as $index => $arr): ?>
                <?php $rowColor = ($index % 2 == 0) ? 'odd' : 'table' ?>
                <tr class="<?php echo $rowColor; ?>">
                    <td>
                        <?php echo $arr['title'] ?>
                    </td>
                    <td>
                        <?php echo $arr['genre'] ?>
                    </td>
                    <td>
                        <?php echo $arr['year'] ?>
                    </td>
                    <td>
                        <?php echo '$' . number_format($arr['gross']) ?>
                    </td>
                </tr>
            <?php endforeach ?>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <th>
                    <?php $sum = 0;
                    foreach ($data as $arr):
                        $sum += +$arr['gross'];
                    endforeach;
                    echo '$' . number_format($sum); ?>
                </th>

            </tr>
        </tbody>
    </table>
</body>

</html>