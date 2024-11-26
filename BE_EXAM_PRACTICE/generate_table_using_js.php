<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Enter Rows: <input type="number" value="500" id="row"><br>
    Enter Columns: <input type="number" value="3" id="column"><br>
    <div id="table-container"></div>
    <button name="submit" value="Create" onclick="generatetable()">Create</button>

    <script>
        function generatetable() {
            const tableContainer = document.getElementById('table-container');

            // Clear previous table
            tableContainer.innerHTML = '';

            // Create table
            const table = document.createElement('table');
            table.border = '3';
            table.style.borderCollapse = 'collapse';
            table.cellPadding = 3;
            table.cellSpacing = 3;

            // Get row and column values
            const row = parseInt(document.getElementById('row').value);
            const column = parseInt(document.getElementById('column').value);

            // Create table header
            const tableHeaderRow = document.createElement('tr');
            for (let i = 1; i <= column; i++) {
                const th = document.createElement('th');
                th.textContent = 'Column' + i;
                tableHeaderRow.appendChild(th);
            }
            table.appendChild(tableHeaderRow);

            // Create table rows
            for (let i = 0; i < row; i++) {
                const tableRow = document.createElement('tr');
                for (let j = 0; j < column; j++) {
                    const cell = document.createElement('td');
                    cell.textContent = 'cell' + i + '-' + j;
                    tableRow.appendChild(cell);
                }
                table.appendChild(tableRow);
            }

            // Append table to container
            tableContainer.appendChild(table);
        }
    </script>
</body>

</html>