<?php



require "vendor/autoload.php";

$access_token = 'HAkLhPYEuBgK+gk8bRDkXoajtBsH96FUx9M/GfJGoHvNG399ZeAjBO9DPgrxKmqSp6EXCCF5E6kAaHCq8kqGxen/CHit1h7WECfU0RY6dXsh3eibu5spYatm2dmcVkpog3j/uknrnWQmbNFGt2j5qQdB04t89/1O/w1cDnyilFU=
';

$channelSecret = 'a403ad4402402366bfb5ce6ed0cac58b';

$pushID = 'U748fd3d58b63f82a9a676be01306df13
';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







