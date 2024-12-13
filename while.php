<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP While Loop Example</title>
</head>
<body>
    <h1>While Loop Examples</h1>
    
    <?php
        // First while loop - Counting from 1 to 10
        $i = 0;
        echo "<h2>Counting from 1 to 10:</h2>";
        while ($i < 10) {
            $i++; // Increment the counter
            echo "Number: $i<br/>";
        }

        echo "<br/><br/>"; // Line break between the two sections

        // Second while loop - Random number generation until 5 is encountered
        $x = 0;
        echo "<h2>Random numbers until 5:</h2>";
        while ($x != 5) {
            $x = rand(1, 10); // Generate a random number between 1 and 10
            echo "Number: $x<br/>";
        }
    ?>
</body>
</html>
