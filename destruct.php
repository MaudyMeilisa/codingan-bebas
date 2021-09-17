<?php

class manusia{

    function __destruct(){
        echo "Ini adalah method DESTRUCT";
    }
    function nama(){
        echo "<br> Nama saya adalah Maudy Meilisa <br>";
    }
    function __construct(){
        echo "Ini adalah method CONSTRUCT";
    }
}

$cetak = new manusia();
echo $cetak->nama();
