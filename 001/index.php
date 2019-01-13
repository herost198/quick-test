<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
            <form action="" method="post" >
                <input type="submit" name='test'> 
            </form>
            <?php
                if(isset($_REQUEST['test'])){
                     for( $i=1;$i<5;$i++ ){
                         if (!is_dir("demo\/$i")) {
                            mkdir("$i", 0777, true);
                            $myfile = fopen("$i\/index.php","w");
                            $txt= "<?php echo basename(__FILE__);  ?>";
                            fwrite($myfile,$txt);
                            fclose($myfile);
                         }
                     }
                    
                } 
                
            ?>
    
    
</body>
</html>