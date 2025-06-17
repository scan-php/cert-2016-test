 <?php
 error_reporting(E_ERROR);
session_start();	  
	  include('session_chk.php');
	  include("includes/config_db.php");
	 if (!isset($_SERVER['HTTP_REFERER'])){ 

echo "you cannot access this page directly!"; } 
else{ 
?> 
<!DOCTYPE html>	
<html>
<head>
<?php
    //defined('thefooter') or die('Not with me my friend');
    //echo('Copyright to me in the year 2000');
?>
<style>

body {
    background-image: url("bgfin.jpg");
}
.container { 
width: 100%; 
margin: 0 auto; 
}
table {
    border-collapse: separate;
    empty-cells: show;
	color: #61210B;
	font-size: 18px;
	font-family:Monotype Corsiva;
}
</style>
<title>Search data</title>
</head>
<body>

<!--<form name="form1" method="post" action="search_eqp_disp.php">-->
<?php
//function ob_file_callback($buffer)
//{
// global $ob_file;
//fwrite($ob_file,$buffer);
//}

//$ob_file = fopen('test2.pdf','F');

//ob_start('ob_file_callback');

ob_start();
//the example of searching data 
//search.php

mysql_connect("localhost","root","");//database connection
mysql_select_db("ems");
if($_POST[selectedval]=='Equipment No.')
{
		if($_POST[new_textbox1] == '')
		{
			$_SESSION['mes6']=1;
echo "<script>";
//echo"SELECT * FROM insertitems WHERE Equipment_No='$_POST[new_textbox1]'";
echo "self.location='searchshort.php'";

echo "</script>";

}
else
{
	$result= mysql_query("SELECT Equipment_No FROM insertitems ");
while($data=mysql_fetch_array($result))
{
	if($_POST[new_textbox1]<>$data[Equipment_No])
	{
	$a=0;
    }
	else
	{
		$a=1;
		break;
	}
}
if($a=="0")
{
	?>
<br/><br/><br/><center><font color="red" size="5"><b><i>
	<?php echo"no records found";  ?>
	</i></b><br/><br/></font></center>
<?php 
}
else
	if($a=="1")
	{
$order = "SELECT * FROM insertitems WHERE Equipment_No='$_POST[new_textbox1]'";

$result = mysql_query($order); 
?>
<table>
  <tr>
    <td align="center" color="#61210B"><font size="5"><b>Equipment Details</b></font></td>
  </tr>
  <tr>
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
	  </thead>
		
<?php
while($data = mysql_fetch_array($result)){
	if(preg_match('/TRANSFERRED/i',$data[Location_3]))
	{
		echo"<tr bgcolor=Yellow>";
  echo"<td>$data[Equipment_No]</td>";
  echo"<td>$data[Item_Group]</td>";
  echo"<td>$data[Supplier]</td>";
  echo"<td>$data[Description_of_item]</td>";
  echo"<td>$data[Purchase_order]</td>";
  echo"<td>$data[Installation_date]</td>";
  echo"<td>$data[Warranty_period]</td>";
  echo"<td>$data[Warranty_exp_date]</td>";
  echo"<td>$data[Location_1]</td>";
  echo"<td>$data[Location_2]</td>";
  echo"<td>$data[Location_3]</td>";
  echo"<td>$data[Amount]</td>";
  echo"<td>$data[Remarks]</td>";
  echo"</tr>";
	}
	else if($data[Location_3]=="WRITEOFF")
	{
		echo"<tr bgcolor=crimson>";
  echo"<td>$data[Equipment_No]</td>";
  echo"<td>$data[Item_Group]</td>";
  echo"<td>$data[Supplier]</td>";
  echo"<td>$data[Description_of_item]</td>";
  echo"<td>$data[Purchase_order]</td>";
  echo"<td>$data[Installation_date]</td>";
  echo"<td>$data[Warranty_period]</td>";
  echo"<td>$data[Warranty_exp_date]</td>";
  echo"<td>$data[Location_1]</td>";
  echo"<td>$data[Location_2]</td>";
  echo"<td>$data[Location_3]</td>";
  echo"<td>$data[Amount]</td>";
  echo"<td>$data[Remarks]</td>";
  echo"</tr>";
	}
	else
	{
		echo"<tr>";
  echo"<td>$data[Equipment_No]</td>";
  echo"<td>$data[Item_Group]</td>";
  echo"<td>$data[Supplier]</td>";
  echo"<td>$data[Description_of_item]</td>";
  echo"<td>$data[Purchase_order]</td>";
  echo"<td>$data[Installation_date]</td>";
  echo"<td>$data[Warranty_period]</td>";
  echo"<td>$data[Warranty_exp_date]</td>";
  echo"<td>$data[Location_1]</td>";
  echo"<td>$data[Location_2]</td>";
  echo"<td>$data[Location_3]</td>";
  echo"<td>$data[Amount]</td>";
  echo"<td>$data[Remarks]</td>";
  echo"</tr>";
	}
}?>
</table></div>		 
<?php }
}
}
else if($_POST[selectedval]=='Location1')
{
		if($_POST[new_textbox2] == '')
		{
			$_SESSION['mes7']=1;
          echo "<script>";
          echo "self.location='searchshort.php'";
          echo "</script>";
}
else
{

	$result= mysql_query("SELECT Location_1 FROM insertitems ");
while($data = mysql_fetch_array($result)){
if($_POST[new_textbox2]<>$data[Location_1])
	{
	$b=0;
    }
	else
	{
		$b=1;
		break;
	}
}
if($b=="0")
{
	?>
<br/><br/><br/><center><font color="red" size="5"><b><i>
	<?php echo "No Records found"; ?>
	</i></b><br/><br/></font></center>
<?php 
}
else
	if($b=="1")
	{
	$order = "SELECT * FROM insertitems WHERE Location_1='$_POST[new_textbox2]'";
$result = mysql_query($order); 
?>
<table>
  <tr>
    <td align="center"><font size="5"><b>Equipment Details</b></font></td>
  </tr>
  <tr>
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
	  </thead>
<?php
while($data = mysql_fetch_array($result)){
	if(preg_match('/TRANSFERRED/i',$data[Location_3]))
	{
		echo"<tr bgcolor=Yellow>";
  echo"<td>$data[Equipment_No]</td>";
  echo"<td>$data[Item_Group]</td>";
  echo"<td>$data[Supplier]</td>";
  echo"<td>$data[Description_of_item]</td>";
  echo"<td>$data[Purchase_order]</td>";
  echo"<td>$data[Installation_date]</td>";
  echo"<td>$data[Warranty_period]</td>";
  echo"<td>$data[Warranty_exp_date]</td>";
  echo"<td>$data[Location_1]</td>";
  echo"<td>$data[Location_2]</td>";
  echo"<td>$data[Location_3]</td>";
  echo"<td>$data[Amount]</td>";
  echo"<td>$data[Remarks]</td>";
  echo"</tr>";
	}
	else if($data[Location_3]=="WRITEOFF")
	{
		echo"<tr bgcolor=crimson>";
  echo"<td>$data[Equipment_No]</td>";
  echo"<td>$data[Item_Group]</td>";
  echo"<td>$data[Supplier]</td>";
  echo"<td>$data[Description_of_item]</td>";
  echo"<td>$data[Purchase_order]</td>";
  echo"<td>$data[Installation_date]</td>";
  echo"<td>$data[Warranty_period]</td>";
  echo"<td>$data[Warranty_exp_date]</td>";
  echo"<td>$data[Location_1]</td>";
  echo"<td>$data[Location_2]</td>";
  echo"<td>$data[Location_3]</td>";
  echo"<td>$data[Amount]</td>";
  echo"<td>$data[Remarks]</td>";
  echo"</tr>";
	}
	else
	{
		echo"<tr>";
  echo"<td>$data[Equipment_No]</td>";
  echo"<td>$data[Item_Group]</td>";
  echo"<td>$data[Supplier]</td>";
  echo"<td>$data[Description_of_item]</td>";
  echo"<td>$data[Purchase_order]</td>";
  echo"<td>$data[Installation_date]</td>";
  echo"<td>$data[Warranty_period]</td>";
  echo"<td>$data[Warranty_exp_date]</td>";
  echo"<td>$data[Location_1]</td>";
  echo"<td>$data[Location_2]</td>";
  echo"<td>$data[Location_3]</td>";
  echo"<td>$data[Amount]</td>";
  echo"<td>$data[Remarks]</td>";
  echo"</tr>";
	}
}?>
</table></div>		 
<?php }
}
}
else if($_POST[selectedval]=='Location2')
{ 
		if($_POST[loc2]=='')
		{
		  $_SESSION['mes8']=1;
          echo "<script>";
          echo "self.location='searchshort.php'";
          echo "</script>";
}
else
{
	$result= mysql_query("SELECT Location_2 FROM insertitems ");
while($data = mysql_fetch_array($result))
{
if($_POST[loc2]<>$data[Location_2])
	{
	$c=0;
    }
	else
	{
		$c=1;
		break;
	}
}
if($c=="0")
{
	?>
<br/><br/><br/><center><font color="red" size="5"><b><i>
	<?php echo "No Records found"; ?>
	</i></b><br/><br/></font></center>
<?php 
}
else
	if($c=="1")
	{
$result = "SELECT * FROM insertitems WHERE Location_2='$_POST[loc2]'";
$data1 = mysql_query($result); 
?>
<table>
  <tr>
    <td align="center"><font size="5"><b>Equipment Details</b></font></td>
  </tr>
  <tr>
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
	  </thead>
<?php
while($data = mysql_fetch_array($data1))
{
	if(preg_match('/TRANSFERRED/i',$data[Location_3]))
	{
		echo"<tr bgcolor=Yellow>";
  echo"<td>$data[Equipment_No]</td>";
  echo"<td>$data[Item_Group]</td>";
  echo"<td>$data[Supplier]</td>";
  echo"<td>$data[Description_of_item]</td>";
  echo"<td>$data[Purchase_order]</td>";
  echo"<td>$data[Installation_date]</td>";
  echo"<td>$data[Warranty_period]</td>";
  echo"<td>$data[Warranty_exp_date]</td>";
  echo"<td>$data[Location_1]</td>";
  echo"<td>$data[Location_2]</td>";
  echo"<td>$data[Location_3]</td>";
  echo"<td>$data[Amount]</td>";
  echo"<td>$data[Remarks]</td>";
  echo"</tr>";
	}
	else if($data[Location_3]=="WRITEOFF")
	{
		echo"<tr bgcolor=crimson>";
  echo"<td>$data[Equipment_No]</td>";
  echo"<td>$data[Item_Group]</td>";
  echo"<td>$data[Supplier]</td>";
  echo"<td>$data[Description_of_item]</td>";
  echo"<td>$data[Purchase_order]</td>";
  echo"<td>$data[Installation_date]</td>";
  echo"<td>$data[Warranty_period]</td>";
  echo"<td>$data[Warranty_exp_date]</td>";
  echo"<td>$data[Location_1]</td>";
  echo"<td>$data[Location_2]</td>";
  echo"<td>$data[Location_3]</td>";
  echo"<td>$data[Amount]</td>";
  echo"<td>$data[Remarks]</td>";
  echo"</tr>";
	}
	else
	{
		echo"<tr>";
  echo"<td>$data[Equipment_No]</td>";
  echo"<td>$data[Item_Group]</td>";
  echo"<td>$data[Supplier]</td>";
  echo"<td>$data[Description_of_item]</td>";
  echo"<td>$data[Purchase_order]</td>";
  echo"<td>$data[Installation_date]</td>";
  echo"<td>$data[Warranty_period]</td>";
  echo"<td>$data[Warranty_exp_date]</td>";
  echo"<td>$data[Location_1]</td>";
  echo"<td>$data[Location_2]</td>";
  echo"<td>$data[Location_3]</td>";
  echo"<td>$data[Amount]</td>";
  echo"<td>$data[Remarks]</td>";
  echo"</tr>";
	}
}?>
</table></div>		 
<?php }
}
}
else if($_POST[selectedval]=='Date')
{
	if($_POST[datepicker]!='' && $_POST[datepicker1] != '')
{

$order =mysql_query("SELECT * FROM insertitems WHERE Warranty_exp_date BETWEEN '$_POST[datepicker]' AND '$_POST[datepicker1]'");
$trows = mysql_num_rows($order); 

if($trows=='0')
{
		?>
<br/><br/><br/><center><font color="red" size="5"><b><i>
	<?php echo "No Records found"; ?>
	</i></b><br/><br/></font></center>
<?php 
}
else
{
	

?>
<table>
  <tr>
    <td align="center"><font size="5"><b>Equipment Details</b></font></td>
  </tr>
  <tr>
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
	  </thead>
<?php
while($data = mysql_fetch_array($order))
	{

       if(preg_match('/TRANSFERRED/i',$data[Location_3]))
	{
		echo"<tr bgcolor=Yellow>";
  echo"<td>$data[Equipment_No]</td>";
  echo"<td>$data[Item_Group]</td>";
  echo"<td>$data[Supplier]</td>";
  echo"<td>$data[Description_of_item]</td>";
  echo"<td>$data[Purchase_order]</td>";
  echo"<td>$data[Installation_date]</td>";
  echo"<td>$data[Warranty_period]</td>";
  echo"<td>$data[Warranty_exp_date]</td>";
  echo"<td>$data[Location_1]</td>";
  echo"<td>$data[Location_2]</td>";
  echo"<td>$data[Location_3]</td>";
  echo"<td>$data[Amount]</td>";
  echo"<td>$data[Remarks]</td>";
  echo"</tr>";
	}
	else if($data[Location_3]=="WRITEOFF")
	{
		echo"<tr bgcolor=crimson>";
  echo"<td>$data[Equipment_No]</td>";
  echo"<td>$data[Item_Group]</td>";
  echo"<td>$data[Supplier]</td>";
  echo"<td>$data[Description_of_item]</td>";
  echo"<td>$data[Purchase_order]</td>";
  echo"<td>$data[Installation_date]</td>";
  echo"<td>$data[Warranty_period]</td>";
  echo"<td>$data[Warranty_exp_date]</td>";
  echo"<td>$data[Location_1]</td>";
  echo"<td>$data[Location_2]</td>";
  echo"<td>$data[Location_3]</td>";
  echo"<td>$data[Amount]</td>";
  echo"<td>$data[Remarks]</td>";
  echo"</tr>";
	}
	else
	{
		echo"<tr>";
  echo"<td>$data[Equipment_No]</td>";
  echo"<td>$data[Item_Group]</td>";
  echo"<td>$data[Supplier]</td>";
  echo"<td>$data[Description_of_item]</td>";
  echo"<td>$data[Purchase_order]</td>";
  echo"<td>$data[Installation_date]</td>";
  echo"<td>$data[Warranty_period]</td>";
  echo"<td>$data[Warranty_exp_date]</td>";
  echo"<td>$data[Location_1]</td>";
  echo"<td>$data[Location_2]</td>";
  echo"<td>$data[Location_3]</td>";
  echo"<td>$data[Amount]</td>";
  echo"<td>$data[Remarks]</td>";
  echo"</tr>";
	}
    }?>
	</table></div>		 
<?php }
}
else
{
			$_SESSION['mes10']=1;
          echo "<script>";
          echo "self.location='searchshort.php'";
          echo "</script>"; 
}
}


else if($_POST[selectedval]=='Location3')
{
	
	if($_POST[loc3]!="Writeoff"&&$_POST[loc3]!="Transferred")
	{
		  $_SESSION['mes9']=1;
          echo "<script>";
          echo "self.location='searchshort.php'";
          echo "</script>";

	}
	$result= mysql_query("SELECT Location_3 FROM insertitems ");
while($data = mysql_fetch_array($result))
{
	
	//$a=$_POST[loc3];
	//echo"$a";
	if($_POST[loc3]=="Writeoff")
	{
if(strtoupper($_POST[loc3])==$data[Location_3])
	{
	$d=1;
	break;
    }
	else
	{
		$d=0;
		
	}
	//echo $d;
}
else 
{
	if($_POST[loc3]=="Transferred")
	{
   if(preg_match('/TRANSFERRED/i',$data[Location_3]))
   {
	$e=1;
	//echo $e;
	break;
    }
	else
	{
		$e=0;
		
	}
	
}
}
}



if($_POST[loc3]=="Transferred")
{
if($e==1)
{
	       
	   
	$order = "SELECT * FROM insertitems WHERE Location_3<>'WRITEOFF' and Location_3<>' '";
	$result = mysql_query($order); 
	?>
	<table align="center">
  <tr>
    <td align="center"><font size="5"><b>Equipment Details</b></font></td>
  </tr>
  <tr>
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
	  </thead>
<?php
while($data = mysql_fetch_array($result)){
	echo"<tr bgcolor=Yellow>";
  echo"<td>$data[Equipment_No]</td>";
  echo"<td>$data[Item_Group]</td>";
  echo"<td>$data[Supplier]</td>";
  echo"<td>$data[Description_of_item]</td>";
  echo"<td>$data[Purchase_order]</td>";
  echo"<td>$data[Installation_date]</td>";
  echo"<td>$data[Warranty_period]</td>";
  echo"<td>$data[Warranty_exp_date]</td>";
  echo"<td>$data[Location_1]</td>";
  echo"<td>$data[Location_2]</td>";
  echo"<td>$data[Location_3]</td>";
  echo"<td>$data[Amount]</td>";
  echo"<td>$data[Remarks]</td>";
    echo"</tr>";
}?>
</table></div>		 
<?php }
	   
	   else
	   {
		   ?>
<br/><br/><br/><center><font color="red" size="5"><b><i>
	<?php echo "No Records found"; ?>
	</i>
	</b><br/><br/></font></center>
<?php 
}
}
	   else 
	   {
		   if($_POST[loc3]=="Writeoff")
	   {
		   if($d==1)
		   {
		 $order = "SELECT * FROM insertitems WHERE Location_3='WRITEOFF'";  
		 $result = mysql_query($order); 
		 ?>
		 <table align="center">
  <tr>
    <td align="center"><font size="5"><b>Equipment Details</b></font></td>
  </tr>
  <tr>
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
	  </thead>
<?php
while($data = mysql_fetch_array($result)){
	echo"<tr bgcolor=crimson>";
  echo"<td>$data[Equipment_No]</td>";
  echo"<td>$data[Item_Group]</td>";
  echo"<td>$data[Supplier]</td>";
  echo"<td>$data[Description_of_item]</td>";
  echo"<td>$data[Purchase_order]</td>";
  echo"<td>$data[Installation_date]</td>";
  echo"<td>$data[Warranty_period]</td>";
  echo"<td>$data[Warranty_exp_date]</td>";
  echo"<td>$data[Location_1]</td>";
  echo"<td>$data[Location_2]</td>";
  echo"<td>$data[Location_3]</td>";
  echo"<td>$data[Amount]</td>";
  echo"<td>$data[Remarks]</td>";
    echo"</tr>";
}?>
</table></div>		 
<?php }
	    
     else
	 {
		 ?>
<br/><br/><br/><center><font color="red" size="5"><b><i>
	<?php echo "No Records found"; ?>
	</i></b><br/><br/></font></center>
<?php 
}
	   }
}
}




	
	
else if($_POST[selectedval]=='All')
{  
    if($_POST[new_textbox1]=='' || $_POST[new_textbox2]=='' || $_POST[loc2]=='')
	{ 

	      $_SESSION['mes11']=1;
          echo "<script>";
          echo "self.location='searchshort.php'";
          echo "</script>";
}
	else
	{
		if($_POST[loc3]==Transferred)
		{
	$order = "SELECT * FROM insertitems WHERE Equipment_No='$_POST[new_textbox1]' AND Location_1='$_POST[new_textbox2]' AND Location_2='$_POST[loc2]' AND Location_3!=' ' AND Location_3!='WRITEOFF'";
		}
		else if($_POST[loc3]==Writeoff)
			{
	$order = "SELECT * FROM insertitems WHERE Equipment_No='$_POST[new_textbox1]' AND Location_1='$_POST[new_textbox2]' AND Location_2='$_POST[loc2]' AND Location_3='WRITEOFF'";
		}
		
		else
			{
	$order = "SELECT * FROM insertitems WHERE Equipment_No='$_POST[new_textbox1]' AND Location_1='$_POST[new_textbox2]' AND Location_2='$_POST[loc2]'";
		}
		
$result = mysql_query($order); 

if(mysql_num_rows($result)>0)
{
?>
<table>
  <tr>
    <td align="center"><font size="5"><b>Equipment Details</b></font></td>
  </tr>
  <tr>
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
	  </thead>
<?php
while($data = mysql_fetch_array($result)){
	if(preg_match('/TRANSFERRED/i',$data[Location_3]))
	{
		echo"<tr bgcolor=Yellow>";
  echo"<td>$data[Equipment_No]</td>";
  echo"<td>$data[Item_Group]</td>";
  echo"<td>$data[Supplier]</td>";
  echo"<td>$data[Description_of_item]</td>";
  echo"<td>$data[Purchase_order]</td>";
  echo"<td>$data[Installation_date]</td>";
  echo"<td>$data[Warranty_period]</td>";
  echo"<td>$data[Warranty_exp_date]</td>";
  echo"<td>$data[Location_1]</td>";
  echo"<td>$data[Location_2]</td>";
  echo"<td>$data[Location_3]</td>";
  echo"<td>$data[Amount]</td>";
  echo"<td>$data[Remarks]</td>";
  echo"</tr>";
	}
	else if($data[Location_3]=="WRITEOFF")
	{
		echo"<tr bgcolor=crimson>";
  echo"<td>$data[Equipment_No]</td>";
  echo"<td>$data[Item_Group]</td>";
  echo"<td>$data[Supplier]</td>";
  echo"<td>$data[Description_of_item]</td>";
  echo"<td>$data[Purchase_order]</td>";
  echo"<td>$data[Installation_date]</td>";
  echo"<td>$data[Warranty_period]</td>";
  echo"<td>$data[Warranty_exp_date]</td>";
  echo"<td>$data[Location_1]</td>";
  echo"<td>$data[Location_2]</td>";
  echo"<td>$data[Location_3]</td>";
  echo"<td>$data[Amount]</td>";
  echo"<td>$data[Remarks]</td>";
  echo"</tr>";
	}
	else
	{
		echo"<tr>";
  echo"<td>$data[Equipment_No]</td>";
  echo"<td>$data[Item_Group]</td>";
  echo"<td>$data[Supplier]</td>";
  echo"<td>$data[Description_of_item]</td>";
  echo"<td>$data[Purchase_order]</td>";
  echo"<td>$data[Installation_date]</td>";
  echo"<td>$data[Warranty_period]</td>";
  echo"<td>$data[Warranty_exp_date]</td>";
  echo"<td>$data[Location_1]</td>";
  echo"<td>$data[Location_2]</td>";
  echo"<td>$data[Location_3]</td>";
  echo"<td>$data[Amount]</td>";
  echo"<td>$data[Remarks]</td>";
  echo"</tr>";
	}
}?>
</table></div>		 
<?php }
else
{ ?>
<br/><br/><br/><center><font color="red" size="5"><b><i>
	<?php echo "No Records found"; ?>
	</i></b><br/><br/></font></center>
<?php 
}
	}
	
}
else
{
	$order = mysql_query("SELECT * FROM insertitems");
	$trows = mysql_num_rows($order);
	$storeArray = array();
	while($data1=mysql_fetch_array($order))
	{
		  $storeArray[] = $data1;
	}


	//	for($i=0;$i<$trows;$i++)
		//	{
	 //for ($r=0;$r<13;$r++)
	 //{ 
// echo $storeArray[$i][$r];
 //}
	//		}
	
		  for($k=0;$k<$trows;$k++){
			
			for($j=0;$j<$trows-1;$j++){
				$i=$j+1;
		
			//echo $i;?>
		<!--	<br /> -->
			<?php
			
	
	
	
	if (strnatcmp($storeArray[$j][0],$storeArray[$i][0]) >0){
      for ($r=0;$r<13;$r++) {
         
            $temp = $storeArray[$j][$r];
            $storeArray[$j][$r]= $storeArray[$i][$r];
            $storeArray[$i][$r] = $temp;
			
		
         }
      }
		}
		}

		//	for($i=0;$i<$trows;$i++)
		//	{
	 //for ($r=0;$r<13;$r++)
	 //{ 
 //echo $storeArray[$i][$r];
// }
	//		}
	
//$result = mysql_query($order);
?>
<table>
  <tr>
    <td align="center"><font size="5"><b>Equipment Details</b></font></td>
  </tr>
  <tr>
    <td>
	<div class="container">
      <table border="3" cellspacing="1" cellpadding="2" color="Black" width="100%">
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
	  </thead>
<?php 
for($i=0;$i<$trows;$i++)
		{
 if($storeArray[$i][11]=="WRITEOFF")            			
			  { ?>
		 <tr bgcolor="crimson" style="color:Black"><td color="Black"><?php echo $storeArray[$i][0]?></td><td color="Black"><?php echo $storeArray[$i][2]?></td>
		 <td color="Black"><?php echo $storeArray[$i][3] ?></td><td color="Black"><?php echo $storeArray[$i][4]?></td>
		 <td color="Black"><?php echo $storeArray[$i][5] ?></td>
		 <td color="Black"><?php echo $storeArray[$i][6]?></td><td color="Black"><?php echo $storeArray[$i][7]?></td>
		 <td color="Black"><?php echo $storeArray[$i][8]?></td>
		 <td color="Black"><?php echo $storeArray[$i][9] ?></td><td color="Black"><?php echo $storeArray[$i][10]?></td>
		 <td color="Black"><?php echo $storeArray[$i][11]?></td>
		 <td color="Black"><?php echo $storeArray[$i][1] ?></td><td color="Black"><?php echo $storeArray[$i][12]?></td></tr>
			  <?php }
			 
			  
			 else if(preg_match("/Transferred/i",$storeArray[$i][11])) { ?>
			  <tr bgcolor="Yellow"><td color="Black"><?php echo $storeArray[$i][0]?></td><td color="Black"><?php echo $storeArray[$i][2]?></td>
		 <td color="Black"><?php echo $storeArray[$i][3] ?></td><td color="Black"><?php echo $storeArray[$i][4]?></td>
		 <td color="Black"><?php echo $storeArray[$i][5] ?></td>
		 <td color="Black"><?php echo $storeArray[$i][6]?></td><td color="Black"><?php echo $storeArray[$i][7]?></td><td color="Black"><?php echo $storeArray[$i][8]?></td>
		 <td color="Black"><?php echo $storeArray[$i][9] ?></td><td color="Black"><?php echo $storeArray[$i][10]?></td>
		 <td color="Black"><?php echo $storeArray[$i][11]?></td>
		 <td color="Black"><?php echo $storeArray[$i][1] ?></td><td color="Black"><?php echo $storeArray[$i][12]?></td></tr>
			  <?php }
			  else 
			  { ?>
			  <tr><td color="Black"><?php echo $storeArray[$i][0]?></td><td color="Black"><?php echo $storeArray[$i][2]?></td>
		 <td color="Black"><?php echo $storeArray[$i][3] ?></td><td color="Black"><?php echo $storeArray[$i][4]?></td>
		 <td color="Black"><?php echo $storeArray[$i][5] ?></td>
		 <td color="Black"><?php echo $storeArray[$i][6]?></td><td color="Black"><?php echo $storeArray[$i][7]?></td>
		 <td color="Black"><?php echo $storeArray[$i][8]?></td>
		 <td color="Black"><?php echo $storeArray[$i][9] ?></td><td color="Black"><?php echo $storeArray[$i][10]?></td>
		 <td color="Black"><?php echo $storeArray[$i][11]?></td>
		 <td color="Black"><?php echo $storeArray[$i][1] ?></td><td color="Black"><?php echo $storeArray[$i][12]?></td></tr>

			  <?php } 
}?>
</table></div>		 
<?php }



// run code in x.php file
// ...
// saving captured output to file
//file_put_contents('filename2.html', ob_get_contents());
// end buffering and displaying page
ob_end_flush();

?>  
 <!--<center><button style="width:60;height:40" align="center" name="button" onClick="window.print()">Print this page</button></center>
 <center><input type="submit" name="submit" value="submit">-->
 <center><button style="width:60;height:40"  name="button" onclick="window.location='searchshort.php'"><font size="3" color=" maroon">Search</font></button></center>
  </td>
</tr>
</table>
</form>
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
<!--<script>
window.print();
</script>-->

