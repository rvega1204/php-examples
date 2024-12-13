<?php
// Prompt the user to enter the length
print "Enter length: ";
// Read an integer value from standard input (STDIN)
fscanf(STDIN, "%d", $length);

// Validate the length input
if (!is_numeric($length) || $length <= 0) {
    fprintf(STDERR, "Invalid input for length. Please enter a positive number.\n");
    exit(1); // Exit with an error code
}

// Prompt the user to enter the breadth
print "Enter breadth: ";
// Read an integer value from standard input (STDIN)
fscanf(STDIN, "%d", $breadth);

// Validate the breadth input
if (!is_numeric($breadth) || $breadth <= 0) {
    fprintf(STDERR, "Invalid input for breadth. Please enter a positive number.\n");
    exit(1); // Exit with an error code
}

// Calculate the area of the rectangle
$area = $length * $breadth;

// Output the calculated area to the user
fprintf(STDOUT, "Area = %d\n", $area);
?>
