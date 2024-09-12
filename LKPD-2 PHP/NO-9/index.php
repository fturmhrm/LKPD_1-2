<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
<label for="">masukan jumlah uang</label>
<input type="number" name="number" id="">
<button type="submit">submit</button>
</form>



<?php

if  ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $number =$_POST['number'];

function koin($uang){
    $arr = [];

    $koinUang = substr($uang, -9);

    if ($koinUang % 100000 != $koinUang) {
        $jumlahlembar100k = floor($koinUang/100000) ;
        $koinUang -= $jumlahlembar100k * 100000;
        array_push($arr, "Rp. 100000 ada $jumlahlembar100k");
    }

    if ($koinUang % 20000 != $koinUang) {
        $jumlahlembar20rb = floor( $koinUang/20000);
        $koinUang -= $jumlahlembar20rb *20000;
        array_push($arr, "Rp. 20000 ada $jumlahlembar20rb");
    }

    if ($koinUang % 5000 != $koinUang) {
        $jumlahlembar5rb = floor($koinUang/5000);
        $koinUang -= $jumlahlembar5rb * 5000;
        array_push($arr, "Rp. 5000 ada $jumlahlembar5rb");
    }

    if ($koinUang % 500 != $koinUang) {
        $jumlahkoin500perak = floor($koinUang/500);
        $koinUang -= $jumlahkoin500perak * 500;
        array_push($arr, "Rp. 500 ada $jumlahkoin500perak");
    }

    echo "Jenis Uang kertas untuk uang Rp. " . number_format($uang, 0, '.', '.') . " : <br>";
    echo "<ul>";
    foreach ($arr as $value) {
        echo "<li>  $value  </li>";
    }
    echo "<ul>";
}
koin($number);
}


?>
</body>
</html>