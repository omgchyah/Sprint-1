<?php declare(strict_types=1);

class Budget {

    public int $id;
    public string $concept;
    public float $cost;
    public float $iva;

    public function __construct(int $id, string $concept, float $cost, float $iva) {
        $this->id = $id;
        $this->concept = $concept;
        $this->cost = $cost;
        $this->iva = $iva;
    }

    public function getId(): id {
        return $this->id;
    }

    public function getConcept(): string {
        return $this->concept;
    }

    public function getCost(): float {
        return $this->cost;
    }

    public function getIva(): float {
        return $this->iva;
    }
    
    public function setId(int $id):void {
        $this->id = $id;
    }

    public function setConcept(string $concept):void {
        $this->concept = $concept;
    }

    public function setCost(float $cost):void {
        $this->cost = $cost;
    }

    public function setIva(float $iva):void {
        $this->iva = $iva;
    }

    public function getBudget(string $concept, float $cost, float $iva): string {

        return "Concept: " . $this->concept . PHP_EOL .
        "Subtotal= " . $this->cost . PHP_EOL .
        "IVA(" . $this->iva . ")= " . $this->cost * 100 / $this->iva . PHP_EOL .
        "Total= " . $this->cost + $this->cost * 100 / $this->iva . PHP_EOL;


    }

}

?>