<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Shimin Li">

        <title>Flea Market</title>

        <link rel="stylesheet" type="text/css" href="FinalProject.css">
        <script src="search.js"></script>
    </head>
    
    <body>
        <div id="navbar">
            <ul id="menuul">
                <li><a href="Flea market.php">Home</a></li>
                <li><a href="Login.html">Login</a></li>
                <li><a href="response.php">My Profile</a></li>
            </ul>
        </div>

        <div class="main">
            <h1>Welcome to the Market~!</h1>
            <h3>THESE ITEMS ARE ON SALE!!!</h3>

            <fieldset>
                    <legend>Searching~!</legend>
                    <form id = "searchtext">
                        <label>Item name</label>
                        <input type = "text" name="Itemname">
                        <input type="button" name="searchitem" value="search" onclick="search()">
                    </form>

                    <table id="searchbox">
                        <thread>
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Seller</th>
                            <th>Amount</th>
                            <th>Phone Number</th>
                        </tr>    
                        </thread>
                    </table>
            </fieldset>            

            <fieldset>
            <legend>Item List</legend>
                <table id = "itemlist">
                    <thread>
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Seller</th>
                        <th>Amount</th>
                        <th>Phone Number</th>
                    </tr>    
                    </thread>       

                    <?php  
                        $str= file_get_contents("Allitem.txt");
                        $str1=explode("\n",$str);
                        foreach($str1 as $value){
                            if($value=="")continue;   
                            $cols=explode(';',$value);
                            $data[]=$cols;
                        }
                    ?>

                    <tbody>
                    <?php foreach($data as $str2):?>
                        <tr>
                            <?php foreach($str2 as $col):?>
                            <?php $col=trim($col);?>
                            <?php if(strpos($col,' ')===0):?>
                                <td><a href="$col1"><?php echo substr($col1,0);?></a></td>
                            <?php else: ?>
                                <td><?php echo $col; ?></td>
                            <?php endif ?>
                            <?php endforeach ?>
                        </tr>
                    <?php endforeach ?>
                    </tbody>
                </table>
            </fieldset>             
        </div>
    </body>
</html>