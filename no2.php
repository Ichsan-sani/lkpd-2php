<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>No 2</h2>
    <form method=POST>
        <label>Cek Gaji : </label><br>
        <input type="number" name="number" required>
        <button name="gaji">gaji</button>
    </form>
    <?php
    if(isset($_POST['gaji'])) {
        $number = $_POST['number'];
        $jamlebih = $number - 8;
        $bonus = 50000;
        if ($jamlebih == 1) {
            echo "Lama Kerja : " . $number . "<br>";
            echo "Jam Lebih : " . $jamlebih . "<br>";
            echo "Jumlah Kompensasi : " . $bonus . "<br>";    
        }else if ($jamlebih >= 1) {
            $next = $number - 9;
            $next2 = 25000 * $next;
            $hasil = $bonus + $next2;
            echo "Lama Kerja : " . $number . "<br>";
            echo "Jam Lebih : " . $jamlebih . "<br>";
            echo "Jumlah Kompensasi : " . $hasil . "<br>";  
        }else {
            echo "Lama Kerja : " . $number . "<br>";
            echo "Jam Lebih : " . $jamlebih . "<br>";
        }
    }
    ?>
</body>
</html>