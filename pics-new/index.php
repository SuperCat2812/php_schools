<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <ol>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ol> -->
    <?php
    $a = (glob("*.jpg"));
    $b = (glob("*.png*"));
    $c = array_merge($a, $b);


    echo "<ol>";
    foreach ($c as $file) {
        $result = basename($file, ".jpg");
        $reperat = str_replace(array('-', '_'), ' ', basename($result, ".png"));
        $ucfirst = ucfirst($reperat);
        echo "<li>" . $ucfirst . "</li>";

    }
    foreach ($c as $file) {
        $j = "{type: quiz, title:" . $ucfirst . ", pic: " . $file . "}, <br>";
        echo $j;
    }

    echo "</ol>";

    ?>
</body>

</html>