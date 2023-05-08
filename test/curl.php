<?php

$url = 'https://dummyjson.com/users';
$collection_name = '1';
$request_url = $url . '/' . $collection_name;
$curl = curl_init($request_url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);

curl_close($curl);

$firstName = json_decode($response, true)["lastName"];

echo $firstName;