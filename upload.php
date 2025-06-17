<?php
if (!isset($_SERVER['HTTP_REFERER'])){ 

echo "you cannot access this page directly!"; } 
else{
	?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>brochure upload</title>
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

<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
//$uploadOk = 1;
//$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$imageFileType=$_FILES["fileToUpload"]['type'];
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    //$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    //if($check !== false) {?>
	<!--<table align="center">
	<tr>
	<br>
	<center><b>
	<font color="blue" size=5 style="font-family:Monotype Corsiva">-->
	<?php
       // echo "File is an image - " . $check["mime"] . ".";
		?>
		
		<!--</font></b>
		</center></br>-->
		<?php
        //$uploadOk = 1;
   // } 
	//else {?>
	<!--<br>
	<center><b>
	<font color="blue" size=5 style="font-family:Monotype Corsiva">-->
	<?php
        //echo "File is not an image.";
		?>
		
	<!--</font></b>
		</center></br>-->
		<?php
       // $uploadOk = 0;
  // }

// Check if file already exists
//if (file_exists($target_file)) {?>
<!--<br>
<center><b>
	<font color="blue" size=5 style="font-family:Monotype Corsiva">-->
	<?php
    //echo "Sorry, file already exists.";
	?>
	
	<!--</font></b>
	</center></br>-->
	<?php
    //$uploadOk = 0;
//}
// Check file size
//if ($_FILES["fileToUpload"]["size"] > 800000) {?>
<!--<br>
<center><b>
	<font color="blue" size=5 style="font-family:Monotype Corsiva">-->
	<?php
    //echo "Sorry, your file is too large.";
	?>
	
	<!--</font></b>
	</center></br>-->
		<?php
    //$uploadOk = 0;
//}
// Allow certain file formats
//if($imageFileType == "image/jpg" || $imageFileType == "image/jpeg" || $imageFileType == "image/gif"
//|| $imageFileType == "image/png") {
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	?>
		<br>
		<center><b>
	<font color="blue" size=5 style="font-family:Monotype Corsiva">
	<?php
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		echo"you will be intimated about the approval by mail, ";
	echo "You'll be redirected after (15) Seconds";
        echo "<meta http-equiv=Refresh content=15;url=index.php>";
		?>
		
		</font></b>
		</center></br>
		<?php
    } 
	else {?>
	<br>
	<center><b>
	<font color="blue" size=5 style="font-family:Monotype Corsiva">
	<?php
        echo "Sorry, there was an error uploading your file.";
		echo "You'll be redirected after (15) Seconds";
        echo "<meta http-equiv=Refresh content=15;url=vendor_form2.php>";
		?>
		
		</font></b>
		</center>
		</br>
		<?php
    }
//}
 //else {
	 ?>
    <!--<br>
<center><b>
	<font color="blue" size=5 style="font-family:Monotype Corsiva">-->
	<?php
    //echo "Sorry, only JPG, JPEG, PNG and GIF files are allowed.";
	//echo "You'll be redirected after (15) Seconds";
      //  echo "<meta http-equiv=Refresh content=15;url=vendor_form2.php>";
	?>
	
	<!--</font></b>
	</center></br>-->
	<?php
    //$uploadOk = 0;
//}
// Check if $uploadOk is set to 0 by an error
//if ($uploadOk == 0) {?>
<!--<br>
<center><b>
	<font color="blue" size=5 style="font-family:Monotype Corsiva">-->
	<?php
   // echo "Sorry, your file was not uploaded.";
	?>
	
	<!--</font></b>
	</center></br>-->
	<?php
// if everything is ok, try to upload file
}
?>
<?php
//if($uploadOk!=0)
//{?>
<!--<br>
<center><b>
	<font color="blue" size=5 style="font-family:Monotype Corsiva">-->
	<?php
	//echo"you will be intimated about the approval by mail";
	//echo "You'll be redirected after (15) Seconds";
    //    echo "<meta http-equiv=Refresh content=15;url=index.php>";
	?>
	
	<!--</font></b>
	</center>
	</br>-->
	<?php
//}
//else{
?>
<!--</tr>
</table>
<center><table><b><font color="blue" size=5 style="font-family:Monotype Corsiva">-->
<?php
		//echo "You'll be redirected after (15) Seconds";
        //echo "<meta http-equiv=Refresh content=15;url=vendor_form2.php>";
//}
		?>
<!--</font></b></table></center>-->

</body>
</html>
<?php
//}
?>
<script>
 document.oncontextmenu = function() {return false;}
		  document.onkeydown = function () {if(event.keyCode == 123){event.returnValue = false;}}
		
          function openNewpage() {window.open ('foobar.html', '', 'toolbar=no,menubar=no,location=no');}
</script>		  
<?php		  
}

?>