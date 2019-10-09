<?php

//Jualan produk
//komik
//game
class Produk{
    public $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga;

        public function getLabel(){
            return "$this->penulis, $this->penerbit";
        }

}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Uncharted";
// $produk2->tambahProperty = "hahaha";
// var_dump($produk2);

$produk3 = new Produk();
	$produk3->judul ="Naruto";
	$produk3->penulis =" Masashi Kishimoto";
	$produk3->penerbit = "Shonen Jump";
    $produk3->harga = 30000;

$produk4 = new Produk();
	$produk4->judul ="Fairy Tail";
	$produk4->penulis =" Hiro Mashima";
	$produk4->penerbit = "Weekly Shōnen Magazine";
    $produk4->harga = 20000;
    
echo "Komik 1 : ". $produk3->getLabel();
echo "<br>";
echo "Komik 2 : ". $produk4->getLabel();