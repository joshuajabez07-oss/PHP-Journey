<?php
declare(strict_types=1);
// stock_functions.php - the three stock functions (used by menu.php and functions.php)

// Says whether the item should be reordered (ternary operator)
function get_reorder_message(int $stock): string
{
    return $stock < 10 ? "Yes" : "No";
}

// Total value of the stock for one product
function get_total_value(float $price, int $quantity): float
{
    return $price * $quantity;
}

// Tax due when all the remaining stock has been sold
function get_tax_due(float $price, int $quantity, int $tax_rate = 0): float
{
    $total = $price * $quantity;
    return $total * ($tax_rate / 100);
}
