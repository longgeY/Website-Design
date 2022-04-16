<?php
    header("Content-type:text/html;charset=UTF-8");

    session_start();

    if (isset($_SESSION['isLogin'])){
        echo"Hello!".$_SESSION['username'].', welcome to the Flea market!<br>';
        header("refresh:2; url=MyProfile.php");
    } else{
        echo"You haven't log in, please <a href='login.html'>log in</a>";
    }
?>    