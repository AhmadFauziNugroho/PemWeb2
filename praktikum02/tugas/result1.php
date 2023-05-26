<?php
$nama_mahasiswa = $_GET['nama'];
$mata_kuliah = $_GET['mata_kuliah'];
$nilai_uts = $_GET['uts'];
$nilai_uas = $_GET['uas'];
$nilai_tugas = $_GET['tugas'];
$hasil = (35 *$nilai_uas / 100)+(30 * $nilai_uts /100)+ (35 * $nilai_tugas / 100);


if($hasil>=85 && $hasil<=100 ) $grade = 'A';
else if ($hasil>=70 && $hasil<=84) $grade = 'B';
else if ($hasil>=56 && $hasil<=69) $grade = 'C';
else if ($hasil>=36 && $hasil<=55) $grade = 'D';
else if ($hasil>=0 && $hasil<=35) $grade = 'E';
else $grade = "I" ;

switch($grade){
case 'A':$predikat = 'sangat memuaskan' ;break;
case 'B':$predikat = 'memuaskan' ;break;
case 'C':$predikat = 'cukup' ;break;
case 'D':$predikat = 'kurang' ;break;
case 'E':$predikat = 'sangat kurang' ;break;
default:$predikat = '';
}
            
echo"<h1>Hasil Nilai Mahasiswa</h1><br>";
echo "Nama : ". $nama_mahasiswa . "<br>";
echo "Mata Kuliah : ". $mata_kuliah . "<br>";
echo "Nilai UTS : ". $nilai_uts . "<br>";
echo "Nilai UAS : ". $nilai_uas . "<br>";
echo "Nilai Tugas : ". $nilai_tugas . "<br>"; 
echo 'Hasil : ' .$hasil . "</br>";
echo 'Grade : ' .$grade . "</br>";
echo 'Predikat : ' .$predikat; 