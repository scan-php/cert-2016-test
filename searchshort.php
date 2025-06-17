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
<title>Search</title>
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


<form action='searchshort1.php' method='POST' >  <br/><br/><br/><br/>

<table width="100%" align="center" border="0" cellpadding="0" cellspacing="1">

<tr>
<td align ="center"> <font color="#61210B" size="7"><b>Search For Equipment</b></font> 
</td>
</tr>
</table>
<table border="0" cellpadding="3" cellspacing="1" align="center">
<tr>
<td>
<table width="150" border="0" cellpadding="3" cellspacing="1" align="center">
<tr><td></td></tr>
<tr><td align="center"><img src="search12.jpg" height="150" width="150"></td></tr></table></td>
<td>
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="red">
<tr><td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#61210B">
<tr>
<td align="center"><font color="white" size="6"  style="font-family:Monotype Corsiva">Search On:</font> 
<select name="selectedval" id="selectedval" onChange="itemOnchange1();">
	 <option>--Select-- </option>
	<option value="Equipment No.">Equipment No.</option>
	<option value="Location1">Location1</option>
	<option value="Location2">Location2</option>
	<option value="Location3">Location3</option>
	<option value="Date">Date</option>
	<option value="All">All</option> 
</select>
<br/>
</td></tr></table>
</td></tr></table>
</td></tr></table>
<table width="350" align="center">
<tr><td align="center">

<font style="display:none;" id="Equipment_No" style="font-family:Monotype Corsiva">Equipment No.</font></td>  
  <td align="center"><input type="text" name="new_textbox1" id="eqpno" style="display:none;"></td></tr> 
 
<tr><td align="center">
 <font style="display:none;" id="Location1" style="font-family:Monotype Corsiva">Location 1</font></td> 
<td align="center"><input type="text" name="new_textbox2" id="loc1" style="display:none;"> </td></tr>
<tr><td align="center">
	<font style="display:none;" id="Location2" style="font-family:Monotype Corsiva">Location2</font></td>
<td align="center">
	<select name="loc2" id="loc2" style="display:none;">
	<option value=''>--Select--</option>
	<option value="Basement">Basement</option>
	<option value="Ground_Floor">Ground Floor</option>
	<option value="First_Floor">First Floor</option>
	<option value="Second_Floor">Second Floor</option>
	<option value="Third_Floor">Third Floor</option>
	<option value="Fourth_Floor">Fourth Floor</option>
	<option value="Others">Other</option>
</select></td></tr>

<tr><td align="center">
<font style="display:none;" id="Location3" style="font-family:Monotype Corsiva">Location3</font></td>
<td align="center">
<select name="loc3" id="loc3" style="display:none;">
<option value=''>--Select--</option>
<option value="Writeoff"> writeoff</option>
<option value="Transferred">transferred</option>
</select></td></tr> 
<tr><td align="center">

<font style="display:none;" id="from" style="font-family:Monotype Corsiva">>From: </font></td>
<td align="center"><input type="text" id="datepicker" name="datepicker" style="display:none;" /> 
</td></tr>
<tr><td align="center"><font style="display:none;"  id="to" style="font-family:Monotype Corsiva">>To: </font></td>
<td align="center"><input type="text" id="datepicker1" name="datepicker1" style="display:none;" /> 
</td></tr>
<tr><td align="center"></td>
<td align="center">
    <input type="submit" name="submit" value="Submit" />  </td></tr>     
	<tr><td align="center"></td>
	<td align="center">

<?php
if($_SESSION['mes6'] == 1)
{
	?>
 <font color="red"><b>
 <?php
   echo "SELECT * FROM insertitems WHERE Equipment_No='$_POST[new_textbox1]'";
   ?>
   </b></font>
   <?php
   $_SESSION['mes6'] = 0;
   
}
else
if($_SESSION['mes7'] == 1)
{
	?>
 <font color="red"><b>
 <?php
   echo "Location1 is mandatory";
   ?>
   </b></font>
   <?php
   $_SESSION['mes7'] = 0;
   
}

else
if($_SESSION['mes8'] == 1)
{
	?>
 <font color="red"><b>
 <?php
   echo "Location2 is mandatory";
   ?>
   </b></font>
   <?php
   $_SESSION['mes8'] = 0;
   
}

else
if($_SESSION['mes9'] == 1)
{
	?>
 <font color="red"><b>
 <?php
   echo "Location3 is mandatory";
   ?>
   </b></font>
   <?php
   $_SESSION['mes9'] = 0;
   
}


if($_SESSION['mes10'] == 1)
{
	?>
 <font color="red"><b>
 <?php
   echo "From and To Dates are mandatory";
   ?>
   </b></font>
   <?php
   $_SESSION['mes10'] = 0;
   
}

if($_SESSION['mes11'] == 1)
{
	?>
 <font color="red"><b>
 <?php
   echo " Equipment_No, Location1 and Location2 are mandatory";
   ?>
   </b></font>
   <?php
   $_SESSION['mes11'] = 0;
   
}

?> </td></tr></table>
  <p>&nbsp;  </p>
</form> 
</body>
</html>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
 
<script>

$(function() {
    $( "#datepicker1" ).datepicker({
      changeMonth: true,
      changeYear: true,
	    yearRange: "1950:2150",
        dateFormat: 'yy-mm-dd'	
    })
  });

$(function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true,
	    yearRange: "1950:2150",
        dateFormat: 'yy-mm-dd'	
    })
  });

		
function itemOnchange1(){
	
    var a = document.getElementById('selectedval').value; 
	if(a == "Location1")
	{
		document.getElementById("Location1").style.display="block";
		document.getElementById("loc1").style.display="block";
		document.getElementById("Equipment_No").style.display="none";
		document.getElementById("eqpno").style.display="none";
		document.getElementById("Location2").style.display="none";
		document.getElementById("loc2").style.display="none";
		document.getElementById("Location3").style.display="none";
		document.getElementById("loc3").style.display="none";
		document.getElementById("from").style.display="none";
		document.getElementById("datepicker").style.display="none";
		document.getElementById("to").style.display="none";
		document.getElementById("datepicker1").style.display="none";
		
	}
	else if(a == "Equipment No.")
	{
		document.getElementById("Equipment_No").style.display="block";
		document.getElementById("eqpno").style.display="block";
		document.getElementById("Location1").style.display="none";
		document.getElementById("loc1").style.display="none";
		document.getElementById("Location2").style.display="none";
		document.getElementById("loc2").style.display="none";
		document.getElementById("Location3").style.display="none";
		document.getElementById("loc3").style.display="none";
		document.getElementById("from").style.display="none";
		document.getElementById("datepicker").style.display="none";
		document.getElementById("to").style.display="none";
		document.getElementById("datepicker1").style.display="none";
		
	}
	else if(a == "Location2")
	{
		document.getElementById("Location2").style.display="block";
		document.getElementById("loc2").style.display="block";
		document.getElementById("Equipment_No").style.display="none";
		document.getElementById("eqpno").style.display="none";
		document.getElementById("Location1").style.display="none";
		document.getElementById("loc1").style.display="none";
		document.getElementById("Location3").style.display="none";
		document.getElementById("loc3").style.display="none";
		document.getElementById("from").style.display="none";
		document.getElementById("datepicker").style.display="none";
		document.getElementById("to").style.display="none";
		document.getElementById("datepicker1").style.display="none";
		
		
		
	}
	else if(a == "Location3")
	{
		document.getElementById("Location3").style.display="block";
		document.getElementById("loc3").style.display="block";
		document.getElementById("Equipment_No").style.display="none";
		document.getElementById("eqpno").style.display="none";
		document.getElementById("Location1").style.display="none";
		document.getElementById("loc1").style.display="none";
		document.getElementById("Location2").style.display="none";
		document.getElementById("loc2").style.display="none";
		document.getElementById("from").style.display="none";
		document.getElementById("datepicker").style.display="none";
		document.getElementById("to").style.display="none";
		document.getElementById("datepicker1").style.display="none";
		
	}
	
	else if(a == "Date")
	{
		document.getElementById("from").style.display="block";
		document.getElementById("datepicker").style.display="block";
		document.getElementById("to").style.display="block";
		document.getElementById("datepicker1").style.display="block";
		document.getElementById("Equipment_No").style.display="none";
	    document.getElementById("loc3").style.display="none"; 
		document.getElementById("eqpno").style.display="none";
		document.getElementById("Location1").style.display="none";
		document.getElementById("loc1").style.display="none";
		document.getElementById("Location2").style.display="none";
		document.getElementById("loc2").style.display="none";
		document.getElementById("Location3").style.display="none";
		document.getElementById("loc3").style.display="none";
		
	}
	else if(a == "All")
	{
		
		
		document.getElementById("eqpno").style.display="block";
		document.getElementById("Equipment_No").style.display="block";
		document.getElementById("Location1").style.display="block";
		document.getElementById("loc1").style.display="block";
		document.getElementById("Location2").style.display="block";
		document.getElementById("loc2").style.display="block";
		document.getElementById("Location3").style.display="block";
		document.getElementById("loc3").style.display="block";
		document.getElementById("from").style.display="none";
		document.getElementById("datepicker").style.display="none";
		document.getElementById("to").style.display="none";
		document.getElementById("datepicker1").style.display="none";
		
	}
    else
	{
		 document.getElementById("new_textbox1").style.display="none";
	}
       	    
}

function stopRKey(evt) { 
  var evt = (evt) ? evt : ((event) ? event : null); 
  var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null); 
  if ((evt.keyCode == 13) && (node.type=="text"))  {return false;} 
} 

document.onkeypress = stopRKey; 
 
		  

</script>
<?php
}
?>
<!--
// fetch equipment details from insertitems table of ems database 
-->