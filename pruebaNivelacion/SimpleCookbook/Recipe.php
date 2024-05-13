<?php declare(strict_types=1);

include "Dairy.php";

class Recipe {

    public string $name;

    public function __construct(string $name) {
        $this->name = $name;
        $ingredients = array();
        $instructions = array();
    }

    public function getName(): string {
        return $this->name;
    }

    public function addIngredient(Ingredient $ingredient): void {
        $this->ingredients[] = $ingredient;
    }

    public function addInstructions(string $instruction): void {
        $this->instructions[] = $instruction;
    }

    public function getIngredients(): array {
        return $this->ingredients;
    }

    public function getInstructions(): array {
        return $this->instructions;
    }


}




?>