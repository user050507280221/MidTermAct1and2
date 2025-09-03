<?php
echo "<h2>Activity 1:</h2>";

$g4adg3tNames = ["Smartphone", "Laptop", "Tablet", "Smartwatch", "Camera", "Headphones", "Bluetooth Speaker", "Gaming Console", "Drone", "Printer", "Monitor", "Keyboard"];
$g4adg3tPrices = [12000.00, 35000.00, 15000.00, 8000.00, 25000.00, 5000.00, 3000.00, 20000.00, 45000.00, 7000.00, 12000.00, 2500.00];

echo "<p>Gadget Names: " . implode(", ", $g4adg3tNames) . "</p>";
echo "<p>First gadget price: ₱" . $g4adg3tPrices[0] . "</p>";
echo "<p>Last gadget price: ₱" . $g4adg3tPrices[count($g4adg3tPrices)-1] . "</p><br>";

$g4adg3tDetail = [
    "name" => "Smartphone",
    "price" => 12000.00,
    "brand" => "TechPro",
    "inStock" => true,
    "description" => "A high-performance smartphone with the latest features."
];

$g4adg3tDetail["warranty"] = "1-year warranty included";

echo "<p>Gadget: {$g4adg3tDetail['name']}</p>";
echo "<p>Brand: {$g4adg3tDetail['brand']}</p>";
echo "<p>Price: ₱{$g4adg3tDetail['price']}</p>";
echo "<p>In Stock: " . ($g4adg3tDetail['inStock'] ? "Yes" : "No") . "</p>";
echo "<p>Warranty: {$g4adg3tDetail['warranty']}</p><br>";

$g4adg3tCatalog = [
    ["id" => 1, "name" => "Smartphone", "price" => 12000.00, "inStock" => true],
    ["id" => 2, "name" => "Laptop", "price" => 35000.00, "inStock" => true],
    ["id" => 3, "name" => "Tablet", "price" => 15000.00, "inStock" => true],
    ["id" => 4, "name" => "Smartwatch", "price" => 8000.00, "inStock" => false],
    ["id" => 5, "name" => "Camera", "price" => 25000.00, "inStock" => true],
    ["id" => 6, "name" => "Headphones", "price" => 5000.00, "inStock" => true],
    ["id" => 7, "name" => "Bluetooth Speaker", "price" => 3000.00, "inStock" => true],
    ["id" => 8, "name" => "Gaming Console", "price" => 20000.00, "inStock" => false],
    ["id" => 9, "name" => "Drone", "price" => 45000.00, "inStock" => true],
    ["id" => 10, "name" => "Printer", "price" => 7000.00, "inStock" => true],
    ["id" => 11, "name" => "Monitor", "price" => 12000.00, "inStock" => true],
    ["id" => 12, "name" => "Keyboard", "price" => 2500.00, "inStock" => false]
];

foreach ($g4adg3tCatalog as $g4adg3t) {
    echo "<p>Gadget: {$g4adg3t['name']} - Price: ₱" . number_format($g4adg3t['price'], 2) . "</p>";
}
?>
