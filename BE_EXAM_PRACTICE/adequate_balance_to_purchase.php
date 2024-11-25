<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Availability</title>
</head>

<body>
    <label>Enter price:</label>
    <input type="text" id="price" placeholder="Enter price">
    <br><br>
    <label>Enter tax rate (0 < rate < 1):</label>
            <input type="text" id="textrate" placeholder="Enter tax rate">
            <br><br>
            <label>Enter balance:</label>
            <input type="text" id="balance" placeholder="Enter balance">
            <br><br>
            <button name="check" value="check" onclick="checkavailability()">Check</button>

            <script>
                function checkavailability() {
                    try {
                        // Retrieve values from input fields
                        const price = parseFloat(document.getElementById("price").value);
                        const textrate = parseFloat(document.getElementById("textrate").value);
                        const balance = parseFloat(document.getElementById("balance").value);

                        // Validate inputs
                        if (isNaN(price) || isNaN(textrate) || isNaN(balance)) {
                            throw "Please enter valid numeric values for all fields.";
                        }
                        if (textrate <= 0 || textrate >= 1) {
                            throw "Tax rate must be greater than 0 and less than 1.";
                        }

                        // Calculate final price
                        const final_price = price * (1 + textrate);

                        // Check availability
                        if (final_price > balance) {
                            alert("No, you cannot afford this.");
                        } else {
                            alert("Yes, you can afford this.");
                        }
                    } catch (error) {
                        alert(error); // Display error message
                    }
                }
            </script>
</body>

</html>