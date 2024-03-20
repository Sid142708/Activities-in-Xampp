<?php
// Array of names
$names = array("John", "Jane", "Alice", "Bob", "Charlie");

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the selected name from the form
    $selected_name = $_POST["selected_name"];
    
    // Output the greeting message
    echo "Hello, $selected_name! Welcome to our website!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greeting Form</title>
</head>
<body>
    <h2>Select Your Name</h2>
    <form method="post">
        <select name="selected_name">
            <?php
            // Iterate through the names array to create options
            foreach ($names as $name) {
                echo "<option value=\"$name\">$name</option>";
            }
            ?>
        </select>
        <input type="submit" value="Submit">
    </form>
</body>
</html> 