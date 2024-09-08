<?php
session_start();
$db_host = 'localhost:3307'; // your database host name
$db_username = 'root'; // your database username
$db_password = ''; // your database password
$db_name = 'php_database'; // your database name

// Create connection
$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the login form has been submitted
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the username exists in the database
    $sql = "SELECT * FROM login_php_practical WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // Check if the password is correct
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $username;
            header("Location: welcome.php"); // Redirect to the welcome page
            exit();
        } else {
            echo "Invalid password";
        }
    } else {
        // If the username doesn't exist, add a new user to the database
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO login_php_practical (username, password) VALUES ('$username', '$hashed_password')";
        if (mysqli_query($conn, $sql)) {
            $_SESSION['username'] = $username;
            header("Location: welcome.php"); // Redirect to the welcome page
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}

// If the forgot password form has been submitted
if (isset($_POST['forgot_password'])) {
    $username = $_POST['username'];
    $new_password = $_POST['new_password'];

    // Update the password for the user in the database
    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
    $sql = "UPDATE login_php_practical SET password = '$hashed_password' WHERE username = '$username'";
    if (mysqli_query($conn, $sql)) {
        echo "Password updated successfully";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login System</title>
</head>

<body>
    <h2>Login</h2>
    <form method="POST">
        <label>Username:</label>
        <input type="text" name="username"><br>
        <label>Password:</label>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="Login">
    </form>

    <h2>Forgot Password</h2>
    <form method="POST">
        <label>Username:</label>
        <input type="text" name="username"><br>
        <label>New Password:</label>
        <input type="password" name="new_password"><br>
        <input type="submit" name="forgot_password" value="Submit">
    </form>
</body>

</html>