 <?php
error_reporting(E_ERROR);
//session_start();
//ob_start();
if (!isset($_SERVER['HTTP_REFERER'])){ 

echo "you cannot access this page directly!"; } 
else{
	
 //$redirect_url = $_GET['url'];
//header("Location: ".$redirect_url);
?>
		

 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
 
 <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
 <?php
   // defined('thefooter') or die('Not with me my friend');
   // echo('Copyright to me in the year 2000');
?>
 <title>Display</title>
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
     $result = mysql_query("SELECT user_no FROM users ");
$trows = mysql_num_rows($result);

$store = array();
		while($data=mysql_fetch_array($result))
		{
			array_push($store,$data['user_no']);
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

 for ($i = 0; $i <$trows; $i++) {

  }
  $y=$_POST['quantity'];
 $un=$_POST['userno'];
 for($j=0;$j<$y;$j++)
 {
  for ($i = 0; $i < $trows; $i++)
   {
      if ($store[$i] == $un)     /* if required element found */
      {?>
	  <font color="#61210B">
	  <?php
	  
    echo "<center><i><b>user_no '$un' already exists!!!<br /></i></b></center>";
         break;
      }?>
	  </font>
	  <?php
	  
   }
   
   $un++;
	
	  }
 
	$result = mysql_query("SELECT user_no FROM users ");
$trows = mysql_num_rows($result); 
		if($trows==0)
				
			$info=1;
        $count=0;
		
		while($data=mysql_fetch_array($result) )
		{
			
			
			$count++;
			
			if($count==$trows)
			{
				
				$info1=(int)$data[user_no];
				$info=$info1+1;
			}
		}
			
 $y=$_POST['quantity'];
 $un=$_POST['userno'];
 $c=$un+$y;

$test=mysql_query("SELECT item_group FROM item");
$test1=mysql_query("SELECT * FROM supplier");	
$result= mysql_query("SELECT user_no FROM users "); 


 $un=$_POST['userno'];
$interrupt=0;
 $c=$un+$y;
 
if (isset($_POST['submit']) && $_POST['submit'] == 'Submit')
 {
	   if($_POST[userno]!='' && $_POST[name]!='' && $_POST[emailid]!='' && $_POST[gender]!='' && $_POST[datepicker]!='' && $_POST[phoneno]!=''
	   && $_POST[address]!='' && $_POST[itemgrp]!='' && $_POST[quantity]!='' && $_POST[suppgrp]!=''&&
	   $_POST[doi]!='')
	   {
		   if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$",$_POST[emailid]) || 
		   (!preg_match('/^[a-zA-Z ]+$/',$_POST[address])) || (!preg_match('/^[a-zA-Z ]+$/',$_POST[doi])) || (!preg_match('/^\d{1}$/',$_POST[quantity])) || (!preg_match('/^\d{10}$/',$_POST[phoneno]))) { 
		   
?>
<center>
   <font color=red size=3 style="font-family:Monotype Corsiva"><b>
   <?php
	   echo" Invalid entry in the form";
	   echo"<br>";
		echo "<center><i>name,address and Description of Item should be a string of characters, white space is allowed in address and Description of Item.</i></center>";
	echo"<br>";
	echo "<center><i>Quantity should be more than 0 and less than 10.</i></center>";
	echo"<br>";
	echo "<center><i>Phone Number should be a string of digits of length 10.</i></center>";
	
	   ?>
	   </b>
	   </font>
	   </center>
	   <center><table><font color="blue"> 
<?php
		echo "You'll be redirected after (15) Seconds";
        echo "<meta http-equiv=Refresh content=15;url=user_form.php>";

?></font></table></center>
	   
 <?php
		   
	   
 
		   
}
else
{
   $sql="INSERT IGNORE INTO users(user_no,name,email_ID,gender,Date_of_birth,phone_no,address,Item_Group,quantity,Supplier,Description_of_item,Add_info)
 VALUES
 ('$un','$_POST[name]','$_POST[emailid]','$_POST[gender]','$_POST[datepicker]','$_POST[phoneno]','$_POST[address]',
 '$_POST[itemgrp]','$_POST[quantity]','$_POST[suppgrp]','$_POST[doi]','$_POST[addinfo]')";
   


 if (!mysql_query($sql,$con))
 {
 die('Error: ' . mysql_error());
   } 



 
	
  
mysql_close($con);

 ?>
		 <table>
		 <tr>
    <td align="center"><font size="5"><b>User & Equipment Information Submitted Successfully!!!</b></font></td>
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
  
        <th>User No.</th>
        <th>Name</th>
		<th>Email ID</th>
		<th>Gender</th>
		<th>Date Of Birth</th>
		<th>Phone No.</th>
		<th>Address</th>
		<th>Item Group</th>
		<th>Quantity</th>
		<th>Supplier</th>
		<th>Description Of Item</th>
		<th>Additional Information</th>
		
		
      </tr>
	  </thead>
	  <?php 
		
		$con = mysql_connect('localhost','root','');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db('ems', $con);
			
		 
					 $con = mysql_connect('localhost','root','');
     if (!$con)
   {
   die('Could not connect: ' . mysql_error());
   }
 
 mysql_select_db('ems', $con);

              $val=$_POST[userno];
			 $result0=mysql_query("SELECT * FROM users where user_no='$val'");
			
		 
		 
	 
	          $dat=mysql_fetch_array($result0) ;
			  $item[$a][0]=$dat[user_no];
			  $item[$a][1]=$dat[name];
			  $item[$a][2]=$dat[email_ID];
			  $item[$a][3]=$dat[gender];
			  $item[$a][4]=$dat[Date_of_birth];
			  $item[$a][5]=$dat[phone_no];
			  $item[$a][6]=$dat[address];
			  $item[$a][7]=$dat[Item_Group];
			   $item[$a][8]=$dat[quantity];
			   $item[$a][9]=$dat[Supplier];
			   $item[$a][10]=$dat[Description_of_item];
			   $item[$a][11]=$dat[Add_info];
			  
			  
			  ?>
		 <tr>
		 <td><?php echo $item[$a][0]?></td><td><?php echo $item[$a][1] ?></td><td><?php echo $item[$a][2]?></td>
		 <td><?php echo $item[$a][3] ?></td><td><?php echo $item[$a][4]?></td><td><?php echo $item[$a][5] ?></td>
		 <td><?php echo $item[$a][6]?></td><td><?php echo $item[$a][7]?></td><td><?php echo $item[$a][8]?></td>
		 <td><?php echo $item[$a][9] ?></td><td><?php echo $item[$a][10]?></td><td><?php echo $item[$a][11]?></td></tr>
			  


 
		 </table>
		 </div>
		 <!--</td></tr></table>-->
		 
	<center><table><font color="blue"><b> 
<?php
echo"you will be intimated about the approval by mail";
?>
<br>
<br>
<?php
		echo "You'll be redirected after (15) Seconds";
        echo "<meta http-equiv=Refresh content=15;url=index.php>";

?></b></font></table></center>
<?php
}
	   }
 else
 {
	?>
<center>
   <font color=red size=3 style="font-family:Monotype Corsiva"><b>
   <?php
	   echo" All the feilds except additional information is mandatory";
	   ?>
	   </b>
	   </font>
	   </center>
	   <center><table><font color="blue"> 
<?php

		echo "You'll be redirected after (15) Seconds";
        echo "<meta http-equiv=Refresh content=15;url=user_form.php>";

?></font></table></center>
	   
 <?php
 }
 }
 ?>
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
<!--<a href="index.php" style="text-decoration:none;color:maroon"><button style="width:60;height:40" align="center" name="button"><font size="3" color=" maroon">Home</font></button></a>-->
 
 <!--<td>
 <a href="frame1.php" style="text-decoration:none;color:maroon"><button style="width:60;height:40" align="center" name="button"><font size="3" color=" maroon">Back</font></button></a>
 </td>-->
 
 
 
		  
		

		
		
