<!DOCTYPE html>
<html>

<body>

    <p>SIMPLE FILE READING AND WRITING</p>

    <?php

    $content = file_get_contents("myfile.txt");
    echo "File content: $content";

    $newContent = "This is new content";
    file_put_contents("myfile.txt", $newContent);


    ?>

</body>

</html>