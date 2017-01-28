<?php
include("../res/x5engine.php");
$nameList = array("7ja","ryv","8yv","haw","gus","3pr","vg4","k6a","van","nrg");
$charList = array("A","X","7","W","D","8","2","4","C","F");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
