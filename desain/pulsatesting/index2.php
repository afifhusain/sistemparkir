<?php  
$username   = "083180830107";
$apiKey   = "6485e3bb4e308ac9648";
$signature  = md5($username.$apiKey.'pl');

$json = '{
          "commands" : "pricelist",
          "username" : "'.$username.'",
          "sign"     : "'.$signature.'"
        }';

$url = "https://api.mobilepulsa.net/v1/legacy/index/pulsa/axis";

$ch  = curl_init();
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$data = curl_exec($ch);
curl_close($ch);

print_r($data);

?>