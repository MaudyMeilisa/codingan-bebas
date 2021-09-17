<?php

//INI CONTOH PUBLIC
//class manusia
// class manusia{

//     //pro
//     public $nama;
//     //method manusia
//     public function tampilkan_nama(){
//         echo "Nama saya Maudy";
//     }
//     public function biodata(){
//         echo $this->tampilkan_nama();
// }
// }
// $manusia = new manusia();
// echo $manusia->biodata();

//INI CONTOH PRIVATE
// class manusia{
//     private $nama="Maudy";

//     //method public
//     public function tampilkan_nama(){
//         return "Nama Saya " .$this->nama;
//     }
// }
// $manusia1=new manusia();
// echo $manusia1->nama;


class manusia{
    //menentukan property dengan protected
    // protected $nama="Maudy Meilisa";

    protected function nama(){
        return "Nama saya Maudy Meilisa ";
    }
    public function keluarkan(){
        return $this->keluarkan;
    }
    // public function tampilkan_nama(){
    //     return $this->nama;
    // }
}
$manusia=new manusia();
echo $manusia->nama();
?>