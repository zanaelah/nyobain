<?php
class laptop {
  
   var $pemilik;
   var $merk;
   var $ukuran_layar;
  
   function hidupkan_laptop() {
     return "Hidupkan Laptop";
     echo "<br>";
   }
   function matikan_laptop() {
     return "Matikan Laptop";
     echo "<br>";
   }
}
  
$laptop_anto = new laptop();
$laptop_ozan = new laptop();
?>