<?php 
	  include('session_chk.php');
	  include("includes/config_db.php");
?> 	

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Delete Display</title>
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
    defined('thefooter') or die('Not with me my friend');
    echo('Copyright to me in the year 2000');
?>

<?php
$con = mysql_connect('localhost','root','');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db('ems', $con);


 if (isset($_POST['delete']) && $_POST['delete'] == 'Delete')
{  

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
  
  $sql="DELETE FROM insertitems WHERE Equipment_No='$eqpno'";

  }
 
	


if (!mysql_query($sql,$con))
 {
  die('Error: ' . mysql_error());
  } 
 

  
		
		
		   
	
    



  
mysql_close($con);
?>

<table>
  <tr>
    <td align="center"><font size="5"><b>Deleted Equipment Details</b></font></td>
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
		
		
			
	         if($location3=="WRITEOFF")            			
			 {?>
		<tr bgcolor="crimson"><td><?php echo $eqpno?></td><td><?php echo $itemgroup ?></td><td><?php echo $supplier?></td>
		<td><?php echo $descriptionofitem ?></td><td><?php echo $purchaseorder?></td><td><?php echo $installationdate?></td>
		<td><?php echo $warrantyperiod?></td><td><?php echo $warrantyexpdate?></td><td><?php echo $location1?></td>
		<td><?php echo $location2 ?></td><td><?php echo $location3?></td><td><?php echo $amount?></td><td><?php echo $remarks?></td></tr>
			 <?php }
			 
			  
			else if(preg_match("/Transferred/i",$location3)) { ?>
			 <tr bgcolor="Yellow"><td><?php echo $eqpno?></td><td><?php echo $itemgroup  ?></td><td><?php echo $supplier?></td>
		<td><?php echo $descriptionofitem ?></td><td><?php echo $purchaseorder?></td><td><?php echo $installationdate?></td>
		<td><?php echo $warrantyperiod?></td><td><?php echo $warrantyexpdate?></td><td><?php echo $location1?></td>
		<td><?php echo $location2 ?></td><td><?php echo $location3?></td><td><?php echo $amount?></td><td><?php echo $remarks?></td></tr>
			 <?php }
			 else 
			 { ?>
			 <tr><td><?php echo $eqpno?></td><td><?php echo $itemgroup ?></td><td><?php echo $supplier?></td>
		<td><?php echo $descriptionofitem ?></td><td><?php echo $purchaseorder?></td><td><?php echo $installationdate?></td>
		<td><?php echo $warrantyperiod?></td><td><?php echo $warrantyexpdate?></td><td><?php echo $location1?></td>
		<td><?php echo $location2 ?></td><td><?php echo $location3?></td><td><?php echo $amount?></td><td><?php echo $remarks?></td></tr>
			 <?php } ?>
			 
		
		
				 
		</table>
		</div>
		 </td></tr></table>
		 
		<center><table>
		<tr><td>
		<button style="width:60;height:40" align="center" name="button" onclick="window.location='delete_button.php'"><font size="3" color=" maroon">Delete</font></button>
</td>
<!--<td>
<center><button style="width:60;height:40" align="center" name="button1" onclick="window.location='Link_buttons.php'"><font size="3" color=" maroon">Back</font></button></center>
</td>-->
</tr>
</table>
</center>




		 </body>
		</html>
		<script>
		 document.oncontextmenu = function() {return false;}
		  document.onkeydown = function () {if(event.keyCode == 123){event.returnValue = false;}}
		
          function openNewpage() {window.open ('foobar.html', '', 'toolbar=no,menubar=no,location=no');}
		  </script>
		  
		

		
		
