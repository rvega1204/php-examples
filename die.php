<?php
    // Check if the file "text.txt" exists
    if (!file_exists("text.txt")) {
        // Exit the script with an error message if the file doesn't exist
        die("File not found");
    } else {
        // Open the file in read mode ("r") if it exists
        $file = fopen("text.txt", "r");

        // Output a success message if the file is opened successfully
        echo "File opened successfully<br/>";
    }

    // Close the file after reading
    fclose($file);
?>
