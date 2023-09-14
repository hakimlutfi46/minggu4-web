<?php
class Balok
{
    private $panjang;
    private $lebar;
    private $tinggi;

    public function __construct($panjang, $lebar, $tinggi)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
        $this->tinggi = $tinggi;
    }

    function getLuas()
    {
        $luas = $this->panjang * $this->lebar * $this->tinggi;
        return $luas;
    }
}

$balok1 = new Balok(20, 12, 10);

echo "Luas Balok adalah : " . $balok1->getLuas();
