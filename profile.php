<?php


$access_token = '02Mdx0LuTY/sosRaTc1eGY5wczzpBsQU4aPxpN96qZIEA4Okq9sfhMQzbsibnBgHlqeoqS1FE+NvJRlX/19TYplIQAokNPj2CNKkBQaeJl876GabgAw+Pe1kFbXHcVBrT8zzPmkO6/HNnk88YGO2ZQdB04t89/1O/w1cDnyilFU=
';

$userId = 'U9616e8240298e2efa9de3b5cf2056e5e';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

