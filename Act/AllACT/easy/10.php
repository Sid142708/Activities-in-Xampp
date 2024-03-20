<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>

    <p>SIMPLE FORM WITH PROCESSING</p>
    
    
    <form method="post">
        <label for="name"> Name:</label>
        <input type="text" id="name" name="name">
        <input type="Submit" value="Submit">
    </form> <br>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        echo "Hello, $name!";
    }


    ?>




</body>

</html>