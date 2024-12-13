<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP For Loop Example</title>
</head>
<body>
    <h1>For Loop Examples</h1>
    
    <?php
        // First for loop - Counting from 0 to 10
        echo "<h2>Counting from 0 to 10:</h2>";
        for ($i = 0; $i <= 10; $i++) {
            echo $i . " ";
        }

        echo "<br/><br/>"; // Line break between sections

        // Second for loop - Random number generation until 5 is encountered
        echo "<h2>Random numbers until 5:</h2>";
        for ($x = 0; $x != 5;) {
            $x = rand(1, 10); // Generate a random number between 1 and 10
            echo $x . " ";
        }

        echo "<br/><br/>"; // Line break between sections

        // Third for loop - Iterating over an array of numbers
        echo "<h2>Array elements:</h2>";
        $arr = array(10, 20, 30, 40, 50); // Array of numbers
        // Using foreach loop for better readability and cleaner code
        foreach ($arr as $value) {
            echo $value . " "; // Print each element of the array
        }
    ?>
</body>
</html>
