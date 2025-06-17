<?php
include("includes/config_db.php");
session_start();

 error_reporting(E_ERROR);

if (!isset($_SERVER['HTTP_REFERER'])){ 

echo "you cannot access this page directly!"; } 
else{


//Define $myusername and $mypassword
$myusername=$_GET['myusername'];
$mypassword=$_GET['mypassword'];

$_SESSION['myusername']=$myusername;

// To protect MySQL injection (more detail about MySQL injection)
//$myusername = stripslashes($myusername);
//$mypassword = stripslashes($mypassword);
//$myusername = mysql_real_escape_string($myusername);
//$mypassword = mysql_real_escape_string($mypassword);

//$sql="SELECT * FROM members WHERE username='$myusername' and password=password('$mypassword')";
$sql="SELECT * FROM members WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
$row = mysql_fetch_assoc($result);
// If result matched $myusername and $mypassword, table row must be 1 row
if($myusername=='' || $mypassword=='')
{
$_SESSION['mes1']=1;
echo "<script>";
echo "self.location='login.php'";
echo "</script>";
} else if($count>=1){
	
// Register $myusername, $mypassword and redirect to file "login_success.php"
//session_register("myusername");
//session_register("mypassword");
//echo "<meta http-equiv=Refresh content=20;url=login_success.php>";
echo "<script>";
echo "self.location='login_success.php'";
echo "</script>";
}
else 
{
?>
<?php
$_SESSION['mes2'] = 1;
echo "<script>";
echo "self.location='login.php'";
echo "</script>";
?>
</td></tr></table></body>
<?php
}
ob_end_flush();
?>

<script type="text/javascript">
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