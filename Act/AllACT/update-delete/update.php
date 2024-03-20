<?php

include 'connection.php';
$ID = $_GET['id'];
$Record = mysqli_query($con, "SELECT * FROM `info` WHERE ID = $ID");
$data = mysqli_fetch_array($Record);

?>


<div class="all">
    <div class="card">
        <form method="post">

            <br><input type="hidden" name="id" value="<?php echo $data['ID'] ?>">
            <label for="">Name: </label>


            <br><input type="text" value="<?php echo $data['Name'] ?>" name="name"><br>

            <label for="">Age: </label>
            <br><input type="text" value="<?php echo $data['Age'] ?>" name="age" id=""><br>

            <label for="">Address: </label>
            <br><input type="text" value="<?php echo $data['Address'] ?>" name="address" id=""><br>

            <label for="">Contact: </label>
            <br><input type="text" value="<?php echo $data['Contact'] ?>" name="contact" id=""><br>

            <label for="">Birthdate: </label>
            <br><input type="text" value="<?php echo $data['BirthDate'] ?>" name="birthdate" id=""><br>

            <label for="">Gender: </label>
            <br><input type="text" value="<?php echo $data['Gender'] ?>" name="gender" id=""><br>

            <label for="">Blood Type: </label>
            <br><input type="text" value="<?php echo $data['Blood'] ?>" name="blood" id=""><br>


            <input type="submit" value="Update" name="update">
        </form>
    </div>
</div>


<?php


if (isset($_POST['update'])) {

    include 'connection.php';

    $ID = $_POST['id'];
    $name = $_POST["name"];
    $age = $_POST["age"];
    $address = $_POST["address"];
    $contact = $_POST["contact"];
    $birthdate = $_POST["birthdate"];
    $gender = $_POST["gender"];
    $blood = $_POST["blood"];


    $sql = "UPDATE info SET Name = '$name', Age = '$age', Address = '$address', Contact = '$contact', BirthDate = '$birthdate', Gender = '$gender', Blood = '$blood' WHERE ID = '$ID'";

    $result = $con->query($sql);

    if ($result == TRUE) {
        echo " <script> alert('Successfully updated') </script>";
    } else {

        echo  $con->error;
    }
}

?>


<?php
