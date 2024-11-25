<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>onChange Event Demo</title>
</head>

<body>
    <h1>onChange Event Demo</h1>
    <label for="inputField">Enter some text:</label>
    <input type="text" id="inputField" value="Initial text" onchange="handleChange()">
    <p id="message"></p>
</body>
<script>
    function handleChange() {
        // Get the input element
        let input = document.getElementById('inputField');

        // Get the paragraph element to display the message
        let message = document.getElementById('message');

        // Update the paragraph text with the input value
        message.innerText = `You changed the input to: "${input.value}"`;
    }
</script>

</html>