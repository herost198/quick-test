<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" name="tinhtuoi">
        <input type="text" name='test' value=
            <?php
                isset($_REQUEST['test']) ? $_REQUEST['test'] : "" ;
            ?>
        >
    </form>

    <?php
        if(isset($_REQUEST['test'])){
            echo strlen(trim(($_REQUEST['test'])));
        }
    ?>
</body>
</html>