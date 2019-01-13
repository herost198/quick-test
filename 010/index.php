<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<h1>1 . Viết ra 1 chương trình khi nhập vào họ tên của 1 người
    hãy in ra đâu là họ :
    đâu là tên :
    đâu là tên đệm .
    Ví dụ : nguyễn thị thuý diễm
    thì tên là diễm
    họ là nguyễn
    tên đệm là thị thuý
</h1>
    <form action="" method="post">
        <input type="text" name='ten' value=
            <?php
             echo (isset($_REQUEST['ten'])? $_REQUEST['ten']: '');
            ?>
        >
        <input type="submit" value="kiem tra">
    </form>
    <?php
        if(isset($_REQUEST['ten'])){
            $data = $_REQUEST['ten'];
            echo  $data;
            $arrData = explode(" ",$data);
            $ten = array_pop($arrData);
            $ho = array_shift($arrData);
            if(count($arrData)>1)
                $hodem = join(" ",$arrData);
                else $hodem = join("",$arrData);
            echo '<br/> Họ : '.$ho;
            echo '<br/> Tên : '.$ten;
            echo '<br/> Họ đệm : '.$hodem;
        }    
    ?>
</body>
</html>