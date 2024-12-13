<?php
    // Generate 5 random bytes of binary data
    $bytes = random_bytes(5);

    // Display the raw bytes (binary data) - will likely appear as unreadable characters
    echo "Random bytes (raw): " . $bytes . "<br/>";

    // Convert the raw bytes to hexadecimal for a readable output
    echo "Random bytes (hex): " . bin2hex($bytes) . "<br/>";

    // Generate a random integer between 99 and 100 (inclusive)
    $int = random_int(1, 100);

    // Display the random integer
    echo "Random integer: $int";
?>
