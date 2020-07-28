<?php
$gdriveid = $_GET['url'];
$gdrive= "https://drive.google.com/uc?id=";
$url = $gdrive.$gdriveid;
header ("Location: $url");
exit;
?>
