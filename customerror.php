<?php
    // Set error reporting level to only report fatal errors
    error_reporting(E_ERROR);

    // Custom error handler function
    function handleError($errno, $errstr) {
        // Print the error number and message
        echo "Error #[$errno] $errstr<br/>";
        // Terminate the script after an error occurs
        echo "Terminating PHP script";
        die(); // Stop further script execution
    }

    // Register the custom error handler
    set_error_handler("handleError");

    // Attempt to open a file that may not exist
    $f = fopen("invalidFile.txt", "r");
    echo "File opened successfully<br/>";
    // Close the file resource
    fclose($f);
?>