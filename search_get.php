<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pencarian Mahasiswa</title>
</head>
<body>

    <h2>Pencarian Nama Mahasiswa</h2>

    <form method="GET" action="">
        <input type="text" name="cari" placeholder="Masukkan nama">
        <button type="submit">Cari</button>
    </form>

    <?php
        $mahasiswa = ["Alya", "Bima", "Citra", "Doni", "Eka"];

        if (isset($_GET["cari"])) {
            $kata = trim($_GET["cari"]);

            $ditemukan = false;

            foreach ($mahasiswa as $nama) {
                if (strcasecmp($kata, $nama) == 0) {
                    $ditemukan = true;
                    break;
                }
            }

            if ($ditemukan) {
                echo "Nama " . htmlspecialchars($kata, ENT_QUOTES, "UTF-8") . " ditemukan.";
            } else {
                echo "Nama tidak ditemukan.";
            }
        }
    ?>

</body>
</html>