<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require "./fun_stuff.php";
    $name = "Vašo";
    $array = ['web', 'gule', 'vajcia'];
    $pocet_produktov = 5;
    $cena_jedneho = 300;
    $a = 31;
    $numberi = 15321.35;
    $amount = 124.12;
    $discount_rate = 13;
    $b = 12;
    $numbers = [5, 10, 15, 20];
    $totalSum = calculateSum($numbers);
    $values = [5, 'hello', 3.14, true, ['apple', 'banana'], null];
    $number = [10, 5, 20, 8, 15];
    printUniqueTypes($values);
    pozdrav();
    pozdrav2($name);
    pre_r($adventure);
    generateLinks($array);
    how_much($pocet_produktov, $cena_jedneho);
    number($a, $b);
    function pozdrav()
    {
        echo "Ahoj, truľo.";
        echo "<br>";
    }
    function pozdrav2($name)
    {
        echo "Ahoj, " . $name . " truľo.";
        echo "<br>";
    }

    function pre_r($adventure)
    {
        echo '<pre>';
        print_r($adventure);
        echo '</pre>';
    }

    function generateLinks($array)
    {
        $links = '';
        foreach ($array as $item) {
            $link = ucfirst($item); // Prvý znak na veľký
            $link = urlencode($link); // Kódovanie URL, aby sme zabránili problémom s diakritikou a špeciálnymi znakmi
            echo $links .= '<a href="' . $link . '.php?page=' . strtoupper($link) . '">' . $link . '</a><br>';
        }

    }

    function how_much($pocet_produktov, $cena_jedneho)
    {
        $celkova_suma = $pocet_produktov * $cena_jedneho;
        echo "<p>Kupil si $pocet_produktov predmetov za $celkova_suma € dokopy.</p>";
    }

    function number($a, $b)
    {
        if ($a > $b) {
            echo $a;
        } elseif ($a < $b) {
            echo $b;
        }
    }
    function calculateSum($numbers)
    {
        $sum = 0;
        foreach ($numbers as $number) {
            if (is_numeric($number)) {
                $sum += $number;
            }
        }
        return $sum;
    }
    echo "<br>";
    echo "sum: $totalSum";


    function printUniqueTypes($array)
    {
        $types = [];
        foreach ($array as $value) {
            $type = gettype($value);
            if (!in_array($type, $types)) {
                $types[] = $type;
                echo $type . "<br>";
            }
            echo "<br>";
        }
    }


    function findMax($number)
    {

        if (empty ($number)) {
            return null;
        }

        $max = null;

        foreach ($number as $number) {
            if ($max === null || $number > $max) {
                $max = $number;
            }
        }
        return $max;

    }

    echo "<br> max: " . findMax($number) . "<br>";

    function Money($numberi)
    {
        return number_format($numberi, 2, ',', ' ') . '€';
    }

    function Discount($amount, $discount_rate)
    {
        $discounted_amount = $amount - ($amount * ($discount_rate / 100));
        return Money($discounted_amount);
    }

    echo "<br>" . Money($numberi) . "<br>";
    echo Discount($amount, $discount_rate);

    ?>
</body>

</html>