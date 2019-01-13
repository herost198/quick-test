<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?PHP
    $res = json_decode(file_get_contents('https://geoip-db.com/json/'));
    $res = (array)$res;
    echo '<pre>';
        print_r($res);
    echo '</pre>';
    echo $res['IPv4'];
?>
</body>
</html>