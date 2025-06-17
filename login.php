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
/*function download($file)
{
	$dir="downloads/";
	$path=$dir.$file;
	header("Cache-Control: public");
	header("Content-Description: File Transfer");
	header("Content-Disposition: attachment; filename=$path");
	header("Content-Type: application/zip");
	header("Content-Transfer-Encoding: binary");
	readfile($path);
	if(isset($_GET['download'])){
		if(!empty($_GET['download'])){
			$file=$_GET['download'];
			download($file);
		}
	}
	echo"File Downloads<br/><br/>";
	echo"<a href=\"index.php\">Download</a>";
			
}
download("c:/xampp/htdocs/EMS1/index.php");*/
?>


<table width="100%" height="20%" bgcolor="#61210B">
<tr><td><img src="img3.jpg" height="150" width="1360"/></td>
<td><font size="6pt" color="white" style="font-family:TIMES NEW ROMAN"></font><br/>
<font size="4pt" color="white" style="font-family:TIMES NEW ROMAN"></font></td>
</tr>
</table>

<br/><br/><br/><br/><br/><br/>
<b><font size="3pt" color="#61210B" style="font-family:Monotype Corsiva"><center><h1>EQUIPMENT MONITORING SYSTEM </h1></center></font></b>
<table width="500" border="0" align="center">

<tr>
<td style="padding:0;">
&nbsp;<br/>
</td>
</tr>
<tr>

<td>
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="red">
<tr>



<form name="form1" method="GET" action="checklogin.php">

<td align="center">
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#61210B">
<tr>
<td colspan="3" align="center"><font size="5" style="font-family:Monotype Corsiva" color="white"><strong>Login </strong></font></td>
</tr>
<tr>
<td width="200" ><div align="right"><font size="4" style="font-family:Monotype Corsiva" color="white">Username</font></div></td>
<!--<td width="3"><div align="center">:</div></td>-->
<td></td>
<td width="268">
  <div align="left">
    <input name="myusername" type="text" id="myusername">
  </div></td>
</tr>
<tr>
<td><div align="right"><font size="4" style="font-family:Monotype Corsiva" color="white">Password </font></div></td>
<!--<td><div align="center">:</div></td>-->
<td></td>
<td>
  <div align="left">
    <input name="mypassword" type="password" id="mypassword">
  </div></td>
  <?php
  //$sql="select Usertype from members where username='$myusername' and password='$mypassword'";
  //$result=mysql_query($sql);
  //$row = mysql_fetch_assoc($result);
  
  //if($row['Usertype']=='Admin')
  //{
	  ?>
	  <!--<td>
  <input name="Type" type="text" id="Type" value="<?php echo $row['Usertype'];?>">
  </td>-->
 <?php
 //}
  //else{
	 ?> <td>
 <!-- <input name="Type" type="text" id="Type" value="<?php echo $row['Usertype'] ;?>">
  </td>-->
  <?php
  //}
  ?>
</tr>
<tr>
<td><div align="right"></div></td>
<td><div align="center"></div></td>
<td>
  <div align="left">
       <input type="submit" name="Submit" value="Login">
<input type="reset" name="reset" value="Clear">
  </div></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
</td>
</tr>


</table>
<table align="center">
<tr>
  <td>
  <?php
 if ($_SESSION['mes2'] == 1) 
 {?>
 <font color="red"><b><div id="shine"><?php
   echo "Username or Password is incorrect!!!";?></div></b></font>   
   <?php
    $_SESSION['mes2'] = 0;
    }
?>
</td>
</tr>
<tr>
  <td>
  <?php
 if($_SESSION['mes1'] == 1)
 {?>

 <font color="red"><b>
 <?php
   echo "Username and Password is mandatory";?></b></font>
   <?php
   $_SESSION['mes1'] = 0;
   
}

?>
</td>
</tr>
</table>

</body>
</html>
<script type="text/javascript" language="javascript">
function stopRKey(evt) { 
  var evt = (evt) ? evt : ((event) ? event : null); 
  var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null); 
  if ((evt.keyCode == 13) && (node.type=="text"))  {return false;} 
} 

document.onkeypress = stopRKey; 

</script>

<script type="text/javascript" language="javascript">
 window.onload=shineOn;
 
function shineOn()
{
//document.getElementById("blink").style.color="#CCC"
  document.getElementById("shine").style.display="block"
  setTimeout("shineOff()",500)
}
 
function shineOff()
{
//document.getElementById("blink").style.color=""
  document.getElementById("shine").style.display="none"
   setTimeout("shineOn()",500)
}
 document.oncontextmenu = function() {return false;}
		  document.onkeydown = function () {if(event.keyCode == 123){event.returnValue = false;}}
		
          function openNewpage() {window.open ('foobar.html', '', 'toolbar=no,menubar=no,location=no');}
	
 
</script>
<?php
}
?>	