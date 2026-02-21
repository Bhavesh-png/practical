<?php
$hours = 40;
$rate = 15;
$weekly_pay = null;
if ($hours <= 40) {
    $weekly_pay = $hours * $rate;
} else {
    $weekly_pay = (40 * $rate) + (($hours - 40) * ($rate * 1.5));
}
echo "Weekly Pay: Rs " . $weekly_pay;
?>