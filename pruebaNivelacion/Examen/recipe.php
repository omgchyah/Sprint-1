<?php


include "difficulty.php";

include "ingredient.php";

class Recipe {

    public string $name;
    public Difficulty $difficulty;
    public int $time;
    public array $ingredients;

    public string $prep;

    
    public function __construct(string $name, Difficulty $difficulty, int $time) {
        $this->name = $name;
        $this->difficulty = $difficulty;
        $this->time = $time;
        $this->ingredients = array();
    }

    public function addIngredient(Ingredient $ingredient) {
        $this->ingredients[] = $ingredient;
    }

    public function getIngredient(): array {
        return $this->ingredients;
    }

    public function setPrep(string $prep): void {
        $this->prep = $prep;
    }

    public function searchRecipeIngredient(string $name): string {

        $message = "";

        foreach($this->ingredients as $ingredient) {
            if($ingredient->name === $name) {
                $message = "Tu receta es " . $this->name . ".";
                break;
            } else {
                $message = "Esta receta no existe.";
            }
        }

        return $message;

    }

    public function searchRecipeTime(int $time): string {

        $message = "";

        foreach($this->ingredients as $ingredient) {
            if($ingredient->time >= $time) {
                $message = "Tu receta es " . $this->name . ".";
                break;
            } else {
                $message = "No hay recetas que se tomen " . $time . " en prepararse.";
            }
        }

        return $message;


    }



}


?>