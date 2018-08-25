<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Numbers Part 2 Floating Point Numbers</title>
</head>
<body>

<?php
    echo $float = 3.14;
    echo "<br>";
    echo $float + 7;
    echo "<br>";
    echo 4/3;
    echo "<br>";
?>

<br>

Round: <?php echo round($float, 1); ?> <br>
Ceiling: <?php echo ceil($float); ?> <br>
Floor: <?php echo floor($float); ?> <br>

<br>

<?php $integer = 3 ?>
<?php echo "Is {$integer} integer?" . is_int($integer); ?> <br>
<?php echo "Is {$float} float?" . is_float($float); ?> <br>

<br>
<?php echo "Is {$integer} integer?" . is_int($integer); ?> <br>
<?php echo "Is {$float} float?" . is_float($float); ?> <br>

<br>
<?php echo "Is {$integer} numeric?" . is_numeric($integer); ?> <br>
<?php echo "Is {$float} numeric?" . is_numeric($float); ?> <br>



</body>
</html>