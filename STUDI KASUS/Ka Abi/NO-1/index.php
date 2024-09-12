<?php
//kalimat 
$teks = "Selamat Datang";

// karakter yang di cari
$karakter = 'a';   

 // menghitung jumlah kemunculan karakter
$hitung = substr_count($teks, $karakter);

 // menampilkan jumlah kemunculan
if ($hitung > 0) {
    echo "Karakter '$karakter' muncul $hitung kali";
} else {
    echo "Karakter '$karakter' tidak ditemukan dalam kalimat";
}
?>
