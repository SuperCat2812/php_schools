<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    function Math($a, $b, $c)
    {
        $d = $b ^ 2 - 4 * $a * $c;
        if ($d > 0) {
            echo "2kr";
            $x1 = number_format((-$b + sqrt($d)) / (2 * $a), 0, ',', '&nbsp;');
            
            $x2 = number_format((-$b - sqrt($d)) / (2 * $a), 0, ',', '&nbsp;');
            
            echo "<br>" . $x1 . "  " . $x2;
        } elseif ($d == 0) {
            echo "1kr";
            $x1 = number_format((-$b + sqrt($d)) / (2 * $a), 0, ',', '&nbsp;');
            echo $x1;
        } elseif ($d < 0) {
            echo "0";
        } else {
            echo "error" . $a . "a" . $b . "b" . $c . "c";
        }
    }
    echo Math(1, 2, -63);

    ?>
</body>

</html>