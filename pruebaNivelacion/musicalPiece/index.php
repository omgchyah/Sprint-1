<?php declare(strict_types=1);

include "MusicalPiece.php";

$piece1 = new MusicalPiece("Classic music", "Symphony 5");

$piece1->addInstrument(Instrument::VIOLIN);

$piece1->addInstrument(Instrument::FLUTE);

$instruments = $piece1->getInstruments();

foreach($instruments as $instrument) {
    echo $instrument->name . PHP_EOL;
}



echo $piece1->playExample();

echo $piece1->play();

?>