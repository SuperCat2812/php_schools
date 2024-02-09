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

    $c = (glob('*', GLOB_ONLYDIR));

    echo "<div>";

    echo "</div>";
    echo "<ol>";
    foreach ($c as $file) {
        $reperat = str_replace(array('-', '_'), ' ', basename($file, GLOB_ONLYDIR));
        $ucfirst = ucfirst($reperat);
        echo "<a href='main.php?id=" . $file . "'>" . $ucfirst . "</a><br>";

    }

    echo "</ol>";

    ?>
</body>

</html>