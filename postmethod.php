<?php
    // Check if the form is submitted via POST method
    if (isset($_POST["submit"])) {
        // Sanitize and output the name and age values using htmlspecialchars() to prevent XSS attacks
        $name = htmlspecialchars($_POST['name']);
        $age = htmlspecialchars($_POST["age"]);

        // Output the welcome message with the sanitized values
        echo "Welcome " . $name . "<br/>";  // Display the user's name
        echo "You're " . $age . " years old.\n";  // Display the user's age with proper spacing

        exit();
    }        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form</title>
</head>
<body>
    <!-- Form to collect name and age with POST method -->
    <form action="<?php $_PHP_SELF ?>" method="POST">  <!-- The form submits to the same page -->
        <!-- Input field for the user's name -->
         <div>
            Name: <input type="text" name="name" required>
         </div>
        
        <!-- Input field for the user's age -->
         <div>
            Age: <input type="text" name="age" required>
         </div>
        <!-- Submit button to submit the form -->
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>

