<?php
    // Check if the form has been submitted
    if (isset($_POST["submit"])) {
        
        // Retrieve user input from the form
        $nm = $_POST["name"];
        $age = $_POST["age"];

        // Set a cookie for the user's name that expires when the browser session ends
        setcookie("name", $nm);

        // Set a cookie for the user's age that expires in 1 hour (3600 seconds)
        // '/' specifies the path for which the cookie is valid (the entire domain)
        // The empty string for the domain ensures the cookie is valid for the current domain
        // '0' as the last argument means it is a non-secure cookie (works on both HTTP and HTTPS)
        setcookie("age", $age, time() + 3600, "/", "", 0);
        
        // Display a message indicating that the cookies have been set
        echo "<h2>Cookies are set</h2>";
        
        // Provide a link for the user to access a page where they can read the cookies
        echo "<a href='getcookie.php'><b>Click here to read the cookies</b></a>";
    }
?>