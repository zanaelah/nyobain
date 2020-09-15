<?php 
class Siswa
{
 
	public function __destruct()
	{
		echo "Object telah dihapus dari memory";
	}
 
}
 
$Siswa1 = new Siswa();
unset($Siswa1);
?>