<?php
    // Define an interface named 'button' with a method 'clicked'
    interface button {
        public function clicked(); // Method to be implemented by classes
    }

    // Class 'MyButton' implements the 'button' interface
    class MyButton implements button {
        public function clicked() {
            echo "MyButton clicked<br/>"; // Custom behavior for MyButton
        }
    }

    // Class 'YourButton' implements the 'button' interface
    class YourButton implements button {
        public function clicked() {
            echo "YourButton clicked<br/>"; // Custom behavior for YourButton
        }
    }

    // Create an object of 'MyButton' and call the 'clicked' method
    $b1 = new MyButton();
    $b1->clicked(); // Outputs: MyButton clicked

    // Create an object of 'YourButton' and call the 'clicked' method
    $b2 = new YourButton();
    $b2->clicked(); // Outputs: YourButton clicked

    echo "<hr/>";

    // Demonstrating polymorphism with an array of 'button' objects
    $buttons = [new MyButton(), new YourButton()];

    // Loop through each button and call the 'clicked' method
    foreach ($buttons as $button) {
        $button->clicked(); // Outputs the respective behavior of each button
    }
?>
