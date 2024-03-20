<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        box-sizing: border-box;
    }

    .row {
        display: flex;
    }

    .column {
        flex: 50%;
    }

    div {
        width: 600px;

        padding: 10px;
        border: 2px solid black;
        margin: 1;
        margin: 10px 
     
    }
</style>

<body>

    <div class="row">
        <div class="column">
            <form method="post">
                <input type="text" name="name" placeholder="Enter your name" required><br>
                <input type="number" name="age" placeholder="Age" required><br>
                <input type="number" name="contact" placeholder="Contact no." required><br>
                <input type="date" name="birth" placeholder="Birthdate" required><br>
                <select name="gender" id="dropdown" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select><br>
                Blood Type:
                <select name="blood" id="dropdown" required>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="AB">AB</option>
                    <option value="O">O</option>
                </select>
                <br><br>
                <input type="submit" value="Submit">
            </form>
        </div>

        <?php
        session_start();
        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $Name = $_POST['name'];
            $Age = $_POST['age'];
            $Contact = $_POST['contact'];
            $Birth = $_POST['birth'];
            $gender = $_POST['gender'];
            $blood = $_POST['blood'];

            echo '<br>';
            echo '<div class="column">';
            echo "$Name";
            echo '<br>';
            echo "$Age";
            echo '<br>';
            echo "$Contact";
            echo '<br>';
            echo "$Birth";
            echo '<br>';
            echo "$gender";
            echo '<br>';
            echo "$blood";
            echo '</div>';
        }

        ?>
    </div>



</body>

</html>