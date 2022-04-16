<!DOCTYPE html>
<?php session_start()?> 
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Shimin Li">

        <title>Flea Market</title>

        <link rel="stylesheet" href="FinalProject.css">
    </head>
    
    <body>
        <div class="paragraph">
            <div id="navbar">
                <ul id="menuul">
                    <li><a href="Flea market.php">Home</a></li>
                    <li><a href="Login.html">Login</a></li>
                    <li><a href="MyProfile.php">My Profile</a></li>
                </ul>
            </div>

            <h1>Welcome!</h1>
            <h1>What do you want to do today?</h1>

            <form action="Login.php" method="post">
                <fieldset>
                    <legend>What do you want to do</legend>
                    <ul>
                        <li>
                            <label>Upload my item</label>
                            <input type = "button" name="upload" value="Upload" onclick="javascript:window.location.href='Upload.html'">
                        </li>
                        <li>
                            <label>See my item</label>
                            <input type = "button" name="result" value="Review" onclick="javascript:window.location.href='Review.php'">
                        </li>
                    </ul>    
                </fieldset>    
            </form>

            <a href='Logout.php'>log out</a>
            
        </div>
    </body>
</html>