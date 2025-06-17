 <?php
 error_reporting(E_ERROR);
 session_start();
 
 


 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style>
body {
    background-image: url("img1.jpg");
}
table {
    border-collapse: separate;
    empty-cells: show;
	color: #61210B;
	font-size: 18px;
	font-family:Monotype Corsiva;
}

</style>
</head>
<body>
<?php
$incfile=$_REQUEST["NewsFile"]; 
include($incfile.".php");
?>
<table width="100%" height="20%" bgcolor="#61210B">
<tr><td><img src="img3.jpg" height="200" width="1360"/></td>
<td><font size="6pt" color="white" style="font-family:TIMES NEW ROMAN"></font><br/>
<font size="4pt" color="white" style="font-family:TIMES NEW ROMAN"></font></td>
</tr>
</table>
<br/><br/>
<b><font size="3pt" color="white" style="font-family:Monotype Corsiva"><center><h1>EQUIPMENT MONITORING SYSTEM </h1></center></font></b>
<table align="center">
<tr><td>
<a href="index.php"><font size="5pt" color="blue" style="font-family:Monotype Corsiva">Home</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="about.php"><font size="5pt" color="blue" style="font-family:Monotype Corsiva">About Us</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;




<a href="user_form.php"><font size="5pt" color="blue" style="font-family:Monotype Corsiva">Request Equipment</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="user_form2.php"><font size="5pt" color="blue" style="font-family:Monotype Corsiva">Request Account</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="vendor.php"><font size="5pt" color="blue" style="font-family:Monotype Corsiva">Request Dealership</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="login.php"><font size="5pt" color="blue" style="font-family:Monotype Corsiva">Login</font>

</td>
</tr>
</table>
<br>
<br>
<table width="50%" align="center">
<tr><td><font size="4pt" color="white" style="font-family:Monotype Corsiva">
Behind every effective computer system is a solid support team capable of providing everything from product expertise to 
emergency service. Computer Equipment Services has delivered this kind of comprehensive support to business organizations.
The value we provide our clients is reflected in the lasting relationships we have developed. Equipment Monitoring System 
has provided a continuity of support to many accounts for over twenty years and to most for over seven. Our record 
reflects the quality of service delivered and our degree of commitment.</font>
</td>
</tr>
</table>
</body>
</html>
<script type="text/javascript">
 
		  document.oncontextmenu = function() {return false;}
		  document.onkeydown = function () {if(event.keyCode == 123){event.returnValue = false;}}
		
          function openNewpage() {window.open ('foobar.html', '', 'toolbar=no,menubar=no,location=no');}
		  </script>