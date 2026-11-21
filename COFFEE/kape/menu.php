<?php
declare(strict_types=1);

require_once 'data.php';             // $menu, $addons, $customerTypes
require_once 'rates.php';            // $tax_rate
require_once 'products.php';         // $kape
require_once 'stock_functions.php';  // get_reorder_message(), get_total_value(), get_tax_due()
?>

<h2>Available Menu</h2>

<table>
    <tr>
        <th>Product</th>
        <th>Stock</th>
        <th>Re-order</th>
        <th>Total Value</th>
        <th>Tax Due</th>
    </tr>
    <?php foreach ($kape as $product_name => $data) { ?>
    <tr>
        <td><?php echo $product_name; ?></td>
        <td><?php echo $data["stock"]; ?></td>
        <td class="<?php echo get_reorder_message($data["stock"]) === "Yes" ? "error" : ""; ?>">
            <?php echo get_reorder_message($data["stock"]); ?>
        </td>
        <td>&#8369;<?php echo number_format(get_total_value($data["price"], $data["stock"]), 2); ?></td>
        <td>&#8369;<?php echo number_format(get_tax_due($data["price"], $data["stock"], $tax_rate), 2); ?></td>
    </tr>
    <?php } ?>
</table>

<h3>Add Ons</h3>

<table>
    <tr>
        <th>Add On</th>
        <th>Price</th>
    </tr>
    <?php foreach ($addons as $addonName => $addonPrice) {
        if ($addonPrice > 0) { ?>
    <tr>
        <td><?php echo $addonName; ?></td>
        <td>&#8369;<?php echo number_format($addonPrice, 2); ?></td>
    </tr>
    <?php }
    } ?>
</table>
