<?php 
include("includes/config_db.php");
session_start();
	  include('session_chk.php');
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
<title>Create User</title>
<style>
body {
    background-image: url("bgfin.jpg");
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

<table width="100%" height="20%" bgcolor="#61210B">
<tr><td><img src="img3.jpg" height="150" width="1360"/></td>
<td><font size="6pt" color="white" style="font-family:TIMES NEW ROMAN"></font><br/>
<font size="4pt" color="white" style="font-family:TIMES NEW ROMAN"></font></td>
</tr>
</table>
<form action="insertuser.php" method="post">

<table width="100%" border="0">

<tr align="center">
<td height="80"> 

<font size="7" color="#61210B" style="font-family:Monotype Corsiva"><b>Admin Panel</b></font></td>

</tr>
</table>
<table border="5" cellspacing="0" cellpadding="0" width="70%" align="center" bgcolor="#61210B" > 

<tr width="20" align="center">
<td><a href="login_success.php" style="text-decoration:none;"><font size="5pt" color="#F7BE81"style="font-family:Monotype Corsiva">Home</font></a></td>
<td><a href="createuser.php" style="text-decoration:none;"><font size="5pt" color="#F7BE81"style="font-family:Monotype Corsiva">Create Users</font></a></td>
	
	<td><a href="change_passwd.php" style="text-decoration:none;"><font size="5pt" color="#F7BE81"style="font-family:Monotype Corsiva">Change Password</font></a>
	<td><a href="logout.php" style="text-decoration:none;"><font size="5pt" color="#F7BE81"style="font-family:Monotype Corsiva">Log out</font></a></td>
	
	</tr>
	</table>
	<br/><br/>
	<center><font size="6pt" color="#61210B" style="font-family:Monotype Corsiva">Create New User</font></center>
	<br />
<table  border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="red">
<tr>
<td align="center">
<table  width="100%"  cellpadding="3" cellspacing="1" bgcolor="#61210B">

<tr>
<td ><div align="right"><font size="4" color="white"style="font-family:Monotype Corsiva"><b>User Name</b> </font></div></td>
<td></td><td>
  <div align="left">
<input type="text" name="username"/> </div></td>
</tr>
<tr><td><div align="right"><font size="4" color="white"style="font-family:Monotype Corsiva"><b>Password </b></font></div></td>
<td></td><td>
  <div align="left">
<input type="password" name="pwd"/></div></td>
</tr>
<tr>
<td><div align="right"><font size="4" color="white"style="font-family:Monotype Corsiva"><b>User Type</b> </font></div></td>
<td></td><td>
  <div align="left">
 <select name="usertype" id="usertype" onChange="itemOnchange();">
			<option value=''>Select...</option>
					<option value="Admin">Admin</option>
					<option value="others">others</option>
				</select></div></td>
</tr>
<tr>
<td><div align="right"></div></td>
<td><div align="center"></div></td>
<td>
  <div align="left">
    <input type="submit" name="Add" value="Add">
<input type="reset" name="clear" value="Clear">
<input type="button" name="Back" value="Back"  onclick="javascript: history.go(-1)"/>
  </div></td></tr></table></td></tr></table>
<table align="center"  cellpadding="0" cellspacing="0">
<tr><td></td><td>
<br />
  <?php
 if($_SESSION['mes3'] == 1)
 {?>
 <font color="red"><b><?php
   echo "Username, Password and Usertype is mandatory";?></b></font>
   <?php
   $_SESSION['mes3'] = 0;
   
}
else
 if($_SESSION['mes4'] == 1)
 {?>
 <font color="red"><b><?php
   echo "Username already exists";?></b></font>
   <?php
   $_SESSION['mes4'] = 0;
   
}

?>
</td>
</tr>
</table>

</form>
</body>
</html>

<script type="text/javascript">
function stopRKey(evt) { 
  var evt = (evt) ? evt : ((event) ? event : null); 
  var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null); 
  if ((evt.keyCode == 13) && (node.type=="text"))  {return false;} 
} 

document.onkeypress = stopRKey; 
 document.oncontextmenu = function() {return false;}
		  document.onkeydown = function () {if(event.keyCode == 123){event.returnValue = false;}}
		
          function openNewpage() {window.open ('foobar.html', '', 'toolbar=no,menubar=no,location=no');}
		  
</script>
<?php
}
?>


    
 

