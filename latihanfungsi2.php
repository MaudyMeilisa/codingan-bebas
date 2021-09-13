<?php

function luasLingkaran($jari , $phi=3.14)
{
    $luas = $phi * $jari * $jari;
    return $luas;
}

function luassegitiga($alas,$tinggi)
{
    $luas=($alas *$tinggi)/2;
    return $luas;
}
function luaspersegi($panjang,$lebar,$tinggi)
{
    $luas=$panjang*$lebar*$tinggi;
    return $luas;
}
echo "Luas lingkaran : " .luasLingkaran(20);
echo "<br>";
echo "Luas Segitiga : " . luassegitiga(10,4);
echo "<br>";
echo "Luas persegi panjang : " .luaspersegi(20,10,2);

//echo diluar menggunakan return
?>