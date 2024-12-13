<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP If-Else Example</title>
</head>
<body>
    <h1>If-Else Statement Example</h1>
    
    <?php
        // Generate a random number between 1 and 100
        $x = rand(1, 100);
        echo "Random number is $x<br/>";

        // Check the value of $x using an if-else statement
        if ($x < 25) {
            // This block is executed if $x is less than 25
            echo "The number is less than 25: $x<br/>";
        } elseif ($x < 50) {
            // This block is executed if $x is between 25 and 49
            echo "The number is less than 50 but greater than or equal to 25: $x<br/>";
        } else {
            // This block is executed if $x is greater than or equal to 50
            echo "The number is greater than or equal to 50: $x<br/>";
        }
    ?>
</body>
</html>
