<?php 
 error_reporting(E_ERROR);
session_start();
	  
	  include('session_chk.php');
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
<style>
body {
    background-image: url("bgfin.jpg");
}

th {
   	color: #61210B;
	font-size: 18px;
	font-family:Monotype Corsiva;
}
</style>
<title>Update Items</title>
</head>

<body>


<form  name="updateform" method="post"  action="update_display1.php">
<?php
$con = mysql_connect('localhost','root','');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db('ems', $con);
$eqno1=$_POST[eqno];
$result= mysql_query("SELECT Equipment_No FROM insertitems ");
if($eqno1=='')
{
	$_SESSION['mes14']=1;
echo "<script>";
echo "self.location='update_button.php'";
echo "</script>";
}
else
{
while($data=mysql_fetch_array($result))
{
	if($eqno1==$data[Equipment_No])
	{
       $search="found";
	   break;
	}
}
 if($search==found)
 {
$result = mysql_query("SELECT * FROM insertitems where Equipment_No='$eqno1' ");


	
	
		
		while($data=mysql_fetch_array($result) )
		{
			$eqpno=$data[Equipment_No];
			$amount=$data[Amount];
  $itemgroup=$data[Item_Group];
  $supplier=$data[Supplier];
  $descriptionofitem=$data[Description_of_item];
  $purchaseorder=$data[Purchase_order];
  $installationdate=$data[Installation_date];
  $warrantyperiod=$data[Warranty_period];
  $warrantyexpdate=$data[Warranty_exp_date];
  $location1=$data[Location_1];
  $location2=$data[Location_2];
  $location3=$data[Location_3];
  $remarks=$data[Remarks];
			
			
		}
		
		
$test=mysql_query("SELECT * FROM item");
$test1=mysql_query("SELECT * FROM supplier");


    



  
mysql_close($con);
?>


<table width="100%" align="center" border="0" cellpadding="0" cellspacing="1">

<tr>
<td align ="center"> <font color="#61210B" size="6"  style="font-family:Monotype Corsiva">Update </font> 
</td>
</tr>
</table>
<table cellspacing="50" align="center">
<tr>
<th align="left">Asset No./Equipment No.</th><td><input type="text" name="eqpno" id="eqpno" readonly value="<?php echo $eqpno?>" />&nbsp;<font color="#61210B" size="4" style="font-family:Monotype Corsiva"> Subseries </font><input type="checkbox" name="Subseries1" id="subseries" onclick="toggleReadonly(this)"/></td>
<td></td>
<th align="left">Installation Date</th>
<td>	
<input type="text" id="datepicker" name="datepicker" readonly value="<?php echo $installationdate?>"/> 
</td>
</tr>
<tr>
<th align="left">Quantity</th><td><input type="text" name="quantity" readonly value="<?php echo $quantity?>" /> </td>
<td></td>
<th align="left">Warranty Period<br>(in months) </th><td><input type="text" name="warrp" id="warrp" readonly value="<?php echo $warrantyperiod?>" /></td>
</tr>

<tr>
<th align="left">Amount</th><td><input type="text" name="amount" value="<?php echo $amount?>" /> </td>

<td></td>
<th align="left">Warranty Expiry Date</th><td><input type="text" name="warexpdate" id="warexpdate"  readonly value="<?php echo $warrantyexpdate?>" /></td>
</tr>

<tr>
<th align="left">Item Group</th>
			<td><select name="itemgrp" id="itemgrp" onChange="itemOnchange();">
			<option value=<?php echo $itemgroup?>><?php echo $itemgroup?></option>
					<option value="others">others</option>
					<?php
					 while($data=mysql_fetch_array($test)){?>
					<option> <?php echo $data[item_group] ?> </option>
					<?php }
					?>
				</select>
				
			<input type="text" name="new_textbox" id="new_textbox" maxlength=20 style="display:none;">
			</td>
<td></td>
<th align="left">Location 1(Room)</th><td><input type="text" name="loc1" value="<?php echo $location1?>" maxlength=3 /></td>
</tr>

<tr>
<th align="left">Supplier/Vendor</th>
<td><select name="suppgrp" id="suppgrp" onChange="itemOnchange1();">
			<option value=<?php echo $supplier?>><?php echo $supplier?></option>
					<option value="others">others</option>
					<?php
					 while($data1=mysql_fetch_array($test1)){?>
					<option> <?php echo $data1[supplier_group] ?> </option>
					<?php }
					?>
				</select>
				
			<input type="text" name="new_textbox1" id="new_textbox1" maxlength=20 style="display:none;">
			</td>
<td></td>
<th align="left">Location 2</th>
<td><select name="loc2" id="loc2">
	<option value=<?php echo $location2?>><?php echo $location2?></option>
	<option value="Basement">Basement</option>
	<option value="Ground_Floor">Ground Floor</option>
	<option value="First_Floor">First Floor</option>
	<option value="Second_Floor">Second Floor</option>
	<option value="Third_Floor">Third Floor</option>
	<option value="Fourth_Floor">Fourth Floor</option>
	
</select>
</td>
</tr>

<tr>
<th align="left">Description of item</th><td rowspan="2"><textarea rows="4" cols="50" name="doi" maxlength=25 ><?php echo $descriptionofitem?></textarea> </td>

<td></td>
<th align="left">Location 3</th>
<td><select name="loc3" id="loc3">
	<option value=<?php echo $location3?>><?php echo $location3?></option>
	<option value="WRITEOFF">Writeoff</option>
	<option value="TRANSFERRED">Transferred</option>
	

					
				</select>
</td>
<!--<th align="left">Location 3</th><td><input type="text" name="loc3" value="<?php echo $location3?>"/></td>-->
</tr>
<tr>
<th align="left"></th>
 <td></td>
</tr>

<tr>
<th align="left">Purchase Order</th><td><input type="text" name="purorder" value="<?php echo $purchaseorder?>" maxlength=5 /></td>
<td></td>
<th align="left">Remarks</th><td><textarea rows="4" cols="50" name="remarks"><?php echo $remarks?></textarea>
</td>
</tr>
</table>

<br/>
<table align="center">
<tr>
<td></td>
<td><input type="submit" value="Update" name="update"></td>
</tr>
</table>
<?php }

 
else
{
	$_SESSION['mes15']=1;
echo "<script>";
echo "self.location='update_button.php'";
echo "</script>";
}

}
	?> 
</form>

</body>
</html>


	  
<script type="text/javascript">
		

 function toggleReadonly(element) {
    var inputName = document.getElementById('eqpno');
    if(element.checked) {
        inputName.removeAttribute('readonly');
    }
    else {
       
		 inputName.setAttribute('readonly', true);
		
    }
}

function itemOnchange(){
    var itemgrp = document.getElementById('itemgrp').value 
    if(itemgrp == "others")
        document.getElementById("new_textbox").style.display="block";
	    else
        document.getElementById("new_textbox").style.display="none";
}
function itemOnchange1(){
    var suppgrp = document.getElementById('suppgrp').value 
    if(suppgrp == "others")
        document.getElementById("new_textbox1").style.display="block";
	    else
        document.getElementById("new_textbox1").style.display="none";
}
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
	