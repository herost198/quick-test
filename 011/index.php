<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<style>
    table,tr,th,td{
        border: 1px solid black;
    }
</style>
<body>

<div>1 . Cho bạn 1 mảng
    $student = array(); <br>
    $student[] = array('name' => 'Nguyễn văn anh', 'age' => 21, 'point' => 7); <br>
    $student[] = array('name' => 'Nguyễn thi hoa', 'age' => 23, 'point' => 8); <br>
    $student[] = array('name' => 'Nguyễn văn tuấn', 'age' => 24, 'point' => 9); <br>
    $student[] = array('name' => 'Lê văn thuận', 'age' => 25, 'point' => 7); <br>
    $student[] = array('name' => 'Trịnh quang anh', 'age' => 26, 'point' => 1); <br>
    $student[] = array('name' => 'Lê thuỳ linh', 'age' => 28, 'point' => 3); <br>
    $student[] = array('name' => 'Lê thuỳ trang', 'age' => 25, 'point' => 5); <br>
    $student[] = array('name' => 'Vũ đình hùng', 'age' => 20, 'point' => 8); <br>
    $student[] = array('name' => 'Lê văn an', 'age' => 19, 'point' => 9); <br>

    Hãy dùng dữ liệu sau và vòng lặp foreach để in ra 1 table thông tin của các sinh viên này
    và xếp loại của họ dự tên số điểm mà họ có
</div>
    <table>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Point</th>
            <th>classification</th>
        </tr>
        
    <?php
        $data = fopen("db.json","r");
        $arrData = json_decode(fread($data, filesize("db.json")),true);
        foreach($arrData as $value): ?>
        <?php    foreach ($value as $key => $values) : ?>
                <tr>
                    <td><?php echo $values['name'] ?></td> 
                    <td><?php echo $values['age'] ?></td>
                    <td><?php echo $values['point'] ?></td>
                    <td>
                        <?php
                            if($values['point'] >=8.5) echo "giỏi";
                            elseif($values['point']>=6.5) echo "khá";
                            else echo "trung bình";
                        ?>
                    </td>
                 </tr>
          <?php endforeach; ?>
            
        <?php endforeach;  ?>
        </table>
</body>
</html>