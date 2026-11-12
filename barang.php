<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Perhitungan Barang</title>
</head>
<body>

    <h2>Form Pembelian Barang</h2>

    <form method="POST" action="">
        <label>Nama Barang:</label>
        <input type="text" name="barang">
        <br><br>

        <label>Harga Barang:</label>
        <input type="number" name="harga">
        <br><br>

        <label>Jumlah:</label>
        <input type="number" name="jumlah">
        <br><br>

        <button type="submit">Hitung</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $barang = trim($_POST["barang"] ?? "");
            $harga = $_POST["harga"] ?? "";
            $jumlah = $_POST["jumlah"] ?? "";

            if ($barang == "" || $harga == "" || $jumlah == "") {
                echo "Semua data wajib diisi.";
            } elseif (!is_numeric($harga) || !is_numeric($jumlah) || $harga <= 0 || $jumlah <= 0) {
                echo "Harga dan jumlah harus berupa angka lebih dari 0.";
            } else {
                $subtotal = $harga * $jumlah;

                echo "<h3>Hasil Pembelian</h3>";
                echo "Nama Barang: " . htmlspecialchars($barang, ENT_QUOTES, "UTF-8") . "<br>";
                echo "Harga: Rp" . number_format($harga, 0, ",", ".") . "<br>";
                echo "Jumlah: " . $jumlah . "<br>";
                echo "Subtotal: Rp" . number_format($subtotal, 0, ",", ".");
            }
        }
    ?>

</body>
</html>