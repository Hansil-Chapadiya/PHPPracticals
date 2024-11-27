<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Size Change on Hover</title>
    <style>
        /* Initial size of the image */
        img {
            width: 300px;
            height: 200px;
            transition: all 0.3s ease;  /* Smooth transition effect */
        }
    </style>
</head>
<body>

<h2>Hover over the image to change its size</h2>

<!-- Image element -->
<img src="https://images.unsplash.com/photo-1732295160378-78fbd97fbf83?q=80&w=1922&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Sample Image" id="image">

<script>
    // Get the image element by its ID
    const image = document.getElementById("image");

    // Event listener for mouseover (when the cursor enters the image)
    image.addEventListener("mouseover", function() {
        image.style.width = "400px";  // Increase the width
        image.style.height = "267px"; // Increase the height
    });

    // Event listener for mouseout (when the cursor leaves the image)
    image.addEventListener("mouseout", function() {
        image.style.width = "300px";  // Reset the width to original size
        image.style.height = "200px"; // Reset the height to original size
    });
</script>

</body>
</html>
