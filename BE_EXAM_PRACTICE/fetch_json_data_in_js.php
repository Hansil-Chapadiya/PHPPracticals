<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display JSON Data in Table</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>

<h2>Display JSON Data in a Table</h2>

<!-- Table where data will be displayed -->
<table id="data-table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>City</th>
        </tr>
    </thead>
    <tbody>
        <!-- Data rows will be added here dynamically -->
    </tbody>
</table>

<script>
    // JSON object with data
    const jsonData = [
        { "name": "John Doe", "age": 28, "city": "New York" },
        { "name": "Jane Smith", "age": 34, "city": "London" },
        { "name": "Sam Brown", "age": 22, "city": "Sydney" },
        { "name": "Emily Davis", "age": 29, "city": "San Francisco" }
    ];

    // Function to display JSON data in the table
    function displayData(data) {
        // Get the table body element
        const tableBody = document.querySelector("#data-table tbody");

        // Clear existing rows
        tableBody.innerHTML = "";

        // Loop through the data array
        data.forEach(item => {
            // Create a new row
            const row = document.createElement("tr");

            // Create and append cells for each column in the row
            const nameCell = document.createElement("td");
            nameCell.textContent = item.name;
            row.appendChild(nameCell);

            const ageCell = document.createElement("td");
            ageCell.textContent = item.age;
            row.appendChild(ageCell);

            const cityCell = document.createElement("td");
            cityCell.textContent = item.city;
            row.appendChild(cityCell);

            // Append the row to the table body
            tableBody.appendChild(row);
        });
    }

    // Call the function to display the JSON data in the table
    displayData(jsonData);
</script>

</body>
</html>
