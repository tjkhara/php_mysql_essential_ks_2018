<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array Functions</title>
</head>
<body>
<?php $numbers = array(8,23,15,42,16,4); ?>

Count: <?php echo count($numbers); ?> <br>
Max value: <?php echo max($numbers); ?> <br>
Min value: <?php echo min($numbers); ?> <br>

<br>

Sort: <pre><?php sort($numbers); print_r($numbers)?> <br></pre>
Reverse sort: <pre><?php rsort($numbers); print_r($numbers) ?> <br></pre>
<br>

Implode: <?php $num_string = implode("*", $numbers); echo $num_string; ?> <br>
Explode: <pre><?php print_r(explode("*",$num_string)); ?></pre>
<br>

15 in an array?: <?php echo in_array(15,$numbers); ?><br>
19 in an array?: <?php echo in_array(19,$numbers); ?><br>
</body>
</html>