<?php 

	class Animal {
		public $jack, $russel, $ridley, $silverlake;

		public function terbang() {
			if($this->jumlah_kaki == 4) {
				echo "Tidak Bisa Terbang";
			} else {
				echo "Bisa Terbang";
			}
		}
	}
	class Kucing extends Animal {
		public function bersuara(){
			return "nyan nyan";
		}
	}

	class Anjing extends Animal {
		public function bersuara(){
			return "wan wan";
		}
	}

	class Elang extends Animal {
		public function bersuara(){
			return "aho aho aho";
		}
	}

	class Angsa extends Animal {
		public function bersuara(){
			return "bakaaa bakaaa";
		}
	}

	$jack = new Kucing;
	$jack->jumlah_kaki = 4;
	echo "Jack Adalah Kucing <br>";
	echo "Jumlah Kakinya Adalah ".$jack->jumlah_kaki."<br>";
	echo $jack->terbang()."<br>";
	echo "Suaranya Adalah ".$jack->bersuara()."<br>";
	echo "<hr>";

	$russel = new Anjing;
	$russel->jumlah_kaki = 4;
	echo "Russel Adalah Anjing <br>";
	echo "Jumlah Kakinya Adalah ".$russel->jumlah_kaki."<br>";
	echo $russel->terbang()."<br>";
	echo "Suaranya Adalah ".$russel->bersuara()."<br>";
	echo "<hr>";

	$ridley = new Elang;
	$ridley->jumlah_kaki = 2;
	echo "Ridley Adalah Elang <br>";
	echo "Jumlah Kakinya Adalah ".$ridley->jumlah_kaki."<br>";
	echo $ridley->terbang()."<br>";
	echo "Suaranya Adalah ".$ridley->bersuara()."<br>";
	echo "<hr>";

	$silverlake = new Angsa;
	$silverlake->jumlah_kaki = 2;
	echo "Silverlake Adalah Angsa <br>";
	echo "Jumlah Kakinya Adalah ".$silverlake->jumlah_kaki."<br>";
	echo $silverlake->terbang()."<br>";
	echo "Suaranya Adalah ".$silverlake->bersuara()."<br>";
	echo "<hr>";
?> 