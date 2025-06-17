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
<title>user details</title>
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


<form  name="user_form2" method="post"  action="user_form3.php">
<?php
$con = mysql_connect('localhost','root','');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db('ems', $con);



    



  
mysql_close($con);
?>


<table width="100%" align="center" border="0" cellpadding="0" cellspacing="1">

<tr>
<td align ="center"> <font color="#61210B" size="7"><b>User Information</b></font> 
</td>
</tr>
</table>
<table cellspacing="50" align="center">
<tr>
<th align="left">Name</th>
<td>	
<input type="text" id="name" name="name" maxlength=25/> 
</td>
<td></td>
<td></td>
<th align="left">Email ID</th>
<td>
<input type="text" id="emailid" name="emailid"/> 
</td>
</tr>
<tr>
<th align="left">Phone No.</th><td><input type="text" name="phoneno" id="phoneno" maxlength=10/></td>
<td></td>
<td></td>
<th align="left">Address</th><td rowspan="2"><textarea rows="4" cols="40" name="address"></textarea> </td>
<td></td>
</tr>
</table>

<table align="center">
<tr>
<td></td>
<td><input type="submit" value="Submit" name="submit"></input>
</td>&nbsp;&nbsp;&nbsp;&nbsp;<td><input type="reset" value="Clear" name="clear"></td>
</tr>
</table>

</form>

</body>
</html>
 

 <script>
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
	