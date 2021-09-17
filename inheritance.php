<?php
//class utama
class manusia{

    public $teman ="Maudy Meilisa";
    protected function berinama(){
        echo "Nama saya Maudy<br>";
    }
}
//class turunan
class teman extends manusia{
    public function berinamateman(){
        echo $this->berinama();
        echo "Nama teman saya".$this->teman;
        
    }
}
//instansiasi class teman

$malasngoding= new teman;


$malasngoding->berinamateman();
?>