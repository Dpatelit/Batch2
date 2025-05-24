<?php
    $amount = $_POST['amount'];
    $rate = $_POST['rate'];
    $year = $_POST['year'];
    echo "amount is $amount <br> rate is $rate <br> year is $year";

    $result = $amount *$rate *$year / 100;
    echo "<br> result is $result";
?>