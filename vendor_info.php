<?php 
	  error_reporting(E_ERROR);
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
<title>Vendors</title>
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
<!--<table width="150%" height="20%" bgcolor="#61210B">
<tr><td><img src="" height="100" width="150"/></td>
<td><font size="6pt" color="white" style="font-family:TIMES NEW ROMAN"></font><br/>
<font size="4pt" color="white" style="font-family:TIMES NEW ROMAN"></font></td>
</tr>
</table>-->


<?php
$con = mysql_connect('localhost','root','');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 mysql_select_db('ems', $con);
 $order = mysql_query("SELECT * FROM vendors");
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



?>
<!--http://phppot.com/php/updatedelete-multiple-rows-using-php/ -->

 <table>
  <tr>
    <td align="center"><font size="7"><b>Vendor Information</b></font></td>
  </tr>
  <tr>
    <td>	
 <div class="container">	
		<table border="3" cellspacing="1" cellpadding="2" color="black" width="100%">
		<colgroup>
		<col style="width:1%;"></col>
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
		<col style="width:43%"></col>
		</colgroup>
    
  <thead>
  
		 <tr>
		
        <th>Vendor No</th>
		<th>Company Name</th>
		<th>Phone No.</th>
		<th>Fax No.</th>
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
		$i=0;
			?>
			<tr>
			<?php 
for($i=0;$i<$trows;$i++)
		{
 
			 
			  
			
			  
			   ?>
			  <tr>
			  <td><?php echo $storeArray[$i][0]?></td><td><?php echo $storeArray[$i][1]?></td>
		 <td><?php echo $storeArray[$i][2] ?></td><td><?php echo $storeArray[$i][3]?></td><td><?php echo $storeArray[$i][4] ?></td>
		 <td><?php echo $storeArray[$i][5]?></td><td><?php echo $storeArray[$i][6]?></td><td><?php echo $storeArray[$i][7]?></td>
		 <td><?php echo $storeArray[$i][8] ?></td><td><?php echo $storeArray[$i][9]?></td><td><?php echo $storeArray[$i][10]?></td>
		 <td><?php echo $storeArray[$i][11] ?></td></tr>

			  <?php  
}
?>
			
		
  
 </table>

<br/>


<?php
mysql_close($con);
?>
</form>

</body>
</html>

	  
<script language="JavaScript">
	
	 document.oncontextmenu = function() {return false;}
		  document.onkeydown = function () {if(event.keyCode == 123){event.returnValue = false;}}
		
          function openNewpage() {window.open ('foobar.html', '', 'toolbar=no,menubar=no,location=no');}
		  
</script>
<?php
}?>
