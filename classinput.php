<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <form action="" method="post">
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type ="text" name="nim"></td>
</tr>
<tr>
           <td>Nama</td>
                <td>:</td>
                <td><input type ="text" name="nama"></td>
</tr>
<tr>
           <td>Kelas</td>
                <td>:</td>
                <td><input type ="text" name="kelas"></td>
</tr>
<tr>
            <td></td>
            <td></td>
                    <td><button type="submit" name="proses">Proses</button>
</tr>
  </form>
  </table>
</body>
</html>
<?php
/*
*Kalkulator sederhana dengan oop php
*/
if (isset($_POST['proses'])){
    $nim =$_POST['nim'];
    $nama =$_POST['nama'];
    $kelas =$_POST['kelas'];
    class input{

        public $x;
        public $y;
        public $z;
        public function data($x,$y,$z){
            $this->x= $x;
            $this->y= $y;
            $this->z= $z;
        }
    }
    $data = new input();
    $data->data($nim,$nama,$kelas);

    echo $data->x."<br>";
    echo $data->y. "<br>";
    echo $data->z;
}
?>