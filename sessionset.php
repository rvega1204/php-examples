<?php
    // Check if the form has been submitted
    if (isset($_POST["submit"])) {
        // Start the session
        session_start();

        // Set a session variable 'user' with the provided name
        $_SESSION['user'] = htmlspecialchars($_POST["name"]); // Sanitize input for safety

        // Notify the user that the session variable is set
        echo "Session variable set successfully!<br/>";

        // Provide a link to another page to read the session variables
        echo "<a href='checksession.php'><b>Read session variables</b></a>";

        // Exit to stop further processing of the script
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Example</title>
</head>
<body>
    <!-- Display a simple form for user input -->
    <h2>Session Example Form</h2>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required />
        <br/><br/>
        <label for="age">Age:</label>
        <input type="text" id="age" name="age" />
        <br/><br/>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
