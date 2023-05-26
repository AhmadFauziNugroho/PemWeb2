<?php
class bola
{
    public $jari_jari;
    
    public function __construct($jari_jari)
    {
        $this->jari_jari = $jari_jari;
    }

    function volume()
    {

        return 4/3 * 3.14 * ($this->jari_jari ** 3) ;
        
    }

    function luas_permukaan()
    {
        return 4 * 3.14 * ($this->jari_jari ** 2);
    }
}

$objekbola = new bola(7); 
echo "Jika Jari-Jari= 12,Maka: <br>";
echo "Volume Bola Adalah: " . $objekbola->volume();
echo "<br>";
echo "Luas Permukaan Bola Adalah: " . $objekbola->luas_permukaan();