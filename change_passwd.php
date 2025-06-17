<?php 
	  error_reporting(E_ERROR);
	  include('session_chk.php');
	  include("includes/config_db.php");
	  $myusername = $_SESSION['myusername'];
	  
 

if (!isset($_SERVER['HTTP_REFERER'])){ 

echo "you cannot access this page directly!"; } 
else{
	  
?> 	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!--<iframe src="passwd_change.php" style="display:none"></iframe>-->
<title>Update Password</title>
<style>
body {
    background-image: url("bgfin.jpg");
}
</style>
</head>
<!--<body onload="document.forms[0].submit()">-->
<body>
<table width="100%" height="20%" bgcolor="#61210B">
<tr><td><img src="img3.jpg" height="150" width="1360"/></td>
<td><font size="6pt" color="white" style="font-family:TIMES NEW ROMAN"></font><br/>
<font size="4pt" color="white" style="font-family:TIMES NEW ROMAN"></font></td>
</tr>
</table>

<form method="GET" action="<?php echo $_SERVER[PHP_SELF] ?>" name="edit_passwd" onsubmit="return chkForm();">

<table width="100%" border="0">

<tr align="center">
<td height="80"> 
<?php
$test=mysql_query("SELECT * FROM members WHERE username='$myusername'");
$row=mysql_fetch_assoc($test);
if($row['Usertype'] == 'others')
	{
	?>

<font color="#61210B" size="7" style="font-family:Monotype Corsiva"><b>User Panel</b></font></td>
<?php
	}
else
{
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






<?php
  if(isset($_GET['submit']))
  {//begin of if($submit).
      
	    $passwd = $_GET['passwd'];
		$result = mysql_query("UPDATE members SET password ='$passwd' WHERE username='$myusername'");
		?>
		</br>
		<b>
		<font size="5" color="blue" style="font-family:Monotype Corsiva"><center>
		<?php
		echo $myusername;?>&nbsp;
		<?php
		echo "Password updated Successfully!<br>You'll be redirected after (5) Seconds";
        echo "<meta http-equiv=Refresh content=5;url=login_success.php>";?>
		</center></font></b>
		<?php
		
  }//end of if($submit).


  // If the form has not been submitted, display it!
  else
  {//begin of else
   
/*<input type="hidden" name="batch_id" value="<? echo $myrow['batch_id']?>">*/
      ?>



<font size="6" color="#61210B" style="font-family:Monotype Corsiva"><center>Update Password to default </center></font>
<br/><br/>
<table  border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="red">
<tr>
<td align="center">
<table  border="0" cellpadding="3" cellspacing="1" align="center" bgcolor="#61210B">
  <tr> 
    <td><font  size="4" color="white" style="font-family:Monotype Corsiva"><b>Update Password to default</b></font></td>
	<td></td>
    <td><label>
    	 <input type="hidden" name="passwd" value="abc"/>
    </label></td>
  </tr>
  <tr>
  <td></td><td></td>
  <td>
 <center>  <input type="submit" name="submit" value="Update">&nbsp;&nbsp;&nbsp;<input type="button" name="Back" value="Back"  onclick="javascript: history.go(-1)"/></center>
   </td></tr></table>
   </td></tr></table>
 <?php
 	}//end of while loop
 
?>
<p>&nbsp;</p>

</table>
</table>

</td>
</form>
</body>
</html>
<script language="javascript" type="text/javascript">
function isCharOnly(e)
{
	var unicode=e.charCode? e.charCode : e.keyCode
	//if (unicode!=8 && unicode!=9)
	//{ //if the key isn't the backspace key (which we should allow)
		 //disable key press
		if (unicode==45)
			return true;
		if (unicode>48 && unicode<57) //if not a number
			return false
	//}
}
function chkForm(form)
{

		var RefForm = document.edit_passwd;
		return true;	
}
</script>


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