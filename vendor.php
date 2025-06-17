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
<title>vendor details</title>
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

<form  name="vendorform" method="post"  action="vendor_form1.php">
<?php
$con = mysql_connect('localhost','root','');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db('ems', $con);
$count=0;
$result = mysql_query("SELECT vendor_no FROM vendors");
$trows = mysql_num_rows($result); 
		if($trows==0)
		$info=1;
    
	
$store = array();
	while($data=mysql_fetch_array($result))
		{
			array_push($store,$data['vendor_no']);
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
			
			$count++; 
						
			if($count==$trows)
			{
				$info1=(int)$store[$i];
				
				$info=$info1+1;
				
			}
			
		}
		

//$test=mysql_query("SELECT * FROM item");
//$test1=mysql_query("SELECT * FROM supplier");




	



		
			
			
    



  
mysql_close($con);
?>


<table width="100%" align="center" border="0" cellpadding="0" cellspacing="1">

<tr>
<td align ="center"> <font color="#61210B" size="7"><b>Vendor Information</b></font> 
</td>
</tr>
</table>
<table cellspacing="50" align="center">
<tr>
<th align="left">Vendor No.</th><td>
<input type="text" name="vendorno" id="vendorno"  readonly value="<?php echo $info?>" /> 

<td></td>
<td></td>
<th align="left">Company Name</th>
<td>	
<input type="text" id="cname" name="cname" maxlength=25/> 
</td>
</tr>
<tr>
<th align="left">Phone Number</th>
<td>	
<input type="text" id="phoneno" name="phoneno" maxlength=10/> 
<td></td>
<td></td>
<th align="left">Fax Number</th><td><input type="text" name="fno" id="fno" maxlength=10 /> 
	

</tr>

<tr>
<th align="left">Contact Name</th><td><input type="text" name="contactn" id="contactn" maxlength=25/></td>
<td></td>
<td></td>
<th align="left">Email Address</th><td><input type="text" name="emailid" id="emailid"/></td>
</tr>
<tr>

<th align="left">Address</th><td rowspan="2"><textarea rows="4" cols="40" name="address"></textarea> </td>
<td></td>
<td></td>
<th align="left">Website Address</th><td><input type="text" name="waddress" id="waddress" /></td>

</tr>
<tr>
<th align="left"></th>
 <td></td>
 <td></td>
 </tr>
<tr>

<th align="left">Equipment Description</th><td rowspan="2"><textarea rows="4" cols="40" name="eqd"></textarea> </td>
<td></td>
<td></td>
<th align="left">City</th>
<td><select name="city">
	<option value=' '>--City-- </option>
	<option value="Bangalore">Bangalore</option>
	<option value="Chennai">Chennai</option>
	<option value="Hyderabad">Hyderabad</option>
	<option value="Kannur">Kannur</option>
	<option value="Kolkata">Kolkata</option>
	<option value="Mangalore">Mangalore</option>
	<option value="Mumbai">Mumbai</option>
	<option value="Mysore">Mysore</option>
	<option value="NewDelhi">New Delhi</option>
	</select>
</td>

</tr>
<tr>
<th align="left"></th>
 <td></td>
 <td></td>
 </tr>
<tr>
<th align="left">State</th>
<td><select name="state">
	<option value=' '>--State--</option>
	<option value="AndraPradesh">Andra Pradesh</option>
	<option value="Delhi">Delhi</option>
	<option value="Karnataka">Karnataka</option>
	<option value="Kerala">Kerala</option>
	<option value="Maharashtra">Maharashtra</option>
	<option value="TamilNadu">Tamil Nadu</option>
	<option value="West_Bengal">West Bengal</option>
</select>
</td>
<td></td>
<td></td>
<th align="left">Postal</th><td><input type="text" name="postal" id="postal" maxlength=6/></td>
</tr>
</table>


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
 
<script>
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
	