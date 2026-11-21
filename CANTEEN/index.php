<?php include 'header.php'; ?>
<?php include 'menu.php'; ?>
<h2>Place Your Order</h2>
<form method="POST" action="process.php">
    <label>Name</label>
    <input name="customer_name" required>
    
    <label>Customer Type</label>
    <select name="customer_type">
        <option value="student">Student (10% off)</option>
        <option value="employee">Employee (5% off)</option>
        <option value="guest">Guest (10% off)</option>
        <option value="pwd">PWD (20% off)</option>
    </select>
    
    <label>Product</label>
    <select name="product">
        <option value="K1">French Vanilla</option>
        <option value="K2">Salted Caramel</option>
        <option value="K3">Coffee Jelly</option>
        <option value="K1">Macha</option>
        <option value="K2">Black Coffee</option>
    </select>
    
    <label>Quantity</label>
    <input name="quantity" type="number" min="1" max="10" required>
    
    <label>Budget (PHP)</label>
    <input name="budget" type="number" min="0" step="0.01" required>
    
    <button type="submit">Process Order</button>
</form>
<?php include 'footer.php'; ?>