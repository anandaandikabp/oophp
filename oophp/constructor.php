<?php 

class Produk {
	public $judul,
			$penulis,
			$penerbit,
			$harga;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;

	}

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}
}

$produk1 = new Produk("Dilan","Pidi Baiq","Gramed",200000);

$produk2 = new Produk("Spintires","RG","Russian",250000);

$produk3 = new Produk("Euro Truck")

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
echo var_dump($produk3);