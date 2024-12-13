<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Break Example</title>
</head>
<body>
    <h1>Break Statement Example</h1>
    
    <?php
        // Initialize a counter variable
        $y = 0;

        // Start a while loop that runs until $y reaches 10
        while ($y < 10) {
            $y++;

            // Generate a random number between 1 and 10
            $x = rand(1, 10);

            // Display the generated random number
            echo "Generated number: $x<br>";

            // Break the loop if the random number equals 5
            if ($x == 5) {
                echo "Number 5 encountered. Exiting the loop.<br>";
                break;
            }
        }
    ?>
</body>
</html>