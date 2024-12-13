<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP User-Defined Function with Variable Arguments</title>
</head>
<body>
    <h1>User-Defined Function with Variable Arguments</h1>
    
    <?php
        // Define a function to calculate the average of variable arguments
        function average() {
            // Retrieve all the arguments passed to the function
            $args = func_get_args();
            
            // Display the arguments (for debugging or understanding purposes)
            echo "Arguments: ";
            print_r($args);
            echo "<br>";

            // Calculate the sum of all arguments
            $sum = array_sum($args); // Built-in function to simplify the sum
            
            // Count the number of arguments
            $count = count($args); // More readable than func_num_args()

            // Prevent division by zero
            if ($count === 0) {
                echo "No numbers provided, cannot calculate average.<br>";
                return;
            }

            // Calculate the average
            $avg = $sum / $count;

            // Display the average
            echo "Average = $avg<br>";
        }

        // Call the function with a variable number of arguments
        average(10, 20, 30, 40, 50);
    ?>
</body>
</html>
