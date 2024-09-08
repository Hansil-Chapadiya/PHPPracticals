<body>
    <table border="3" cellpadding="10" cellspacing="10" align="center">
        <tr>
            <!--  emp_no, emp_name, designation and salary -->
            <th>Cutomer_no</th>
            <th>Customer_name</th>
            <th>Item_Purchased</th>
            <th>Mobile_No</th>
        </tr>
        <?php
        // Connecting to the Database
        $servername = "localhost:3307";
        $username = "root";
        $password = "";
        $database = "php_database";

        // Create a connection
        $conn = mysqli_connect($servername, $username, $password, $database);
        // Die if connection was not successful
        if (!$conn) {
            die("Sorry we failed to connect: " . mysqli_connect_error());
        } else {
            // Submit these to a database
            // Sql query to be executed
            $sql = "SELECT * FROM customer_table";
            $result = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($result);

            if ($num > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>" . $row['cust_no'] . "</td><td>" . $row['cust_name'] . "</td>" . "<td>" . $row['Item_purchase'] . "</td><td>" .  $row['mob_no'] . "</td></tr>";
                }
            }
        }
        ?>
    </table>
</body>