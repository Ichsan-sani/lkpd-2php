<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //melakukan pencocokan ekspresi reguler/ mencari pola pada sting match
    //mereplac karakter yang di pilih 
    //implode memisahkan arr
    //str un membagi str men arr
    //d mencari digit
    //^0- yang bukan angka
    //regex /Regular Expression metode untuk mencari suatu pola dalam sebuah string
    $hbd = "Selamat Ulang Tahun yang ke-17";

    // Cek apakah terdapat text
    if(preg_match("/\d/",$hbd)) {

        // Replace string ksosong untuk menghapus semua char kecuali angka 0-9
        $pisah = preg_replace("/[^0-9]/","",$hbd);

        // Implode dengan 'koma' dan lakukan split agar menjadi array dahulu
    $number = implode(",",str_split($pisah));

    // Logika apakah terdapat angka
    echo "text mengandung angka : " . $number  ;
    } else {
    echo "The HBD message does not contain a number.";
    }
    ?>
</body>
</html>