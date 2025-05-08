<?php

require_once __DIR__ . '/Classes/Reporting.php';

$price = new Money(10, 50);
$product = new Product("Milk", $price);

$warehouse = new Warehouse();
$report = new Reporting($warehouse);

$report->income($product, 100, "bottles", "2025-05-08");
$product->applyDiscount(1, 30);
$report->outcome("Milk", 10, "2025-05-08");

echo "--- Inventory ---\n";
$warehouse->inventory();

echo "\n--- Log ---\n";
$report->printLog();

