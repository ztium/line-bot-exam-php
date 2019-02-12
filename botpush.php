<?php



require "vendor/autoload.php";

$access_token = 'iyvz/OCyLG29jIZ8w9ZJjmI4l4uQseOUXws01BJYGKKY8AMBqokfjeaqJGwsLK7np6EXCCF5E6kAaHCq8kqGxen/CHit1h7WECfU0RY6dXucaMiaD0fW01suXfLgACZEKFhoRMvNxEElnaAGecc1YwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '75c03f392f6e53d662d6f5a8db9e421f';

$pushID = 'a1c83e7c7ac91e40956b7844502ff21a';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







