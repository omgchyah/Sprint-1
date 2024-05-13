<?php declare(strict_types=1);

include "budget.php";
include "cliente.php";

$arrayClients = [];

function addClient(array $arrayClients, Client $client): void {

    $arrayClients[] = $client;
        
}

function generateUniqueId(array $arrayClients): int {

    $newId = rand();

    while(in_array($newId, array_column($arrayClients, "id"))) {
        $newId = rand();
    }

    return $newId;

}



$newId = generateUniqueId($arrayClients);

$client1 = new Client(generateUniqueId($arrayClients), "Pedro Sanchez", "Barcelona", "pedro@gmail.com");

$client2 = new Client(generateUniqueId($arrayClients), "Vanessa Bermudez", "Ecuador", "vanelibi@gmail.com");

$client3 = new Client(generateUniqueId($arrayClients), "Veronica Camacho", "Venezuela", "verocute@gmail.com");

addClient($arrayClients, $client1);
addClient($arrayClients, $client2);
addClient($arrayClients, $client3);

foreach($arrayClients as $client) {
    echo $client . PHP_EOL;
}

function seeClient(array $arrayClients, string $name): int {

    $index = 0;
    $found = false;
 
    for(int $i = 0; $i < count($arrayClients); $i++) {
        if(in_array($name, $arrayClients[$i])) {
           $index = $i; 
            $found = true;
    }
}

    return $index;
}

?>