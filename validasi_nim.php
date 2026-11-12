<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Validasi NIM</title>
</head>
<body>

    <h2>Form Validasi NIM</h2>

    <form method="POST" action="">
        <label>Masukkan NIM:</label>
        <input type="text" name="nim">
        <button type="submit">Periksa</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nim = trim($_POST["nim"] ?? "");

            if (!ctype_digit($nim)) {
                echo "NIM harus berupa angka.";
            } elseif (strlen($nim) != 9) {
                echo "NIM harus terdiri dari 9 digit.";
            } else {
                echo "NIM valid: " . htmlspecialchars($nim, ENT_QUOTES, "UTF-8");
            }
        }
    ?>

</body>
</html>