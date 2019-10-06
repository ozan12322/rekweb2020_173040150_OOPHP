<?php 

	class Komik extends Produk implements infoProduk {

		public $jmlHalaman;

		public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0){
			parent::__construct($judul, $penulis, $penerbit, $harga);
			$this->jmlHalaman = $jmlHalaman;
		}

		public function getInfo(){
			$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
			return $str;
		}

		public function getLengkap(){
			$str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
			return $str;
		}

	}