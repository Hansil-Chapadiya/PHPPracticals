<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>State-City Selector</title>
</head>

<body>
    <h1>Select State and City</h1>
    <form method="get">
        <label for="states">Select state: </label>
        <select id="states" onchange="loadCity()">
            <option value="">--Select State--</option>
            <option value="GUJARAT">GUJARAT</option>
            <option value="RAJSTHAN">RAJSTHAN</option>
            <option value="MAHARASTRA">MAHARASTRA</option>
        </select>
        <br><br>
        <label for="city">Select city: </label>
        <div id="city">
            <select disabled>
                <option>--Select State First--</option>
            </select>
        </div>
        <br>
        <div class="no-result" id="no-result" style="display: none;">No matching city found</div>
    </form>

    <script>
        function loadCity() {
            const state = document.getElementById('states').value; // Get the selected state
            const xhr = new XMLHttpRequest();
            xhr.open('GET', 'loads_values_using_ajax_backend.php?q=' + encodeURIComponent(state), true);

            xhr.onreadystatechange = () => {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    const response = xhr.responseText.trim();
                    const cityContainer = document.getElementById('city');

                    // Update city dropdown
                    cityContainer.innerHTML = response;

                    // Handle no results found
                    if (response === '') {
                        document.getElementById('no-result').style.display = 'block';
                    } else {
                        document.getElementById('no-result').style.display = 'none';
                    }
                }
            };
            xhr.send(); // Send the request
        }
    </script>
</body>

</html>
