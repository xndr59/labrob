<?php
include("../res/x5engine.php");
$nameList = array("awv","t52","kgn","rs2","yjh","e5v","4u5","ar4","cge","fku");
$charList = array("T","D","U","G","W","Z","E","6","S","6");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
