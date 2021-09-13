<?php
//membuat fungsi
function hitungumur($thn_lahir,$thn_sekarang)
{
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
function perkenalan($nama,$salam="Assalammualaikum")
{
    echo $salam . ",";
    echo "Perkenalkan, nama saya ".$nama ."<br/>";
    //memanggil fungsi lain
    echo "Saya berusia " . hitungumur(1998,2021). "tahun<br/>";
    echo "Senang berkenalan dengan anda<br/>";
}
//memanggil fungsi perkenalan
echo perkenalan("Maudy");