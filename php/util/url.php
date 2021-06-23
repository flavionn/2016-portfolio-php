<?php

$url = explode("/", str_replace(strrchr($_SERVER["REQUEST_URI"], "?"), "", $_SERVER["REQUEST_URI"]));
array_shift($url);

$url0 = $url[0];
$url1 = $url[1];
$url2 = $url[2];
$url3 = $url[3];
$url4 = $url[4];

?>