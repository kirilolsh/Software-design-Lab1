<?php

require_once "Product.php";

class Warehouse {
    private array $items = [];

    public function addProduct(Product $product, int $quantity, string $unit, string $date): void {
        $this->items[] = [
            'product' => $product,
            'quantity' => $quantity,
            'unit' => $unit,
            'date' => $date
        ];
    }

    public function removeProduct(string $name, int $quantity): void {
        foreach ($this->items as &$item) {
            if ($item['product']->getName() === $name && $item['quantity'] >= $quantity) {
                $item['quantity'] -= $quantity;
                break;
            }
        }
    }

    public function inventory(): void {
        foreach ($this->items as $item) {
            echo "{$item['product']->getName()} - {$item['quantity']} {$item['unit']} at {$item['product']->getPrice()} (Added: {$item['date']})\n";
        }
    }
}