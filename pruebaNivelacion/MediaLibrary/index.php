<?php declare(strict_types=1);

include "Book.php";
include "VideoGame.php";
include "Movie.php";
include "MediaType.php";


$media1 = new Book("Stephen King", "Misery", Type::Book, 4.3);
$media2 = new Movie("IDK", "The Exorcist", Type::Movie, 9.2);
$media3 = new Videogame("Rockstar", "Lara Croft", Type::Videogame, 8.7);

echo $media1->getSummary();


?>