<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
 
<head> 
  <title>Study Kasus 2 (Check Box)</title> 
</head> 
 
<body>  
  <form action="<?php $_SERVER['PHP_SELF'];?>" method="post"> 
    Film : 
    <input type="checkbox" name="pes[]" value="film1"checked=" <?PHP
	  if ($_post['th']=="film1")
	  {
		  echo 'selected="selected"';
	  }
      ?>"
    />A good Day To Die Hard
 
    <input type="checkbox" name="pes[]" value="film1" 
    />The Conjuring
 
    <input type="checkbox" name="pes[]" value="film3" 
    />Pitch Perfect<br /> 
 
    <input type="submit" value="OK" /> 
  </form> 
 
<?php 
// Ekstraksi nilai 
if (isset($_POST['pes']))
{ 
  foreach ($_POST['pes'] as $key => $val)
  { 
    echo $val . '<br />'; 
  } 
} 
?> 
 
</body> 
</html> 