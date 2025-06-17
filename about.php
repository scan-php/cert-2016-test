 <?php
 error_reporting(E_ERROR);
//if (!defined('YOUR_CONSTANT')) 
//{
//die('No direct access');

//}

if (!isset($_SERVER['HTTP_REFERER'])){ 

echo "you cannot access this page directly!"; } 
else{
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />


<style>
body {
    background-image: url("img1.jpg");
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



<table width="100%" height="20%" bgcolor="#61210B">
<tr><td><img src="img3.jpg" height="200" width="1360"/></td>
<td><font size="6pt" color="white" style="font-family:TIMES NEW ROMAN"></font><br/>
<font size="4pt" color="white" style="font-family:TIMES NEW ROMAN"></font></td>
</tr>
</table>
<br/><br/>
<b><font size="3pt" color="white" style="font-family:Monotype Corsiva"><center><h1>EQUIPMENT MONITORING SYSTEM </h1></center></font></b>
<table align="center">
<tr><td>
<a href="index.php"><font size="5pt" color="blue" style="font-family:Monotype Corsiva">Home</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;





<a href="user_form.php"><font size="5pt" color="blue" style="font-family:Monotype Corsiva">Request Equipment</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="user_form2.php"><font size="5pt" color="blue" style="font-family:Monotype Corsiva">Request Account</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="vendor.php"><font size="5pt" color="blue" style="font-family:Monotype Corsiva">Request Dealership</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="login.php"><font size="5pt" color="blue" style="font-family:Monotype Corsiva">Login</font>

</td>
</tr>
</table>
<br>
<br>
<table width="50%" align="center">
<tr><td><b><font size="5pt" color="blue" style="font-family:Monotype Corsiva">About Us</font></b><br>
<tr><td><font size="4pt" color="white" style="font-family:Monotype Corsiva">
Equipment Monitoring System services numerous types of customers 
and we are thrilled to have any size or type customer! We sell to schools, 
hospitals, cities, machine shops, oilfield service, agricultural facilities, car dealerships, 
churches, and numerous other types of business as well as individuals. Whatever your needs may be, 
we can handle them! We carry about 10 items in stock and have the ability to get many more should 
our inventory not include that special item you need. We have many customers who have traded with us for 
the entire 20 years we've been in business.We are thankful for them just as we are for you, our new prospect! 
We look forward to having the opportunity to serve you as our customer.
</font>
</td>
</tr>
</table>
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