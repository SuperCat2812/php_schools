<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php

    include 'header.php';

    echo '<main>';
    echo '<article class="content container">';
    echo '<h1 class="shadow">Kickass website</h1>';

    echo '<h2 class="shadow">';
    echo 'This website kicks all of the asses. All of them.' . '<br>' . '
            If you`ve got an ass, this website kicks the poo out of it.';
    echo '</h2>';

    echo '<a href="#" class="btn btn-red">Get a kick right in the pooper</a>';

    echo '<p class="small">';
    echo 'Should a kick occur, which it will, your butt cheeks will resonate.<br>
            Much like the wings of a butterfly, your butt might change history.';
    echo '</p>';

    echo '<img src="img/marvel-yellow.png" class="bigass" alt="ms marvel">';
    echo '</article>';
    echo '</main>';

    echo '<aside class="pre-footer">';
    echo '<div class="container">';
    echo '<h3>Buy our stuff</h3>';

    echo '<p>';
    echo 'This is a website, so obviously we are trying to sell you something.' . '<br>' . "
            Click here, so we can send you emails you don't want!";
    echo '</p>';

    echo '<a href="#" class="btn btn-green">Stuff to delete from your inbox</a>';
    echo '</div>';
    echo '</aside>';

    include 'footer.php';

    ?>
</body>

</html>