<?php
    // Using the spaceship operator (<=>) for three-way comparison
    echo "Using the spaceship operator (<=>) for three-way comparison<br/>";
    // Comparing 5 with the result of 10 divided by 2 (which is 5)
    echo "5 <=> 10/2 = " . (5 <=> 10 / 2) . "<br/>"; // Output will be 0 (equal)

    // Comparing 5 with the result of 10 divided by 2.1 (which is approximately 4.76)
    echo "5 <=> 10/2.1 = " . (5 <=> 10 / 2.1) . "<br/>"; // Output will be 1 (5 is greater than 4.76)

    // Comparing 3.142 with the result of 22 divided by 7 (which is approximately 3.142857)
    echo "3.142 <=> 22/7 = " . (3.142 <=> 22 / 7) . "<br/>"; // Output will be -1 (3.142 is less than 3.142857)

    // Comparing the substring "Hello" from 'Hello world' with the string "Hello"
    echo "substr('Hello world', 0,5) <=> 'Hello' = ";
    echo (substr('Hello world', 0,5) <=> "Hello") ."<br/>"; // Output will be 0 (both are equal)
?>