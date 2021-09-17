<?php

class manusia{
    function __construct(){
        echo "ini adalah isi method construct<br>";
    }

    //method
    function tampilkan_nama(){
        return "Nama saya Maudy Meilisa<br>";
    }
    function kelas(){
        return "Saya kelas XII RPL 1<br>";
    }
    function hobi(){
        return "Hobi saya bersih bersih dan jalan-jalan";
    }
}
$manusia=new manusia();
echo $manusia->tampilkan_nama();
echo $manusia->kelas();
echo $manusia->hobi();