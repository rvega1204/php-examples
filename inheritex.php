<?php
class Student {
    protected $name, $age, $marks;

    // Constructor for Student class
    public function __construct($name = null, $age = null, $marks = null) {
        if ($name !== null && $age !== null && $marks !== null) {
            $this->name = $name;
            $this->age = intval($age);
            $this->marks = intval($marks);
        }
    }

    // Method to get student details
    public function getDetails() {
        echo "Name: $this->name, Age: $this->age, Marks: $this->marks<br/>";
    }
}

class Engg extends Student {
    private $branch;

    // Constructor for Engg class
    public function __construct($name = null, $age = null, $marks = null, $branch = null) {
        if ($name !== null && $age !== null && $marks !== null && $branch !== null) {
            parent::__construct($name, $age, $marks); // Call parent constructor
            $this->branch = $branch;
        }
    }

    // Override getDetails method
    public function getDetails() {
        parent::getDetails(); // Call parent method
        echo "Branch: $this->branch<br/>";
    }
}

// Instantiate the Engg class
$s1 = new Engg("xyz", 20, 340, "CSE");
$s1->getDetails();
?>
