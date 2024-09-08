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
    if (isset($_REQUEST['submit'])) {
        $count_cust = $_REQUEST['count'];
        for ($i = 1; $i <= $count_cust; $i++) {
            $cust_no = $_REQUEST['cust_no:' . $i];
            $cust_name = $_REQUEST['cust_name:' . $i];
            $cust_item = $_REQUEST['item:' . $i];
            $cust_mob = $_REQUEST['mob:' . $i];
            $sql1 = "UPDATE customer_table SET cust_name = '" . $cust_name . "', Item_purchase = '" . $cust_item .  "', mob_no =" . $cust_mob . " WHERE cust_no = '" . $cust_no . "'";
            if (mysqli_query($conn, $sql1)) {
                header("location:http://localhost/Hansil/Practical_5/MH8.php");
            }
        }
    }
}
