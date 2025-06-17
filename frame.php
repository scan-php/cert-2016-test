<?php
if (!isset($_SERVER['HTTP_REFERER'])){ 

echo "you cannot access this page directly!"; } 
else{
	?> 
<frameset cols="200, *">
   <frame src="Link_buttons.php" name="menu" />
   <frame src="frame1.php" name="main" />
   <noframes>
   <body>
     
   </body>
   </noframes>
</frameset>
<script>
 document.oncontextmenu = function() {return false;}
		  document.onkeydown = function () {if(event.keyCode == 123){event.returnValue = false;}}
		
          function openNewpage() {window.open ('foobar.html', '', 'toolbar=no,menubar=no,location=no');}
	</script>	  
<?php
}
?>