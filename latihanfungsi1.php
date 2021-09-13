
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan</title>
</head>
<body>
    <center>
       <i> <h1>Nilai Ujian kelas 12 RPL</h1></i>
        <table border="1">
            <tr>
                
                <th>Nama</th>
                <th>Matematika</th>
                <th>Bahasa Inggris</th>
                <th>Bahasa Indonesia</th>
                <th>Kejuruan</th>
                <th>Rata-rata</th>
                <th>Status</th>
                <th>Grade</th>
                
</tr>
<?php
function nilaiujian($nama,$matematika,$inggris,$indo,$kejuruan)
{
    echo "<th>".$nama."</th>";
    echo "<th>".$matematika."</th>";
    echo "<th>".$inggris."</th>";
    echo "<th>".$indo."</th>";
    echo "<th>".$kejuruan."</th>";

    $total = $matematika+$inggris+$indo+$kejuruan;
    $rata=$total/4;
    
    echo "<th> $rata</th>"; 
    if($rata >= 75  && $rata <= 100){
        echo"<th>Lulus</th>";
        }  
        else{
       echo "<th>Tidak lulus</th>";
        }   
        if ($rata >= 90 && $rata <= 100){
            $grade ="<th>A</th>";
            }
            else if($rata >= 80 && $rata <= 89 ){
               echo "<th>B</th>";
                } else if($rata >= 75 && $rata <= 79){
                   $grade= "<th>C</th>";
                    } else if($rata >= 50 && $rata <= 74){
                      $grade=  "<th>D</th>";
                        } else if($rata >= 0 && $rata <= 49){
                          $grade=  "<th>E</th>";  
                        }

}
    
nilaiujian("Maudy",85,80,90,80);
?>
</table>
</center>
</body>
</html>