<?php
if (!isset($_SERVER['HTTP_REFERER'])){ 

echo "you cannot access this page directly!"; } 
else{
	?>
	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<?php
    //defined('thefooter') or die('Not with me my friend');
    //echo('Copyright to me in the year 2000');
?>
<title>Admin Home</title>
<style>
body {
    background-image: url("bgfin.jpg");
}
</style>
</head>
<body>

<table width="100%" height="20%" bgcolor="#61210B">
<tr><td><img src="img3.jpg" height="150" width="1200"/></td>
<td><font size="6pt" color="white" style="font-family:TIMES NEW ROMAN"></font><br/>
<font size="4pt" color="white" style="font-family:TIMES NEW ROMAN"></font></td>
</tr>
</table>
<br/><br/><br/><br/><br/>
<center><font color="#61210B">
<h1>Equipment Monitoring System </h1></font>
<font color="#61210B" size="4"> Click on buttons for operations</font></center>

</body>
</html>
<script>
 document.oncontextmenu = function() {return false;}
		  document.onkeydown = function () {if(event.keyCode == 123){event.returnValue = false;}}
		
          function openNewpage() {window.open ('foobar.html', '', 'toolbar=no,menubar=no,location=no');}
</script>		  
<?php
}
?>