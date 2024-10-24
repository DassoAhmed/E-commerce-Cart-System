<?php
session_start();
require_once 'config.php';
require_once 'functions.php';

$cart = getCart();
$total = getCartTotal();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart - E-commerce Cart System</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <header>
        <h1>E-commerce Cart System</h1>
        <nav>
            <ul>
                <li><a href="index.php">Products</a></li>
                <li><a href="cart.php">Cart</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h2>Shopping Cart</h2>
        <div id="cart-items">
            <?php if (empty($cart)): ?>
                <p>Your cart is empty.</p>
            <?php else: ?>
                <?php foreach ($cart as $item): ?>
                    <div class="cart-item" data-product-id="<?php echo $item['id']; ?>">
                        <h3><?php echo htmlspecialchars($item['name']); ?></h3>
                        <p>Price: $<?php echo number_format($item['price'], 2); ?></p>
                        <p>
                            Quantity: 
                            <input type="number" class="quantity" value="<?php echo $item['quantity']; ?>" min="1">
                            <button class="update-quantity">Update</button>
                        </p>
                        <p>Subtotal: $<span class="subtotal"><?php echo number_format($item['price'] * $item['quantity'], 2); ?></span></p>
                        <button class="remove-item">Remove</button>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div id="cart-total">
            <h3>Total: $<span id="total-amount"><?php echo number_format($total, 2); ?></span></h3>
        </div>
    </main>

    <footer>
        <p>&copy; 2023 E-commerce Cart System</p>
    </footer>

    <script src="js/cart.js"></script>
</body>
</html>

