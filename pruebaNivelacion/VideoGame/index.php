<?php declare(strict_types=1);

include "Console.php";



$game1 =  new Game("Silent Hill", Genre::HORROR, 1998);
$game2 = new Game("Resident Evil", Genre::HORROR, 1999);
$game3 = new Game("Red Dead Redemption", Genre::ACTION, 2001);
$game4 = new Game("Banjo Kazooie", Genre::PLATFORM, 1997);

$console1 = new ConsoleGame("PS", 1);

$games = array();

$games = [$game1, $game2, $game3, $game4];

foreach($games as $game) {
    $console1->addVideoGames($game);
}

$psGames = $console1->getVideoGames();

foreach($psGames as $game) {
    echo $game->title . PHP_EOL;
}

echo $console1->searchVideoGame("Silent Hill");

?>