<body>
    <table border="3" cellpadding="10" cellspacing="10" align="center">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <tr>
                <!--  emp_no, emp_name, designation and salary -->
                <th>Cutomer_no</th>
                <th>Customer_name</th>
                <th>Item_Purchased</th>
                <th>Mobile_No</th>
                <th>DELETE</th>
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

                $i = 1;
                if ($num > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr><td>" . $row['cust_no'] . "</td><td>" . $row['cust_name'] . "</td>" . "<td>" . $row['Item_purchase'] . "</td><td>" .  $row['mob_no'] . "</td><td><input type='checkbox' value='" . $row['cust_no'] . "' name='CheckBox[]'></td></tr>";
                        $i++;
                    }
                }
            }
            ?>
            <tr>
                <td colspan="5"><input type="submit" name="submit" value="submit"></td>
            </tr>
        </form>
    </table>
</body>
<?php

if (isset($_REQUEST['submit'])) {
    global $num;
    if (!empty($_REQUEST["CheckBox"])) {
        foreach ($_REQUEST["CheckBox"] as $selected) {
            $sql = "DELETE FROM customer_table where cust_no = '$selected'";
            echo $sql;
            $result = mysqli_query($conn, $sql);
        }
    }
    header("location:http://localhost/Hansil/Practical_5/MH7.php");
}

?>