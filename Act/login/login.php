<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Log In</title>
    <link rel="stylesheet" href="Css/login.css">
    <link rel="icon" type="image/x-icon" href="logo-removebg-preview.png">

</head>

<body>
    <div class="logo">
        <img src="logo-removebg-preview.png">
    </div>
    <div class="wrapper">
        <div class="header">
            <div class="top">
                <p>WELCOME BACK!</p>
                <br>
                <form method="post">
                    <div class="form">
                        <div class="input_field">
                            <input type="text" name="Username" placeholder="Username" id="username" class="input" required>
                            </i>
                        </div>
                        <div class="input_field">
                            <input type="password" name="Password" placeholder="Password" id="password" class="input" required>
                        </div>
                        <input type="Submit" class="button" value="LOG-IN">
                        <p><a href="Registration.php" class="underline-hover">Register now</a></p>
                </div>


                </form>
            </div>

            <div class="copyright"><br>
                © 2024 GROUP 2
            </div>
        </div>
    </div>
</body>





</html>

<?php


$conn = new mysqli("localhost", "root", "", "database");


if ($_SERVER['REQUEST_METHOD'] == "POST") {


    $username = $_POST['Username'];
    $password = $_POST["Password"];

    $sql = "SELECT * FROM registration WHERE username = '$username' AND password = '$password' OR student_id = '$username' AND password = '$password' ";

    $result = $conn->query($sql);



    if (!$result) {
        die("Failed to execute query: " . $conn->error);
    } elseif ($result->num_rows > 0) {

        $data = $result->fetch_array();

        echo " <script> alert('Login Successfully'); window.location.href = 'index.php?id= $data[ID]'</script>";
        
    } else {
        echo " <script> alert('Login failed') </script>";
    }

}

?>