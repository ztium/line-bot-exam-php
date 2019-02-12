<?php
$access_token = 'iyvz/OCyLG29jIZ8w9ZJjmI4l4uQseOUXws01BJYGKKY8AMBqokfjeaqJGwsLK7np6EXCCF5E6kAaHCq8kqGxen/CHit1h7WECfU0RY6dXucaMiaD0fW01suXfLgACZEKFhoRMvNxEElnaAGecc1YwdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
