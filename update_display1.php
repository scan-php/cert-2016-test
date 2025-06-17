<?php 
	  include('session_chk.php');
	  include("includes/config_db.php");
	  //if (!isset($_SERVER['HTTP_REFERER'])){ 

//echo "you cannot access this page directly!"; } 
//else{
?> 	
<?php
error_reporting(E_ERROR);

?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<?php
    //defined('thefooter') or die('Not with me my friend');
    //echo('Copyright to me in the year 2000');
?>
<title>Update Display</title>
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
</head>

<body>
<?php
$incfile=$_GET['file']; 
if(isset($incfile))
{
	echo "<meta http-equiv=Refresh content=1;url='$incfile'>";
}
?>

<?php
$con = mysql_connect('localhost','root','');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db('ems', $con);


 if (isset($_POST['update']) && $_POST['update'] == 'Update')
{  //echo $_POST[loc2];
if($_POST[eqpno]!=''&& $_POST[amount]!=''&& $_POST[itemgrp]!=''&& $_POST[suppgrp]!=''
	   && $_POST[doi]!=''&&$_POST[purorder]!=''&& $_POST[datepicker]!=''&& $_POST[warrp]!=''&& $_POST[warexpdate]!='' &&
	   $_POST[loc1]!=''&&$_POST[loc2]!=''){
if ( (preg_match('/^[0-9]+(?:\.[0-9]{0,2})?$/', $_POST[amount])) &&
		    (preg_match('/^[a-zA-Z]+$/',$_POST[itemgrp]))
		   && (preg_match('/^[a-zA-Z]+$/',$_POST[suppgrp])) && (preg_match('/^[a-zA-Z ]+$/',$_POST[doi])) && (preg_match('/^\d{5}$/',$_POST[purorder]))  
	   && (preg_match('/^\d{2}$/',$_POST[warrp])) && (preg_match('/^\d{3}$/',$_POST[loc1]))
		    ){
  $eqpno=$_POST[eqpno];
  $amount=$_POST[amount];
  $itemgroup=$_POST[itemgrp];
  $supplier=$_POST[suppgrp];
  $descriptionofitem=$_POST[doi];
  $purchaseorder=$_POST[purorder];
  $installationdate=$_POST[datepicker];
  $warrantyperiod=$_POST[warrp];
  $warrantyexpdate=$_POST[warexpdate];
  $location1=$_POST[loc1];
  $location3=$_POST[loc3];
  $location2=$_POST[loc2];
  $remarks=$_POST[remarks];
  if(($_POST[itemgrp]=="others")&&($_POST[suppgrp]=="others"))
  {
	  if(($_POST[new_textbox]!='')&&($_POST[new_textbox1]!=''))
	   {
		   if((preg_match('/^[a-zA-Z]+$/',$_POST[new_textbox])) && (preg_match('/^[a-zA-Z]+$/',$_POST[new_textbox1])))
		   {
	  $new=strtoupper($_POST[new_textbox]);
	  $new1=strtoupper($_POST[new_textbox1]);
	  $loc3=preg_replace('/\s+/','',$location3);
	  $loc3=strtoupper($loc3);
	  if($loc3==WRITEOFF){
  $sql="update insertitems set Equipment_No='$eqpno',Amount='$amount',Item_Group='$new',Supplier='$new1',Description_of_item='$descriptionofitem',Purchase_order
  ='$purchaseorder',Installation_date='$installationdate',Warranty_period='$warrantyperiod',Warranty_exp_date='$warrantyexpdate',Location_1
  ='$location1',Location_2='$location2',Location_3='$loc3',Remarks='$remarks' where Equipment_No='$eqpno'";

  }
  else
  {
	  $loc31=strtoupper($_POST[loc3]);
	  $sql="update insertitems set Equipment_No='$eqpno',Amount='$amount',Item_Group='$new',Supplier='$new1',Description_of_item='$descriptionofitem',Purchase_order
  ='$purchaseorder',Installation_date='$installationdate',Warranty_period='$warrantyperiod',Warranty_exp_date='$warrantyexpdate',Location_1
  ='$location1',Location_2='$location2',Location_3='$loc31',Remarks='$remarks' where Equipment_No='$eqpno'";

  }
		   }
		   else
	   {
		   ?>
<br />
<br />
 <font  size="5" color="red" style="font-family:Monotype Corsiva"><b>
	<?php
	echo "<center><i>Invalid entry in the form</i><center>";
	   }
	   }
else{
	?>
<br />
<br />
 <font  size="5" color="red" style="font-family:Monotype Corsiva"><b>
	<?php
	echo "<center><i>All the feilds except Remarks, quantity  and Location 3 is mandatory.</i><center>";
}	   
  }
 
else if(($_POST[itemgrp]!="others")&&($_POST[suppgrp]!="others"))
{	
//echo $_POST['new_textbox'];
$loc3=preg_replace('/\s+/','',$location3);
	  $loc3=strtoupper($loc3);
	  if($loc3==WRITEOFF){
$sql="update insertitems set Equipment_No='$eqpno',Amount='$amount',Item_Group='$itemgroup',Supplier='$supplier',Description_of_item='$descriptionofitem',Purchase_order
  ='$purchaseorder',Installation_date='$installationdate',Warranty_period='$warrantyperiod',Warranty_exp_date='$warrantyexpdate',Location_1
  ='$location1',Location_2='$location2',Location_3='$loc3',Remarks='$remarks'where Equipment_No='$eqpno'";

}
else
  {
	  $loc31=strtoupper($_POST[loc3]);
	  $sql="update insertitems set Equipment_No='$eqpno',Amount='$amount',Item_Group='$itemgroup',Supplier='$supplier',Description_of_item='$descriptionofitem',Purchase_order
  ='$purchaseorder',Installation_date='$installationdate',Warranty_period='$warrantyperiod',Warranty_exp_date='$warrantyexpdate',Location_1
  ='$location1',Location_2='$location2',Location_3='$loc31',Remarks='$remarks' where Equipment_No='$eqpno'";

  }
}
else if(($_POST[itemgrp]=="others")&&($_POST[suppgrp]!="others"))
{
	if(($_POST[new_textbox]!=''))
	 {
		 if((preg_match('/^[a-zA-Z]+$/',$_POST[new_textbox]) ))
		 {
	//echo $_POST['itemgrp'];
	$loc3=preg_replace('/\s+/','',$location3);
	  $loc3=strtoupper($loc3);
	$new=strtoupper($_POST[new_textbox]);
	if($loc3==WRITEOFF){
	$sql="update insertitems set Equipment_No='$eqpno',Amount='$amount',Item_Group='$new',Supplier='$supplier',Description_of_item='$descriptionofitem',Purchase_order
  ='$purchaseorder',Installation_date='$installationdate',Warranty_period='$warrantyperiod',Warranty_exp_date='$warrantyexpdate',Location_1
  ='$location1',Location_2='$location2',Location_3='$loc3',Remarks='$remarks'where Equipment_No='$eqpno'";


}
else
  {
	  $loc31=strtoupper($_POST[loc3]);
	  $new=strtoupper($_POST[new_textbox]);
	  $sql="update insertitems set Equipment_No='$eqpno',Amount='$amount',Item_Group='$new',Supplier='$supplier',Description_of_item='$descriptionofitem',Purchase_order
  ='$purchaseorder',Installation_date='$installationdate',Warranty_period='$warrantyperiod',Warranty_exp_date='$warrantyexpdate',Location_1
  ='$location1',Location_2='$location2',Location_3='$loc31',Remarks='$remarks' where Equipment_No='$eqpno'";

  }
		 }
		 else
		 {
			 ?>
<br />
<br />
 <font  size="5" color="red" style="font-family:Monotype Corsiva"><b>
	<?php
	echo "<center><i>Invalid entry in the form</i><center>";
		 }
	 }
	 else
	 {
		 ?>
<br />
<br />
 <font  size="5" color="red" style="font-family:Monotype Corsiva"><b>
	<?php
	echo "<center><i>All the feilds except Remarks ,quantity and Location 3 is mandatory.</i><center>";
	 }
}
else if(($_POST[itemgrp]!="others")&&($_POST[suppgrp]=="others"))
{
	if(($_POST[new_textbox1]!=''))
	 {
		 if((preg_match('/^[a-zA-Z]+$/',$_POST[new_textbox1]) ))
		 {
	//echo $_POST['itemgrp'];
	$loc3=preg_replace('/\s+/','',$location3);
	  $loc3=strtoupper($loc3);
	$new1=strtoupper($_POST[new_textbox1]);
	if($loc3==WRITEOFF){
	$sql="update insertitems set Equipment_No='$eqpno',Amount='$amount',Item_Group='$itemgroup',Supplier='$new1',Description_of_item='$descriptionofitem',Purchase_order
  ='$purchaseorder',Installation_date='$installationdate',Warranty_period='$warrantyperiod',Warranty_exp_date='$warrantyexpdate',Location_1
  ='$location1',Location_2='$location2',Location_3='$loc3',Remarks='$remarks' where Equipment_No='$eqpno'";

}
else
  {
	  $loc31=strtoupper($_POST[loc3]);
	  $new1=strtoupper($_POST[new_textbox1]);
	  $sql="update insertitems set Equipment_No='$eqpno',Amount='$amount',Item_Group='$itemgroup',Supplier='$new1',Description_of_item='$descriptionofitem',Purchase_order
  ='$purchaseorder',Installation_date='$installationdate',Warranty_period='$warrantyperiod',Warranty_exp_date='$warrantyexpdate',Location_1
  ='$location1',Location_2='$location2',Location_3='$loc31',Remarks='$remarks' where Equipment_No='$eqpno'";

  }
		 }
		 else{
		 ?>
<br />
<br />
 <font  size="5" color="red" style="font-family:Monotype Corsiva"><b>
	<?php
	echo "<center><i>Invalid entry in the form</i><center>";
	 }
	 }
	 else
	 {
		  ?>
<br />
<br />
 <font  size="5" color="red" style="font-family:Monotype Corsiva"><b>
	<?php
	echo "<center><i>All the feilds except Remarks, quantity  and Location 3 is mandatory.</i><center>";
	 }
}
else 
{
	//echo $_POST['itemgrp'];
	alert("item not updated");

}

	


if (!mysql_query($sql,$con))
 {
  die('Error: ' . mysql_error());
  } 
 

  if($_POST[itemgrp]=="others")
	{
     $data2=mysql_fetch_array($test) ;
		
		$rows=mysql_num_rows($data2) ;
	if($rows==0)
        {
                            $st=strtoupper($_POST[new_textbox]);
								$sql=mysql_query("INSERT INTO item (item_group) VALUES('$st')");
			}
			else
			{	
			for($i=1;$i<=$rows;$i++)
			{	
		      if($_POST[new_textbox]!=$data2[item_group])
			{
				$st=strtoupper($_POST[new_textbox]);
				$sql=mysql_query("INSERT INTO item (item_group) VALUES('$st')");
				
			}
			}
			}
		
	}	
		   
	//$sql=mysql_query("INSERT INTO item (item_group) VALUES('$_POST[new_textbox]')");

    if($_POST[suppgrp]=="others")
	{
    $data1=mysql_fetch_array($test1) ;
		
			$rows1=mysql_num_rows($data1) ;
			if($rows1==0)
			{
                          $st1=strtoupper($_POST[new_textbox1]);
							$sql1=mysql_query("INSERT INTO supplier (supplier_group) VALUES('$st1')");
			}
    	else
		{			
			for($i=1;$i<=$rows1;$i++)
			{	
		      if($_POST[new_textbox1]!=$data1[supplier_group])
				{  
				$st1=strtoupper($_POST[new_textbox1]);
					
				$sql1=mysql_query("INSERT INTO supplier (supplier_group) VALUES('$st1')");
				}
			}
		}
	}	
   mysql_close($con);
?>
<table>
  <tr>
    <td align="center"><font size="5"><b>Updated Equipment Details</b></font></td>
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
		
		//if(preg_match("/[0-9]+[A-Za-z]+/",$_POST[eqpno]))
		//{
					$con = mysql_connect('localhost','root','');
     if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db('ems', $con);

              
			$result0=mysql_query("SELECT * FROM insertitems where Equipment_No='$eqpno'");
			//echo"ab";
			//echo"$result0";
		//}
		//else
		//{			
		  //		$con = mysql_connect('localhost','root','');
    //if (!$con)
  //{
  //die('Could not connect: ' . mysql_error());
  //}
 
//mysql_select_db('madan', $con);
		//$result0=mysql_query("SELECT * FROM insertitems where Equipment_No>=$_POST[eqpno]");
		//echo $result0;
		//}
		//for($a=0;$a<$_POST[quantity];$a++)
		//{ 
	         $a=0;
	          $dat=mysql_fetch_array($result0) ;
			  $item[$a][0]=$dat[Equipment_No];
			  $item[$a][1]=$dat[Item_Group];
			  $item[$a][2]=$dat[Supplier];
			  $item[$a][3]=$dat[Description_of_item];
			  $item[$a][4]=$dat[Purchase_order];
			  $item[$a][5]=$dat[Installation_date];
			  $item[$a][6]=$dat[Warranty_period];
			  $item[$a][7]=$dat[Warranty_exp_date];
			  $item[$a][8]=$dat[Location_1];
			  $item[$a][9]=$dat[Location_2];
			  $item[$a][10]=$dat[Location_3];
			  $item[$a][11]=$dat[Amount];
			  $item[$a][12]=$dat[Remarks];
			 if($item[$a][10]=="WRITEOFF")            			
			 {?>
		<tr bgcolor="crimson"><td><?php echo $item[$a][0]?></td><td><?php echo $item[$a][1] ?></td><td><?php echo $item[$a][2]?></td>
		<td><?php echo $item[$a][3] ?></td><td><?php echo $item[$a][4]?></td><td><?php echo $item[$a][5] ?></td>
		<td><?php echo $item[$a][6]?></td><td><?php echo $item[$a][7]?></td><td><?php echo $item[$a][8]?></td>
		<td><?php echo $item[$a][9] ?></td><td><?php echo $item[$a][10]?></td><td><?php echo $item[$a][11]?></td><td><?php echo $item[$a][12]?></td></tr>
			 <?php }
			 
			  
			else if(preg_match("/Transferred/i",$item[$a][10])) { ?>
			 <tr bgcolor="Yellow"><td><?php echo $item[$a][0]?></td><td><?php echo $item[$a][1] ?></td><td><?php echo $item[$a][2]?></td>
		<td><?php echo $item[$a][3] ?></td><td><?php echo $item[$a][4]?></td><td><?php echo $item[$a][5] ?></td>
		<td><?php echo $item[$a][6]?></td><td><?php echo $item[$a][7]?></td><td><?php echo $item[$a][8]?></td>
		<td><?php echo $item[$a][9] ?></td><td><?php echo $item[$a][10]?></td><td><?php echo $item[$a][11]?></td><td><?php echo $item[$a][12]?></td></tr>
			 <?php }
			 else 
			 { ?>
			 <tr><td><?php echo $item[$a][0]?></td><td><?php echo $item[$a][1] ?></td><td><?php echo $item[$a][2]?></td>
		<td><?php echo $item[$a][3] ?></td><td><?php echo $item[$a][4]?></td><td><?php echo $item[$a][5] ?></td>
		<td><?php echo $item[$a][6]?></td><td><?php echo $item[$a][7]?></td><td><?php echo $item[$a][8]?></td>
		<td><?php echo $item[$a][9] ?></td><td><?php echo $item[$a][10]?></td><td><?php echo $item[$a][11]?></td><td><?php echo $item[$a][12]?></td></tr>
			 
			 <?php } ?>
			 
		
		
				 
		</table>
		 </td></tr></table>
		 <center><table><font color="blue">
		<tr><td>
		<?php
		//echo "You'll be redirected after (15) Seconds";
        //echo "<meta http-equiv=Refresh content=15;url=update_display.php>";?>
		
		
		<button style="width:60;height:40" align="center" name="button" onclick="window.location='update_button.php'"><font size="3" color=" maroon">Update</font></button>
</td>
</tr>
</font></table></center>
				
<?php	   }
else{
	?>
<center>
   <font color=red size=3 style="font-family:Monotype Corsiva"><b>
   <?php
	   echo" Invalid entry in the form";
	   echo"<br>";
	   echo"<br>";
	echo "<center><i>Amount should be a string of digits, no special characters allowed except a decimal point '.'.</i><center>";
	echo"<br>";
	echo "<center><i>Item group,Supplier/Vendor and Description of Item should be a string of characters, no special characters allowed except for Description of Item white space is allowed.</i><center>";
	echo"<br>";
	echo "<center><i>Purchase order should be a string of digits of length 5.</i><center>";
	echo"<br>";
	echo "<center><i>Warranty Period should be a string of digits of length 2.</i><center>";
	echo"<br>";
	echo "<center><i>Location1 should be a string of digits of length 3.</i><center>";
	echo"<br>";
	   echo "You'll be redirected after (15) Seconds";
        echo "<meta http-equiv=Refresh content=15;url=update_display.php>";
	   ?>
	   <!--<button style="width:60;height:40" align="center" name="button" onclick="window.location='update_button.php'"><font size="3" color=" maroon">Update</font></button>-->
	   </b>
	   </font>
	   </center>
	   <?php
}	   
			
}
else{
	?>
<br />
<br />
 <font  size="5" color="red" style="font-family:Monotype Corsiva"><b>
	<?php
	echo "<center><i>All the feilds except Remarks, quantity  and Location 3 is mandatory.</i><center>";
	echo"<br>";
	echo "You'll be redirected after (15) Seconds";
        echo "<meta http-equiv=Refresh content=15;url=update_display.php>";
	?>
	<!--<button style="width:60;height:40" align="center" name="button" onclick="window.location='update_button.php'"><font size="3" color=" maroon">Update</font></button>-->

	<?php
	} 
	//echo "<meta http-equiv=Refresh content=1;url=.php>";
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
	//}
		?>
		

		
		
