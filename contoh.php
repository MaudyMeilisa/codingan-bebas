<?php
// function perkenalan ($a,$b) {
//     echo "Perkenalkan,nama saya ".$a."<br/>";
//     echo "Umur Saya".$b."<Tahun>";
  
//         if($b >= 17 )
//         {
//             echo "anda sudah punya ktp<br>";
//         }
//         else{
//             echo "anda belum punya ktp<br>";
//         }
//     }
//   perkenalan("maudy",17);

// function penjumlahan($angka1,$angka2){
//   $tambah= $angka1 +$angka2;
//   $kali= $angka1 * $angka2;
//   $bagi= $angka1/$angka2;
//   $kurang= $angka1-$angka2;
//   echo "Hasil penjumlahan".$tambah."<br>";
//   echo "Hasil Perkalian".$kali. "<br>";
//   echo "Hasil Pembagian".$bagi. "<br>";
//   echo "Hasil Pengurangan".$kurang;
// }
// penjumlahan(10,5);

//parameter default
function penjumlahan($usia,$nama="Maudy"){

echo "Nama : ".$nama."<br>";
echo "Usia : ".$usia;
}
penjumlahan(17);
?>