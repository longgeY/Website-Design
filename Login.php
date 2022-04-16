<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Longge Yuan">

        <title>Flea Market</title>

        <link rel="stylesheet" href="FinalProject.css">
    </head>
    
    <body>
        <?php
            session_start();

            if(isset($_POST['Login'])){
                $username = trim($_POST['username']);
                $password = trim($_POST['password']);

                if(($username != 'longge') || ($password != '12345')){
                    header("refresh:2; url=Login.html");
                    echo"Your account or password is incorrect";
                    exit;
                } elseif(($username == 'longge') && ($password == '12345')){
                $_SESSION['username'] = $username;
                $_SESSION['isLogin'] = 1;

                header('location:response.php');
                }
            }
        ?>  
    </body>
</html>    