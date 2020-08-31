<?php 
class siswa{
	public $nama, $rombel, $rayon;

	public function getCetak(){
		return "$this->nama , $this->rombel, $this->rayon";
	}
	public function __construct($nama="nama", $rombel="rombel", $rayon="rayon"){
		$this->nama=$nama;
		$this->rombel=$rombel;
		$this->rayon=$rayon;
	}
}

$siswa1 = new siswa("Muhammad Fauzan","RPL XI-4","Wikrama 5");
$siswa2 = new siswa("Intan Anjar Sari","RPL XI-4","Wikrama 5");
$siswa3 = new siswa("M. Faathir Fakhrezy","RPL XI-2","Wikrama 5");

echo "Siswa 1 : " . $siswa1->getCetak();
echo "<br>";
echo "Siswa 2 : " . $siswa2->getCetak();
echo "<br>";
echo "Siswa 3 : " . $siswa3->getCetak();
?>