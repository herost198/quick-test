<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

    <h1>1 . Viết ra 1 chương trình php tính tuổi của 1 người khi biết ngày tháng năm sinh của họ</h1>

    <form action="" method="post">
        <label for="">nhập ngày tháng năm sinh của bạn( Example: 20/11/2019)</label>
        <input type="text" name="date" value=
            <?php
                echo ( isset($_REQUEST['date']) ?   $_REQUEST['date'] :  '');
            ?>
        >
        <input type="submit">
    </form>
    <?php
        if(isset($_REQUEST['date'])){ 
            $thoi_gian_hien_tai = date("Y-m-d");
            // var_dump($thoi_gian_hien_tai);
            $strDate = explode("/",$_REQUEST['date']);
            
            $birth  =   date_create( $strDate[2].'-'.$strDate[1].'-'.$strDate[0]);
            if($birth == false){
                echo "Bạn nhập ngày k đúng";
            }
            else{
                $thoi_gian_hien_tai = date_create($thoi_gian_hien_tai);
                // var_dump($birth);
                if($thoi_gian_hien_tai < $birth){
                    echo "Bạn nhập ngày k đúng";
                }else{
                    $interval = date_diff($birth,$thoi_gian_hien_tai);
                    echo "số tuổi của bạn là: ". $interval->format('%y');
                }
            }
            
        }
    ?>


</body>
</html>