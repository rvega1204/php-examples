<?php
    // Start the session to access session variables
    session_start();

    // Check if the session variable 'user' is set
    if (isset($_SESSION['user'])) {
        // Display a personalized greeting
        echo "<h1>Hello, " . htmlspecialchars($_SESSION['user']) . "!</h1>";
    } else {
        // Handle cases where the session variable is not set
        echo "<h1>No user session found. Please set a session variable first.</h1>";
    }
?>
