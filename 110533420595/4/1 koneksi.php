<!DOCTYPE html 
     PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
 
<head> 
	<title>Koneksi ke Data Source</title>
</head> 
 
<body> 
	
<?php 
	$host	= 'localhost';
	$user	= 'root';
	$pass	= '123456';
	$db		= 'mysql';
	
	$cnn	= mysql_connect($host, $user, $pass);
	if (!$cnn)
	{
		exit('Koneksi Gagal');
	}
	$db		= mysql_select_db($db);
	if (!$db)
	{
		exit('gagal Memilih Database');
	}
?> 

</body>
</html>