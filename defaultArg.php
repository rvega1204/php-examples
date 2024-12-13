<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP User-Defined Function with Default Arguments</title>
</head>
<body>
    <h1>User-Defined Function with Default Arguments</h1>
    
    <?php
        // Define a function to calculate percentage with a default value for the total marks
        function percentage($p, $c, $m, $ttl = 300) {
            // Display the input values
            echo "Marks: p = $p, c = $c, m = $m, Total = $ttl<br>";
            
            // Calculate the percentage
            $percent = ($p + $c + $m) * 100 / $ttl;
            
            // Display the calculated percentage
            echo "Percentage = $percent%<br><br>";
        }

        // Call the function with default total marks (300)
        percentage(50, 60, 70);

        // Call the function with a custom total marks value (150)
        percentage(25, 30, 35, 150);
    ?>
</body>
</html>
