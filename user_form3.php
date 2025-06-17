<?php 
	  
	  //include('session_chk.php');
	  include("includes/config_db.php");
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
<title>uname password</title>
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

<?php
$con = mysql_connect('localhost','root','');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db('ems', $con);

if (isset($_POST['submit']) && $_POST['submit'] == 'Submit')
 {
	 if($_POST[name]!=''&& $_POST[emailid]!=''&& $_POST[phoneno]!=''&& $_POST[address]!='')
	 {
		 if ( (!preg_match('/^[a-zA-Z]+$/',$_POST[name])) 
		    || (!preg_match('/^[a-zA-Z ]+$/',$_POST[address]))) { 
		   ?>
<center>
   <font color=red size=3 style="font-family:Monotype Corsiva"><b>
   <?php
	   echo" Invalid entry in the form";
	   echo"<br>";
	
	echo "<center><i>Name and address should be a string of characters, white space is allowed in address.</i><center>";
	echo"<br>";
	echo "<center><i>Phone number should be a string of digits of length 10.</i><center>";
	
	   ?>
	   </b>
	   </font>
	   </center>
	   <center><table><font color="blue"> 
<?php
		echo "You'll be redirected after (15) Seconds";
        echo "<meta http-equiv=Refresh content=15;url=user_form2.php>";

?></font></table></center>
	   
 <?php
		   
	   
 
		   }
		   else{
$sql="insert into userinfo(name,email_ID,phone_no,address) values('$_POST[name]','$_POST[emailid]','$_POST[phoneno]','$_POST[address]')";
  if (!mysql_query($sql,$con))
 {
 die('Error: ' . mysql_error());
   } 
   
   function generate_password( $length = 8 ) {
$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
$password = substr( str_shuffle( $chars ), 0, $length );
return $password;
}

$username=$_POST['emailid'];
$passwd= generate_password(6);


$usertype="others";
$con = mysql_connect('localhost','root','');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db('ems', $con);
  $sql="insert into members(username,password,Usertype) values('$_POST[emailid]','$passwd','$usertype')" ; 
  $sql1="select name,email_ID,phone_no,address from userinfo where email_ID='$username'";
  if (!mysql_query($sql,$con))
 {
 die('Error: ' . mysql_error());
   } 
mysql_close($con);
   
   ?>
<center>
<table>
<font color="blue" size=6><?php 
echo"Welcome $_POST[name]";?></font>
<br>
<br>
<font color="blue" size=3>
<?php
echo"<br>";
echo"Your Username=$username";
echo"<br>";
echo"and Password=$passwd";
 
 ?>
</font>
</table>
</center>
<br>
<br>
<center>
<table>
<a href="index.php" style="text-decoration:none;color:maroon"><button style="width:60;height:40" align="center" name="button"><font size="3" color=" maroon">Home</font></button></a>
</table>
</center>
<?php
}
	 }


   else{
?>
<center>
   <font color=red size=3 style="font-family:Monotype Corsiva"><b>
   <?php
	   echo" All the feilds are mandatory";
	   ?>
	   </b>
	   </font>
	   </center>
	   
</table>
</center>
<br>
<br>
<center>
<table><font color="blue">

<a href="index.php" style="text-decoration:none;color:maroon"><button style="width:60;height:40" align="center" name="button"><font size="3" color=" maroon">Home</font></button></a>
</font>
</table>
</center>
<?php
 }
 }
?>

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
