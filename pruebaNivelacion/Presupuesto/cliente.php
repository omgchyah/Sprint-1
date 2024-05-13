<?php declare(strict_types=1);

class Client {

    public int $id;
    public string $name;
    public string $address;
    public string $email;

    public function __construct(int $id, string $name, string $address, string $email) {
        $this->id = $id;
        $this->name = $name;
        $this->address = $address;
        $this->email = $email;

    }

    public function getId(): int {
        return $this->id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getAddress(): string {
        return $this->address;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function setAddress(string $address): void {
        $this->address = $address;
    }

    public function setEmail(string $email): void {
        $this->email = $email;
    }

    public function __toString() {
        return $this->id . PHP_EOL . $this->name . PHP_EOL . $this->address . PHP_EOL . $this->email . PHP_EOL;
    }



}



?>