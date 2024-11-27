<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Pseudo-Selectors Example</title>
    <style>
        /* 1. ::before - Add a bullet before the paragraph */
        p::before {
            content: "• ";  /* Add a bullet symbol before the paragraph */
            color: red;
            font-size: 24px;
        }

        /* 2. ::after - Add content after the paragraph */
        p::after {
            content: " (End of paragraph)";  /* Add a custom text after the paragraph */
            font-style: italic;
            color: gray;
        }

        /* 3. ::first-letter - Style the first letter of a paragraph */
        p::first-letter {
            font-size: 2em;
            color: blue;
            font-weight: bold;
        }

        /* 4. ::first-line - Style the first line of the paragraph */
        p::first-line {
            font-size: 1.2em;
            color: green;
        }

        /* 5. ::selection - Style the selected/highlighted text */
        ::selection {
            background-color: yellow; /* Change the background color of selected text */
            color: black; /* Change the color of selected text */
        }
    </style>
</head>
<body>

<h2>CSS Pseudo-Selectors Example</h2>

<p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras auctor, odio nec fringilla efficitur, libero dui dictum dui, sed dictum erat ipsum a ante. Sed vel velit a orci egestas tincidunt. Suspendisse potenti.
</p>

</body>
</html>
