<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Tansitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Definisi Fungsi/Prosedur</title>
</head>

<body>

<?php

//Contoh prosedur
function do_print()
{
	//Mencetak informasi timestamp
	echo time();
}

//Memanggil prosedur
do_print();

echo '<br />';

//Contoh fungsi perjumlahan
function junlah ($a,$b)
{
	return($a + $b);
}

echo jumlah(2,3);
//Output: 5

?>

</body>
</html>