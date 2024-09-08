<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$database = "php_database";

$conn = mysqli_connect($servername, $username, $password, $database); // Connection

if ($conn) {
    echo "Connection was sucessfull<br>"; // if Connection sucessful
    try {
        $sql1 = "SELECT * FROM customer";

        // Create a db
        $result = mysqli_query($conn, $sql1);
        $num = mysqli_num_rows($result);
        echo "Number of Rows = " . $num . "<br>";

        if ($num > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo " | " . $row['c_id'] . " | " . $row['name'] . " | " . " | " . $row['city'] . " |<br>";
            }
        }
    } catch (\Throwable $th) {
        //throw $th;
    }
} else {
    die("sorry" . mysqli_connect_error());
}
