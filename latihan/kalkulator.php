<!DOCTYPE html>
<html>

<body>
    <h2>Kalkulator Sedehrana PHP</h2>
    <form method="post">
        Angka Pertama: <input type="number" name="num1" /><br>
        Angka Kedua: <input type="number" name="num2" /><br>
        <input type="submit" name="submit" value="Hitung">
    </form>

    <?php
    class Kalkulator
    {
        public $num1;
        public $num2;

        public function __construct($num1, $num2)
        {
            $this->num1 = $num1;
            $this->num2 = $num2;
        }

        public function tambah()
        {
            return $this->num1 + $this->num2;
        }

        public function kurang()
        {
            return $this->num1 - $this->num2;
        }

        public function kali()
        {
            return $this->num1 * $this->num2;
        }

        public function bagi()
        {
            return $this->num1 / $this->num2;
        }
    }

    if (isset($_POST['submit'])) {
        $kalkulator = new Kalkulator($_POST['num1'], $_POST['num2']);

        echo "Hasil Penjumlahan: " . $kalkulator->tambah() . "<br>";
        echo "Hasil Pengurangan: " . $kalkulator->kurang() . "<br>";
        echo "Hasil Perkalian: " . $kalkulator->kali() . "<br>";
        echo "Hasil Pembagian: " . $kalkulator->bagi() . "<br>";
    }
    ?>

</body>

</html>