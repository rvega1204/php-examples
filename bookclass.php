<?php
// Class representing books with title and price
class Books {
    // Properties
    private $price;
    private $title;

    // Constructor to initialize the book's title and price
    public function __construct($title, $price) {
        $this->title = $title;
        $this->price = $price;
    }

    // Getter for price
    public function getPrice() {
        return $this->price;
    }

    // Getter for title
    public function getTitle() {
        return $this->title;
    }

    // Setter for price
    public function setPrice($price) {
        $this->price = $price;
    }

    // Setter for title
    public function setTitle($title) {
        $this->title = $title;
    }

    // Method to display book details
    public function getDetails() {
        echo "Title: $this->title, Price: \$$this->price<br/>";
    }
}

// Creating instances of the Books class
$physics = new Books("High School Physics", 10);
$maths = new Books("Algebra", 15);
$chemistry = new Books("Advanced Chemistry", 20);

// Display initial details of the books
$physics->getDetails();
$chemistry->getDetails();
$maths->getDetails();

echo "<p>Physics price changed to 25</p>";
$physics->setPrice(25);

echo "<p>Maths title changed</p>";
$maths->setTitle("Modern Algebra");

// Display updated details
$physics->getDetails();
$maths->getDetails();

// Calculate and display total cost
$totalCost = $physics->getPrice() + $maths->getPrice() + $chemistry->getPrice();
echo "Total cost = \$$totalCost";
?>
