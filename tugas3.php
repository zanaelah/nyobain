<?php 
class mobil{
	public $nama, $merk, $warna, $kecepatanmaksimal, $jumlahpenumpang;

	public function tambahKecepatan(){
		return "kecepatan bertambah";
	}
	public function kurangiKecepatan(){
		return "kecepatan dikurangi";
	}
} 

class mobilSport extends mobil{
	public $turbo = false;

	public function aktifkanTurbo(){
		$turbo = true;
		return "Turbo diaktifkan";
	}
	public function matikanTurbo(){
		$turbo = false;
		return "Turbo di matikan";
	}
}

$mobilku = new mobilSport();
echo $mobilku->tambahKecepatan();
echo "<br>";
echo $mobilku->aktifkanTurbo();
echo "<br><br>";
echo $mobilku->kurangiKecepatan();
echo "<br>";
echo $mobilku->matikanTurbo();
?>