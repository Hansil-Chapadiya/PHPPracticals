<?php
// Define a sample array of stock data for demonstration (in a real app, fetch from API/DB)
$stockData = [
    "AAPL" => ["name" => "Apple Inc.", "price" => 175.50, "change" => "+1.2%"],
    "GOOGL" => ["name" => "Alphabet Inc.", "price" => 2850.30, "change" => "-0.5%"],
    "MSFT" => ["name" => "Microsoft Corporation", "price" => 310.22, "change" => "+0.8%"],
    "TSLA" => ["name" => "Tesla Inc.", "price" => 875.60, "change" => "+2.4%"]
];

// Initialize variables
$stockCode = "";
$stockInfo = null;

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stockCode = strtoupper(trim($_POST["stock_code"])); // Get user input, convert to uppercase
    if (isset($stockData[$stockCode])) {
        $stockInfo = $stockData[$stockCode]; // Fetch stock info if code exists
    } else {
        $stockInfo = "Stock code not found."; // Handle invalid stock code
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Information</title>
</head>
<body>
    <h1>Stock Information</h1>
    <!-- Form to get stock code -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="stock_code">Enter Stock Code:</label>
        <input type="text" id="stock_code" name="stock_code" required>
        <button type="submit">Submit</button>
    </form>

    <!-- Display Stock Information -->
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <h2>Stock Details:</h2>
        <?php if (is_array($stockInfo)): ?>
            <p><strong>Stock Code:</strong> <?php echo htmlspecialchars($stockCode); ?></p>
            <p><strong>Stock Name:</strong> <?php echo htmlspecialchars($stockInfo["name"]); ?></p>
            <p><strong>Current Price:</strong> $<?php echo htmlspecialchars(number_format($stockInfo["price"], 2)); ?></p>
            <p><strong>Change:</strong> <?php echo htmlspecialchars($stockInfo["change"]); ?></p>
        <?php else: ?>
            <p><?php echo htmlspecialchars($stockInfo); ?></p>
        <?php endif; ?>
    <?php endif; ?>
</body>
</html>
