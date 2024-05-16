<?php   declare(strict_types=1);

include "Products.php";

class ShoppingCart {

    public array $items;

    public function __construct(array $items) {
        $this->items = array();
    } 

    public function addProduct(Product $product): void {
        $this->items[] = $product;

    }

    public function getProducts():array {
        return $this->items;
    }

    public function searchProduct(string $name): string {

        $message= "";

        foreach($this->items as $item) {
            if($name === $item->name) {
$message = $item->name . " existe.";
break;
            } else {
                $message = "Este producto no existe.";
            }
        }

        return $message;

    }

    publlic fun

}


?>