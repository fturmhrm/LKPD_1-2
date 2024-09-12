<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Jumlah String</title>
</head>
<body>
    <h1>Hitung Total Karakter Dalam String</h1>
<form action="" method="post">
    <label for="">Masukan string</label>
    <input type="teks" name="string" id="string">
    <button type="submit">Hitung</button>
</form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $string = $_POST['string'];
        echo "Total Karakter : ".strlen($string);
    }
    ?>
</body>
</html>