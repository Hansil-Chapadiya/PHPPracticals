<body>
    <table border="3" cellpadding="10" cellspacing="10" align="center">
        <form action="./MH8_2.php" method="post" target="_blank">
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
                // global $i;
                $i = 1;
                if (isset($_REQUEST['submit'])) {
                    if (!empty($_REQUEST["CheckBox"])) {
                        foreach ($_REQUEST["CheckBox"] as $selected) {
                            $sql = "SELECT * FROM customer_table where cust_no = '$selected'";
                            $result = mysqli_query($conn, $sql);
                            $num = mysqli_num_rows($result);
                            if ($num > 0) {
                                if ($row = mysqli_fetch_assoc($result)) {
                                    echo "<input type='hidden' value='" . $row['cust_no'] . "' name='cust_no:$i'>";
                                    echo "<tr><td><input type='text' value ='" . $row['cust_no'] . "' disabled></td><td><input type='text' name='cust_name:$i' value ='" . $row['cust_name'] . "'></td>" . "<td><input type='text' name='item:$i' value ='" . $row['Item_purchase'] . "'></td><td><input type='text' name='mob:$i' value ='" .  $row['mob_no'] . "'></td></tr>";
                                    // echo 'cust_no:.' .$i. "<br>";
                                    $i++;
                                }
                            }
                        }
                    }
                }
            }
            ?>
            <tr>
                <input type="hidden" value="<?php echo ($i-1); ?>" name="count">
                <td colspan="5"><input type="submit" name="submit" value="submit"></td>
            </tr>
        </form>
    </table>
</body>

