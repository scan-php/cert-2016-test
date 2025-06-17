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
    //defined('thefooter') or die('Not with me my friend');
    //echo('Copyright to me in the year 2000');
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
 
 <form action="upload.php" method="post" enctype="multipart/form-data">
 <br>
    <br>	
	<center><table><font color="blue" style="font-family:Monotype Corsiva"><b> 
<?php
		echo "Upload your company brochure";
       

?></b></font></table></center>
</br>
</br>
 <table align="center">
   <tr>
   <td>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Brochure" name="submit">
	</td>
	</tr>
	</table>
</form>
</body>
</html>
<script>
 document.oncontextmenu = function() {return false;}
		  document.onkeydown = function () {if(event.keyCode == 123){event.returnValue = false;}}
		
          function openNewpage() {window.open ('foobar.html', '', 'toolbar=no,menubar=no,location=no');}
		  </script>
		  
<?php
}
?>