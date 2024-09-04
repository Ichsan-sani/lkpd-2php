<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $student = [
        [
            'nama' => 'Andi',
            'nilai' => [80, 78, 82, 78, 88]
        ],
        [
            'nama' => 'Boni',
            'nilai' => [86, 70, 80, 85, 81]
        ],
        [
            'nama' => 'Dani',
            'nilai' => [83, 91, 70, 73, 81]
        ],        [
            'nama' => 'Eko',
            'nilai' => [89, 85, 84, 86, 88]
        ],
    ];

    foreach ($student as $s) {
        $nilai = $s['nilai'];
        $sum = array_sum($nilai);
        $count = count($nilai);
        $average = $sum / $count;
        echo  $s['nama'] . " = " . number_format($average, 2) . "<br>";
    }
    ?>
</body>
</html>