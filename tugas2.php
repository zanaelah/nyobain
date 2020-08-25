<?php
class motor {
 
   var $pemilik;
   var $merk;
   var $harga;
 
   function hidupkan_mesin() {
     return "Hidupkan Mesin";
    }
   function matikan_Mesin() {
     return "Matikan Mesin";
   }
}
 
$motor_ozan = new motor();
 
$motor_ozan->pemilik="Ozan";
$motor_ozan->merk="Kawasaki KLX 150";
$motor_ozan->harga="30.5 Juta";
 
echo "Pemilik : ".$motor_ozan->pemilik;
echo "<br />";
echo "Merek Motor : ".$motor_ozan->merk;
echo "<br />";
echo "Harga Motor : ".$motor_ozan->harga;
echo "<br />";
 
echo $motor_ozan->hidupkan_mesin();
echo "<br />";
echo $motor_ozan->matikan_mesin();
?>