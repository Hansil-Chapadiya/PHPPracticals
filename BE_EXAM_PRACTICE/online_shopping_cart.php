<?php
session_start(); // Start the session to store cart data

// If the 'Add to Cart' button is clicked
if (isset($_GET['action']) && $_GET['action'] == 'add' && isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];
    $quantity = 1; // You can modify to allow users to select quantity

    // If the cart is not initialized yet, initialize it as an empty array
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Check if the product is already in the cart
    if (isset($_SESSION['cart'][$product_id])) {
        // If product already in the cart, increase its quantity
        $_SESSION['cart'][$product_id]['quantity'] += $quantity;
    } else {
        // If not, add the product to the cart
        $_SESSION['cart'][$product_id] = [
            'name' => $product_id, // Name can be changed to actual product names
            'quantity' => $quantity,
            'price' => 100, // You can modify to fetch actual price from DB
        ];
    }
}

// If the 'Remove from Cart' button is clicked
if (isset($_GET['action']) && $_GET['action'] == 'remove' && isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];
    unset($_SESSION['cart'][$product_id]);
}

// If the 'Clear Cart' button is clicked
if (isset($_GET['action']) && $_GET['action'] == 'clear') {
    unset($_SESSION['cart']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
</head>
<body>
    <h1>Welcome to the Online Shop</h1>

    <!-- Display Available Products -->
    <h2>Products</h2>
    <ul>
        <li>
            Product 1 - $100
            <a href="online_shopping_cart.php?action=add&product_id=1">Add to Cart</a>
        </li>
        <li>
            Product 2 - $100
            <a href="online_shopping_cart.php?action=add&product_id=2">Add to Cart</a>
        </li>
        <li>
            Product 3 - $100
            <a href="online_shopping_cart.php?action=add&product_id=3">Add to Cart</a>
        </li>
    </ul>

    <!-- Cart Section -->
    <h2>Your Cart</h2>
    <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0): ?>
        <ul>
            <?php
                $total = 0; // Initialize total price to 0
                foreach ($_SESSION['cart'] as $product_id => $item):
                    $total += $item['quantity'] * $item['price'];
            ?>
                <li>
                    <?php echo $item['name']; ?> - Quantity: <?php echo $item['quantity']; ?> - $<?php echo $item['price']; ?> each
                    <a href="online_shopping_cart.php?action=remove&product_id=<?php echo $product_id; ?>">Remove</a>
                </li>
            <?php endforeach; ?>
        </ul>
        <p>Total: $<?php echo $total; ?></p>
        <a href="online_shopping_cart.php?action=clear">Clear Cart</a>
    <?php else: ?>
        <p>Your cart is empty.</p>
    <?php endif; ?>

</body>
</html>
