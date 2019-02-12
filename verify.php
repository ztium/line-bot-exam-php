<?php
$access_token = 'HAkLhPYEuBgK+gk8bRDkXoajtBsH96FUx9M/GfJGoHvNG399ZeAjBO9DPgrxKmqSp6EXCCF5E6kAaHCq8kqGxen/CHit1h7WECfU0RY6dXsh3eibu5spYatm2dmcVkpog3j/uknrnWQmbNFGt2j5qQdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
