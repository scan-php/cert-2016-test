<?php 
	  
	  //include('session_chk.php');
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
<title>user details</title>
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

<form  name="userform" method="post"  action="user_form1.php">
<?php
$con = mysql_connect('localhost','root','');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db('ems', $con);

$count=0;
$result = mysql_query("SELECT user_no FROM users");
$trows = mysql_num_rows($result); 
		if($trows==0)
		$info=1;
    
	
$store = array();
	while($data=mysql_fetch_array($result))
		{
			array_push($store,$data['user_no']);
	   }
for ($i=0; $i < 10; $i++) { 
      
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
	
	
	
	
	

	for($i=0;$i<$trows;$i++)
		{	
			
			$count++; //2
						
			if($count==$trows)
			{
				$info1=(int)$store[$i];
				
				$info=$info1+1;
				
			}
			
		}
		
		



$test=mysql_query("SELECT * FROM item");
$test1=mysql_query("SELECT * FROM supplier");


    



  
mysql_close($con);
?>


<table width="100%" align="center" border="0" cellpadding="0" cellspacing="1">

<tr>
<td align ="center"> <font color="#61210B" size="7"><b>User Information</b></font> 
</td>
</tr>
</table>
<table cellspacing="50" align="center">
<tr>
<th align="left">User No.</th><td>
<input type="text" name="userno" id="userno"  readonly value="<?php echo $info?>" /> 

<td></td>
<td></td>
<td></td>
<th align="left">Name</th>
<td>	
<input type="text" id="name" name="name" maxlength="25"/> 
</td>
</tr>
<tr>
<th align="left">Email ID</th>
<td>	
<input type="text" id="emailid" name="emailid"/> 
<td></td>
<td></td>
<td></td>
<th align="left">Gender</th><td><input type="radio" name="gender" value="male" checked><b>Male</b> 
	<input type="radio" name="gender" value="female"><b>Female</b></td>

</tr>

<tr>
<th align="left">Date Of Birth</th><td><input type="text" name="datepicker" id="datepicker" /> </td>
<td></td>
<td></td>
<td></td>
<th align="left">Phone No.</th><td><input type="text" name="phoneno" id="phoneno" maxlength="10"/></td>
</tr>
<tr>
<th align="left">Address</th><td rowspan="2"><textarea rows="4" cols="40" name="address"></textarea> </td>
<td></td>
</tr>
</table>
<br>
<br>
<table width="100%" align="center" border="0" cellpadding="0" cellspacing="1">

<tr>
<td align ="center"> <font color="#61210B" size="7"><b>Equipment Information</b></font> 
</td>
</tr>
</table>
<table cellspacing="50" align="center">
<tr>
<th align="left">Item Group</th>
			<td><select name="itemgrp" id="itemgrp" onChange="itemOnchange();">
			<option value="">Select...</option>
					
					<?php
					 while($data=mysql_fetch_array($test)){?>
					<option> <?php echo $data[item_group] ?> </option>
					<?php }
					?>
				</select>
				
			
			</td>
<td></td>
<th align="left">Quantity</th><td><input type="text" name="quantity" id="quantity" value=1 maxlength=1/></td>
</tr>

<tr>
<th align="left">Supplier/Vendor</th>
<td><select name="suppgrp" id="suppgrp" onChange="itemOnchange1();">
			<option value="">Select...</option>
					
					<?php
					 while($data1=mysql_fetch_array($test1)){?>
					<option> <?php echo $data1[supplier_group] ?> </option>
					<?php }
					?>
				</select>
				</td>
				<td></td>
<th align="left">Description of item</th><td rowspan="2"><textarea rows="4" cols="40" name="doi"></textarea> </td>
<td></td>
</tr>

<tr>
<th align="left"></th>
 <td></td>
 <td></td>
 </tr>

<tr>
<th align="left">Additional Information</th><td rowspan="2"><textarea rows="4" cols="40" name="addinfo" maxlength="50"></textarea> </td>
</tr>
 

	


</table>

<br/>
<table align="center">
<tr>
<td></td>
<td><input type="submit" value="Submit" name="submit"></input>
</td>&nbsp;&nbsp;&nbsp;&nbsp;<td><input type="reset" value="Clear" name="clear"></td>
</tr>
</table>

</form>

</body>
</html>
 <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script type="text/javascript">
  
  
  $(function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true,
	    yearRange: "1950:2150",
        dateFormat: 'yy-mm-dd'	
    })
  });

 
			
		


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
	