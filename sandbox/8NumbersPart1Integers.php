<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Numbers Part 1 Integers</title>
</head>
<body>

<?php
    $number1 = 3;
    $number2 = 5;

    $total = $number1 + $number2;

    echo ($number1*$number2)/7;
?>

<br>

Absolute value: <?php echo abs(0-300); ?><br>
Exponential: <?php echo pow(2,8); ?> <br>
Square root: <?php echo sqrt(100); ?> <br>
Modulo: <?php echo fmod(20,7); ?> <br>
Random (min,max): <?php echo rand(1,10); ?> <br>
Random: <?php echo rand(); ?> <br>

<br>

+= :    <?php

            $number2 += 4;
            echo $number2;

        ?> <br>

</body>
</html>