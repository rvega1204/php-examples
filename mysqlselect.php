<?php
    // Database connection details
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db_con = mysqli_connect($server, $user, $pass);

    // Check the connection
    if (!$db_con) {
        die("Error connecting to the database: " . mysqli_connect_error());
    }

    // Select the database
    $dbname = "test_db"; // Replace with your database name if needed
    mysqli_select_db($db_con, $dbname);

    // SQL query to fetch data from the employee table
    $sql = "SELECT * FROM employee";
    $result = mysqli_query($db_con, $sql);

    // Check for errors in the query
    if (!$result) {
        die("Error retrieving data: " . mysqli_error($db_con));
    }

    // Get the number of rows and fields in the result
    $num_result = mysqli_num_rows($result);
    $num_fields = mysqli_num_fields($result);

    // Start creating the HTML table
    echo "<table border='1'>";

    // Table headers (column names)
    echo "<tr>";
    for ($i = 0; $i < $num_fields; $i++) {
        $field_info = mysqli_fetch_field($result); // Get field info
        echo "<th>" . $field_info->name . "</th>"; // Display field name as header
    }
    echo "</tr>";

    // Fetch and display each row of data
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>" . $value . "</td>"; // Display each field's value
        }
        echo "</tr>";
    }

    // Close the table
    echo "</table>";

    // Close the database connection
    mysqli_close($db_con);
?>
