<?php
error_reporting(E_ERROR);
session_start();
if(!session_is_registered(myusername))
{
header("location:login.php");
}
?>
