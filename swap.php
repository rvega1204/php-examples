<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Call by Reference</title>
</head>
<body>
    <h1>Call by Reference in PHP</h1>
    
    <?php
        // Define a function to swap two variables by reference
        function swap(&$x, &$y) {           
            // Store the value of $x temporarily
            $t = $x;
            // Assign the value of $y to $x
            $x = $y;
            // Assign the temporary value (original $x) to $y
            $y = $t;
        }

        // Initialize two variables
        $a = 10;
        $b = 20;

        // Display the values before the swap
        echo "Before swap: a = $a, b = $b<br>";

        // Call the swap function with variables passed by reference
        swap($a, $b);

        // Display the values after the swap
        echo "After swap: a = $a, b = $b<br>";
    ?>
</body>
</html>
