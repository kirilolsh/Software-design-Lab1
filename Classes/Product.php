<?php

require_once "Money.php";

class Product {
    private string $name;
    private Money $price;

    public function __construct(string $name, Money $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function applyDiscount(int $units, int $cents): void {
        $this->price->decrease($units, $cents);
    }

    public function getName(): string {
        return $this->name;
    }

    public function getPrice(): Money {
        return $this->price;
    }
}