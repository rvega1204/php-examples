<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Connection to MySQL</h1>
    <?php
        // Database connection variables
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "test_db"; // Database name defined here

        // Establish a connection to MySQL
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass);

        // Check if the connection was successful
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        echo "Connection successful<br/>";

        // Create the database if it doesn't exist
        $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
        if (mysqli_query($conn, $sql)) {
            echo "Database '$dbname' created or already exists<br/>";
        } else {
            die("Error creating database: " . mysqli_error($conn));
        }

        // Select the database for further operations
        mysqli_select_db($conn, $dbname);

        // Create the employee table if it doesn't exist
        $sql = "CREATE TABLE IF NOT EXISTS employee (
            emp_id INT NOT NULL AUTO_INCREMENT, 
            emp_name VARCHAR(20) NOT NULL, 
            emp_address VARCHAR(100) NOT NULL, 
            emp_salary INT NOT NULL, 
            PRIMARY KEY (emp_id)
        )";

        if (mysqli_query($conn, $sql)) {
            echo "Table 'employee' created successfully<br/>";
        } else {
            die("Error creating table: " . mysqli_error($conn));
        }

        // Prepare the query with placeholders
        $stmt = $conn->prepare("INSERT INTO employee (emp_name, emp_address, emp_salary) VALUES (?, ?, ?)");

        // Bind the parameters (types and values)
        $emp_name = "Juan";       // string
        $emp_address = "Limon";    // string
        $emp_salary = 50000;      // integer

        // Bind the parameters to the placeholders
        $stmt->bind_param("ssi", $emp_name, $emp_address, $emp_salary);

        // Execute the query
        if ($stmt->execute()) {
            echo "Record inserted successfully<br/>";
        } else {
            die("Error inserting record: " . $stmt->error);
        }

        // Close the prepared statement and database connection
        $stmt->close();
        mysqli_close($conn);
    ?>
</body>
</html>
