<?php
    // Define a custom exception handler function
    function exception_handler($exception) {
        // Display the exception message when an uncaught exception is thrown
        echo "Uncaught exception: " . $exception->getMessage() . "\n";
    }

    // Set the custom exception handler to handle uncaught exceptions globally
    set_exception_handler("exception_handler");

    // Prompt the user to enter the first number
    print("Enter first number: ");
    // Read the user input from the command line (STDIN) as an integer (%d)
    fscanf(STDIN, "%d", $x);

    // Prompt the user to enter the second number
    print("Enter second number: ");
    // Read the user input from the command line (STDIN) as an integer (%d)
    fscanf(STDIN, "%d", $y);

    // Check if the second number is zero, as division by zero is not allowed
    if ($y == 0) {
        // Throw an exception if division by zero is attempted
        throw new Exception("Division by Zero");
    }

    // Perform the division if the second number is non-zero
    $z = $x / $y;

    // Output the result of the division
    print("Result: " . $z);
?>
