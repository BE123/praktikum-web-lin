<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Studi Kasus 1 (Greeting)</title>
</head>

<body>
<?php	
	function greeting($jam)
	{
		if ($jam >= 00 and $jam < 10 )
		{   
   			$greet="Selamat Pagi";   
  		}
		else if ($jam >= 10 and $jam < 15 )
		{   
   			$greet="Selamat Siang";  
 		}
		else if ($jam >= 15 and $jam < 18 )
		{   
   			$greet="Selamat Sore";      
 		}
		else if ($jam >= 18 and $jam <= 24 )
		{   
   			$greet="Selamat Malam";     
 		}else 
		{   
  			$greet="Error";  
	 	}  
		return $greet;
	}
	
	date_default_timezone_set('Asia/Jakarta');
	$sekarang = date("H");
	echo '<h1>' .greeting($sekarang). '</h1';
	echo '<br /><h1>Selamat Menikmati Hari Anda <h1><br /><h5>Saat ini jam sedang menunjukkan pukul ' .$sekarang.' WIB</h5>';
?>
</body>
</html>
