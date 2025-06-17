<?php 
error_reporting(E_ERROR);
 include('session_chk.php');
 include("includes/config_db.php");
 session_start();
  $myusername = $_SESSION['myusername'];
  if (!isset($_SERVER['HTTP_REFERER'])){ 

echo "you cannot access this page directly!"; } 
else{
 ?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>

<title>Admin Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
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


<table width="100%" border="0">

<tr align="center">
<td height="80">
<?php
$test=mysql_query("SELECT * FROM members WHERE username='$myusername'");
$row=mysql_fetch_assoc($test);
if($row['Usertype'] == 'others')
	{
	
$_SESSION['a']=1;
?>
<font color="#61210B" size="7" style="font-family:Monotype Corsiva"><b>User Panel</b></font></td>
<?php
	}
else
{
$_SESSION['a']=2;	
?>
<font color="#61210B" size="7" style="font-family:Monotype Corsiva"><b>Admin Panel</b></font></td>
<?php
}
?>
</tr>
</table>
<table border="5" cellspacing="0" cellpadding="0" width="70%" align="center" bgcolor="#61210B" > 

<tr width="20" align="center">
<td><a href="login_success.php" style="text-decoration:none;"><font size="5pt" color="#F7BE81"style="font-family:Monotype Corsiva">Home</font></a></td>
<td><a href="createuser.php" style="text-decoration:none;"><font size="5pt" color="#F7BE81"style="font-family:Monotype Corsiva">Create Users</font></a></td>
	
	<td><a href="change_passwd.php" style="text-decoration:none;"><font size="5pt" color="#F7BE81" style="font-family:Monotype Corsiva">Change Password</font></a>
	<td><a href="logout.php" style="text-decoration:none;"><font size="5pt" color="#F7BE81"style="font-family:Monotype Corsiva">Log out</font></a></td>
	
	</tr>
	</table>
	<br/><br/>
	<table align="center">
	<br/><br/><br/>
	<tr><td><font size="6pt" color="#61210B" align="center" style="font-family:Monotype Corsiva"><b><marquee>WELCOME TO EQUIPMENT MONITORING SYSTEM</marquee></b></font></td></tr>
	</table>
	
	<table align="center">
<br/><br/><br/>
<tr><td>
  <?php
 if($_SESSION['mes5'] == 1)
 {?>
 <font color="blue"><b><?php
   echo "1 user created succesfully";?></b></font>
   <?php
   $_SESSION['mes5'] = 0;
   
}

?>
</td>
</tr>
	</table>
	
	
	
	<br/><br/><br/><br/><br/>
	<table  border="5" cellspacing="0" cellpadding="0" width="70%" align="center" bgcolor="#61210B" >
	<tr align="center"><td>
<a href="frame.php" style="text-decoration:none;"><font size="5pt" color="#F7BE81"style="font-family:Monotype Corsiva">STORES</font></a></td>

<!--<td>
<a href="schemeframe.php" style="text-decoration:none;"><font size="5pt" color="#F7BE81"style="font-family:Monotype Corsiva">SCHEMES</font></a></td>--></tr>
</table>
	


	

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