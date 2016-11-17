<?php

/**
 * Copyright 2016 LINE Corporation
 *
 * LINE Corporation licenses this file to you under the Apache License,
 * version 2.0 (the "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at:
 *
 *   https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

require_once('./LINEBotTiny.php');

$channelAccessToken = 'N4bRWnBZULx0jxZ/nT8S/Run1T10NJpvo9cghxwErdYvqVnLzosaw30CVKCepn4kX9Ad97gSEbb4lb9cKhVeZHMlHAYdTBROCRPcTvfHuih5sIRHlMibUktv3V1tP9Zbq3rCaDr51zgdqO19jTK4+AdB04t89/1O/w1cDnyilFU=';
$channelSecret = '962709d6a1918d410be65fe2c053207a';

$client = new LINEBotTiny($channelAccessToken, $channelSecret);
//foreach ($client->parseEvents() as $event) {

/*{
  "to":["u5912407b444e54885d00111f7b0ce375"],
  "toChannel":1383378250,
  "eventType":"138311608800106203",
  "content":{
    "contentType":1,
    "toType":1,
    "text":"Hello, Jose!"
  }
}*/


            $message = [
							"type": "text",
							"text": "Hello, world"
						];
                    $client->pushMessage(array(
                        'to' => 'ub6d94f94503468c01d1cc9bf40c421f3',
			'toChannel' => '1486505354'
                        'messages' => array(
                            array(
                                'type' => 'text',
                                'text' => $message['text']
                            )
                        )
                    ));
//};
