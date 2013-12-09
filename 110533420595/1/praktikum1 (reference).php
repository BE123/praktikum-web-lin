<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Studi Praktikum 2 (Passing By Reference)</title>
</head>

<body>
<?php 
	function nilai(&$a)
	{
		$a++;
	}
	
	$input=8;
	nilai($input);
	echo $input;
?>
</body>
</html>
