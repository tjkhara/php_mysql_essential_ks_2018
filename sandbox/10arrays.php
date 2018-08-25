<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arrays</title>
</head>
<body>

    <?php
    $array1 = ["Hello","HI","Hola"];

    print_r($array1);

    $array2 = array(1,2,3);

    foreach ($array2 as $item)
    {
        echo "<br>" . $item ;
    }

    ?>

    <h2>Mixed Array</h2>

    <?php

        $mixed = ["Tajeshwar", 32, [1,2,3]];

        echo "<pre>";
        print_r($mixed);
        echo "</pre>";

        echo "<br>";
        echo $mixed[2][1];


    ?>

    <h2>Putting values into arrays</h2>

    <p> Adding it in the first place</p>

    <?php

        $mixed[0] = "Arjun";
        echo "<pre>";
        print_r($mixed);
        echo "</pre>";
    ?>

    <p>Adding it to the end</p>
    <br>

    <?php

        $mixed[] = "Horse";
        echo "<pre>";
        print_r($mixed);
        echo "</pre>";
    ?>



</body>
</html>