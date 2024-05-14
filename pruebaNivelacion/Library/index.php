<?php declare(strict_types=1);

include "Book.php";

$author1 = new Author("Stephen King", 1965);

$book1 = new Book("Misery", 1978, Genre::Horror);
$book2 = new Book("The Stand", 1981, Genre::Zombies);
$book3 = new Book("The Shining", 1981, Genre::Paranormal);


$author1->addBooks($book1);
$author1->addBooks($book2);
$author1->addBooks($book2);

$booksAuthor1 = $author1->getBooks();

foreach($booksAuthor1 as $book) {
    echo $book->name . PHP_EOL;
}

function searchBookBytitle(array $books, string $book) {

foreach($booksAuthor1 as $book) {
        if(in_array($title, $books)) {
            $found = $book;
        } else {
            $found = null;
        }
    }

}


$foundBook = searchBookBytitle($booksAuthor1, "Shining");

echo $foundBook->getInfo();


?>