
<?php
    function hitungDiskon($harga, $persen) {
        $potongan = $harga * ($persen / 100);
        return $harga - $potongan;
    }

    function hitungLuas($panjang, $lebar) {
        return $panjang * $lebar;
    }

    echo "Luas persegi panjang: " . hitungLuas(8, 4) . "<br>";

    $hargaAkhir = hitungDiskon(150000, 10);

    echo "Harga setelah diskon: Rp" . number_format($hargaAkhir, 0, ",", ".");
?>
