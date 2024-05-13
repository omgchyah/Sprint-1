<?php declare(strict_types=1);

//include "recipe.php";
include "Ingredient.php";
include "Meat.php";
include "Dairy.php";
include "Vegetable.php";

$recipe1 = new Recipe("Shepherd's pie");

$ingredient1 = new Meat("Lean ground beef", 1, Quantity::Pound);
$ingredient2 = new Meat("Beef broth", 1, Quantity::Cup);
$ingredient3 = new Vegetable("Potatoes", 2, Quantity::Pound);
$ingredient4 = new Vegetable("Frozen peas and carrots", 1, Quantity::Cup);
$ingredient5 = new Dairy("Parmesan cheese", 0.25, Quantity::Cup);

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

$arrayIngredients = $recipe1->getIngredients;

foreach($arrayIngredients as $ingredient) {
    echo $ingredient . PHP_EOL;
}



?>