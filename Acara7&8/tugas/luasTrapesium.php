<?php

class Trapesium
{
    private $alas1;
    private $alas2;
    private $tinggi;

    public function __construct($alas1, $alas2, $tinggi)
    {
        $this->alas1 = $alas1;
        $this->alas2 = $alas2;
        $this->tinggi = $tinggi;
    }

    public function hitungLuas()
    {
        $luas = ($this->alas1 + $this->alas2) * $this->tinggi / 2;
        return $luas;
    }
}

$trapesium1 = new Trapesium(13, 8, 4);

echo "Luas Trapesium adalah : " . $trapesium1->hitungLuas();
