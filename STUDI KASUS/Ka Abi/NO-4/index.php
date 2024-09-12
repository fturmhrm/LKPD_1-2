<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilangan Prima</title>
</head>
<body>
    <form action="" method="post">
        <label for="angka">Masukkan angka</label>
        <input type="number" id="angka" name="angka">
        <button type="submit">Cek</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $angka = $_POST["angka"];
        $hasil ='';

        if ($angka <= 1) {
            $hasil = 'Bukan bilangan prima';
        } else {
            for ($i = 2; $i <= sqrt($angka) ; $i++) {
                if ($angka % $i == 0) {
                    $hasil = 'Bukan bilangan prima';
                    break;
                }
            }
            if ($hasil == '') {
                $hasil = 'Bilangan prima';
            }
        }
        echo "Angka ". $angka. " adalah ". $hasil;  
    }
    ?>
</body>
</html>