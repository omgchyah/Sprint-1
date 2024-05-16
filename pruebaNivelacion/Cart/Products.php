<?php   declare(strict_types=1);

include "category.php";

class Product {

public string $name;
public float $price;

public Category $category;

public function __construct(string $name, float $price, Category $category) {
    $this->name = $name;
    $this->price = $price;
    $this->category = $category;
}

}




?>