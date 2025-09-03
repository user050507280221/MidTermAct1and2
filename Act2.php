<?php
echo "<h2>Activity 1: GadgetGrove Catalog with Arrays</h2>";

$g4adg3tNames = ["Smartphone", "Laptop", "Tablet", "Smartwatch", "Camera", "Headphones", "Bluetooth Speaker", "Gaming Console", "Drone", "Printer", "Monitor", "Keyboard"];
$g4adg3tPrices = [12000.00, 35000.00, 15000.00, 8000.00, 25000.00, 5000.00, 3000.00, 20000.00, 45000.00, 7000.00, 12000.00, 2500.00];

echo "<p><strong>Gadget Names:</strong> " . implode(", ", $g4adg3tNames) . "</p>";
echo "<p><strong>First gadget price:</strong> ₱" . number_format($g4adg3tPrices[0], 2) . "</p>";
echo "<p><strong>Last gadget price:</strong> ₱" . number_format($g4adg3tPrices[count($g4adg3tPrices)-1], 2) . "</p><br>";

$g4adg3tDetail = [
    "name" => "Smartphone",
    "price" => 12000.00,
    "brand" => "TechPro",
    "inStock" => true,
    "description" => "A high-performance smartphone with the latest features."
];

$g4adg3tDetail["warranty"] = "1-year warranty included";

echo "<h3>Sample Gadget Detail</h3>";
echo "<p><strong>Gadget:</strong> {$g4adg3tDetail['name']}</p>";
echo "<p><strong>Brand:</strong> {$g4adg3tDetail['brand']}</p>";
echo "<p><strong>Price:</strong> ₱" . number_format($g4adg3tDetail['price'], 2) . "</p>";
echo "<p><strong>In Stock:</strong> " . ($g4adg3tDetail['inStock'] ? "Yes ✅" : "No ❌") . "</p>";
echo "<p><strong>Warranty:</strong> {$g4adg3tDetail['warranty']}</p><br>";

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

echo "<h3>📦 Full Gadget Catalog</h3>";
foreach ($g4adg3tCatalog as $g4adg3t) {
    $stockStatus = $g4adg3t['inStock'] ? "<span style='color:green;'>Available</span>" : "<span style='color:red;'>Out of Stock</span>";
    echo "<p>🔹 <strong>{$g4adg3t['name']}</strong> - ₱" . number_format($g4adg3t['price'], 2) . " | $stockStatus</p>";
}
?>
