<?php
function luassegitiga($alas,$tinggi)
{
    $luas=($alas *$tinggi)/2;
    return $luas;
}
    function luaspersegipanjang($panjang,$lebar,$tinggi){
    $luaspersegipanjang=($panjang*$lebar*$tinggi);
    return $luaspersegipanjang;
  
}
echo "Luas Segitiga : " . luassegitiga(10,5);
echo "<br>";
echo "Luas Persegi panjang : " . luaspersegipanjang(4,6,2);
//echo diluar menggunakan return
