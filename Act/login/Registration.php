<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="logo-removebg-preview.png">
    <link rel="icon" type="image/x-icon" href="logo-removebg-preview.png">
</head>

<body>
    <form method="POST">
        <div class="image-container">
            <img src="logo-removebg-preview.png" alt="">
            <div class="college">
                <h2>DATAMEX COLLEGE OF SAINT ADELINE</h2>
            </div>
        </div>
        <h3 style="font-size:30px;"> Registration Form<h3>



                <label>Username:</label>
                <input type="text" name="username" required><br><br>

                <label>Password:</label>
                <input type="text" name="password" required><br><br>

                <label>Student ID:</label>
                <input type="text" name="student_id" required><br><br>

                <label>Fullname:</label>
                <input type="text" name="fullname" required><br><br>

                <label>Email:</label>
                <input type="email" name="email" required><br><br>

                <label>Contact:</label>
                <input type="text" name="contact" required><br><br>

                <label>Address:</label>
                <input type="text" name="address" required><br><br>

                <label>Birthday:</label>
                <input type="text" name="birthday" required><br><br>

                <div class="button-container">
                    <input style="font-size:20px; " id="submit" type="submit" name="submit" value="SUBMIT">
                </div>
    </form>
</body>

</html>

<?php
$serverName = "localhost";
$user = "root";
$pass = "";
$databaseName = "database";
$conn = new mysqli($serverName, $user, $pass, $databaseName);
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];

    $password = $_POST['password'];

    $student_id = $_POST['student_id'];

    $fullname = $_POST['fullname'];

    $contact = $_POST['contact'];

    $address = $_POST['address'];

    $birthday = $_POST['birthday'];

    $email = $_POST['email'];


    $sql = "SELECT * FROM registration WHERE username='$username' OR student_id = '$student_id'";
    $result = $conn->query($sql);


    if (!$result) {
        die("Failed to execute query: " . $conn->error);
    } elseif ($result->num_rows > 0) {
        echo " <script> alert('username or student ID already exist') </script>";
    } else {

        $sql = "INSERT INTO `Registration`(`username`, `password`, `student_id`, `fullname`, `email`, `contact`, `address`, `birthday`) VALUES ('$username','$password','$student_id','$fullname','$email','$contact','$address','$birthday')";
        $result = $conn->query($sql);
        if ($result == TRUE) {

            echo " <script> alert('Successfully registered.'); window.location.href = 'login.php?'</script>";
        } else {

            echo "Error:" . $sql . "<br>" . $conn->error;
        }
    }
}

if (isset($_POST['key'])) {
    $key = $_POST['key'];

    if ($key === 'Enter') {
        // Do something in response to the Enter key press
        echo "Enter key pressed! Performing PHP action.";
    }
}


?>