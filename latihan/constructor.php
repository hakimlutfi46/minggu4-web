<?php
class mahasiswa
{
    public $name;
    public $nim;

    function __construct($name, $nim)
    {
        $this->name = "Nama : " . $name . "<br>";
        $this->nim = "NIM : " . $nim . "<br>";
    }
    function get_name()
    {
        return $this->name;
    }
    function get_nim()
    {
        return $this->nim;
    }
}



$mahasiswa1 = new mahasiswa("Muhammad Lutfi Hakim", "E41221867");
$mahasiswa2 = new mahasiswa("Farhan Arianto", "E41225892");

echo $mahasiswa1->get_name();
echo $mahasiswa1->get_nim();
echo "<br>";
echo $mahasiswa2->get_name();
echo $mahasiswa2->get_nim();
