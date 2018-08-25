<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Associative Arrays</title>
</head>
<body>

   <p>When the order is not important then store them in an associative array.</p>

   <?php

    $assoc_array = array(
            "first_name" => "Tajeshwar",
            "last_name" => "Khara",
            "age" => 34
    );


    echo "<pre>";
    print_r($assoc_array);
    echo "</pre>";

    echo $assoc_array["first_name"];

   ?>

    <h2>Assignment</h2>

   <?php

    $assoc_array["first_name"] = "Larry";
    echo $assoc_array["first_name"];

   ?>


</body>
</html>