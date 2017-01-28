<?php 
session_start();
session_destroy();
echo "logout sukses";
echo"<meta http-equiv='refresh' content='1; url=index3.php'>";

?>