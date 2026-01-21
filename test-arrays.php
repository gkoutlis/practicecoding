<?php
// 1. Δημιουργία Array
$heroInventory = [
    'potion' => "healthPotion", 
    "shield" => "shield of dark Infinity", 
    'sword' => 'song of Lamps'
];

// 2. Προσθήκη νέου αντικειμένων
$heroInventory['gold'] = 5000;
$heroInventory['junk'] = 'broken bottle';

// 3. Αφαίρεση αντικειμένου
unset($heroInventory['junk']);

echo "<h3>--- Debugging with print_r ---</h3>";
// Χρήση του <pre> για να φαίνεται ωραία η στοίχιση στον browser
echo "<pre>";
print_r($heroInventory);
echo "</pre>";

echo "<h3>--- Output with Implode ---</h3>";
// Ενώνουμε όλες τις τιμές με κόμμα και κενό
$listString = implode(", ", $heroInventory);

echo "Inventory List: " . $listString;
?>