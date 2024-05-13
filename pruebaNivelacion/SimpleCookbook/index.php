<?php declare(strict_types=1);

include "recipe.php";
include "Meat.php";
include "Vegetable.php";
include "Dairy.php";

$recipe1 = new Recipe("Shepherd's pie");

$ingredient1 = new Meat("Lean ground beef", 1, Unit::Pound);
$ingredient2 = new Meat("Beef broth", 1, Unit::Cup);
$ingredient3 = new Vegetable("Potatoes", 2, Unit::Pound);
$ingredient4 = new Vegetable("Frozen peas and carrots", 1, Unit::Cup);
$ingredient5 = new Dairy("Parmesan cheese", 0.25, Unit::Cup);

$recipe1->addIngredient($ingredient1);
$recipe1->addIngredient($ingredient2);
$recipe1->addIngredient($ingredient3);
$recipe1->addIngredient($ingredient4);
$recipe1->addIngredient($ingredient5);

$instruction1 = "Add the broth, frozen peas and carrots, and frozen corn. Bring the liquid to a boil then reduce to simmer. Simmer for 5 minutes, stirring occasionally.";
$instruction2 = "Mash the potatoes and stir until all the ingredients are mixed together. Add the parmesan cheese to the potatoes. Stir until well combined.";
$instruction3 = "Pour the meat mixture into a 9x9 (or 7x11) inch baking dish. Bake uncovered for 25-30 minutes. Cool for 15 minutes before serving.";

$recipe1->addInstructions($instruction1);
$recipe1->addInstructions($instruction2);
$recipe1->addInstructions($instruction3);

$arrayIngredients = $recipe1->getIngredients();

foreach($arrayIngredients as $ingredient) {
    echo $ingredient->name . PHP_EOL . "<br>";
}

foreach($arrayIngredients as $ingredient) {
    $looking = "beef";
    $found = "";
    if(strpos($ingredient->name, $looking)) {
        $found = $ingredient->name;
    }

    echo $found . "<br>";

    foreach($arrayIngredients as $ingredient) {
        $looking = "cheese";
        $ingredientFound = "";
        if(strpos($ingredient->name, $looking)) {
            $ingredientFound = $ingredient->name;
        }
    }

    echo $ingredientFound . "<br>";

   foreach($ingredient1->getDietaryImpact() as $impact) {
    echo $impact . "<br>";
   }





}







?>