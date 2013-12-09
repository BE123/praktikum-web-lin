<?php
//Deklarasikan variabel... 
$a=($_POST['a'];
$b=($_POST['b'];
$op=($_POST['op'];

//Karena Operatornya bisa dipilih maka kita bisa menggunakan fungsi If()
if (op=="+")
 $hasil=$a+$b;
else if (op=="-")
 $hasil=$a-$b;
else if (op=="*")
 $hasil=$a*$b;
else if (op=="/")
 $hasil=$a/$b;
else $hasil=$a%$b;

//Tampilkan hasil dari proses tadi
echo"Hasil $a $op $b = $hasil<br />
<a href='calc.php'>Kembali Ke Kalkulator</a>";
?>