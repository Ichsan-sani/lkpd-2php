<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function hitungPecahanUang($jumlahUang) {
        $pecahan = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500, 200, 100];
        $hasil = [];

        foreach ($pecahan as $nilai) {
            if ($jumlahUang >= $nilai) {
                $jumlahLembar = intdiv($jumlahUang, $nilai);
                $hasil[$nilai] = $jumlahLembar;
                $jumlahUang %= $nilai;
            }
        }

        return $hasil;
    }


    $jumlah = 150000;
    echo "Uang : " . $jumlah . "<br>";
    foreach (hitungPecahanUang($jumlah) as $pecahan => $jumlahLembar) {
        echo "Pecahan Rp " . number_format($pecahan, 0, ',', '.') . ": " . $jumlahLembar . " lembar" . "<br>";
    }
    ?>
</body>
</html>