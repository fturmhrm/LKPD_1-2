<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Kalkulator Sederhana</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="angka-1" class="form-label">Angka Pertama</label>
                                <input type="number" id="angka-1" name="angka-1" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="operasi" class="form-label">Operasi</label>
                                <select name="operasi" id="operasi" class="form-select" required>
                                    <option value="none" disabled selected>Pilih Operasi</option>
                                    <option value="pertambahan">+</option>
                                    <option value="pengurangan">-</option>
                                    <option value="perkalian">*</option>
                                    <option value="pembagian">/</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="angka-2" class="form-label">Angka Kedua</label>
                                <input type="number" id="angka-2" name="angka-2" class="form-control" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Hitung</button>
                            </div>
                        </form>
                        <div class="mt-3">
                            <?php
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                $angka1 = $_POST["angka-1"];
                                $angka2 = $_POST["angka-2"];
                                $operasi = $_POST["operasi"];
                                
                                switch ($operasi) {
                                    case "pertambahan":
                                        $hasil = $angka1 + $angka2;
                                        break;
                                    case "pengurangan":
                                        $hasil = $angka1 - $angka2;
                                        break;
                                    case "perkalian":
                                        $hasil = $angka1 * $angka2;
                                        break;
                                    case "pembagian":
                                        if ($angka2 == 0) {
                                            echo '<div class="alert alert-danger" role="alert">Error: Pembagi tidak boleh 0.</div>';
                                            exit();
                                        }
                                        $hasil = $angka1 / $angka2;
                                        break;
                                    default:
                                        echo '<div class="alert alert-danger" role="alert">Error: Pilih operasi yang valid.</div>';
                                        exit();
                                }
                                
                                echo '<div class="alert alert-success" role="alert">Hasil: ' . $hasil . '</div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
