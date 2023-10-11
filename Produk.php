<?php

    class Produk {
         public $judul = "Judul",
                $penulis = "Penulis",
                $penerbit = "Penerbit",
                $harga = 0;

        public function getLabel() {
            return "$this->penulis, $this->penerbit";
        }

        public function helloWorld() {
            return "Hello World!";
        }
    }

    $produk1 = new produk();
    $produk1->judul = "One Piece";
    var_dump($produk1);

    echo "<br>";

    $produk2 = new produk();
    $produk2->judul = "Boku no Hero Academia";
    $produk2->tambahProperty = "Prop Baru";
    var_dump($produk2);

    echo "<br>";

    $produk3 = new produk();
    $produk3->judul = "Naruto";
    $produk3->penulis = "Masashi Kishimoto";
    $produk3->penerbit = "Shonen Jump";
    $produk3->harga = 45000;

    $produk4 = new produk();
    $produk4->judul = "One Piece";
    $produk4->penulis = "Eiichiro Oda";
    $produk4->penerbit = "Shonen Jump";
    $produk4->harga = 60000;
    
    echo "<hr>";

    echo "Komik : $produk3->judul, $produk3->penulis";
    echo "<br>";
    echo $produk3->helloWorld();
    echo "<br>";
    echo $produk3->getLabel();
    
    echo "<hr>";
    
    echo "Komik : $produk4->judul, $produk4->penulis";
    echo "<br>";
    echo $produk4->helloWorld();
    echo "<br>";
    echo $produk4->getLabel();
?>