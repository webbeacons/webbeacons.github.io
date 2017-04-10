<?php
$fullpath  = $_SERVER['REQUEST_URI'];
$filename  = basename($fullpath);
$ip        = $_SERVER["REMOTE_ADDR"];
$useragent = $_SERVER["HTTP_USER_AGENT"];

echo "Path: $fullpath;<br>
File: $filename;<br>
IP address: $ip;<br>
User agent: $useragent";
