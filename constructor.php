<?php

//Jualan produk
//komik
//game
class Produk{
    public $judul,
            $penulis,
            $penerbit,
            $harga ;

    public function __construct($judul ="judul", $penulis ="penulis", $penerbit ="penerbit", $harga = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
            }

        public function getLabel(){
            return "$this->judul, $this->penerbit";
        }

}


$produk1 = new Produk("Naruto", "Masaashi Kishimoto", "Shonen", 300000);
$produk2 = new Produk("Fairy Tail", "Hiro Mashima", "Weekly Shōnen Magazine", 35000);
$produk3 = new produk("NBA 2K20");


echo "Komik : ". $produk1->getLabel();
echo "<br>";
echo "Komik : ". $produk2->getLabel();
echo "<br>";
echo "Game :". $produk3->getLabel();