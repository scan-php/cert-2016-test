
<?php
error_reporting(E_ERROR);
session_start();   

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
<title>Create User</title>
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
<form>
<table width="100%" border="0">

<tr align="center">
<td height="80"> 
<font size="7" color="#61210B" style="font-family:Monotype Corsiva">Admin Panel</font></td>
</tr>
</table>

<table  align="center" border="0" cellpadding="0" cellspacing="1">


<tr>
<td>
</td>
<td>
<?php
$con = mysql_connect('localhost','root','');

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db('ems', $con);
$test=mysql_query("SELECT username FROM members");

if($_POST[username]=='' || $_POST[pwd]=='' || $_POST[usertype]=='')
{
$_SESSION['mes3']=1;
echo "<script>";
echo "self.location='createuserform.php'";
echo "</script>";
}
else 
{
	while($data2=mysql_fetch_array($test)){
	if($data2['username']==$_POST[username])
	 {
           $_SESSION['mes4']=1;

echo "<script>";
echo "self.location='createuserform.php'";
echo "</script>";
}	
}
if($_SESSION['mes4']==0)
{
	$_SESSION['mes5']=1;
$sql="INSERT INTO members (username,password,Usertype)
VALUES
('$_POST[username]','$_POST[pwd]','$_POST[usertype]')";
 
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "<script>";
echo "self.location='login_success.php'";
echo "</script>";

}
}
mysql_close($con)
?>
</td>

<td>
</td>
</tr>
</table>

</form>
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









