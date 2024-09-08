<body>
    <table border="3" cellpadding="10" cellspacing="10" align="center">
        <tr>
            <!--  emp_no, emp_name, designation and salary -->
            <th>Employee_no</th>
            <th>Employee_name</th>
            <th>Employee_Designation</th>
            <th>Employee_Salary</th>
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
            $sql = "SELECT emp_no,emp_name,designation,salary FROM employee_table";
            $result = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($result);

            if ($num > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>" . $row['emp_no'] . "</td><td>" . $row['emp_name'] . "</td>" . "<td>" . $row['designation'] . "</td><td>" .  $row['salary'] . "</td></tr>";
                }
            }
        }
        ?>
    </table>
</body>