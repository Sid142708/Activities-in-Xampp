<!DOCTYPE html>
<html>

<body>

    <?php
    function isPrime($num)
    {

        if ($num <= 1) return false;
        for ($i = 2; $i < sqrt($num); $i++) {
            if ($num % $i == 0) return false;
        }

        return true;
    }

    $number = 13;

    if (isPrime($number)) {

        echo "$number is a prime number";
    } else {
        echo "$number is a not prime number";
    }


    ?>

</body>

</html>