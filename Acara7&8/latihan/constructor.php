<?php
class mahasiswa
{
    public $name;
    public $nim;

    function __construct($name, $nim)
    {
        echo $this->name = "Nama : " . $name . "<br>";
        echo $this->nim = "NIM : " . $nim . "<br>";
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
echo "<br>";
$mahasiswa2 = new mahasiswa("Farhan Arianto", "E41225892");
