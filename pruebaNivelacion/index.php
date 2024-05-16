<?php   declare(strict_types=1);

include "recipe.php";

/*CLASE RECETAS
NAME
    INGREDIENTS
    NOMBRE CANTIDAD
TIEMPO PREP
DIFICULTAD FACIL INT DIFICIL

DESCRIPC PREP

CREAR 5 RECETAS

DADO 1 ING DEVUELVA RECETA CON ESE INGREDI

DADO TIEMPO DEVUELVA RECETA QUE TOME ESTE TIEMPO O MENOS

*/

$ingredient1 = new Ingredient("Zanahoria", 3);
$ingredient2 = new Ingredient("Patatas", 3);
$ingredient3 = new Ingredient("Pollo", 2);
$ingredient4 = new Ingredient("arroz", 3);
$ingredient5 = new Ingredient("queso", 2);
$ingredient6 = new Ingredient("petit-pois", 2);

$receta1 = new Recipe("Sopa de pollo", Difficulty::medium, 35);
$receta2 = new Recipe("arroz con pollo", Difficulty::hard, 25);
$receta3 = new Recipe("Shepherds Pie", Difficulty::easy, 40);
$receta4 = new Recipe("Quiche", Difficulty::medium, 35);
$receta5 = new Recipe("Pastel de pollo", Difficulty::easy, 20);

$receta1->addIngredient($ingredient1);
$receta1->addIngredient($ingredient2);
$receta1->addIngredient($ingredient3);

$receta2->addIngredient($ingredient1);
$receta2->addIngredient($ingredient2);
$receta2->addIngredient($ingredient4);

$receta3->addIngredient($ingredient2);
$receta3->addIngredient($ingredient3);
$receta3->addIngredient($ingredient6);

$receta4->addIngredient($ingredient5);
$receta4->addIngredient($ingredient2);
$receta4->addIngredient($ingredient6);

echo $receta1->searchRecipeIngredient("Zanahoria");

echo $receta2->searchRecipeTime(35);


?>