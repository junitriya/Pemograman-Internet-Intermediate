<?php

class Tumbuhan {

    public  $nama, $jenis, $warna, $ukuran, $harga;

    public function __construct( $nama = "nama", $warna = "warna", $ukuran = "ukuran", $harga = 0) {

        $this->nama = $nama;
        $this->warna = $warna;
        $this->ukuran = $ukuran;
        $this->harga = $harga;


    }

    public function getlabel() {

        return "$this->jenis, $this->warna, $this->ukuran";

    }

    public function getTipeTumbuhan() {

        $str = "{$this->nama} │ {$this->getlabel()} (Rp. {$this->harga})";

        return $str;
    }

}

class Fashion {

    public  $merk, $warna, $ukuran, $harga;

    public function __construct($merk = "merk", $warna = "warna", $ukuran = "ukuran", $harga = 0) {

        $this->merk = $merk;
        $this->warna = $warna;
        $this->ukuran = $ukuran;
        $this->harga = $harga;


    }

    public function getlabel() {

        return "$this->warna, $this->ukuran";

    }

    public function getTipefashion() {

        $str = "{$this->merk} , {$this->getlabel()} , Rp. {$this->harga} ";

        return $str;
    }

}

class Bunga extends Tumbuhan {

    public function getTipeTumbuhan() {
        $str = "Bunga    = {$this->nama} , {$this->getlabel()} , {$this->ukuran} , Rp. {$this->harga} ";
        return $str; 
    }

}

class Pohon extends Tumbuhan {

    public function getTipeTumbuhan() {
        $str = "Pohon = {$this->nama} , {$this->getlabel()} , {$this->ukuran} ,  Rp. {$this->harga} ";
        return $str; 
    }

}

class Tas extends fashion {

    public function getTipefashion() {
        $str = "Tas = {$this->merk} , {$this->getlabel()} , Rp. {$this->harga} ";
        return $str; 
    }

}

class Sepatu extends fashion {

    public function getTipefashion() {
        $str = "Sepatu = {$this->merk} , {$this->getlabel()} , Rp. {$this->harga} ";
        return $str; 
    }

}

class CetakTipeTumbuhan {

    public function cetak(Tumbuhan $tumbuhan){
        $str = "{$tumbuhan->nama} {$tumbuhan->getlabel()} , Rp. {$tumbuhan->harga} ";
        return $str;
    }

}

class CetakTipefashion {

    public function cetak(fashion $fashion){
        $str = "{$fashion->merk} {$fashion->getlabel()} (Rp. {$fashion->harga})";
        return $str;
    }

}

$tumbuhan1 = new Bunga("Mawar", "Merah", "30 cm", 150000);
$tumbuhan2 = new Bunga("Melati", "Putih", "25 cm", 150000);
$tumbuhan3 = new Pohon("Mangga", "Coklat", "15 m", 350000);
$tumbuhan4 = new Pohon("Cemara", "Hijau", "30 m", 400000);

$fashion1 = new Tas("Visval", "Biru", "L 25 cm P 55 cm", 75000);
$fashion2 = new Tas("Aiger", "Hitam", "L 60 cm P 65 cm", 500000);
$fashion3 = new Sepatu("Diadora", "Biru", "40", 350000);
$fashion4 = new Sepatu("Adidas", "Navy", "41", 5000000);

echo $tumbuhan1->getTipeTumbuhan();
echo "<br>";
echo $tumbuhan2->getTipeTumbuhan();
echo "<br>";
echo $tumbuhan3->getTipeTumbuhan();
echo "<br>";
echo $tumbuhan4->getTipeTumbuhan();
echo "<hr>";
echo $fashion1->getTipefashion();
echo "<br>";
echo $fashion2->getTipefashion();
echo "<br>";
echo $fashion3->getTipefashion();
echo "<br>";
echo $fashion4->getTipefashion();
echo "<hr>";


?>