<?php 
$url      = $_GET["url"];
$parts    = pathinfo($url);
$dirname  = $parts["dirname"];
$filename = rawurlencode($parts["filename"]);
$url      = "$dirname/$filename.m4a";
header("Location: $url", TRUE, 302); 
exit();
?>
