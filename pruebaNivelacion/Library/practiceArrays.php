<?php declare(strict_types=1);

$colors = ["Royal blue", "Turquoise", "Seafoam green", "Periwinkle", "Fuchsia"];

foreach($colors as $color) {
    echo $color . PHP_EOL;
}

function addNumbers(array $numbers): int {

    $totalSum = 0;

    foreach($numbers as $number) {
        $totalSum += $number;
    }

    return $totalSum;

}

$numbers = [1, 4, 8, 10, 3, 2, 5, 88];

echo addNumbers($numbers);

$associateArray = ["strawberry" => "red", "cucumber" => "green", "mango" => "yellow", "apple" => "white"];

foreach($associateArray as $key => $value) {
    echo $value . " (" . $key . ") " . PHP_EOL;
}

function removeDuplicates(array $list): array {

    return array_unique($list);
}

$students = [
    ["name" => "Pedro", "age" => 17, "grade" => 4],
    ["name" => "Vanessa", "age" => 19, "grade" => 5],
    ["name" => "Veronica", "age" => 18, "grade" => 4]
];

foreach($students as $student) {
    echo "Name: " . $student["name"] . PHP_EOL
    . "Age: " . $student["age"] . PHP_EOL
    . "Grade: " . $student["grade"] . PHP_EOL;
}

function findNumber(array $numbers): string {

    $smallest = 0;
    $largest = 0;

    $smallest = (max($numbers));
    
    $largest = (min($numbers));
    

    return $smallest . $largest;


}

echo findNumber($numbers);

$cart = array();

$cart = [[0] => "name", [1] => "quantity", [2] => "price"];

function addItems(array $items): array {

    global $cart;

    $cart[] = $items;
    return $cart;



}

function orderItems(array $items): array {
    usort($items, );
}











 
?>