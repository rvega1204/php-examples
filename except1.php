<?php
    // Prompt user to enter the first number
    print("Enter first number: ");
    fscanf(STDIN, "%d", $x);

    // Prompt user to enter the second number
    print("Enter second number: ");
    fscanf(STDIN, "%d", $y);
    
    try {
        // Check if the second number is zero before attempting division
        if ($y == 0) {
            throw new Exception("Division by Zero is not allowed.");
        }

        // Perform the division if no exception is thrown
        $z = $x / $y;
        echo "Result: " . $z . "\n";  // Output the result

    } catch (Exception $e) {
        // Catch and display the exception message
        echo "Error: " . $e->getMessage() . "\n";
    }
?>
