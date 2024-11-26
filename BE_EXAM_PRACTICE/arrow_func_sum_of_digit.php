<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of Digits</title>
</head>

<body>
    <label>Enter Number:</label>
    <input type="text" id="numberInput"><br><br>
    <button onclick="sum_of_digit()">Calculate Sum</button>
    <br><br>
    <div id="result"></div>

    <script>
        const sum_of_digit = () => {
            // Retrieve input value
            const inputElement = document.getElementById("numberInput");
            let number = parseInt(inputElement.value);

            // Validate input
            if (isNaN(number)) {
                alert("Please enter a valid number.");
                return;
            }

            // Calculate the sum of digits
            let sum = 0;
            while (number > 0) {
                let rem = number % 10;
                sum += rem;
                number = Math.floor(number / 10); // Use Math.floor to get the integer part
            }

            // Display the result
            const resultDiv = document.getElementById("result");
            resultDiv.textContent = `Sum of digits: ${sum}`;
        };
    </script>
</body>

</html>