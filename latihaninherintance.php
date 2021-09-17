<?php

//class utama

class bangundatar{
    public $luas;
    

    
}

class persegi extends bangundatar{ 
    public function luaspersegi($sisi){
        echo "<u><b>Menghitung luas Persegi</b></u><br>";
        echo "Sisinya :".$sisi;
        echo "<br>";
        $this->luaspersegi=$sisi*$sisi;
        echo "Luasnya :".$this->luaspersegi;
        echo "<br>";
        echo "<u><b>Dan ini Kelilingnya</u></b><br>";
        $this->keliling=4*$sisi;
        echo "Keliling :".$this->keliling; 
        echo "<br>";
        echo "<br><hr>";
        
}
}
class persegipanjang extends bangundatar{ 
    public function luaspersegipanjang($panjang,$lebar){
      
        echo "<b><u>Menghitung luas Persegi Panjang</b></u><br>";
        echo "Panjang :".$panjang;
        echo "<br>";
        echo "Lebar :".$lebar;
        echo "<br>";
        $this->luaspersegipanjang=$panjang*$lebar;
        echo "Luasnya :".$this->luaspersegipanjang;
        echo "<br>";
        echo "<u><b>Dan ini Kelilingnya</u></b><br>";
        $this->keliling=2*($panjang+$lebar);
        echo "Keliling :".$this->keliling; 
        echo "<br>";
        echo "<hr>";
       
}
}
class segitiga extends bangundatar{ 
    public function luassegitiga($alas,$tinggi){
        echo "<u><b>Menghitung luas segitiga</b></u><br>";
        echo "Alas :".$alas;
        echo "<br>";
        echo "tinggi :".$tinggi;
        echo "<br>";
        $this->luassegitiga=1/2*$alas*$tinggi;
        echo "Luasnya :".$this->luassegitiga;
        echo "<br>"; 
        echo "<u><b>Dan ini Kelilingnya</u></b><br>";
        $this->keliling=$alas*3;
        echo "Keliling :".$this->keliling; 
        echo "<br>";
        echo "<hr>";
    }
}
class lingkaran extends bangundatar{ 
    public function luaslingkaran($jari,$phi=3.14){
        echo  "<b><u>Menghitung Luas lingkaran</b></u><br>";
        echo  "phi = $phi<br>";
        echo  "jari jari = $jari <br>";
     $this->luaslingkaran= $phi* $jari *$jari;
      echo  "Luasnya :$this->luaslingkaran<br>";
      echo "<u><b>Dan ini Kelilingnya</u></b><br>";
      $this->keliling=2*$phi*$jari;
      echo "Keliling :".$this->keliling; 
      echo "<br>";
      echo "<hr>";
    }
}
//instansiasi class teman
$luas= new persegi;
$luas->luaspersegi(6);
$luas1= new persegipanjang;
$luas1->luaspersegipanjang(6,5);
$luas2=new segitiga;
$luas2->luassegitiga(10,2);
$luas3=new lingkaran;
$luas3->luaslingkaran(7);
