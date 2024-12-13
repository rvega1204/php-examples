<?php
    // Abstract class 'shape' defines the structure for derived classes
    abstract class shape {
        // Abstract method 'area' to be implemented by subclasses
        abstract protected function area();
    }

    // Rectangle class extends the abstract class 'shape'
    class rectangle extends shape {
        public $l, $b; // Properties for length and breadth

        // Constructor to initialize rectangle dimensions
        public function __construct($x, $y) {
            $this->l = $x;
            $this->b = $y;
        }

        // Method to calculate the area of the rectangle
        public function area() {
            $a = $this->l * $this->b; // Formula: length * breadth
            return $a;
        }
    }

    // Circle class extends the abstract class 'shape'
    class circle extends shape {
        public $r; // Property for radius

        // Constructor to initialize the radius of the circle
        public function __construct($x) {
            $this->r = $x;
        }

        // Method to calculate the area of the circle
        public function area() {
            $pi = 3.142; // Approximation for π
            $a = pow($this->r,  2) * $pi;
            return $a;
        }
    }

    // Create an object of the rectangle class
    $r1 = new rectangle(10, 20);
    $area = $r1->area(); // Calculate the area of the rectangle
    echo "Area of rectangle = $area<br/><br/>";

    // Create an object of the circle class
    $c1 = new circle(10);
    $area = $c1->area(); // Calculate the area of the circle
    echo "Area of circle = $area";
?>
