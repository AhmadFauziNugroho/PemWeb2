<?php
$nama_mahasiswa = $_POST['nama'];
$jenis_kelamin = $_POST['kelamin'];
$mata_kuliah = $_POST['mata_kuliah'];
$nomor_telepom = $_POST['nomor_telepon'];
$prodi = $_POST['prodi'];

echo"<h1>Hasil Form Pendaftaran Mahasiswa</h1><br>";
echo "Nama : ". $nama_mahasiswa . "<br>";
echo "Jenis Kelamin : ". $jenis_kelamin . "<br>";
echo "Mata Kuliah : ". $mata_kuliah . "<br>";
echo "Nomor Telepon : ". $nomor_telepom . "<br>";
echo "Prodi : ". $prodi . "<br>";