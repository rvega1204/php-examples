<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Set character encoding to UTF-8 for better compatibility -->
    <meta charset="UTF-8">
    
    <!-- Ensure proper scaling on different devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Page title for identification -->
    <title>PHP Cookie Reading</title>
</head>
<body>
    <?php
        // Check if the "name" cookie is set and display the welcome message
        if (isset($_COOKIE["name"])) {
            echo "<h1 style='text-align: center'>Welcome, " . htmlspecialchars($_COOKIE["name"]) . "!</h1><br/>";
        } else {
            // Display a message if the "name" cookie is not set
            echo "<h2 style='text-align: center; color: red'>Name not set</h2>";
        }

        // Check if the "age" cookie is set and display the age
        if (isset($_COOKIE["age"])) {
            echo "<h1 style='text-align: center'>Age: " . htmlspecialchars($_COOKIE["age"]) . "<br/></h1>";
        } else {
            // Display a message if the "age" cookie is not set
            echo "<h2 style='text-align: center; color: red'>Age not set</h2>";
        }
    ?>
</body>
</html>
