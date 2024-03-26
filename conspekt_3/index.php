<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function sum($a, $b)
    {
        return $a * $b;
    }
    function discount($selling_price, $discount_percent, $format = FALSE)
    {
        $actual_price = $selling_price - $selling_price * ($discount_percent / 100);

        if ($format) {
            $actual_price = money($actual_price);
        }

        return $actual_price;
    }

    function money($sum, $currency_symbol = '&euro;')
    {
        // if(in_array($currency_symbol, $behind)){}
        return $currency_symbol . ' ' . number_format($sum, 2, ',', '&nbsp;');
    }
    $item_count = 15;
    $item_price = 122.30;
    $sum = sum($item_count, $item_price);
    $coupon = 13;
    if ($coupon) {
        $sum = discount($sum, $coupon, true);
    }
    echo 'It will cost you <strong>' . $sum . '</strong>';
    ?>
</body>

</html>