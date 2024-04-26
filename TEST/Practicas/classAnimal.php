<?php declare(strict_types=1);

    enum HealthStatus {
        case HEALTHY;
        case INJURED;
        case SICK;
        case PARALYZED;
        case BLIND;
        case DEAF;
    }

abstract class Animal {

    //Atributos
    public $name;
    public int $age;
    public HealthStatus $healthStatus;

    //Constructor
    public function __construct(string $name, int $age, HealthStatus $healthStatus) {
        $this->name = $name;
        $this->age = $age;
        $this->healthStatus = $healthStatus;
    }

    abstract public function makeSound(): string;

    abstract public function eat(): string;


}


?>