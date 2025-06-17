<?php
error_reporting(E_ERROR);
include("includes/config_db.php");
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
<title>delete Equipment</title>
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
<?php
$sql="SELECT * FROM insertitems";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$trows=mysql_num_rows($result);
 $a = $_POST['items'];
  if(empty($a)) 
  {?>
<br /><br />
<table align="center">
<tr>
  <td>
 <font color="red" size="5"><center><b><div id="blink">
<?php 
   echo("You didn't select any item.");
   ?>
   </div></b></center></font></td></tr></table>
   <?php
  } 
  else
  { ?>
	  <table align="center">
  <tr>
    <td><font size="7"><b>Delete Equipment</b></font></td>
  </tr></table>
   <?php $n = count($a);
 
   // echo("You selected $n door(s): ");
    for($i=0; $i < $n; $i++)
    {
		
		
		
		
		//$sample=$a[$i];
		mysql_query("DELETE FROM insertitems WHERE Equipment_No='$a[$i]' ");
		
      //echo($a[$i][$Location_2]);
	  //echo($sample);
    }?>
	<table align="center">
<tr>
  <td>
 <font color="blue" size="5"><center><b>
<?php 
   echo("Equipments with the following equipment number have been deleted");
   ?>
   </b></center></font></td></tr></table>
  <table align="center">
  <tr>
  <td>
  	 <?php
	 
	for($i=0; $i < $n; $i++)
	{
		echo"<br>";
		echo"$a[$i]";
		echo"<br>";
		
	}
	
?>
</td>
</tr>
</table>
  <!--<tr>
    <td>	
 <div class="container">	
		<table border="3" cellspacing="1" cellpadding="2" color="black" width="100%">
		<colgroup>
        <col style="width:1%;"></col>
        <col style="width:1%"></col>
        <col style="width:1%"></col>
        <col style="width:1%"></col>
        <col style="width:45%"></col>
		<col style="width:1%"></col>
		<col style="width:1%"></col>
		<col style="width:1%"></col>
		<col style="width:1%"></col>
		<col style="width:1%"></col>
		<col style="width:1%"></col>
		<col style="width:1%"></col>
		<col style="width:44%"></col>
		</colgroup>
    
  <thead>
  
		 <tr>
        <th>Equipment No</th>
		<th>Item Group</th>
		<th>Supplier</th>
		<th>Description_of_Equipment</th>
		<th>Purchase Order</th>
		<th>Installation Date</th>
		<th>Warranty period</th>
		<th>Warranty Expiry date</th>
		<th>Location_1</th>
		<th>Location_2</th>
		<th>Location_3</th>
		<th>Amount</th>
		<th>Remarks_of_Equipment</th>
		
      </tr>
	    </thead>-->
		<?php	
		//$i=0;
		//while($data = mysql_fetch_array($info1))
		//for($i=0; $i < $n; $i++){
			
			?>
		<?php 
		
		
			
	         //if($a[$i][$Location_3]=="WRITEOFF")            			
			// {?>
		<!--<tr bgcolor="crimson"><td><?php //echo $a[$i][0]?></td><td><?php //echo $a[$i][1]?></td><td><?php //echo $a[$i][2]?></td>
		<td><?php //echo $a[$i][3]?></td><td><?php //echo$a[$i][4]?></td><td><?php //echo $a[$i][5]?></td>
		<td><?php //echo $a[$i][6]?></td><td><?php //echo$a[$i][7]?></td><td><?php //echo $a[$i][8]?></td>
		<td><?php //echo $a[$i][9]?></td><td><?php //echo$a[$i][10]?></td><td><?php //echo $a[$i][11]?></td><td><?php //echo $a[$i][12]?></td></tr>
			 <?php //}
			 
			  
			//else if(preg_match("/Transferred/i",$location3)) { ?>
			 <tr bgcolor="Yellow"><td><?php //echo $eqpno?></td><td><?php //echo $itemgroup  ?></td><td><?php //echo $supplier?></td>
		<td><?php// echo $descriptionofitem ?></td><td><?php// echo $purchaseorder?></td><td><?php //echo $installationdate?></td>
		<td><?php //echo $warrantyperiod?></td><td><?php// echo $warrantyexpdate?></td><td><?php //echo $location1?></td>
		<td><?php //echo $location2 ?></td><td><?php //echo $location3?></td><td><?php //echo $amount?></td><td><?php //echo $remarks?></td></tr>
			 <?php //}
		//	 else 
			// { ?>
			 <tr><td><?php //echo $eqpno?></td><td><?php// echo $itemgroup ?></td><td><?php //echo $supplier?></td>
		<td><?php //echo $descriptionofitem ?></td><td><?php //echo $purchaseorder?></td><td><?php //echo $installationdate?></td>
		<td><?php //echo $warrantyperiod?></td><td><?php //echo $warrantyexpdate?></td><td><?php //echo $location1?></td>
		<td><?php //echo $location2 ?></td><td><?php //echo $location3?></td><td><?php //echo $amount?></td><td><?php //echo $remarks?></td></tr>
			 <?php //} ?>
			 
		
		
				 
		</table>
		</div>
		 </td></tr></table>-->
		 
		
<?php

 // }?>
  <center><table>
		<tr><td>
		<button style="width:60;height:40" align="center" name="button" onclick="window.location='delete_button.php'"><font size="3" color=" maroon">Delete</font></button>
</td>
<!--<td>
<center><button style="width:60;height:40" align="center" name="button1" onclick="window.location='Link_buttons.php'"><font size="3" color=" maroon">Back</font></button></center>
</td>-->
</tr>
</table>
 <?php }

//for($i=0;$i<$rowCount;$i++) {
	//if(isset($_POST['items'])
//	{		
//mysql_query("DELETE FROM item WHERE item_group=$_POST['items']);
//}
//}
?>
</body>
</html>
<script type="text/javascript">
function stopRKey(evt) { 
  var evt = (evt) ? evt : ((event) ? event : null); 
  var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null); 
  if ((evt.keyCode == 13) && (node.type=="text"))  {return false;} 
} 

document.onkeypress = stopRKey; 
</script>
<script type="text/javascript" language="javascript">
 window.onload=blinkOn;
 
function blinkOn()
{
//document.getElementById("blink").style.color="#CCC"
  document.getElementById("blink").style.display="block"
  setTimeout("blinkOff()",500)
}
 
function blinkOff()
{
//document.getElementById("blink").style.color=""
  document.getElementById("blink").style.display="none"
  setTimeout("blinkOn()",500)
}
 document.oncontextmenu = function() {return false;}
		  document.onkeydown = function () {if(event.keyCode == 123){event.returnValue = false;}}
		
          function openNewpage() {window.open ('foobar.html', '', 'toolbar=no,menubar=no,location=no');}
		  
</script>
<?php
}
?>	