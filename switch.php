<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Switch Example</title>
</head>
<body>
    <h1>Switch Statement Example</h1>
    
    <?php
        // Generate random numbers for $x, $y, and $z
        $x = rand(1, 10);
        $y = rand(1, 10);
        $z = rand(1, 4); // Operation code: 1 for addition, 2 for subtraction, etc.

        // Display the numbers and the operation code
        echo "Numbers: $x, $y | Operation code: $z<br/>";

        // Switch statement to perform different operations based on the value of $z
        switch ($z) {
            case 1:
                // Addition operation
                $r = $x + $y;
                break;
            case 2:
                // Subtraction operation
                $r = $x - $y;
                break;
            case 3:
                // Multiplication operation
                $r = $x * $y;
                break;
            case 4:
                // Division operation with check for division by zero
                ($y == 0) ? $r = 0: $r = $x / $y;
                break;
            default:
                $r = "Invalid operation code";
                break;
        }

        // Display the result
        echo "Result: $r<br/>";
    ?>
</body>
</html>
