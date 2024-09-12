<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mengubah Huruf Kecil Ke Kecil</title>
</head>
<body>
    <form action="" method="post">
        <label for="input">Masukkan kalimat:</label>
        <input type="text" id="teks" name="teks">
        <button type="submit">Ubah huruf ke kecil</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $teks = $_POST["teks"];
            $tb = strtolower($teks);
            echo "<p>Kalimat yang sudah dibesarkan: <b>$tb</b></p>";
        }
    ?>
</body>
</html>