<?php
include 'header.php';
include 'menu.php'; // menu.php also loads data.php
?>

<h2>Place Your Order</h2>
<form method="POST" action="process.php">
    <label>Name</label>
    <input name="customer_name" required>

    <label>Customer Type</label>
    <select name="customer_type">
        <?php foreach ($customerTypes as $key => $type) { ?>
            <option value="<?php echo $key; ?>">
                <?php echo $type[0] . ' (' . ($type[1] * 100) . '% off)'; ?>
            </option>
        <?php } ?>
    </select>

    <label>Product</label>
    <select name="product">
        <?php foreach ($menu as $code => $item) { ?>
            <option value="<?php echo $code; ?>">
                <?php echo $item[0] . ' - PHP ' . number_format($item[1], 2); ?>
            </option>
        <?php } ?>
    </select>

    <label>Add On</label>
    <select name="addon">
        <?php foreach ($addons as $addonName => $addonPrice) { ?>
            <option value="<?php echo $addonName; ?>">
                <?php echo $addonName; ?>
                <?php echo $addonPrice > 0 ? '(+PHP ' . number_format($addonPrice, 2) . ')' : ''; ?>
            </option>
        <?php } ?>
    </select>

    <label>Quantity (1-10)</label>
    <input name="quantity" type="number" min="1" max="10" required>

    <label>Budget (PHP)</label>
    <input name="budget" type="number" min="0" step="0.01" required>

    <button type="submit">Process Order</button>
</form>

<?php include 'footer.php'; ?>
