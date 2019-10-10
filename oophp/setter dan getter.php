<?php 

class Produk {
	private $judul,
			$penulis,
			$penerbit,
			$private,
			$diskon = 0;
			

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;

	}

	public function setDiskon($diskon) {
		$this->diskon = $diskon;
	}

	public function getDiskon() {
		return $this->diskon;
	}

	public function setJudul($judul) {
		$this->judul = $judul;
	}

	public function setPenulis($penulis) {
		$this->penulis = $penulis;
	}

	public function getPenulis() {
		return $this->penulis;
	}

	public function setPenerbit($penerbit) {
		$this->penerbit = $penerbit;
	}

	public function getPenerbit() {
		return $this->penerbit;
	}

	public function getJudul() {
		return $this->judul;
	}

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

	public function setHarga($harga) {
		$this->harga = $harga;
	}

	public function getHarga() {
		return $this->harga - ($this->harga * $this->diskon /100);
	}

	public function getInfoProduk(){
		$str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
		
		return $str;
	}
}

class Novel extends Produk {
	public $jmlHalaman;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) {

			parent::__construct($judul, $penulis, $penerbit, $harga);

			$this->jmlHalaman = $jmlHalaman;
	}

	public function getInfoProduk() {
		$str = "Novel : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
		return $str;
	}
}

class Game extends Produk {
	public $waktuMain;

	public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain = 0) {

			parent::__construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 250000);

			$this->waktuMain = $waktuMain;
	}


	public function getInfoProduk() {
		$str = "Game : " . parent::getInfoProduk() . " - {$this->waktuMain} Jam.";
		return $str;
	} 
}

class CetakInfoProduk {
	public function cetak(Produk $produk) {
		$str = "$produk->judul | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}

$produk1 = new Novel("Dilan","Pidi Baiq","Gramed",200000, 100);

$produk2 = new Game("Spintires","RG","Russian",250000,50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<hr>";

$produk1->setPenulis("Mia Khalifa");
echo $produk1->getPenulis();