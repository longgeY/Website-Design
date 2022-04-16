<!DOCTYPE html>
<html>
    <head>
        <meta name="author" content="Longge Yuan">
    
        <title>You submitted!</title>
    </head>

    <body>
        <h1>Submitted successfully</h1>
    
        <?php
            session_start();

            $file_name = "myitem.txt";
            $Allitem_file = "Allitem.txt";
            $username = $_SESSION['username'];
            // if(isset($_POST['Upload'])){
            //     $tmp_path = $_FILES['img']['tmp_name'];
            //     $path=_DIR_."\\".$_FILES['img']['name'];
            //     echo $path;
            // }

            $price = $_POST['price'];
            $name = $_POST['itemname'];
            $number = $_POST['number'];
            $Phonenumber = $_POST['PhoneNumber'];

            $appendfile = fopen($file_name, "a");
            $appenditemfile = fopen($Allitem_file, "a");
            fwrite($appendfile, $name . "; " . $price . "; " . $number . "; " . $Phonenumber . "\n");
            fwrite($appenditemfile, $name . "; " . $price . "; " . $username . "; " . $number . "; " . $Phonenumber . "\n");
            fclose($appendfile);
            fclose($appenditemfile);

            echo "<p>Your upload was successful.</p>";
            header("refresh:2; url=Upload.html");
        ?>
    </body>
</html>