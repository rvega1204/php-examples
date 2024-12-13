<?php

    // Establish a connection to the MySQL database
    $con = mysqli_connect("localhost", "root", "", "test_db");

    // Check for connection errors
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

    // Indicate successful connection
    echo "Connection successful.<br/>";

    // Query to fetch all records from the 'employee' table
    $sql = "SELECT * FROM employee";
    $result = mysqli_query($con, $sql);

    // Check if there are any rows in the result set
    if ($result && mysqli_num_rows($result) > 0) {
        // Fetch and display each row of the result set
        while ($row = mysqli_fetch_assoc($result)) {
            echo "Employee ID: " . htmlspecialchars($row['emp_id']) . "<br/>";
            echo "Name: " . htmlspecialchars($row['emp_name']) . "<br/>";
            echo "Address: " . htmlspecialchars($row['emp_address']) . "<br/>";
            echo "Salary: " . htmlspecialchars($row['emp_salary']) . "<br/><br/>";
        }

        // Free the result set to release memory
        mysqli_free_result($result);
    } else {
        echo "No records found.<br/>";
    }

    // Close the database connection
    mysqli_close($con);
?>