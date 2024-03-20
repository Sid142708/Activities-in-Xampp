<?php

include 'connection.php';
$ID = $_GET['id'];
$Record = mysqli_query($conn, "SELECT * FROM `registration` WHERE ID = $ID");
$data = mysqli_fetch_array($Record);

?>


<!-- update -->
<?php

$conn = new mysqli("localhost", "root", "", "database");


if (isset($_POST['submit'])) {

    $ID = $_POST['ID'];

    $password = $_POST['password'];

    $fullname = $_POST['fullname'];

    $contact = $_POST['contact'];

    $address = $_POST['address'];

    $birthday = $_POST['birthday'];

    $email = $_POST['email'];


    $sql = "SELECT * FROM registration WHERE password = '$password' AND fullname = '$fullname' AND contact = '$contact' AND address = '$address' AND birthday = '$birthday' AND email = '$email'";
    $result = $conn->query($sql);


    if (!$result) {
        die("Failed to execute query: " . $conn->error);
    } elseif ($result->num_rows > 0) {
        echo " <script> alert('No data has been updated') </script>";
    } else {

        $sql = "UPDATE registration SET password = '$password', fullname = '$fullname', contact = '$contact', address = '$address', birthday = '$birthday', email = '$email' WHERE ID = '$ID' ";
        $result = $conn->query($sql);

        if ($result == TRUE) {
            echo " <script> alert('Successfully updated'); window.location.href = 'index.php?id= $data[ID]'</script>";

        } else {

            echo $con->error;
        }

    }
}

?>


<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="logo-removebg-preview.png">
    <title> UPDATE </title>
    <link rel="stylesheet" href="22.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="sidebar close">
        <div class="logo-details">
            <img class="logo" src="logo.png" alt="profileImg">
            <span class="logo_name">PROFILE</span>
        </div>
        <ul class="nav-links">
            <li>
                <div class="profile-details">
                    <div class="profile-content">
                        <img src="image/profile.jpg" alt="profileImg">
                    </div>
                    <div class="name-job">
                        <div class="profile_name"><?php echo $data['username'] ?></div>
                        <div class="job"><?php echo $data['student_id'] ?></div>
                    </div>
                    <a href="login.php">
                        <i class='bx bx-log-out'></i>
                    </a>
                </div>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <div class="home-content">
            <i class='bx bx-menu'></i>
            <span class="text">UPDATE</span>
        </div>
<div class="area">
        <form action="" method="POST">
            <div class="image-container">
                <img src="logo-removebg-preview.png" alt="">
                <div class="college">
                    <h2>DATAMEX COLLEGE OF SAINT ADELINE</h2>

                </div>
            </div>

            <h3 style="font-size:30px;"> Information<h3>

                    <input type="hidden" name="ID" value="<?php echo $data['ID'] ?>">

                    <label>Username:</label>
                    <input type="text" name="username" value="<?php echo $data['username'] ?>" disabled><br><br>

                    <label>Password:</label>
                    <input type="text" name="password" value="<?php echo $data['password'] ?>"><br><br>

                    <label>Student ID:</label>
                    <input type="text" name="student_id" value="<?php echo $data['student_id'] ?>" disabled><br><br>

                    <label>Fullname:</label>
                    <input type="text" name="fullname" value="<?php echo $data['fullname'] ?>"><br><br>

                    <label>Email:</label>
                    <input type="email" name="email" value="<?php echo $data['email'] ?>"><br><br>

                    <label>Contact:</label>
                    <input type="text" name="contact" value="<?php echo $data['contact'] ?>"><br><br>

                    <label>Address:</label>
                    <input type="text" name="address" value="<?php echo $data['address'] ?>"><br><br>

                    <label>Birthday:</label>
                    <input type="text" name="birthday" value="<?php echo $data['birthday'] ?>"><br><br>

                    <div class="button-container">
                        <input style="font-size:20px; " id="submit" type="submit" name="submit" value="Update">
                    </div>
        </form>
        </div>
    </section>

</body>
<script>
    let arrow = document.querySelectorAll(".arrow");
    for (var i = 0; i < arrow.length; i++) {
        arrow[i].addEventListener("click", (e) => {
            let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
            arrowParent.classList.toggle("showMenu");
        });
    }
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".bx-menu");
    console.log(sidebarBtn);
    sidebarBtn.addEventListener("click", () => {
        sidebar.classList.toggle("close");
    });

    window.onload = () => {
        console.log(document.querySelector("#form1 > tbody > tr:nth-child(1) > td:nth-child(2) ").innerHTML);
    };

    getUniqueValuesFromCo
</script>>

</html>