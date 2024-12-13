<?php
    // Specify the filename for the new file
    $filename = "newFile.txt";

    // Open the file in write mode ("w"). If the file doesn't exist, it will be created.
    $file = fopen($filename, "w");

    // Check if the file was successfully opened
    if (!$file) {
        // Output error message if the file cannot be opened
        echo "Error opening file " . $filename;
        exit(); // Stop the script execution
    }

    // Define the string to be written to the file using heredoc syntax
    // Heredoc preserves the formatting and newlines
    $str = <<<STR
        This is the first line\n 
        This is the second line\n
        This is the third line\n
    STR;

    // Write the string to the file
    fwrite($file, $str);

    // Close the file to ensure that changes are saved and resources are released
    fclose($file);

    // Confirm that the file has been created successfully
    echo "<h1 style='text-align: center'>File created successfully " . $filename . "</h1>";
?>
