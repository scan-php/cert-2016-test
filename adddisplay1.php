 <?php

include('session_chk.php');
include("includes/config_db.php");
error_reporting(E_ERROR);

 

if (!isset($_SERVER['HTTP_REFERER'])){ 

echo "you cannot access this page directly!"; } 
else{

?> 		


 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml">
 <?php
/* This will give an error. Note the output
 * above, which is before the header() call */
//header('Location: localhost/EMS1/adddisplay.php');
//exit;
?>
 <head>
 
 <?php
    //defined('thefooter') or die('Not with me my friend');
    //echo('Copyright to me in the year 2000');
?>
 <title>Add Display</title>
 <style type="text/css">
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
 $con = mysql_connect('localhost','root','');
 if (!$con)
 {
   die('Could not connect: ' . mysql_error());
   }
 
 mysql_select_db('ems', $con);
     $result = mysql_query("SELECT Equipment_No FROM insertitems ");
$trows = mysql_num_rows($result);
//echo $trows; 
$store = array();
		while($data=mysql_fetch_array($result))
		{
			array_push($store,$data['Equipment_No']);
	    }
		
	for ($i = 0; $i <$trows; $i++) {
      for ($j = 0; $j <$trows - 1; $j++) {
         if ((int)$store[$j] > (int)$store[$j + 1]) {
            $temp = $store[$j];
            $store[$j]= $store[$j + 1];
            $store[$j + 1] = $temp;
         }
      }
		}	
// echo ' ';
 for ($i = 0; $i <$trows; $i++) {
//  echo $store[$i];
  //  echo ' ';
  }
  
  $y=$_POST['quantity'];
 $eq=$_POST['eqpno'];
 
	
 
 for($j=0;$j<$y;$j++)
 {
  for ($i = 0; $i < $trows; $i++)
   {
      if ($store[$i] == $eq)     /* if required element found */
      {?>
	  <font color="#61210B">
	  <?php
	  //echo $store[$i];
    echo "<center><i><b>Equipment_No '$eq' already exists!!!<br /></i></b></center>";
         break;
      }?>
	  </font>
	  <?php
	  
   }
   
   $eq++;
	//  echo $eq;
	  }
 
	$result = mysql_query("SELECT Equipment_No FROM insertitems ");
$trows = mysql_num_rows($result); 
		if($trows==0)
				
			$info=1;
        $count=0;
		
		while($data=mysql_fetch_array($result) )
		{
			
			
			$count++;
			
			if($count==$trows)
			{
				
				$info1=(int)$data[Equipment_No];
				$info=$info1+1;
			}
		}
			
 $y=$_POST['quantity'];
 $eq=$_POST['eqpno'];
 $c=$eq+$y;

$test=mysql_query("SELECT item_group FROM item");
$test1=mysql_query("SELECT * FROM supplier");	
$result= mysql_query("SELECT Equipment_No FROM insertitems "); 


 $eq=$_POST['eqpno'];
$interrupt=0;
 $c=$eq+$y;
 if (isset($_POST['add']) && $_POST['add'] == 'Add')
 {
	//echo 'hi';
	
   if($_POST['itemgrp']=="others")
	 {
		// echo 'hi';
		 $con = mysql_connect('localhost','root','');
 if (!$con)
 {
   die('Could not connect: ' . mysql_error());
   }
 
 mysql_select_db('ems', $con);
		   $result1 = mysql_query("SELECT item_group FROM item ");
$rows = mysql_num_rows($result1);
//echo $rows;
		 $st=strtoupper($_POST['new_textbox']);
	 if($rows==0)
         {
			// echo him;
                $sql1=mysql_query("INSERT INTO item (item_group) VALUES('$st')");
			 }
			 else
			 {	
		 //echo hi1;
		 $s=0;
			 for($i=0;$i<$rows;$i++)
			 {	
		 $data1=mysql_fetch_array($result1);
		//echo  $data1['item_group'];
		//echo $st;
		     //if($st==$data1['item_group'])
			 //{
				// echo $data1['item_group'];
				// echo him;
				// echo $st;
			 //}
			 //else
				
			if($st==$data1['item_group']) 
			 {
			//	 echo her;
				// echo $st;
				 $s=1;
			//	 echo $s;
			 }
			 }
			 if($st=='')
				 $s=1;
			 if($s==0)
			 $sql1=mysql_query("INSERT INTO item (item_group) VALUES('$st')");
			 }
		
	 }	
		   
	//$sql=mysql_query("INSERT INTO item (item_group) VALUES('$_POST[new_textbox]')");

     if($_POST[suppgrp]=="others")
	 {
		// echo 'hi';
		 $con = mysql_connect('localhost','root','');
 if (!$con)
 {
   die('Could not connect: ' . mysql_error());
   }
 
 mysql_select_db('ems', $con);
		   $result2 = mysql_query("SELECT supplier_group FROM supplier ");
$row = mysql_num_rows($result2);
//echo $row;
		 $stt=strtoupper($_POST['new_textbox1']);
	 if($row==0)
         {
			// echo him;
                $sql2=mysql_query("INSERT INTO supplier (supplier_group) VALUES('$stt')");
			 }
			 else
			 {	
		 //echo hi1;
		 $s=0;
			 for($i=0;$i<$row;$i++)
			 {	
		 $data2=mysql_fetch_array($result2);
		//echo  $data2['supplier_group'];
		//echo $st;
		     //if($st==$data1['item_group'])
			 //{
				// echo $data1['item_group'];
				// echo him;
				// echo $st;
			 //}
			 //else
				
			if($stt==$data2['supplier_group']) 
			 {
			//	 echo her;
				// echo $st;
				 $s=1;
			//	 echo $s;
			 }
			 }
			 if($stt=='')
				 $s=1;
			 if($s==0)
			 $sql2=mysql_query("INSERT INTO supplier (supplier_group) VALUES('$stt')");
			 }
		
	 }	
		   
	 } 
 if(isset($_POST['add']))
 {
 if($_POST[eqpno]!=''&& $_POST[amount]!=''&& $_POST[itemgrp]!=''&& $_POST[suppgrp]!=''
	   && $_POST[doi]!=''&&$_POST[purorder]!=''&& $_POST[datepicker]!=''&& $_POST[warrp]!=''&& $_POST[warexpdate]!='' &&
	   $_POST[loc1]!=''&&$_POST[loc2]!='' &&$_POST[quantity]!=''){
		   if ( (preg_match('/^[0-9]+(?:\.[0-9]{0,2})?$/', $_POST[amount])) &&
		    (preg_match('/^[a-zA-Z]+$/',$_POST[itemgrp]))
		   &&(preg_match('/^[a-zA-Z]+$/',$_POST[suppgrp]))&&(preg_match('/^[a-zA-Z ]+$/',$_POST[doi]))   
	   && (preg_match('/^\d{2}$/',$_POST[warrp])) && (preg_match('/^\d{3}$/',$_POST[loc1])) && (preg_match('/^\d{1}$/',$_POST[quantity]))
		    ){ 
				
 if(preg_match('/^\d/', $eq))
 {
for ($x = 1; $x <=$y && $eq!=$c; $x++) 
 {  //echo $_POST[loc2];
   if(($_POST[itemgrp]=="others")&&($_POST[suppgrp]=="others"))
   {
	   if(($_POST[new_textbox]!='')&&($_POST[new_textbox1]!=''))
	   {
		   if((preg_match('/^[a-zA-Z]+$/',$_POST[new_textbox])) && (preg_match('/^[a-zA-Z]+$/',$_POST[new_textbox1])))
	{
	   $new=strtoupper($_POST[new_textbox]);
	   $new1=strtoupper($_POST[new_textbox1]);
	   $loc3=strtoupper($_POST[loc3]);
	   $loc3=preg_replace('/\s+/','',$loc3);
	   if($loc3==WRITEOFF)
	   {
   $sql="INSERT IGNORE INTO insertitems(Equipment_No,Amount,Item_Group,Supplier,Description_of_item,Purchase_order,Installation_date,Warranty_period,Warranty_exp_date,Location_1,Location_2,Location_3,Remarks)
 VALUES
 ('$eq','$_POST[amount]','$new','$new1','$_POST[doi]','$_POST[purorder]','$_POST[datepicker]',
 '$_POST[warrp]','$_POST[warexpdate]','$_POST[loc1]','$_POST[loc2]','$loc3','$_POST[remarks]')";
   }
   else
   {
	   $loc31=strtoupper($_POST[loc3]);
	   $sql="INSERT IGNORE INTO insertitems(Equipment_No,Amount,Item_Group,Supplier,Description_of_item,Purchase_order,Installation_date,Warranty_period,Warranty_exp_date,Location_1,Location_2,Location_3,Remarks)
 VALUES
 ('$eq','$_POST[amount]','$new','$new1','$_POST[doi]','$_POST[purorder]','$_POST[datepicker]',
 '$_POST[warrp]','$_POST[warexpdate]','$_POST[loc1]','$_POST[loc2]','$loc31','$_POST[remarks]')";
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
	echo "<center><i>All the feilds except Remarks  and Location 3 is mandatory.</i><center>";
}	   
   }
  //if($_POST[suppgrp]=="")
  //{
	// alert("Item not selected");
 // }
 else if(($_POST[itemgrp]!="others")&&($_POST[suppgrp]!="others"))
 {	
//echo $_POST['new_textbox'];
 $loc3=strtoupper($_POST[loc3]);
 $loc3=preg_replace('/\s+/','',$loc3);
 if($loc3==WRITEOFF)
 {
 $sql="INSERT IGNORE INTO insertitems(Equipment_No,Amount,item_Group,Supplier,Description_of_item,Purchase_order,
 Installation_date,Warranty_period,Warranty_exp_date,Location_1,Location_2,Location_3,Remarks)
 VALUES
 ('$eq','$_POST[amount]','$_POST[itemgrp]','$_POST[suppgrp]','$_POST[doi]','$_POST[purorder]','$_POST[datepicker]',
 '$_POST[warrp]','$_POST[warexpdate]','$_POST[loc1]','$_POST[loc2]','$loc3','$_POST[remarks]')";
 }
 else
	 {
		 $loc31=strtoupper($_POST[loc3]);
 $sql="INSERT IGNORE INTO insertitems(Equipment_No,Amount,item_Group,Supplier,Description_of_item,Purchase_order,
 Installation_date,Warranty_period,Warranty_exp_date,Location_1,Location_2,Location_3,Remarks)
 VALUES
 ('$eq','$_POST[amount]','$_POST[itemgrp]','$_POST[suppgrp]','$_POST[doi]','$_POST[purorder]','$_POST[datepicker]',
 '$_POST[warrp]','$_POST[warexpdate]','$_POST[loc1]','$_POST[loc2]','$loc31','$_POST[remarks]')";
 }
 }
	 
 else if(($_POST[itemgrp]=="others")&&($_POST[suppgrp]!="others"))
 {
	 if(($_POST[new_textbox]!=''))
	 {
		 if((preg_match('/^[a-zA-Z]+$/',$_POST[new_textbox]) ))
		 {
	//echo $_POST['itemgrp'];
	 $loc3=strtoupper($_POST[loc3]);
	 $loc3=preg_replace('/\s+/','',$loc3);
	 $new=strtoupper($_POST[new_textbox]);
	 if($loc3==WRITEOFF)
	 {
	 $sql="INSERT IGNORE INTO insertitems(Equipment_No,Amount,item_Group,Supplier,Description_of_item,Purchase_order,Installation_date,
	 Warranty_period,Warranty_exp_date,Location_1,Location_2,Location_3,Remarks)
 VALUES
 ('$eq','$_POST[amount]','$new','$_POST[suppgrp]','$_POST[doi]','$_POST[purorder]','$_POST[datepicker]',
 '$_POST[warrp]','$_POST[warexpdate]','$_POST[loc1]','$_POST[loc2]','$loc3','$_POST[remarks]')";

 }
 else
	 {
		 $loc31=strtoupper($_POST[loc3]);
 $sql="INSERT IGNORE INTO insertitems(Equipment_No,Amount,item_Group,Supplier,Description_of_item,Purchase_order,
 Installation_date,Warranty_period,Warranty_exp_date,Location_1,Location_2,Location_3,Remarks)
 VALUES
 ('$eq','$_POST[amount]','$new','$_POST[suppgrp]','$_POST[doi]','$_POST[purorder]','$_POST[datepicker]',
 '$_POST[warrp]','$_POST[warexpdate]','$_POST[loc1]','$_POST[loc2]','$loc31','$_POST[remarks]')";
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
	echo "<center><i>All the feilds except Remarks  and Location 3 is mandatory.</i><center>";
	 }
 }
 else if(($_POST[itemgrp]!="others")&&($_POST[suppgrp]=="others"))
 {
	 if(($_POST[new_textbox1]!=''))
	 {
		 if((preg_match('/^[a-zA-Z]+$/',$_POST[new_textbox1]) ))
		 {
			 
		 
	//echo $_POST['itemgrp'];
	 $loc3=strtoupper($_POST[loc3]);
	 $loc3=preg_replace('/\s+/','',$loc3);
     $new1=strtoupper($_POST[new_textbox1]);
	 if($loc3==WRITEOFF)
	 {
	 $sql="INSERT IGNORE INTO insertitems(Equipment_No,Amount,Item_Group,Supplier,Description_of_item,Purchase_order,Installation_date,
	 Warranty_period,Warranty_exp_date,Location_1,Location_2,Location_3,Remarks)
 VALUES
 ('$eq','$_POST[amount]','$_POST[itemgrp]','$new1','$_POST[doi]','$_POST[purorder]','$_POST[datepicker]',
 '$_POST[warrp]','$_POST[warexpdate]','$_POST[loc1]','$_POST[loc2]','$loc3','$_POST[remarks]') ";

 }
 else
 {
	$loc31=strtoupper($_POST[loc3]);
 $sql="INSERT IGNORE INTO insertitems(Equipment_No,Amount,item_Group,Supplier,Description_of_item,Purchase_order,
 Installation_date,Warranty_period,Warranty_exp_date,Location_1,Location_2,Location_3,Remarks)
 VALUES
 ('$eq','$_POST[amount]','$_POST[itemgrp]','$new1','$_POST[doi]','$_POST[purorder]','$_POST[datepicker]',
 '$_POST[warrp]','$_POST[warexpdate]','$_POST[loc1]','$_POST[loc2]','$loc31','$_POST[remarks]')";
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
	echo "<center><i>All the feilds except Remarks  and Location 3 is mandatory.</i><center>";
	 }
 }
 
 else 
 {
	//echo $_POST['itemgrp'];
	 alert("item not selected");

 }

	


 if (!mysql_query($sql,$con))
 {
 die('Error: ' . mysql_error());
   } 
 $eq++;
 }

//}


 
    



  
mysql_close($con);
 ?>
		 <table>
		 <tr>
    <td align="center"><font size="5"><b>Equipment Details Added Successfully!!!</b></font></td>
  </tr>
  <tr>
  <td>
  <!--http://stackoverflow.com/questions/24110127/html-css-cannot-change-table-column-width-->
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
		// $qp=$_POST['eqpno'];
		//echo $q;
		$con = mysql_connect('localhost','root','');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db('ems', $con);
		//$test=$count;
		//$count=$count-$q;
	
		//echo $count;
		 
       
	    //$val1=(int)$val;
         //echo"cb";	
		 if(preg_match("/[0-9]+[A-Za-z]+/",$_POST[eqpno]))
		 {
					 $con = mysql_connect('localhost','root','');
     if (!$con)
   {
   die('Could not connect: ' . mysql_error());
   }
 
 mysql_select_db('ems', $con);

              $val=$_POST[eqpno];
			 $result0=mysql_query("SELECT * FROM insertitems where Equipment_No='$val'");
			//echo"ab";
			//echo"$result0";
		 
		 
	 for($a=0;$a<$_POST[quantity];$a++)
		 { 
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
		 <tr bgcolor="crimson">
		 <td><?php echo $item[$a][0]?></td><td><?php echo $item[$a][1] ?></td><td><?php echo $item[$a][2]?></td>
		 <td><?php echo $item[$a][3] ?></td><td><?php echo $item[$a][4]?></td><td><?php echo $item[$a][5] ?></td>
		 <td><?php echo $item[$a][6]?></td><td><?php echo $item[$a][7]?></td><td><?php echo $item[$a][8]?></td>
		 <td><?php echo $item[$a][9] ?></td><td><?php echo $item[$a][10]?></td><td><?php echo $item[$a][11]?></td><td><?php echo $item[$a][12]?></td></tr>
			  <?php }
			 
			  
			 else if(preg_match("/Transferred/i",$item[$a][10])) { ?>
			  <tr bgcolor="Yellow">
			  <td><?php echo $item[$a][0]?></td><td><?php echo $item[$a][1] ?></td><td><?php echo $item[$a][2]?></td>
		 <td><?php echo $item[$a][3] ?></td><td><?php echo $item[$a][4]?></td><td><?php echo $item[$a][5] ?></td>
		 <td><?php echo $item[$a][6]?></td><td><?php echo $item[$a][7]?></td><td><?php echo $item[$a][8]?></td>
		 <td><?php echo $item[$a][9] ?></td><td><?php echo $item[$a][10]?></td><td><?php echo $item[$a][11]?></td><td><?php echo $item[$a][12]?></td></tr>
			  <?php }
			  else 
			  { ?>
			  <tr>
			  <td><?php echo $item[$a][0]?></td><td><?php echo $item[$a][1] ?></td><td><?php echo $item[$a][2]?></td>
		 <td><?php echo $item[$a][3] ?></td><td><?php echo $item[$a][4]?></td><td><?php echo $item[$a][5] ?></td>
		 <td><?php echo $item[$a][6]?></td><td><?php echo $item[$a][7]?></td><td><?php echo $item[$a][8]?></td>
		 <td><?php echo $item[$a][9] ?></td><td><?php echo $item[$a][10]?></td><td><?php echo $item[$a][11]?></td><td><?php echo $item[$a][12]?></td></tr>
			 
			  <?php } ?>
			 
		
		
		 <?php  } 
		 
		  }
		 else if(preg_match("/[0-9]/",$_POST[eqpno]))
		 {			
		  		 $con = mysql_connect('localhost','root','');
    if (!$con)
   {
   die('Could not connect: ' . mysql_error());
   }
 
 mysql_select_db('ems', $con);
		 //$result0=mysql_query("SELECT * FROM insertitems where Equipment_No>=$_POST[eqpno]");
	//echo $result0;
	$result0=mysql_query("SELECT * FROM insertitems ");
	$trows = mysql_num_rows($result0); 
		//if($trows==0)
		//$info=1;
    //$sql = "SELECT field1, field2, field3, .... FROM sometable";
//$result = mysql_query($sql) or die(mysql_error());

//$array = array();

//while($row = mysql_fetch_assoc($result)) {
  // $array[] = $row;
//}

//echo $array[1]['field2']; 
	//$count=0;
	$storeArray = array();
	while($data=mysql_fetch_array($result0))
	{
		//$eqpno1=$data['Equipment_No'];
			  $storeArray[] = $data;
			  //$itemgroup=$data['Item_Group'];
			  //$supplier=$data['Supplier'];
			  //$descriptionofitem=$data['Description_of_item'];
			  //$purchaseorder=$data['Purchase_order'];
			  //$installationdate=$data['Installation_date'];
			  //$warrantyperiod=$data['Warranty_period'];
			  //$warrantyexpdate=$data['Warranty_exp_date'];
			  //$location1=$data['Location_1'];
			  //$location2=$data['Location_2'];
			  //$location3=$data['Location_3'];
			  //$remarks=$data['Remarks'];
		//array_push($storeArray,$data['Equipment_No'],$data['Supplier'],$data['Description_of_item'],$data['Purchase_order'],
		//$data['Installation_date'],$data['Warranty_period'],$data['Warranty_exp_date'],$data['Location_1'],$data['Location_2'],$data['Location_3'],$data['Remarks']);
	}
	//for ($i=0; $i < 10; $i++) { 
      // echo $storeArray[$i];
    //}
	//echo $storeArray[0];
	//while($data=mysql_fetch_array($result))
	//{
		
	for($k=0; $k< $trows; $k++){
	?>
	<!--	<br />-->
<?php //echo $storeArray[$k][0];
	}
		//	echo 'hi';?>
		<!--	<br /> -->
			<?php
		 
		 
		 
	
		for($k=0;$k<$trows;$k++){
			
			for($j=0;$j<$trows-1;$j++){
				$i=$j+1;
		
			//echo $i;?>
		<!--	<br /> -->
			<?php
	if ($storeArray[$j][0]>$storeArray[$i][0]) {
      for ($r=0;$r<13;$r++) {
         
            $temp = $storeArray[$j][$r];
            $storeArray[$j][$r]= $storeArray[$i][$r];
            $storeArray[$i][$r] = $temp;
			
		
         }
      }
		}
		}
		//echo 'hi';?>
		
	<!--	<br /> -->
		
		<?php
		 for($i=0;$i<$trows;$i++){
			 for($j=0;$j<13;$j++){
		 //echo $storeArray[$i][$j];?>
	<!--	<br /> -->
		 <?php }
		 }
	//echo 'hi';	 
		// 	for($k=0; $k< $trows; $k++){
	//for ($i = 0; $i <13; $i++) {?>
	<!--	<br /> -->
<?php //echo $storeArray[$k][$i];
	//}
		//	}
		for($i=0;$i<$trows;$i++)
		{
			//echo $storeArray[$i][0];
			//echo $_POST['eqpno'];
			if($storeArray[$i][0]==$_POST['eqpno'])
			{	
				
	 for($a=0;$a<$_POST[quantity];$a++)
	 {          
         
 //for ($i = 0; $i <13; $i++) 
	         // $dat=mysql_fetch_array($result0) ;
			  //$storeArray[$a][0];
			  //$storeArray[$a][1];
			  //$storeArray[$a][2];
			  //$storeArray[$a][3];
			  //$storeArray[$a][4];
			  //$storeArray[$a][5];
			  //$storeArray[$a][6];
			  //$storeArray[$a][7];
			  //$storeArray[$a][8];
			  //$storeArray[$a][9];
			  //$storeArray[$a][10];
			  //$storeArray[$a][11];
			  //for(k=0; k< m; k++) {
  // for (i = 0; i < n; i++) {
    // for (j = i +1; j < n; ++j) {
       //if (array2[k][i] > array2[k][j])  {
         //  int swap = array2[k][i];
         //  array2[k][i] = array2[k][j];
         //  array2[k][j] = swap;
       //}
     //}
   //} 
//}
			  if($storeArray[$i][11]=="WRITEOFF")            			
			  {?>
		 <tr bgcolor="crimson">
		 <td><?php echo $storeArray[$i][0]?></td><td><?php echo $storeArray[$i][2]?></td>
		 <td><?php echo $storeArray[$i][3] ?></td><td><?php echo $storeArray[$i][4]?></td><td><?php echo $storeArray[$i][5] ?></td>
		 <td><?php echo $storeArray[$i][6]?></td><td><?php echo $storeArray[$i][7]?></td><td><?php echo $storeArray[$i][8]?></td>
		 <td><?php echo $storeArray[$i][9] ?></td><td><?php echo $storeArray[$i][10]?></td><td><?php echo $storeArray[$i][11]?></td><td><?php echo $storeArray[$i][1] ?></td><td><?php echo $storeArray[$i][12]?></td></tr>
			  <?php }
			 
			  
			 else if(preg_match("/Transferred/i",$storeArray[$i][11])) { ?>
			  <tr bgcolor="Yellow">
			  <td><?php echo $storeArray[$i][0]?></td><td><?php echo $storeArray[$i][2]?></td>
		 <td><?php echo $storeArray[$i][3] ?></td><td><?php echo $storeArray[$i][4]?></td><td><?php echo $storeArray[$i][5] ?></td>
		 <td><?php echo $storeArray[$i][6]?></td><td><?php echo $storeArray[$i][7]?></td><td><?php echo $storeArray[$i][8]?></td>
		 <td><?php echo $storeArray[$i][9] ?></td><td><?php echo $storeArray[$i][10]?></td><td><?php echo $storeArray[$i][11]?></td><td><?php echo $storeArray[$i][1] ?></td><td><?php echo $storeArray[$i][12]?></td></tr>
			  <?php }
			  else 
			  { ?>
			  <tr>
			  <td><?php echo $storeArray[$i][0]?></td><td><?php echo $storeArray[$i][2]?></td>
		 <td><?php echo $storeArray[$i][3] ?></td><td><?php echo $storeArray[$i][4]?></td><td><?php echo $storeArray[$i][5] ?></td>
		 <td><?php echo $storeArray[$i][6]?></td><td><?php echo $storeArray[$i][7]?></td><td><?php echo $storeArray[$i][8]?></td>
		 <td><?php echo $storeArray[$i][9] ?></td><td><?php echo $storeArray[$i][10]?></td><td><?php echo $storeArray[$i][11]?></td><td><?php echo $storeArray[$i][1] ?></td><td><?php echo $storeArray[$i][12]?></td></tr>
			 
			  <?php } ?>
			 
		    
		
		 <?php   $i++;} ?>
		 <?php  } ?>
		  <?php  } ?>
		  <?php  } 
}
else
{?>
<br />
<br />
 <font  size="5" color="red" style="font-family:Monotype Corsiva"><b>
	<?php
	echo "<center><i>Equipment No. should start with a number followed by alphabets for subseries</i><center>";
}
	   }
	   else{
		   ?>
<center>
   <font color=red size=3 style="font-family:Monotype Corsiva"><b>
   <?php
	   echo" Invalid entry in the form";
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
	echo "<center><i>Quantity should be a greater than 0 and less than 9.</i><center>";
	   ?>
	   </b>
	   </font>
	   </center>
	   <?php
	   }
	   }
	   else
	   {
		   ?>
<br />
<br />
 <font  size="5" color="red" style="font-family:Monotype Corsiva"><b>
	<?php
	echo "<center><i>All the feilds except Remarks  and Location 3 is mandatory.</i><center>";
	   }
		  
}  
		  ?>


 </b></font>
		 </table>
		 </div>
		 <!--</td></tr></table>-->
		 
		<center> <table>
		<tr><td>
<a href="addcopy1.php" style="text-decoration:none;color:maroon"><button style="width:60;height:40" align="center" name="button"><font size="3" color=" maroon">Add</font></button></a>
 </td>
 <!--<td>
 <a href="frame1.php" style="text-decoration:none;color:maroon"><button style="width:60;height:40" align="center" name="button"><font size="3" color=" maroon">Back</font></button></a>
 </td>-->
 </tr>
 </table>
 </center>
<!--<head>
 <meta http-equiv="Pragma" content="no-cache" >
 <meta http-equiv="Expires" content="-1" >
</head>-->


		  </body>
		 </html>
		 
<script type="text/javascript">
 
		  document.oncontextmenu = function() {return false;}
		  document.onkeydown = function () {if(event.keyCode == 123){event.returnValue = false;}}
		
          function openNewpage() {window.open ('foobar.html', '', 'toolbar=no,menubar=no,location=no');}
		  </script>
		
<?php
 
}
?>
		
		
