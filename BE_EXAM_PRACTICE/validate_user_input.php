<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Validation</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <h1>Input Validation Example</h1>
    <label for="txtbox">Enter a number:</label>
    <input id="txtbox" type="text" placeholder="Type something">
    <button id="validateBtn">Validate</button>
</body>

<script>
    $(document).ready(function() {
        // Attach click event to the validate button
        $('#validateBtn').click(function() {
            const text = $('#txtbox').val(); // Get the input field value

            // Validate the input
            if (text === "108") {
                alert("Well done, Great Gauss!");
            } else {
                alert("What is this?");
            }
        });
    });
</script>

</html>