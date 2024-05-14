<?php declare(strict_types=1);


include "author.php";

$author1 = new Author("Stephen King", 1965);

$book1 = new Book("Misery", 1978, Genre::Horror);
$book2 = new Book("The Stand", 1981, Genre::Zombies);
$book3 = new Book("The Shining", 1981, Genre::Paranormal);


$author1->addBooks($book1);
$author1->addBooks($book2);
$author1->addBooks($book3);

$booksAuthor1 = $author1->getBooks();

foreach($booksAuthor1 as $book) {
    echo $book->title . PHP_EOL;
}

function searchBookBytitle(array $books, string $title): Book  {

foreach($books as $book) {
        if(in_array($title, $books)) {
            $found = $book;
        } else {
            $found = null;
        }
    }

    return $book;

}


$foundBook = searchBookBytitle($booksAuthor1, "Shining");

echo $foundBook->title . PHP_EOL;

echo $foundBook->getInfo();



?>