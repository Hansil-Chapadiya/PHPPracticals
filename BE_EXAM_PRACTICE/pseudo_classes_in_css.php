<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Pseudo-Classes Example</title>
    <style>
        /* 1. :hover - Change color of links on hover */
        a:hover {
            color: red;
            text-decoration: underline;
        }

        /* 2. :focus - Change background color of input when focused */
        input:focus {
            background-color: lightyellow;
        }

        /* 3. :first-child - Style the first list item */
        ul li:first-child {
            font-weight: bold;
            color: green;
        }

        /* 4. :last-child - Style the last list item */
        ul li:last-child {
            font-style: italic;
            color: blue;
        }

        /* 5. :nth-child(n) - Style every 2nd list item */
        ul li:nth-child(2) {
            color: orange;
        }

        /* 6. :checked - Style checked checkbox */
        input[type="checkbox"]:checked {
            background-color: yellow;
        }

        /* 7. :disabled - Style disabled button */
        button:disabled {
            background-color: gray;
            color: white;
        }

        /* 8. :active - Style the button when clicked */
        button:active {
            background-color: green;
            color: white;
        }
    </style>
</head>
<body>

<h2>CSS Pseudo-Classes Example</h2>

<!-- 1. :hover Example -->
<a href="#">Hover over this link</a>

<br><br>

<!-- 2. :focus Example -->
<input type="text" placeholder="Click to focus">

<br><br>

<!-- 3. :first-child and :last-child Examples -->
<ul>
    <li>First item (Bold and green)</li>
    <li>Second item (Normal)</li>
    <li>Last item (Italic and blue)</li>
</ul>

<br><br>

<!-- 4. :nth-child Example -->
<ul>
    <li>Item 1</li>
    <li>Item 2 (Orange)</li>
    <li>Item 3</li>
</ul>

<br><br>

<!-- 5. :checked Example -->
<input type="checkbox" id="checkbox"> Check me!

<br><br>

<!-- 6. :disabled Example -->
<button disabled>Disabled Button</button>
<button>Normal Button</button>

<br><br>

<!-- 7. :active Example -->
<button>Click me</button>

</body>
</html>
