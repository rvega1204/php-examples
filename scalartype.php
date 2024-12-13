<?php
    declare(strict_types = 1);
    echo "Scalar type declaration<br/>";

    // Return type remains int, but the result of division is cast to int
    function average(int $x, int $y): int {
        $value = ($x + $y) / 2;
        return (int) $value;  // Cast result to int
    }

    $avg = average(10, 20);
    echo "Average: $avg";
?>
