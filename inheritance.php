<?php  
class produk{
  public $namaBarang,
         $Merk,
         $Harga,
         $ukuranLayar,
         $kapasitas;
  public function getCetak(){
    return "$this->Merk, (Rp $this->Harga)";
  }
  public function __construct($namaBarang="nama barang", $Merk="merk", $Harga=0, $ukuranLayar="ukuran layar", $kapasitas="kapasitas"){
    $this->namaBarang = $namaBarang;
    $this->Merk = $Merk;
    $this->Harga =  $Harga; 
  }
  public function cetakInfo(produk $produk){
      $str="{$this->namaBarang}, {$this->getCetak()}";
      return $str;
  }

}

class laptop extends produk{
    public $ukuranLayar;
    public function cetakInfo1(){
        $str = "laptop: ".parent::getCetak()."  | ukuran layar: {$this->ukuranLayar}";
        return $str;
    }
    public function __construct($namaBarang="nama barang", $Merk="merk", $Harga=0, $ukuranLayar="ukuran layar", $kapasitas="kapasitas"){
      parent::__construct($namaBarang="nama barang", $Merk="merk");
      $this->$ukuranLayar=$ukuranLayar;
    }
}

class flashdisk extends produk{
    public function cetakInfo2(){
        $str="flasdisk:  ".parent::getCetak()."| kapasitas: {$this->kapasitas} ";
        return $str;
    }
}

$produk1 = new laptop("Ideapad", "Lenoovo", 20000,"14 inch", "-");
$produk2 = new flashdisk("Red Empress", "Venena", 70000, "-", "16 GB");


echo $produk1->cetakInfo1();
echo "<br>";
echo $produk2->cetakInfo2();
echo "<br>";
?>