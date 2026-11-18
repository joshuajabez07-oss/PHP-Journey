<?php require 'data.php'; ?>

<h2>Available Menu</h2>

<table>
    <tr>
        <th>Code</th>
        <th>Product</th>
        <th>Price</th>
    </tr>
    <?php foreach ($menu as $code => $item) { ?>
    <tr>
        <td><?php echo $code; ?></td>
        <td><?php echo $item[0]; ?></td>
        <td>&#8369;<?php echo number_format($item[1], 2); ?></td>
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
