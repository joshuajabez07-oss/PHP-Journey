<?php
require 'data.php';

// Only accept form submissions
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

// ---------- 1. Get the form values (variables) ----------
$name     = trim($_POST['customer_name'] ?? '');
$type     = $_POST['customer_type'] ?? '';
$code     = $_POST['product'] ?? '';
$addon    = $_POST['addon'] ?? 'None';
$quantity = filter_var($_POST['quantity'] ?? null, FILTER_VALIDATE_INT);
$budget   = filter_var($_POST['budget'] ?? null, FILTER_VALIDATE_FLOAT);

// ---------- 2. Validate (comparison + logical operators) ----------
$valid = $name !== ''
    && array_key_exists($type, $customerTypes)
    && array_key_exists($code, $menu)
    && array_key_exists($addon, $addons)
    && $quantity !== false && $quantity >= 1 && $quantity <= 10
    && $budget !== false && $budget >= 0;

if (!$valid) {
    include 'header.php';
    echo '<p class="error">Invalid order. Please check your input.</p>';
    echo '<a href="index.php">Return to form</a>';
    include 'footer.php';
    exit;
}

// ---------- 3. Look up the order details ----------
$productName = $menu[$code][0];
$price       = $menu[$code][1];
$addonPrice  = $addons[$addon];
$typeLabel   = $customerTypes[$type][0];

// switch: discount rate depends on customer type
switch ($type) {
    case 'student':
        $rate = 0.10;
        break;
    case 'employee':
        $rate = 0.05;
        break;
    case 'guest':
        $rate = 0.10;
        break;
    case 'pwd':
        $rate = 0.20;
        break;
    default:
        $rate = 0;
}

// match: a short message for each product
$note = match ($code) {
    'K1'    => 'Sweet and smooth!',
    'K2'    => 'Sweet with a salty kick!',
    'K3'    => 'Chewy and fun!',
    'K4'    => 'Earthy and creamy!',
    'K5'    => 'Strong and simple!',
    default => '',
};

// ---------- 4. Compute (math operators) ----------
$pricePerCup = $price + $addonPrice;
$subtotal    = $pricePerCup * $quantity;
$discount    = $subtotal * $rate;
$total       = $subtotal - $discount;

// ternary operator: singular or plural
$cupWord = $quantity === 1 ? 'cup' : 'cups';

// ---------- 5. Show the receipt ----------
include 'header.php';
?>

<h2>Order Receipt</h2>

<div class="receipt">
    <h2>KAPEHAN NI JUSWA</h2>
    <p class="center">Official Receipt</p>
    <p class="center"><?php echo date("F j, Y - g:i A"); ?></p>
    <hr>

    <div class="row"><span>Customer</span><span><?php echo htmlspecialchars($name); ?></span></div>
    <div class="row"><span>Type</span><span><?php echo $typeLabel; ?></span></div>
    <hr>

    <p><strong>Items Ordered (<?php echo $quantity . ' ' . $cupWord; ?>)</strong></p>
    <?php
    // for loop: one line per cup
    for ($i = 1; $i <= $quantity; $i++) {
        echo '<div class="row"><span>' . $i . '. ' . $productName;
        if ($addon !== 'None') {
            echo ' + ' . $addon;
        }
        echo '</span><span>PHP ' . number_format($pricePerCup, 2) . '</span></div>';
    }
    ?>
    <hr>

    <div class="row"><span>Subtotal</span><span>PHP <?php echo number_format($subtotal, 2); ?></span></div>
    <div class="row"><span>Discount (<?php echo $rate * 100; ?>%)</span><span>- PHP <?php echo number_format($discount, 2); ?></span></div>
    <div class="row total"><span>FINAL BILL</span><span>PHP <?php echo number_format($total, 2); ?></span></div>
    <hr>

    <div class="row"><span>Budget</span><span>PHP <?php echo number_format($budget, 2); ?></span></div>
    <?php
    // if...else: is the budget enough?
    if ($budget >= $total) {
        echo '<div class="row success"><span>Budget is sufficient!</span><span></span></div>';
        echo '<div class="row"><span>Change / Balance</span><span>PHP ' . number_format($budget - $total, 2) . '</span></div>';
    } else {
        echo '<div class="row error"><span>Insufficient budget!</span><span></span></div>';
        echo '<div class="row"><span>Shortage</span><span>PHP ' . number_format($total - $budget, 2) . '</span></div>';
    }
    ?>
    <hr>
    <p class="center"><?php echo $note; ?></p>
    <p class="center">Thank you, come again!</p>
</div>

<?php
// Preparation progress: only if the customer can pay
if ($budget >= $total) {
?>
    <h3>Preparation Progress</h3>
    <div class="steps">
    <?php
    // while loop: prepare each cup
    $counter = 1;
    while ($counter <= $quantity) {
        echo '<p>Preparing ' . $productName . ' ' . $counter . ' of ' . $quantity . '...</p>';
        $counter++;
    }

    // do...while loop: steps for a finished order
    $steps = ['Order received', 'Drink prepared', 'Ready for pickup'];
    $s = 0;
    do {
        echo '<p class="success">&#10003; ' . $steps[$s] . '</p>';
        $s++;
    } while ($s < count($steps));
    ?>
    </div>
<?php
} else {
    echo '<p class="error">Order not started. Please add more budget.</p>';
}
?>

<p><a href="index.php">Place another order</a></p>

<?php include 'footer.php'; ?>
