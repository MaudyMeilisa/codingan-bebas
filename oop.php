<?php
//class
// class laptop {

//    // property/argumen
//    var $pemilik;
//    var $merk;
//    var $ukuran_layar;

//    //method/function 
//    function hidupkan_laptop() {
//     return "Hidupkan Laptop";
//     }
  
//     function matikan_laptop() {
//         return "Matikan Laptop";
//     } 
// }
// //object
// $laptop_andi = new laptop();
// echo $laptop_andi->hidupkan_laptop();
// echo "<br />";
// echo $laptop_andi->matikan_laptop()


// buat class ikan
class ikan {
  
   // buat property untuk class ikan
   var $jenis;
   var $punya;
   var $kegiatan;
  
   // buat method untuk class laptop
   function ikanikan($ket) {
    return $ket;
    }
    function ikankoi($ket1) {
    return $ket1;
    } 
}
  
// buat objek dari class ikan (instansiasi)
$maudy = new ikan();
  
// set property
$maudy->jenis="IKAN KOI";
$maudy->punya="sirip,ingsan,mata,mulut,ekor";
$maudy->kegiatan="berenang,makan";
  
// tampilkan property
echo "JENIS : ".$maudy->jenis;
echo "<br />";
echo "Punya :". $maudy->punya;
echo "<br />";
echo "Kegiatan : ".$maudy->kegiatan;
echo "<br />";
  
//tampilan method
$ikan_maudy = new ikan();
echo $ikan_maudy->ikanikan("Hidup di air");
 echo "<br />";
echo $ikan_maudy->ikankoi("Tidak didarat");


?>
