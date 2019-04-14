<?php
session_start();
$email = "coolgovind.tiwari@gmail.com";
$pass = "Rekha$4869";
$blogID= urlencode("5728923621518013553"); // like 6304924319904337556
// Do Not Modify Below Code
if(!isset($_SESSION['sessionToken'])) {
$ch = curl_init("https://www.google.com/accounts/ClientLogin?Email=$email&Passwd=$pass&service=blogger&accountType=GOOGLE");
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION ,1);