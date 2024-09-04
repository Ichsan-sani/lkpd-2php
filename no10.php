<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
       $usia = [12, 15, 17, 20, 25, 30, 35, 40, 45 , 50];
       $convert = implode(',', $usia);

       function umur($usia) {
        $jumlah2 = 0;
        foreach ($usia as $variable) {
            if ($variable >= 17) {
                $jumlah2++;
            }
        }
        return $jumlah2;
       }

       $anak = count($usia) - umur($usia);
    
       echo "List Usia : " . $convert . "<br>";
       echo "Jumlah Kategori Dewasa : " . umur($usia) . "<br>";
       echo "Jumlah Kategori Anak : " . $anak;
    ?>
</body>
</html>