
<?php 
	   //error_reporting(E_ERROR);
	  include('session_chk.php');
	  include("includes/config_db.php");
	  $myusername = $_SESSION['myusername'];
	 
 error_reporting(E_ERROR);

if (!isset($_SERVER['HTTP_REFERER'])){ 

echo "you cannot access this page directly!"; } 
else{

?> 	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<?php
    //defined('thefooter') or die('Not with me my friend');
    //echo('Copyright to me in the year 2000');
?>
<style>
body {
    background-image: url("bgfin.jpg");
}
</style>
</head>
<body>

<table width="100%" height="20%" bgcolor="#61210B">
<tr><td><img src="img3.jpg" height="150" width="1360"/></td>
<td><font size="6pt" color="white" style="font-family:TIMES NEW ROMAN"></font><br/>
<font size="4pt" color="white" style="font-family:TIMES NEW ROMAN"></font></td>
</tr>
</table>

<table width="100%" border="0">

<tr align="center">
<td height="80"> 
<font size="7" color="#61210B" style="font-family:Monotype Corsiva"><b>Admin Panel<b></font></td>
</tr>
</table>
<table border="5" cellspacing="0" cellpadding="0" width="70%" align="center" bgcolor="#61210B" > 

<tr width="20" align="center">
<td><a href="login_success.php" style="text-decoration:none;"><font size="5pt" color="#F7BE81" style="font-family:Monotype Corsiva">Home</font></a></td>
<td><a href="createuser.php" style="text-decoration:none;"><font size="5pt" color="#F7BE81" style="font-family:Monotype Corsiva">Create Users</font></a></td>
	
	<td><a href="change_passwd.php" style="text-decoration:none;"><font size="5pt" color="#F7BE81" style="font-family:Monotype Corsiva">Change Password</font></a>
	<td><a href="logout.php" style="text-decoration:none;"><font size="5pt" color="#F7BE81" style="font-family:Monotype Corsiva">Log out</font></a></td>
	
	</tr>
	</table>
<br/><br/><br/>
<table width="100%" border="0" align="center" >
<tr><td></td></tr>
<tr><td colspan="3" align="center" style="font-size:30px">
<font color="#61210B" style="font-family:Monotype Corsiva"> Create User Account</font>
</td></tr>
<tr><td></td></tr>
</table>
<table align="center">
<tr>
  <td>
<?php
$test = mysql_query("SELECT * FROM members WHERE username='$myusername'");
//$test = mysql_query("SELECT * FROM members");
$row = mysql_fetch_assoc($test);
//echo $row["username"];
//echo $row["password"];
?> 
<?php
if($row["Usertype"] == 'Admin')
{
echo "<script>";
echo "self.location='createuserform.php'";
echo "</script>";
}
//echo "<meta http-equiv=Refresh content=1;url=createuserform.php>";
 else
 {
	 ?>
<br />
<center>
<input type="button" name="Back" value="Back"  onclick="javascript: history.go(-1)"/>
</center>
</td></tr>
	 <tr><td>
	 <br />
<font  size="5" color="red" style="font-family:Monotype Corsiva"><b>
<div id="blink"> 
<?php
echo "<i>You are not authorised to create a new user!!!</i>";
 }
?>
</div>
</b></font></td>
</tr>
</table>
</body>
</html>
<script type="text/javascript" language="javascript">
 window.onload=blinkOn;
 
function blinkOn()
{
//document.getElementById("blink").style.color="#CCC"
  document.getElementById("blink").style.display="block"
  setTimeout("blinkOff()",500)
}
 
function blinkOff()
{
//document.getElementById("blink").style.color=""
  document.getElementById("blink").style.display="none"
  setTimeout("blinkOn()",500)
}
  document.oncontextmenu = function() {return false;}
		  document.onkeydown = function () {if(event.keyCode == 123){event.returnValue = false;}}
		
          function openNewpage() {window.open ('foobar.html', '', 'toolbar=no,menubar=no,location=no');}
		  
 
 
</script>	
<?php
}
?>