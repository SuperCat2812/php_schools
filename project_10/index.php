<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>ked chces googlit, pouzi tento kvalitny
        <?php anchor1('http://bing.hu', 'vyhladavac') ?>
    </p>
    <?php
    function anchor1($url, $text)
    {
        echo "<a href='$url'>$text</a>";
    }
    $atts = [
        'title' => 'toto je link',
        'class' => 'red'
    ];
    anchor2('http://brm.sk', 'kvalitný blog', $atts);
    function anchor2($url, $text, $atts)
    {
        // for($i=0; $i<$atts; $i++){
        echo "<a href='$url' title='$atts[title]' class='$atts[class]'>$text</a>";
        echo "<br>";
        // }
    }
    $base_url = 'http://localhost/project_10/';
    redirect('edit.php');
    redirect('edit');
    redirect('http://localhost:8888/todoapp/edit.php');
    redirect('http://localhost:8888/todoapp/edit');
    function redirect($page) {
        global $base_url;
        
        $page = rtrim($page, '/');
        $page = rtrim($page, '.php');
        
        if (!preg_match('/\.php$/', $page)) {
            $page .= '.php';
        }
        
        $page = ltrim($page, '/');
        
        if (strpos($page, 'http') === 0) {
            echo $page;
            echo "<br>";
        } else {
            echo $base_url . '/' . $page;
            echo "<br>";
        }
    }

    $date = "12-28-1982";
    $countri = 'sk';
    corect($date, $countri);
    function corect($date, $countri)
    {
        if ($countri == 'sk') {
            $date = "28-12-1982";
            echo $date;
        } elseif ($countri == 'us') {
            echo $date;

        } elseif ($countri == 'ja') {
            $date = "1982-12-28";
        }
    }
    
    $data = ['one', 'two', 'balls', 'fiver', 'it'];
    $data = push_to_array1($data, 'four');
    function push_to_array1($array, $value) {
        $array[] = $value;
        return $array;
    }
    echo"<br>";
    echo implode(', ', $data);

     $data = [ 'one', 'two', 'balls','it', 'fiver', "fu" ];
push_to_array2( $data, 'four' );
function push_to_array2($array, $value) {
    $array[] = $value;
    echo"<br>";
    echo implode(', ', $array);
}

    ?>
</body>

</html>