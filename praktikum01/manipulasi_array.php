<?php
$arrayBuah = ["Jeruk","Mangga","Pisang","Apel"];

// Mengurutkan nilai suatu array
sort($arrayBuah);

// Menghapus nilai array paling belakang/akhir
array_pop($arrayBuah);

// menghapus seluruh isi variable jika tidak disebutkan valuenya
unset($arrayBuah[1]);

// Menambah variabel di paling belakang/akhir
array_push($arrayBuah, "Durian");

// Menghapus nilai array paling depan/awal
array_shift($arrayBuah);

// Menambah variabel di paling depan/awal
array_unshift($arrayBuah, "Semangka");

// Mengubah spesifik nilai array tertentu
$arrayBuah[0] = "Manggis";

foreach($arrayBuah as $buah){
    echo $buah . "<br>";
}