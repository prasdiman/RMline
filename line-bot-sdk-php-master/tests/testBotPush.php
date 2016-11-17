<?php
require 'bootstrap.php';
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('N4bRWnBZULx0jxZ/nT8S/Run1T10NJpvo9cghxwErdYvqVnLzosaw30CVKCepn4kX9Ad97gSEbb4lb9cKhVeZHMlHAYdTBROCRPcTvfHuih5sIRHlMibUktv3V1tP9Zbq3rCaDr51zgdqO19jTK4+AdB04t89/1O/w1cDnyilFU=');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '962709d6a1918d410be65fe2c053207a']);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello');
$response = $bot->pushMessage('ub6d94f94503468c01d1cc9bf40c421f3', $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
