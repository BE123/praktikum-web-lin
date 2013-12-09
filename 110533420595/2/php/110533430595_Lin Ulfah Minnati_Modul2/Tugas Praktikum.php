<!doctype html>
<html>
<head>
<meta charset="utf-8">
<!-- TemplateBeginEditable name="doctitle" -->
<title>Tugas Praktikum</title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
<style type="text/css">
#satu {
	font-family: "Footlight MT Light", Footlight MT Light, Footlight MT Light, sans-serif;
	font-size: 16px;
	font-style: oblique;
	text-decoration: blink;
	background-color: #251e05;
	list-style-type: square;
}
#satu {
	font-style: oblique;
	text-decoration: blink;
	background-color: #f5e3a2;
	margin: auto;
	height: 6px;
	width: 4px;
}
#satu {
	background-color: #d1b75b;
	font-style: oblique;
	font-family: "Footlight MT Light", "Footlight MT Light", serif;
	color: #130f00;
	border: thin solid #010100;
	position: relative;
	height: 6px;
	width: 5px;
}
#sa {
	font-family: "Footlight MT Light", Footlight MT Light;
	font-size: 18px;
	font-style: oblique;
	color: #2c2201;
	background-color: #fef3ce;
	height: 10px;
	width: 10px;
	border-top-style: solid;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: solid;
	border-top-color: #2c2201;
	border-right-color: #2c2201;
	border-bottom-color: #2c2201;
	border-left-color: #2c2201;
	list-style-type: square;
	position: fixed;
}
#div1 {
	position: absolute;
	left: 478px;
	top: 86px;
	width: 334px;
	z-index: 1;
	background-color: #e8d79e;
	border: 7px solid #fadf83;
	visibility: visible;
	right: auto;
	bottom: auto;
	margin: 2px;
	padding: 20px;
	font-size: 36px;
	font-style: oblique;
	font-weight: bold;
	font-family: Footlight MT Light, Footlight MT Light, sans-serif;
	color: #6a5302;
	text-align: left;
	height: 288px;
}
#as {
	font-family: "Footlight MT Light", Footlight MT Light;
	background-color: #cb9e02;
	height: 15px;
	width: 15px;
	border-top-style: solid;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: solid;
	border-top-color: #ffc600;
	border-right-color: #ffc600;
	border-bottom-color: #ffc600;
	border-left-color: #ffc600;
	position: fixed;
}
#div2 {
	position: absolute;
	left: 552px;
	top: 204px;
	width: 233px;
	height: 184px;
	z-index: 2;
	color: #2c2201;
	background-color: #e8d79e;
	font-size: 18px;
}
</style>
<script>
function cek(a) {
al = /^[A-Za-z]{1,}$/; //Cek validitas harus huruf
return al.test(a);
}
function val(){
var x=document.forms["myForm"]["nama"].value;
var y=document.forms["myForm"]["pass"].value;
if (x==null || x=="" && y==null || y=="") //cek tidak boleh kosong
  {
  alert("Maaf, Anda harus mengisi Username dan Password.");
  myForm.nama.focus();
  return false;
  }
if (!cek(x) || !cek(y)){ //pemanggilan fungsi cek
	alert ('Maaf, Username Dan Password harus terdiri dari huruf.');
	return false;
}}
</script>
</head>
<body bgcolor="#b79211">
<?php  
session_start();    
?>  
<div id="div1" align="center">
    <label>Login</label>
  <hr align="center" width="300" size="5" color="#907002">
  </div>
<div id="div2" align="left">
   <form name="myForm" method="POST" action="vali.php" onSubmit="return val()">
    <label>Username :</label>
    <br>
    <input type="text" name="nama" id="nama" width="200" value="<?php echo isset($_POST['nama']) ? $_POST['nama'] : '';?>">
    <br><br>
    <label>Password :</label>
    <br>
    <input type="password" name="pass" id="pass" width="200">
    <br><br>
    <input type="submit" name="Masuk" value="Masuk">
    <input type="reset" name="Ulangi" value="Ulangi">
  </form>
</div>
</body>
</html>
