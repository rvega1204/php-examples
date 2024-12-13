<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Continue Example</title>
</head>
<body>
    <h1>Continue Statement Example</h1>
    
    <?php
        // Initialize a counter variable
        $y = 0;

        // Start a while loop that runs until $y reaches 10
        while ($y < 10) {
            $y++;

            // Generate a random number between 1 and 10
            $x = rand(1, 10);

            // If the random number is 5, skip this iteration and continue with the next
            if ($x == 5) continue;

            // Display the current iteration number and the generated random number
            echo "Iteration $y : Value: $x<br>";
        }
    ?>
</body>
</html>
