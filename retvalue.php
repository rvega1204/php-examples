<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP User-Defined Function Return Value</title>
</head>
<body>
    <h1>User-Defined Function with Return Value</h1>
    
    <?php
        // Define a function to calculate the average of variable arguments
        function average(): float|null {
            // Retrieve all the arguments passed to the function
            $args = func_get_args();
            
            // Display the arguments (for understanding/debugging purposes)
            echo "Arguments: ";
            print_r($args);
            echo "<br>";

            // Count the number of arguments
            $count = count($args);

            // Prevent division by zero
            if ($count === 0) {
                echo "No numbers provided, cannot calculate average.<br>";
                return null; // Return null when no arguments are provided
            }

            // Calculate the sum of all arguments
            $sum = array_sum($args);

            // Calculate the average
            $avg = $sum / $count;

            // Return the calculated average
            return $avg;
        }

        // Call the function with a variable number of arguments and store the result
        $avg = average(10, 20, 30, 40, 50);

        // Display the returned average value
        echo "Average = $avg";
    ?>
</body>
</html>
