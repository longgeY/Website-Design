<!DOCTYPE html>
<html>
    <head>
        <title>Vote Results</title>

        <meta charset="UTF-8">
        <meta name="author" content="Longge Yuan"> 

        <link rel="stylesheet" href="FinalProject.css">

        <style>
            body {
                width: 1000px;	
                margin: auto;	
                background-image:url('https://static.runoob.com/images/mix/gradient2.png');
	            background-repeat:repeat-x;
            }
        </style>

    </head> 
    <body>
        <div class="main">
            <h1>My Item list</h1>
    
            <table>
                <thread>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Account</th>
                    <th>Phone Number</th>
                </tr>    
                </thread>       

                <?php  
                    $str= file_get_contents("myitem.txt");
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
                        <?php if(strpos($col,'http://')===0):?>
                              <td><a href="$col1"><?php echo substr($col1,0);?></a></td>
                        <?php else: ?>
                              <td><?php echo $col; ?></td>
                        <?php endif ?>
                        <?php endforeach ?>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>    
        </div>
        <?php echo"<a href='MyProfile.php'>Go Back</a>"?>
    </body>
</html>

