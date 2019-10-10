<?php 

require_once 'App/init.php';

$produk1 = new Novel("Dilan","Pidi Baiq","Gramed",200000, 100);

$produk2 = new Game("Spintires","RG","Russian",250000,50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();