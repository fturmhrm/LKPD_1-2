<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama"><br>
        <label for="jawaban1">Jawaban 1</label>
        <input type="text" id="jawaban1" name="jawaban1"><br>
        <label for="jawaban2">Jawaban 2</label>
        <input type="text" id="jawaban2" name="jawaban2"><br>
        <label for="jawaban3">Jawaban 3</label>
        <input type="text" id="jawaban3" name="jawaban3"><br>
        <label for="jawaban4">Jawaban 4</label>
        <input type="text" id="jawaban4" name="jawaban4"><br>
        <button type="submit">Submit</button>
    </form>



    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nama = $_POST['nama'];
        $jawaban1 = $_POST['jawaban1'];
        $jawaban2 = $_POST['jawaban2'];
        $jawaban3 = $_POST['jawaban3'];
        $jawaban4 = $_POST['jawaban4'];
        
        function checkJawaban($nama, ...$arrJawaban) {
            $jawaban = ["A","B","C","D"];
            $arrBenar = [];
        
            foreach ($jawaban as $key => $value) {
                if ($arrJawaban[$key] == $value) {
                    $arrBenar[$key] = 1;
                } else {
                    $arrBenar[$key] = 0;
                }
            }
        
            // menampilkan hasil
            echo "Nama : $nama <br>";
            echo "Jumlah Jawaban Benar : <b>". count(array_keys($arrBenar, 1)). "</b></br>";
            echo "Jumlah Jawaban Salah : <b>". count(array_keys($arrBenar, 0)). "</b></br>";
        }
        
        checkJawaban($nama, $jawaban1, $jawaban2, $jawaban3, $jawaban4);
    }
    
    ?>

</body>
</html>


<?php

// function checkJawaban($nama, ...$arrJawaban) {
//     $jawaban = ["A","B","C","D"];
//     $arrBenar = [];

//     foreach ($jawaban as $key => $value) {
//         if ($arrJawaban[$key] == $value) {
//             $arrBenar[$key] = 1;
//         } else {
//             $arrBenar[$key] = 0;
//         }
//     }

//     // menampilkan hasil
//     echo "Nama : $nama <br>";
//     echo "Jumlah Jawaban Benar : <b>" . count(array_keys($arrBenar, 1)) . "</b></br>";
//     echo "Jumlah Jawaban Salah : <b>" . count(array_keys($arrBenar, 0)) . "</b></br>";
// }

// checkJawaban("Putri", "A","B","D","D");
?>