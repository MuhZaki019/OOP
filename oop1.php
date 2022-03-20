<?php

interface luasbangundatar
{
    public function hitungluas();
}

class Persegi implements luasbangundatar
{
    private $sisi = 4;

    public function __construct($sisi)
    {
        $this->sisi = $sisi;
    }

    public function hitungLuas()
    {
        return pow($this->sisi, 2);
    }
}

class Segitiga implements luasbangundatar
{
    private $alas;
    private $tinggi;

    public function __construct($alas, $tinggi)
    {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    public function hitungLuas()
    {
        return (0.5 * $this->alas * $this->tinggi);
    }
}

class Lingkaran implements luasbangundatar
{
    private $jarijari = 7;

    public function __construct($jarijari)
    {
        $this->jarijari = $jarijari;
    }

    public function hitungLuas()
    {
        return (3.14 * pow($this->jarijari, 2));
    }
}


$exit = true;
while ($exit) {
    echo ("
  ======= Luas Bangun datar =======
  1. Persegi
  2. Segita
  3. Lingkaran
  4. Exit
  ==================================
  ");


    echo "Pilih Opsi: ";
    $nomer = readline();
    switch ($nomer) {
        case '1':

            $persegi = readline("Masukkan Sisi  =");
            $lpersegi = new Persegi($persegi);
            echo 'Luas Persegi  = ' .$lpersegi->hitungLuas() . "\n";
            break;
        case '2':
            $asegitiga = readline("Masukkan Alas  =");
            $alsegitiga = readline("Masukkan Tinggi =");
            $lsegitiga = new Segitiga($asegitiga, $alsegitiga);
            echo 'Luas Segitiga = ' .$lsegitiga->hitungLuas() . "\n";
            break;
        case '3':
            $lingkaran = readline("Masukkan Jari- Jari  =");
            $llingkaran = new Lingkaran($lingkaran);
            echo 'Luas Lingkaran    = ' .$llingkaran->hitungLuas() . "\n";
            break;
        case '4':
            $exit = false;
            break;
        default:
            echo ("Pilihan Opsi Hanya terdapat 1-4 Opsi");
            break;
    }
}
