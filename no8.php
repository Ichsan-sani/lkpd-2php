<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $data = [80,90,75,100,85,100,66];
    $cari = 100;
    $hitung = array_count_values($data)[$cari];
    echo "jumlah angka $cari = $hitung" ;
    ?>
</body>
</html>