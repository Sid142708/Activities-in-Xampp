<!DOCTYPE html>
<html>

<body>

    <p>SIMPLE FILE READING AND WRITING</p>

    <?php
    $temperature = 25;
    $unit = "C";

    if ($unit == "C") {
        $fahrenheit = ($temperature * 9 / 5) + 32;

        echo "$temperature C is equal to $fahrenheit F";
    } elseif ($unit == "F") {

        $celsius = ($fahrenheit - 32) * 5/9;
        echo "$fahrenheit F is equal to $celsius C";
    }else{
        echo "Invalid Unit";
    }


    ?>

</body>

</html>