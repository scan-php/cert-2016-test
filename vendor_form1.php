 <?php
error_reporting(E_ERROR);
if (!isset($_SERVER['HTTP_REFERER'])){ 

echo "you cannot access this page directly!"; } 
else{

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
     $result = mysql_query("SELECT vendor_no FROM vendors");
$trows = mysql_num_rows($result);
 
$store = array();
		while($data=mysql_fetch_array($result))
		{
			array_push($store,$data['vendor_no']);
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
  
 $vn=$_POST['vendorno'];
 for($j=0;$j<$y;$j++)
 {
  for ($i = 0; $i < $trows; $i++)
   {
      if ($store[$i] == $un)     /* if required element found */
      {?>
	  <font color="#61210B">
	  <?php
	 
    echo "<center><i><b>vendor_no '$vn' already exists!!!<br /></i></b></center>";
         break;
      }?>
	  </font>
	  <?php
	  
   }
   
   $vn++;
	
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
			
 
 $vn=$_POST['vendorno'];
 


$result= mysql_query("SELECT vendor_no FROM vendors"); 


 $vn=$_POST['vendorno'];
$interrupt=0;
 
   
	   if (isset($_POST['submit']) && $_POST['submit'] == 'Submit')
	   {
		   if($_POST[vendorno]!=''&& $_POST[cname]!=''&& $_POST[phoneno]!=''&&$_POST[contactn]!=''&& $_POST[emailid]!=''&& $_POST[address]!=''
	   && $_POST[waddress]!=''&&$_POST[eqd]!=''&& $_POST[city]!=''&& $_POST[state]!=''&& $_POST[fno]!='' &&
	   $_POST[postal]!='')
	   {
		   if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$",$_POST[emailid]) || (!preg_match('/^[a-zA-Z]+$/',$_POST[cname])) ||
		   (!preg_match('/^[a-zA-Z]+$/',$_POST[contactn])) || (!preg_match('/^\d{10}$/',$_POST[fno])) || (!preg_match('/^[a-zA-Z ]+$/',$_POST[eqd])) || (!preg_match('/^\d{10}$/',$_POST[phoneno])) || 
		   (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$_POST[waddress])) 
		    || (!preg_match('/^\d{6}$/',$_POST[postal]))) { 
		   ?>
<center>
   <font color=red size=3 style="font-family:Monotype Corsiva"><b>
   <?php
	   echo" Invalid entry in the form";
	   echo"<br>";
	
	echo "<center><i>Company name, Contact name and Equipment description  should be  a string of characters, no special characters allowed except for Equipment Description white space is allowed.</i><center>";
	echo"<br>";
	echo "<center><i>Fax number and Phone number should be a string of digits of length 10.</i><center>";
	echo"<br>";
	echo "<center><i>Postal should be a string of digits of length 6.</i><center>";
	
	   ?>
	   </b>
	   </font>
	   </center>
	   <center><table><font color="blue"> 
<?php
		echo "You'll be redirected after (15) Seconds";
        echo "<meta http-equiv=Refresh content=15;url=vendor.php>";

?></font></table></center>
	   
 <?php
		   }
		   else{
   $sql="INSERT IGNORE INTO vendors(vendor_no,company_name,phone_no,fax_no,contact_name,email_ID,address,website_address,equipment_desc,city,state,postal)
 VALUES
 ('$vn','$_POST[cname]','$_POST[phoneno]','$_POST[fno]','$_POST[contactn]','$_POST[emailid]','$_POST[address]',
 '$_POST[waddress]','$_POST[eqd]','$_POST[city]','$_POST[state]','$_POST[postal]')";
   


 if (!mysql_query($sql,$con))
 {
 die('Error: ' . mysql_error());
   } 


  
mysql_close($con);

 ?>
		 <table>
		 <tr>
    <td align="center"><font size="5"><b>Vendor Information Submitted Successfully!!!</b></font></td>
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
  
        <th>Vendor No.</th>
        <th>Company Name</th>
		<th>Phone no.</th>
		<th>Fax no.</th>
		<th>Contact Name</th>
		<th>Email ID</th>
		<th>Address</th>
		<th>Website Address</th>
		<th>Equipment Desc</th>
		<th>City</th>
		<th>State</th>
		<th>Postal</th>
		
		
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

              $val=$_POST[vendorno];
			 $result0=mysql_query("SELECT * FROM vendors where vendor_no='$val'");
			
		 
		 
	 
	          $dat=mysql_fetch_array($result0) ;
			  $item[$a][0]=$dat[vendor_no];
			  $item[$a][1]=$dat[company_name];
			  $item[$a][2]=$dat[phone_no];
			  $item[$a][3]=$dat[fax_no];
			  $item[$a][4]=$dat[contact_name];
			  $item[$a][5]=$dat[email_ID];
			  $item[$a][6]=$dat[address];
			  $item[$a][7]=$dat[website_address];
			   $item[$a][8]=$dat[equipment_desc];
			   $item[$a][9]=$dat[city];
			   $item[$a][10]=$dat[state];
			   $item[$a][11]=$dat[postal];
			  
			  
			  ?>
		 <tr>
		 <td><?php echo $item[$a][0]?></td><td><?php echo $item[$a][1] ?></td><td><?php echo $item[$a][2]?></td>
		 <td><?php echo $item[$a][3] ?></td><td><?php echo $item[$a][4]?></td><td><?php echo $item[$a][5] ?></td>
		 <td><?php echo $item[$a][6]?></td><td><?php echo $item[$a][7]?></td><td><?php echo $item[$a][8]?></td>
		 <td><?php echo $item[$a][9] ?></td><td><?php echo $item[$a][10]?></td><td><?php echo $item[$a][11]?></td></tr>
			  


 
		 </table>
		 </div>
		 <!--</td></tr></table>-->
	<br>
    <br>	
	<center><table><font color="blue"><b> 
<?php
		echo "Upload your company brochure";
       

?></b></font></table></center>
</br>
</br>
<form action="upload.php" method="post" enctype="multipart/form-data">
   <tr>
   <td align="center">
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Brochure" name="submit">
	</td>
	</tr>
</form>
<?php
	   }
	   }
	   else
	   {
		   ?>
<center>
   <font color=red size=3 style="font-family:Monotype Corsiva"><b>
   <?php
	   echo" All the feilds are mandatory";
	   ?>
	   <center><table><font color="blue"> 
<?php
		
echo "You'll be redirected after (15) Seconds";
        echo "<meta http-equiv=Refresh content=15;url=vendor.php>";
?>
</font></table></center>
	   
 <?php
	   }
	   }
	   ?>
	   
</body>
		 </html>
		 
<!--<a href="index.php" style="text-decoration:none;color:maroon"><button style="width:60;height:40" align="center" name="button"><font size="3" color=" maroon">Home</font></button></a>-->
 
 <!--<td>
 <a href="frame1.php" style="text-decoration:none;color:maroon"><button style="width:60;height:40" align="center" name="button"><font size="3" color=" maroon">Back</font></button></a>
 </td>-->
 <script type="text/javascript">
 
		  document.oncontextmenu = function() {return false;}
		  document.onkeydown = function () {if(event.keyCode == 123){event.returnValue = false;}}
		
          function openNewpage() {window.open ('foobar.html', '', 'toolbar=no,menubar=no,location=no');}
		  </script>
		
		<?php
}
?>
