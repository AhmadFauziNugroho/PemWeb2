<?php
class balok
{
    public $panjang, $lebar, $tinggi;

    public function __construct($p, $l, $t)
    {
        $this->panjang = $p;
        $this->lebar = $l;
        $this->tinggi = $t;
    }

    function volume()
 {
        return $this->panjang*$this->lebar*$this->tinggi;
        
    }

    function luas_permukaan()
    {
        return 2*(($this->panjang  * $this->lebar) + ($this->panjang * $this->tinggi) + ($this->lebar * $this->tinggi));
    }
}

$objekbalok = new balok(12,14,15); 
echo "Jika Panjang= 12, Lebar= 14, dan Tinggi=15, Maka: <br>";
echo "Volume Balok Adalah: " . $objekbalok->volume();
echo "<br>";
echo "Luas Permukaan Balok Adalah: " . $objekbalok->luas_permukaan();