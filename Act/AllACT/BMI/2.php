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

        text-align: center;
    }
    .text {
        text-align: center;
        font-size: 18px;
    }
    div {
        width: 420px;

        padding: 10px;
        border: 5px solid gray;
        margin: 0;
        margin: auto;
    }
    .button {
        background-color: #04AA6D;
        /* Green */
        border: none;
        color: white;
        padding: 5px 150px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
    }
    .button {
        background-color: white;
        color: black;
        border: 2px solid #04AA6D;
    }
    .button:hover {
        background-color: #04AA6D;
        color: white;
    }
    .center {
        margin-top: 15%;
    }
</style>
<body>

    <form method="post" class="center">

        <div class="text">
            <select name="type" id="dropdown" onchange="select()">
                <option value="Metric">Metric</option>
                <option value="Imperial">Imperial</option>
            </select>

        </div>
        <div class="row">
            <div class="column">

                <label for="KG" id="Weight">Weight in Kg: </label><br>
                <input type="text" name="Weight" pattern="[0-9]*[.]?[0-9]+" size="45" required><br><br>
                <label for="Meter" id="Height">Height in Meter:</label><br>
                <input type="text" name="Height" pattern="[0-9]*[.]?[0-9]+" size="45" required>
            </div>

        </div>
        <div class="text">
            <input type="submit" value="Submit" class="button" size="45">
        </div>

        <br>
    </form>


    <?php
    $name = "Bernadas";
    $age = "20";
    $contact = "09455319443";
    $birth = "06/14/2003";
    $gender = "Male";
    $bloodtype = "O";
    ?>

    <?php
    session_start();
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $type = $_POST['type'];

        if ($type == 'Metric') {

            $Weight = $_POST['Weight'];
            $Height = $_POST['Height'];

            $BMI = $Weight / ($Height * $Height);

            $BMI = round($BMI, 2);

            echo '<div class = "text"> Your BMI is: ';
            echo "$BMI";
            echo '</div>';
        } else {

            $Weight = $_POST['Weight'];
            $Height = $_POST['Height'];

            $BMI = (703 * $Weight) / ($Height * $Height);

            $BMI = round($BMI, 2);

            echo '<div class = "text"> Your BMI is: ';
            echo "$BMI";
            echo '</div>';
        }
    }

    ?>

    <script>
        function select() {
            const Option = document.getElementById('dropdown').value;

            if (Option === "Metric") {

                document.getElementById('Weight').textContent = "Weight in Kg:";
                document.getElementById('Height').textContent = "Height in Meter:";
            } else if (Option === "Imperial") {
                document.getElementById('Weight').textContent = "Weight in Lbs:";
                document.getElementById('Height').textContent = "Height in Inch:";
            }
        }
    </script>

</body>

</html>