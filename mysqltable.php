<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
        if (isset($_POST["add"])) {
            // Database connection details
            $dbhost = "localhost"; 
            $dbuser = "root"; 
            $dbpass = ""; 
            $dbname = "test_db"; // Ensure you select your database here

            // Create connection
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

            // Check connection
            if (!$conn) {
                die("Could not connect: " . mysqli_connect_error());
            }

            // Get form data
            $emp_name = mysqli_real_escape_string($conn, $_POST['emp_name']);
            $emp_address = mysqli_real_escape_string($conn, $_POST['emp_address']);
            $emp_salary = mysqli_real_escape_string($conn, $_POST['emp_salary']);

            // Prepare SQL statement using prepared statements to prevent SQL injection
            $sql = "INSERT INTO employee (emp_name, emp_address, emp_salary) VALUES (?, ?, ?)";

            // Prepare the statement
            $stmt = $conn->prepare($sql);
            if (!$stmt) {
                die("Error preparing statement: " . mysqli_error($conn));
            }

            // Bind the parameters to the prepared statement
            $stmt->bind_param("ssi", $emp_name, $emp_address, $emp_salary);

            // Execute the statement
            if ($stmt->execute()) {
                echo "Data inserted successfully<br/>";
            } else {
                die("Error executing query: " . mysqli_error($conn));
            }

            // Close the statement and connection
            $stmt->close();
            mysqli_close($conn);
        }
    ?>
    <h1>Add new employee</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <table border="0">
            <tr>
                <td width="100">Employee Name</td>
                <td><input type="text" name="emp_name" required></td>
            </tr>
            <tr>
                <td width="100">Employee Address</td>
                <td><input type="text" name="emp_address" required></td>
            </tr>
            <tr>
                <td width="100">Employee Salary</td>
                <td><input type="number" name="emp_salary" required></td>
            </tr>
            <tr>
                <td width="100"></td>
                <td><input type="submit" name="add" value="Add Employee"></td>
            </tr>
        </table>
    </form>
</body>
</html>