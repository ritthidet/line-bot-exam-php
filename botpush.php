<?php



require "vendor/autoload.php";

$access_token = '02Mdx0LuTY/sosRaTc1eGY5wczzpBsQU4aPxpN96qZIEA4Okq9sfhMQzbsibnBgHlqeoqS1FE+NvJRlX/
19TYplIQAokNPj2CNKkBQaeJl876GabgAw+Pe1kFbXHcVBrT8zzPmkO6/HNnk88YGO2ZQdB04t89/1O/w1cDnyilFU=
';

$channelSecret = '59b18a0f68945f67ebc14f73940e5eb1';

$pushID = 'U9616e8240298e2efa9de3b5cf2056e5e';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







