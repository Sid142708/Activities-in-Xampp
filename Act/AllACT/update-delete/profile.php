<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="StudentProfile.css">
    <title>Student Profile</title>
</head>

<style>
    .echo-text {
        margin-top: 10px;
        font-size: 25px;
        Color: red;
    }
</style>

<body>
    <p> Student Profile </p>
    <div class="border">

        <div class="con">
            <form method="post">
                <label for="name"> Name:</label>
                <input type="text" id="name" name="name" required>
                <br>
                <label for="age"> Age:</label>
                <input type="text" id="age" name="age" required>
                <br>
                <label for="address"> Address:</label>
                <input type="text" id="address" name="address" required>
                <br>
                <label for="contact"> Contact Number:</label>
                <input type="text" id="contact" name="contact" required>
                <br>
                <label for="birthdate"> BirthDate:</label>
                <input type="text" id="birthdate" name="birthdate" required>
                <br>
                <label for="Gender"> Gender:</label>
                <input type="text" id="gender" name="gender" required>
                <br>
                <label for="bloodtype"> Blood Type:</label>
                <input type="text" id="blood" name="blood" required>
                <br><br>
                <input type="Submit" value="Submit">
            </form> <br>
        </div>

    </div>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $age = $_POST["age"];
        $address = $_POST["address"];
        $contact = $_POST["contact"];
        $birthdate = $_POST["birthdate"];
        $gender = $_POST["gender"];
        $blood = $_POST["blood"];
    }

    ?>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        include  'connection.php';

        $sql = "INSERT INTO info (Name, Age, Address, Contact, Birthdate, Gender, Blood) VALUES ('$name', '$age', '$address', '$contact', '$birthdate', '$gender', '$blood')";


        $result = $con->query($sql);

        if ($result == TRUE) {

            echo " <script> alert('Data Inserted.') </script>";
        } else {

            echo  $con->error;
        }
    }

    ?>

    <table id="my-table" class="container">



        <thead><br>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Address</th>
                <th>Contact</th>
                <th>BirthDate</th>
                <th>Gender</th>
                <th>Blood Type</th>

                <th>Action</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $conn = new mysqli("localhost", "root", "", "database");
            if ($conn->connect_error) {
                die("Failed to connect to database: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM info";


            $result = $conn->query($sql);


            if ($result) {

                while ($row = $result->fetch_array()) {

                    echo "<tr>";
                    echo "<td style='text-align:left;'>" . $row["Name"] . "</td>";
                    echo "<td>" . $row["Age"] . "</td>";
                    echo "<td>" . $row["Address"] . "</td>";
                    echo "<td>" . $row["Contact"] . "</td>";
                    echo "<td>" . $row["BirthDate"] . "</td>";
                    echo "<td>" . $row["Gender"] . "</td>";
                    echo "<td>" . $row["Blood"] . "</td>";

                    echo "<td>" . "<a onclick = \" javascript:return confirm('Are you sure you want to delete this on the list?')\" href='delete.php?id= $row[ID]' ><button class = 'btn-danger1' >Delete</button></a>" . "</td>";
                    echo "<td>" . "<a href='update.php?id= $row[ID]' ><button class = 'btn-danger2'>Update</button></a>" . "</td>";
                    echo "</tr>";
                }
            } else {
                " <script> alert('No record found.') </script>";
            }
            $conn->close();
            ?>




</body>

</html>