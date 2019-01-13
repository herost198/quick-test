<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<h1>1 . Viết các câu lệnh php in ra các biến xuất hiện trên URL
sử dụng $_REQUEST và $_GET
URL giả định : index.php?controller=post&action=edit&id=100&return_page=abc.php
</h1>
    <form action="" method="get">
        <input type="hidden" name="controller" value="post">
        <input type="hidden" name="action" value="edit">
        <input type="hidden" name="id" value=100>
        <input type="hidden" name="return_page"  value="abc.php">

        <button type="submit" >submit</button>

    </form>
    <?php
        if(isset($_REQUEST)){
            $controller = $_REQUEST['controller'];
            $action = $_REQUEST['action'];
            $id = $_REQUEST['id'];
            $return_page = $_REQUEST['return_page'];
            echo 'controller: ' . $controller . '<br/>';
            echo 'action: ' . $action . '<br/>';
            echo 'id: ' . $id . '<br/>';
            echo 'return_page: ' . $return_page . '<br/>';
        }
    ?>
</body>
</html>