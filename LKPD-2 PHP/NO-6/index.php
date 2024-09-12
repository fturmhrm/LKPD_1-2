<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Belanjaan</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">Daftar Belanjaan</h2>
        <div class="mt-4">
            <?php
            $barang = [
                [
                    'nama_barang' => 'Pasta Gigi',
                    'harga_barang' => 18000,
                    'jumlah_beli' => 1,
                ],
                [
                    'nama_barang' => 'Sabun Mandi',
                    'harga_barang' => 5000,
                    'jumlah_beli' => 3,
                ],
                [
                    'nama_barang' => 'Aloe Vera Sheet Mask',
                    'harga_barang' => 15000,
                    'jumlah_beli' => 4,
                ],
            ];

            // Inisialisasi
            $price = 0;

            echo "<ol class='list-group'>";

            // Iterasi melalui setiap item dalam array $barang
            foreach ($barang as $item) {
                // Menghitung harga subtotal untuk item
                $subPrice = $item['harga_barang'] * $item['jumlah_beli'];

                // Menampilkan nama barang, jumlah yang dibeli, dan harga subtotal dalam bentuk format
                echo "<li class='list-group-item'> " . $item['nama_barang'] . " (" . $item['jumlah_beli'] . ") : Rp. " . number_format($subPrice, 0, '.', '.') . "</li>";

                // Menambahkan harga subtotal ke total harga
                $price += $subPrice;
            }
            echo "</ol>";
            echo "<div class='alert alert-info mt-4'>Total harga yang harus dibayar adalah <b>Rp. " . number_format($price, 0, '.', '.') . "</b></div>";
            ?>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>