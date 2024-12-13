<?php
    // Specify the filename to read from
    $filename = "newFile.txt";

    // Open the file in read mode ("r")
    $file = fopen($filename, "r");

    // Check if the file was successfully opened
    if (!$file) {
        // Output error message if the file cannot be opened
        echo "Error opening the file " . $filename . "<br/>";
        exit(); // Stop the script execution
    }

    // Read and output each line from the file until the end of file (EOF) is reached
    while (!feof($file)) {
        // Read one line from the file and echo it with a line break
        echo fgets($file) . "<br/>";
    }

    // Close the file to release the file handle
    fclose($file);
?>
