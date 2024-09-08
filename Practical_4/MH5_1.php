<?php
    session_start();
    if ($_SESSION['uname'] == $_GET['uname']) {
        echo "Hey There, welcome to the hansil's blog";
    }
    else{
        echo "Please first register in the blog";
    }
?>