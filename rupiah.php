<?php
    $harga = 150000;
    $total = 2500000;

    echo "<h2>Format Mata Uang Rupiah</h2>";

    echo "Harga Buku: Rp" . number_format($harga, 0, ",", ".") . "<br>";

    echo "Total Pembayaran: Rp" . number_format($total, 0, ",", ".");
?>