<?php

class manusia{
    function __construct($nama,$jk,$kelas){
        echo "Nama Saya :".$nama;
        echo "Jenis Kelamin :".$jk;
        echo "Kelas :".$kelas;
    }

    
}
$manusia=new manusia(" Maudy<br>",
                     "perempuan<br>",
                     "XII RPL 1<br><hr>");
$manusia=new manusia(" Azura<br>",
                     "perempuan<br>",
                     "XII RPL 2<br><hr>");
$manusia=new manusia(" Dinda<br>",
                     "perempuan<br>",
                     "XII RPL 3<br><hr>");

