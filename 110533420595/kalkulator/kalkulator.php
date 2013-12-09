<DOCTYPE html>
<html>
	<head>
		<title>KALKULATOR SEDERHANA</title>
	</head>
	<body>
		
			<?php 
				$bil1 = $_POST ['bil1'];
				$bil2 = $_POST ['bil2'];
				$opr = $_POST ['opr'];
				$hsl = 0;

				if ($opr == 'tambah'){
					$hsl = $bil1 + $bil2;
				}elseif($opr == 'kurang'){
					$hsl = $bil1 - $bil2;
				}elseif($opr == 'kali'){
					$hsl = $bil1 * $bil2;
				}elseif($opr == 'bagi'){
					$hsl = $bil1 / $bil2;
				}
				echo "hsl  " .$hsl;
			?>



		<div>
			<h1>KALKULATOR</h1>
			<br/>
			<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
				<input type="text"  name="bil1" value="<?php  echo isset ($_POST['bil1']) ? $_POST['bil1']:''; ?>">
				<select name="opr">
					<option value="tambah">+</option>
					<option value="kurang">-</option>
					<option value="kali">*</option>
					<option value="bagi">:</option>
				</select>
				<input type="text"  name="bil2" value="<?php  echo isset ($_POST['bil2']) ? $_POST['bil2']:''; ?>">
				<input type="submit" value="=">
				<input type="text"  name="hsl" value="<?php echo isset ($hsl) ? ($hsl) :''; ?>">
			</form>



		</div>
	</body>
</html>