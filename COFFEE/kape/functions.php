<?php
declare(strict_types=1);
// functions.php - stock monitoring using functions

require "rates.php";           // gives us $tax_rate
require "products.php";        // gives us $kape
require_once "stock_functions.php"; // the 3 functions
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Control</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 30px;
            min-height: 100vh;
            color: #ffffff;
            /* same dark blue to sky blue background as the shop */
            background:
                radial-gradient(circle at 85% 15%, rgba(94,194,255,.55), transparent 45%),
                linear-gradient(160deg, #0a1b3d, #12306b 60%, #2a7fc4);
            background-attachment: fixed;
        }
        h1 {
            font-family: Georgia, serif;
            color: #8fd6ff;
            font-size: 32px;
            margin: 0 0 24px;
        }
        h2 {
            font-size: 14px;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin: 0 0 16px;
        }
        table {
            border-collapse: collapse;
            border: 1px solid #8fd6ff;
            min-width: 520px;
        }
        th {
            background: #d9f0ff;
            color: #0a1b3d;
            font-size: 12px;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            text-align: left;
            padding: 8px 14px;
        }
        td {
            padding: 8px 14px;
            font-size: 15px;
        }
        .yes { color: #8fd6ff; font-weight: bold; }
        a { color: #8fd6ff; font-size: 13px; }
        p { margin-top: 20px; }
    </style>
</head>
<body>

<h1>Kapehan ni Juswa</h1>
<h2>Stock Control</h2>

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
        <td class="<?php echo get_reorder_message($data["stock"]) === "Yes" ? "yes" : ""; ?>">
            <?php echo get_reorder_message($data["stock"]); ?>
        </td>
        <td>&#8369;<?php echo number_format(get_total_value($data["price"], $data["stock"]), 2); ?></td>
        <td>&#8369;<?php echo number_format(get_tax_due($data["price"], $data["stock"], $tax_rate), 2); ?></td>
    </tr>
    <?php } ?>
</table>

<p><a href="index.php">Back to orders</a></p>

</body>
</html>
