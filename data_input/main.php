<?php
$day = $_GET['day'];
$month = $_GET['month'];
$year = $_GET['year'];
$country = 'us';
custom_date($day, $month, $year, $country);

function custom_date($day, $month, $year, $country)
{
    if ($country == 'sk') {
        echo $day . " day " . $month . " month " . $year . " year " . $country;
    } elseif ($country == 'us') {
        echo $month . " month " . $day . " day " . $year . " year " . $country;
    } elseif ($country == 'ja') {
        echo $year . " year " . $month . "month" . $day . " day " . $country;
    }
}
?>
<form action="index2.html">
    <input type="submit">
</form>