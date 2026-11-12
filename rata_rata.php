<?php
    $nilai1 = 80;
    $nilai2 = 85;
    $nilai3 = 90;

    $rataRata = ($nilai1 + $nilai2 + $nilai3) / 3;

    echo "<h2>Menghitung Rata-rata Nilai</h2>";
    echo "Nilai 1: " . $nilai1 . "<br>";
    echo "Nilai 2: " . $nilai2 . "<br>";
    echo "Nilai 3: " . $nilai3 . "<br>";
    echo "Rata-rata: " . number_format($rataRata, 2);
?>