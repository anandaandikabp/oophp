<?php 

class Produk {
	public $judul = "judul",
			$penulis = "penulis",
			$penerbit = "penerbit",
			$harga = 0;

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}
}

// $produk1 = new Produk();
// $produk1->judul = "Dilan";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Spintires";
// var_dump($produk1);

$produk3 = new Produk();
$produk3->judul = "Dilan1991";
$produk3->penulis = "Pidi";
$produk3->penerbit = "Gramed";
$produk3->harga = 250000;

$produk4 = new Produk();
$produk4->judul = "House Party";
$produk4->penulis = "EEK";
$produk4->penerbit = "Windows";
$produk4->harga = 1000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();