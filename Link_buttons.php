<?php 
 include('session_chk.php');
 include("includes/config_db.php");
 $myusername = $_SESSION['myusername'];
 if (!isset($_SERVER['HTTP_REFERER'])){ 

echo "you cannot access this page directly!"; } 
else{
	   
 ?>
<html>
<head>
<?php
    //defined('thefooter') or die('Not with me my friend');
    //echo('Copyright to me in the year 2000');
?>
<title>Admin Home</title>
<style>
body {
    background-color: #61210B;
	
}

</style>
</head>
<body>

<!--<form name="form1" method="post" action="checklogin.php">-->
<?php
$test=mysql_query("SELECT * FROM members WHERE username='$myusername'");

$row=mysql_fetch_assoc($test);
if($row['Usertype'] == 'others')
	{
	?>
<br/><br/><br/><br/><br/><br/><br/>
<table  align="center" border="0" cellpadding="0" cellspacing="1">

<tr><td>
<a href="login_success.php" target="_top"><button bgcolor="blue" type="button" style="width:100;height:50"  name="button8" ><font size="4" color="#8B008B"  style="font-family:Monotype Corsiva"><i><b>Home</b></i></font></button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/><br/>
</td></tr>
<tr>




<td>

<!--<table align="up">
 
<tr><td>-->
<button bgcolor="blue" type="button" style="width:100;height:50" name="button1"><font size="4" color="#8B008B"  style="font-family:Monotype Corsiva"><i><b>Add</b></i></font></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/><br/>
</td></tr>
<tr><td>
<button type="button" style="width:100;height:50" name="button2"><font size="4" color="#8B008B"  style="font-family:Monotype Corsiva"><i><b>Delete</b></i></font></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/><br/>
</td></tr>	

<tr><td>
<button type="button" style="width:100;height:50" name="button3"><font size="4" color="#8B008B"  style="font-family:Monotype Corsiva"><i><b>Update</b></i></font></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/><br/>
</td></tr>
<tr><td>
<a href="searchshort.php" style="text-decoration:none;" target="main"><button type="button" style="width:100;height:50" name="button4"><font size="4" color="#8B008B"  style="font-family:Monotype Corsiva"><i><b>Search</b></i></font></button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/><br/>
</td></tr>
<tr><td>
<button type="button" style="width:100;height:50" name="button3"><font size="4" color="#8B008B"  style="font-family:Monotype Corsiva"><i><b>Cleints</b></i></font></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/><br/>
</td></tr>
<tr><td>
<a href="vendor_info.php" style="text-decoration:none;" target="main"><button type="button" style="width:100;height:50" name="button3"><font size="4" color="#8B008B"  style="font-family:Monotype Corsiva"><i><b>Vendors</b></i></font></button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/><br/>
</td></tr>

<!--<tr><td>
<button type="button" style="width:100;height:50" align="center" name="button5"><font size="3" color="#8B008B"  style="font-family:Algerian"><i>Items</i></font></button></input>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/><br/>
</td></tr>

<tr><td>
<button type="button" style="width:100;height:50" align="center" name="button6"><font size="3" color="#8B008B"  style="font-family:Algerian"><i>Suppliers</i></font></button></input>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/><br/>
</td></tr>-->

<tr><td>
<a type="button" name="Back" value="Back" style="width:100;height:50"  onclick="javascript: history.go(-1)"/><button type="button" style="width:100;height:50" align="center" name="button7"><font size="4" color="#8B008B"  style="font-family:Monotype Corsiva"><i><b>Back</b></i></font></button></input>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td>
</tr>
</table>

<?php } 
else
{ ?>

<br/><br/><br/><br/><br/><br/><br/>
<table  align="center" border="0" cellpadding="0" cellspacing="1">

<!--<tr>
<td height="80" colspan="3" align="center" bgcolor="#00398E">
 <p align="center"><b><font color="cyan" size="5">&nbsp;</font>
<font size="6" color="#3366CC">
<marquee>&nbsp;Admin Panel</marquee>
</font></b></p></td>
</tr>-->

<tr><td>
<a href="login_success.php" target="_top""><button bgcolor="blue" type="button" style="width:100;height:50" name="button8"><font size="4" color="#8B008B"  style="font-family:Monotype Corsiva"><i><b>Home</b></i></font></button></a>
&nbsp;&nbsp;&nbsp;&nbsp;<br/><br/>
</td></tr>

<tr><td>

<!--<table align="up">
 
<tr><td>-->
<a href="addcopy1.php" style="text-decoration:none;" target="main"><button type="button" style="width:100;height:50" name="button1"><font size="4" color="#8B008B"  style="font-family:Monotype Corsiva"><i><b>Add</b></i></font></button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/><br/>
</td></tr>

<tr><td><a href="delete_button.php" style="text-decoration:none;" target="main"><button type="button" style="width:100;height:50" name="button2"><font size="4" color="#8B008B"  style="font-family:Monotype Corsiva"><i><b>Delete</b></i></font></button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/><br/>
</td></tr>
		
<!--</td>
</tr>-->

<tr><td>
<a href="update_button.php" style="text-decoration:none;" target="main"><button type="button" style="width:100;height:50" name="button3"><font size="4" color="#8B008B"  style="font-family:Monotype Corsiva"><i><b>Update</b></i></font></button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/><br/>
</td></tr>

<tr><td>
<a href="searchshort.php" style="text-decoration:none;" target="main"><button type="button" style="width:100;height:50" name="button4"><font size="4" color="#8B008B"  style="font-family:Monotype Corsiva"><i><b>Search</b></i></font></button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/><br/>
</td></tr>
<tr><td>
<a href="user_info.php" style="text-decoration:none;" target="main"><button type="button" style="width:100;height:50" name="button3"><font size="4" color="#8B008B"  style="font-family:Monotype Corsiva"><i><b>Clients</b></i></font></button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/><br/>
</td></tr>
<tr><td>
<a href="vendor_info.php" style="text-decoration:none;" target="main"><button type="button" style="width:100;height:50" name="button3"><font size="4" color="#8B008B"  style="font-family:Monotype Corsiva"><i><b>Vendors</b></i></font></button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/><br/>
</td></tr>
<!--
<tr><td>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->

<!--<tr><td>
<a href="item_list.php" style="text-decoration:none;" target="main"><button type="button" style="width:100;height:50" align="center" name="button5"><font size="3" color="#8B008B"  style="font-family:Algerian"><i>Items</i></font></button></input>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/><br/>
</td></tr>

<tr><td>
<a href="supplier_list.php" style="text-decoration:none;" target="main"><button type="button" style="width:100;height:50" align="center" name="button6"><font size="3" color="#8B008B"  style="font-family:Algerian"><i>Suppliers</i></font></button></input>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/><br/>
</td></tr>-->

<tr><td>
<a type="button" name="Back" value="Back" style="width:100;height:50"  onclick="javascript: history.go(-1)"/><button type="button" style="width:100;height:50" align="center" name="button7"><font size="4" color="#8B008B"  style="font-family:Monotype Corsiva"><i><b>Back</b></i></font></button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td></tr>
<!--
</table>-->


</td>


</tr>


<?php } ?>
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
