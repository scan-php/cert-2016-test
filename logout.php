<?php

session_start();
session_destroy();
echo "<script>";
echo "self.location='index.php'";
echo "</script>";
?>
<script>
 document.oncontextmenu = function() {return false;}
		  document.onkeydown = function () {if(event.keyCode == 123){event.returnValue = false;}}
		
          function openNewpage() {window.open ('foobar.html', '', 'toolbar=no,menubar=no,location=no');}
</script>		  