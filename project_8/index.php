<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $poc = 23;

    if (is_numeric($poc)) {
        echo "<ul>";
        for ($i = 1; $i < $poc + 1; $i++) {
            echo "<li> " . $i . " hodnota</li>";
        }
        echo "</ul>";
    } else {
        echo "is not a number";
    }
    ?>
    <?php
    for ($i = 0; $i < 10; $i++) {
        echo $i;
    }
    echo '<br>';
    for ($i = 1; $i < 12; $i++) {
        if ($i != 11) {
            echo $i . "-";
        } else {
            echo $i;
        }

    }
    echo '<br>';
    for ($i = 1; $i < 3; $i++) {
        echo $i . " <a href='show.php?id=" . $i . "'>zaznam</a> " . $i . ", <a href='edit.php?id=" . $i . "'>edit</a>, <a href='delete.php?id=" . $i . "'>delete</a><br>";
    }
    ?>
</body>

</html>