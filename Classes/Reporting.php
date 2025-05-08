<?php

require_once "Warehouse.php";

class Reporting {
    private Warehouse $warehouse;
    private array $log = [];

    public function __construct(Warehouse $warehouse) {
        $this->warehouse = $warehouse;
    }

    public function income(Product $product, int $quantity, string $unit, string $date): void {
        $this->warehouse->addProduct($product, $quantity, $unit, $date);
        $this->log[] = "INCOME: {$product->getName()} x $quantity ($date)";
    }

    public function outcome(string $name, int $quantity, string $date): void {
        $this->warehouse->removeProduct($name, $quantity);
        $this->log[] = "OUTCOME: $name x $quantity ($date)";
    }

    public function printLog(): void {
        foreach ($this->log as $entry) {
            echo "$entry\n";
        }
    }
}