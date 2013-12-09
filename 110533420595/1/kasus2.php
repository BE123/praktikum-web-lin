<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Studi Kasus 2 (Matriks Tabel)</title>
</head>

<body>
<?php 
	function matriks_tabel($rows,$cols)
	{
		echo "<table border='1'>"; 
 
		for($tr=1;$tr<=$rows;$tr++)
		{ 
      		echo "<tr>"; 
        	for($td=1;$td<=$cols;$td++)
			{ 
            	echo "<td>row: ".$tr." column: ".$td."</td>"; 
        	} 
    		echo "</tr>"; 
		} 
 
		echo "</table>"; 
	}
			
	//menentukan jumlah kolom dan baris yang akan dibuat
	$kolom = 4;
	$baris = 6;
	matriks_tabel($baris,$kolom);
?>
</body>
</html>
