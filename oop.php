<?php
class Book {
     // TODO: Add properties as Private
    private $title;
    private $availableCopies;
    
    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }
    
   // TODO: Add getTitle method
    public function getTitle() {
        return $this->title;
    }
    
     // TODO: Add getAvailableCopies method
    public function getAvailableCopies() {
        return $this->availableCopies;
    }
    
    // TODO: Add borrowBook method
    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true;
        } else {
            return false;
        }
    }
    
    // TODO: Add returnBook method
    public function returnBook() {
        $this->availableCopies++;
    }
}

class Member {
    // Private property for name
    private $name;
    
    public function __construct($name) {
        $this->name = $name;
    }
    
     // TODO: Add getName method
    public function getName() {
        return $this->name;
    }
    
    // TODO: Add borrowBook method
    public function borrowBook($book) {
        if ($book->borrowBook()) {
             $this->name . " borrowed '" . $book->getTitle() . "'.\n";
        } else {
            $this->name .$book->getTitle() . "' is not available for borrowing.\n";
        }
    }
    
    // TODO: Add returnBook method
    public function returnBook($book) {
        $book->returnBook();
        echo $this->name . " returned '" . $book->getTitle() . "'.\n";
    }
}

// Usage

// Create 2 books
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// Create 2 members
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// Members borrow books
$member1->borrowBook($book1);
$member2->borrowBook($book2);

// Print available copies
echo "Available Copies of '" . $book1->getTitle() . "': " . $book1->getAvailableCopies() . "\n";
echo "Available Copies of '" . $book2->getTitle() . "': " . $book2->getAvailableCopies() . "\n";
?>
