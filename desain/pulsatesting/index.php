<?php  
$username   = "083180830107";
$apiKey   = "3895e37b79a99f8d";
$signature  = md5($username.$apiKey.'pl');

$json = '{
          "commands" : "pricelist",
          "username" : "083180830107",
          "sign"     : "961b2c6a6be05768cd3c4df860a37568"
        }';

$url = "https://testprepaid.mobilepulsa.net/v1/legacy/index/pulsa/axis";

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