<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Tansitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Metode Post</title>
</head>
<body>
	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
	Nama
	<input type="text" name="nama" /> <br />
	
	<input type="submit" value="OK" />
	</form>
	
	<?php
		if (isset($_POST['nama']))
		{
			echo 'Hallo, ' . $_POST['nama'];
		}
	?>

</body>
</html>