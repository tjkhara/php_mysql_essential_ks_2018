<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Constants</title>
</head>
<body>

<h4>A constant is the opposite of a variable.</h4>
<p>You have to use a function to set the value of a constant.</p>
<p>You can't change the value of a constant.</p>
<?php
$max_width=980;
// This is a constant
define("MAX_WIDTH",980);
echo MAX_WIDTH;

// Can't do this
// MAX_WIDTH++;

// Can't redefine it also

define("MAX_WIDTH", 1000);

echo MAX_WIDTH; // This will not do anything value is still 980

?>


</body>
</html>