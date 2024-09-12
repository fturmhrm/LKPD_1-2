<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">Cek Simbol dalam Kalimat</h2>
        <form action="" method="post" class="mt-4">
            <div class="form-group">
                <label for="kalimat">Masukkan Kalimat</label>
                <input name="kalimat" type="text" class="form-control" id="kalimat" required>
            </div>
            <button type="submit" class="btn btn-primary">Cek</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $kalimat = $_POST['kalimat'];
            preg_match_all('/[^a-zA-Z\s]/', $kalimat, $matches);

            if (count($matches[0]) > 0) {
                // Menghitung duplikasi simbol
                $uniquesymbols = array_unique($matches[0]);
                echo "<div class='alert alert-info mt-4'>Karakter terdapat dalam kalimat: " . implode(', ', $uniquesymbols) . "</div>";
            } else {
                echo "<div class='alert alert-warning mt-4'>Tidak terdapat simbol pada kalimat.</div>";
            }
        }
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
