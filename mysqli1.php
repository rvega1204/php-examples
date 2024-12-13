<?php

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_db";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Indicate successful connection
echo "Connection successful.<br/>";

// SQL query to select all records from the 'employee' table
$sql = "SELECT * FROM employee";
$result = $conn->query($sql);

// Retrieve the number of rows and fields in the result set
$num_result = $result->num_rows; // Using -> to access object properties
$num_fields = $result->field_count; // Using -> to access object properties

// Start building an HTML table to display the data
echo "<table border='1'>";
echo "<tr>";

// Loop through the fields to display column headers
for ($i = 0; $i < $num_fields; $i++) {
    echo "<td>" . ($result->fetch_field())->name . "</td>"; // ->fetch_field() retrieves field metadata
}

echo "</tr>";

// Loop through the rows to display data
for ($i = 0; $i < $num_result; $i++) {
    $row = $result->fetch_row(); // ->fetch_row() retrieves a row as an indexed array
    echo "<tr>";
    for ($j = 0; $j < $num_fields; $j++) {
        echo "<td>" . htmlspecialchars($row[$j]) . "</td>"; // Escape output to prevent XSS
    }
    echo "</tr>";
}

echo "</table>";

// Close the database connection
$conn->close(); // ->close() closes the connection

?>