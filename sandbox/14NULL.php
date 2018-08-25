<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NULL</title>
</head>
<body>
<?php
$var1=null;
$var2="";
?>

Is var1 null? <?php echo is_null($var1); ?> <br>
Is var2 null? <?php echo is_null($var2); ?> <br>
Is var3 null? <?php echo is_null($var3); ?> <br>
<br>
Is var1 set? <?php echo isset($var1); ?> <br>
Is var2 set? <?php echo isset($var2); ?> <br>
Is var3 set? <?php echo isset($var3); ?> <br>
<br>
Is var1 empty? <?php echo empty($var1); ?> <br>
Is var2 empty? <?php echo empty($var2); ?> <br>
Is var3 empty? <?php echo empty($var3); ?> <br>
<br>

</body>
</html>