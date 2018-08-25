<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Type Casting</title>
</head>
<body>
Type Juggling<br><br>
<?php $count = "2"; ?>
Type: <?php echo gettype($count); ?> <br>
<?php $count += 3; ?> <br>
Type: <?php echo gettype($count); ?> <br>
<?php $cats = " I have " . $count . " cats."; ?>
Cats: <?php echo gettype($cats); ?> <br>
<br>
Making the change yourself <br><br>

Type Casting <br><br>
<?php settype($count,"integer"); ?>
count: <?php echo gettype($count); ?> <br>

Second method <br><br>
<?php $count2 = (string) $count; ?>
count: <?php echo gettype($count); ?> <br>
count2: <?php echo gettype($count2); ?> <br>
<br>

<?php $test1 = 3; ?>
<?php $test2 = 3; ?>

Don't do this first one
<?php settype($test1,string); ?>
<?php (string)$test2; ?>
test1: <?php echo gettype($test1); ?> <br>
test2: <?php echo gettype($test2); ?> <br>
</body>
</html>