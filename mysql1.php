<?php

    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Establish a connection to the MySQL server
    $con = new mysqli($servername, $username, $password);

    // Check for connection errors
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Indicate successful connection
    echo "Connection successful.<br/>";

    // SQL to create a new database
    $sql = "CREATE DATABASE IF NOT EXISTS test_db";
    if ($con->query($sql) === TRUE) {
        echo "Database 'test_db' created successfully.<br/>";
    } else {
        echo "Error creating database: " . $con->error . "<br/>";
    }

    // Select the created database
    $con->select_db("test_db");

    // SQL to create the 'employee' table if it doesn't exist
    $sql = "CREATE TABLE IF NOT EXISTS employee (
        emp_id INT NOT NULL AUTO_INCREMENT,
        emp_name VARCHAR(20) NOT NULL,
        emp_address VARCHAR(100) NOT NULL,
        emp_salary INT NOT NULL,
        PRIMARY KEY (emp_id)
    )";

    if ($con->query($sql) === TRUE) {
        echo "Table 'employee' created successfully.<br/>";
    } else {
        echo "Error creating table: " . $con->error . "<br/>";
    }

    // SQL to insert a new record into the 'employee' table
    $sql = "INSERT INTO employee (emp_name, emp_address, emp_salary) VALUES ('Juan', 'Limon', 50000)";
    if ($con->query($sql) === TRUE) {
        echo "New record added to 'employee' table.<br/>";
    } else {
        echo "Error inserting data: " . $sql . "<br/>" . $con->error . "<br/>";
    }

    // Close the database connection
    $con->close();

?>
