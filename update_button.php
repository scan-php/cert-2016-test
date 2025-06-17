<?php
 error_reporting(E_ERROR);
session_start();


//if (!isset($_SERVER['HTTP_REFERER'])){ 

//echo "you cannot access this page directly!"; } 
//else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Update</title>
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

<!--<table width="100%" height="20%" bgcolor="#61210B">
<tr><td><img src="" height="100" width="150"/></td>
<td><font size="6pt" color="white" style="font-family:TIMES NEW ROMAN"></font><br/>
<font size="4pt" color="white" style="font-family:TIMES NEW ROMAN"></font></td>
</tr>
</table>-->
<form method="post" action="update_display.php" name="update_button" >
<br/><br/><br/><br/>
<table width="100%" align="center" border="0" cellpadding="0" cellspacing="1">

<tr>
<td align ="center"> <font color="#61210B" size="7"><b>Update Equipment</b></font> 
</td>
</tr>
</table>
<br/><br/>
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="red">
<tr><td align="center">
<table width="100%" align="center" border="0" cellpadding="0" cellspacing="1" bgcolor="#61210B">
<tr><td></td></tr>
<tr>
<td align="center" width="100" height="50" ><label><font size="5pt" color="white" align="center" style="font-family:Monotype Corsiva">Equipment No.<input type="text" name="eqno" style="height:25px;font-size:14pt;" /></label>
</td>
</tr>
<tr><td align="center"><input type="submit" value="Search" name="Select">
&nbsp;&nbsp;<input type="reset" value="Clear" name="clear">
</td>

</tr>
</table>


</td>
</tr>
</table>
<table align="center">
<tr>
  <td>
  <?php
 if($_SESSION['mes14'] == 1) 
 {?>
 <font color="red"><b><?php
   echo "Equipment_No is mandatory";?></b></font>
   <?php
   $_SESSION['mes14'] = 0;
 }
 
else if($_SESSION['mes15'] == 1) 
 {?>
 <font color="red"><b><?php
   echo "No Records found";?></b></font>
   <?php
   $_SESSION['mes15'] = 0;
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
//}
?>




