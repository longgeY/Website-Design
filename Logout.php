<?php
    header("Content-type:text/html;charset=UTF-8");

    session_start();

    $username = $_SESSION['username'];
    $_SESSION = array();
    session_destroy();

    echo"Goodbye, ".$username.'<br>';
    echo"<a href='Login.html'>Switch Account</a>.<br>";
    header("refresh:4; url=Flea market.php");
?>    