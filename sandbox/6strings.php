<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Strings</title>
</head>
<body>

<?php
    echo "Hello world <br>";

    echo 'Hello world <br>';

    $greeting = "Hello";
    $target = "World";

    $phrase = $greeting . " " . $target;

    echo "<br> $phrase";

    echo "<br>$phrase again";

    echo '<br> $phrase again';

    // Put curly braces around a variable within a string
    // This allows us to differentiate the variable from the
    // non-variable.

    echo "<br> {$phrase}again";


?>

</body>
</html>