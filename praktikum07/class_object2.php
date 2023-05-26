<?php
class kendaraan
{
    public $nama, $warna, $merk;

    public function berjalan()
    {
        return "$this->nama bisa jalan";
    }

    public function tambahkecepatan()
    {
        return "$this->nama bisa tambah kecepatan";
    }

    public function getkendaraan()
    {
        echo "nama : $this->nama <br>
              warna: $this->warna <br>
              merk: $this->merk";       
    }
}

$objekkendaraan = new kendaraan;
$objekkendaraan->nama = "Hijet 1000";
$objekkendaraan->warna = "Merah";
$objekkendaraan->merk = "Daihatsu";
echo $objekkendaraan->berjalan();
echo "<br>";
echo $objekkendaraan->tambahkecepatan();
echo "<br>";
echo $objekkendaraan->getkendaraan();
