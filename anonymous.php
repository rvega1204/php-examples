<?php
// Anonymous class that performs basic arithmetic operations
$obj = new class (10) {
    private $x; // Property to store the initial value

    // Constructor to initialize the property $x
    public function __construct($x) {
        $this->x = $x;
    }

    // Method to add a value to $x and return the result
    public function add($y) {
       return $this->x + $y;
    }

    // Method to subtract a value from $x and return the result
    public function sub($y) {
        return $this->x - $y;
    }
};

// Perform addition and display the result
$result = $obj->add(20);
echo "Addition = $result<br/>";

// Perform subtraction and display the result
$result = $obj->sub(5);
echo "Subtraction = $result<br/>";
?>
