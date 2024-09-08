<?php
  session_start();

  if(isset($_SESSION['visitor'])) {
    $_SESSION['visitor'] += 1;
  } else {
    $_SESSION['visitor'] = 1;
  }

  echo "You have visited this page " . $_SESSION['visitor'] . " times.";
?>
<?php
    $count = 1;
    if(isset($_COOKIE['count'])) {
        $count = $_COOKIE['count'] + 1;
    }
    setcookie('count', $count, time()+86400); // 1 day expiration
?>

<!DOCTYPE html>
<html>
<head>
    <title>Page View Counter</title>
</head>
<body>
    <h1>Welcome!</h1>
    <p>This is your <?php echo $count; ?> visit to this page.</p>
</body>
</html>
