<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drop-Down List and Show/Hide Image</title>
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        #image {
            width: 300px;
            height: 200px;
            display: none; /* Initially hide the image */
        }
    </style>
</head>
<body>

    <!-- Drop-down list -->
    <h2>Select your favorite fruit:</h2>
    <select id="fruitDropdown">
        <option value="apple">Apple</option>
        <option value="banana">Banana</option>
        <option value="cherry">Cherry</option>
        <option value="mango">Mango</option>
    </select>

    <br><br>

    <!-- Button to toggle image visibility -->
    <h2>Click to Show/Hide Image:</h2>
    <button id="toggleButton">Show Image</button>

    <br><br>

    <!-- Image to be shown or hidden -->
    <img id="image" src="https://images.unsplash.com/photo-1732295160378-78fbd97fbf83?q=80&w=1922&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Sample Image">

    <script>
        // jQuery for drop-down list
        $("#fruitDropdown").change(function() {
            var selectedFruit = $(this).val();
            alert("You selected: " + selectedFruit);
        });

        // jQuery for toggling the image visibility
        $("#toggleButton").click(function() {
            $("#image").toggle(); // This will toggle the visibility of the image
            // Change button text based on visibility
            if ($("#image").is(":visible")) {
                $("#toggleButton").text("Hide Image");
            } else {
                $("#toggleButton").text("Show Image");
            }
        });
    </script>

</body>
</html>
