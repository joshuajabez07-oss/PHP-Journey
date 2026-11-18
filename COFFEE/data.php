<?php
// data.php - all shop data lives here (arrays). Included by other pages.

// Menu: code => [name, price]   (associative + indexed arrays)
$menu = [
    'K1' => ['French Vanilla', 100],
    'K2' => ['Salted Caramel', 90],
    'K3' => ['Coffee Jelly',   95],
    'K4' => ['Matcha',         100],
    'K5' => ['Black Coffee',   70],
];

// Add-ons: name => price
$addons = [
    'None'        => 0,
    'Jelly'       => 20,
    'Frappe'      => 15,
    'Cheese Foam' => 17,
];

// Customer types: key => [label, discount rate]
$customerTypes = [
    'student'  => ['Student',  0.10],
    'employee' => ['Employee', 0.05],
    'guest'    => ['Guest',    0.10],
    'pwd'      => ['PWD',      0.20],
];
