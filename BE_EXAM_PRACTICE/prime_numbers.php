<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Numbers Table</title>
</head>

<body>
    <h1>First 10 Prime Numbers</h1>
    <div id="table-container"></div>

    <script>
        let cnt = 0;
        let primes = [];

        // Generate the first 10 prime numbers
        for (let index = 2; cnt < 10; index++) {
            let isPrime = true;
            for (let j = 2; j <= Math.sqrt(index); j++) {
                if (index % j === 0) {
                    isPrime = false;
                    break;
                }
            }
            if (isPrime) {
                cnt++;
                primes.push(index);
            }
        }

        // Function to create and display the table
        function displayPrimesInTable(primes) {
            const tableContainer = document.getElementById('table-container');

            // Create a table element
            const table = document.createElement('table');
            table.border = '1';
            table.style.borderCollapse = 'collapse';
            table.style.width = '50%';
            table.style.margin = '10px 0';

            // Create a table header
            const thead = document.createElement('thead');
            const headerRow = document.createElement('tr');
            const th1 = document.createElement('th');
            th1.textContent = 'Index';
            const th2 = document.createElement('th');
            th2.textContent = 'Prime Number';
            headerRow.appendChild(th1);
            headerRow.appendChild(th2);
            thead.appendChild(headerRow);
            table.appendChild(thead);

            // Create a table body
            const tbody = document.createElement('tbody');
            primes.forEach((prime, index) => {
                const row = document.createElement('tr');
                const cellIndex = document.createElement('td');
                cellIndex.textContent = index + 1; // Index starts from 1
                const cellPrime = document.createElement('td');
                cellPrime.textContent = prime;
                row.appendChild(cellIndex);
                row.appendChild(cellPrime);
                tbody.appendChild(row);
            });
            table.appendChild(tbody);

            // Append the table to the container
            tableContainer.appendChild(table);
        }

        // Call the function to display primes
        displayPrimesInTable(primes);
    </script>
</body>

</html>