<?php
    echo "<p>Coalesc operator in PHP</p>";  // Output a header for the section

    // Using the Null Coalescing Operator (??) to check if 'user' exists in $_GET
    // If 'user' is not set or is null, assign 'not passed' as the default value
    $user = $_GET['user'] ?? 'not passed';  
    echo "Username: $user\n";  // Output the username or default message

    echo "<p>Ternary operator result</p>";  // Label for the next section

    // Using the Ternary Operator to check if 'user' is set in $_GET
    // If 'user' is set, use the value, otherwise assign 'not passed' as the default
    $user = isset($_GET["user"]) ? $_GET["user"] : "not passed";  
    echo "Username: $user\n";  // Output the username or default message
?>
