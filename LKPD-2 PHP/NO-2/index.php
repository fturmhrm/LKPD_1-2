<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Masukan Jumlah belanjaan</label>
        <input type="number" name="belanjaan" id="">
        <label for="">Makan Hari Apa</label>
        <input type="text" name="hari" id="">
        <button type="submit">Submit</button>
    </form>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $belanjaan = $_POST['belanjaan'];
    $hari = $_POST['hari'];
    
    $diskon1 = 0.07;
    $diskon2 = 0.05 ;
    
    $totalBayar = $belanjaan;
    
    if ($belanjaan > 100000 && $hari == 'Thursday') {
        $totalBayar = $belanjaan -  ($belanjaan * ($diskon1 + $diskon2));     
    } else if ($belanjaan > 10000) {
        $totalBayar = $belanjaan - ($belanjaan * $diskon1 ) ;
    } else if ($hari == 'Thursday') {
        $totalBayar = $belanjaan * $diskon2 ; 
    } else {
        $totalBayar = $belanjaan;
    }
    echo "Hari". $hari;
    echo "<br>";
    echo "Total Belanja : ". number_format( $belanjaan,0 ,'','.');
    echo "<br>";
    echo "Total Bayar : ". number_format( $totalBayar,0 ,'','.');

}

// $pembelanjaan = 130000 ;
// $day = date ('l');
// $diskon1 = 0.07 ;
// $diskon2 = 0.05 ;
// $totalbayar ;

// if ($pembelanjaan > 100000 && $day == "Thursday"){
//     $totalbayar = $pembelanjaan -  ($pembelanjaan * ($diskon1 + $diskon2));     
// } else if ($pembelanjaan > 10000) {
//     $totalbayar = $pembelanjaan - ($pembelanjaan * $diskon1 ) ;
// } else if ($day == "Thursday") {
//     $totalbayar = $pembelanjaan * $diskon2 ; 
// }else {
//     $totalbayar = $pembelanjaan;
// }
// echo "hari ini hari" . $day ; 
// echo "<br>";
// echo "total belanja " . $pembelanjaan ;
// echo "<br>";
// echo "total pembayaran ". number_format( $totalbayar,0 ,'','.') ;

?>
</body>
</html>