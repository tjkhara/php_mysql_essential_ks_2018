<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booleans</title>
</head>
<body>
<?php

    $result1 = true;
    $result2 = false;

?>

Result 1: <?php echo($result1); ?> <br>
Result 2: <?php echo($result2); ?> <br>

result2 is boolean? <?php echo is_bool($result2); ?> <br>

<?php

$number = 3.14;


// Conditionals
if (is_float($number))
{
    echo "Yes it is a float";
}
else
{
    echo "Nope";
}

?>


</body>
</html>