<?php
$access_token = 'N4bRWnBZULx0jxZ/nT8S/Run1T10NJpvo9cghxwErdYvqVnLzosaw30CVKCepn4kX9Ad97gSEbb4lb9cKhVeZHMlHAYdTBROCRPcTvfHuih5sIRHlMibUktv3V1tP9Zbq3rCaDr51zgdqO19jTK4+AdB04t89/1O/w1cDnyilFU=';

// Get POST body content
//$content = file_get_contents('php://input');
// Parse JSON
//$events = json_decode($content, true);
// Validate parsed JSON data
/*{"events":
 	[
		{
			"type":"message",
			"replyToken":"f5aa8c53de0347ff941c7ebbabe877e4",
			"source":{
				"userId":"Ufbbcb4782a752c630900ec878b670642",
				"type":"user"
			},
			"timestamp":1479200073221,
			"message":{
				"type":"text",
				"id":"5208273284830",
				"text":"555"
			}
		}
	]
}

Array ( 
	[events] => Array ( 
		[0] => Array ( 
			[type] => message 
			[replyToken] => 059df46f296746d9980da26cf4e9340d 
			[source] => Array ( 
				[userId] => Ufbbcb4782a752c630900ec878b670642 
				[type] => user 
			) 
			[timestamp] => 1479200068302 
			[message] => Array ( 
				[type] => text 
				[id] => 5208272933999 
				[text] => .... 
			) 
		) 
	) 
)
*/

$events = ['events' => [
			  [
			    'type' => 'message',
			    'replyToken' => 'f5aa8c53de0347ff941c7ebbabe877e4',
			    'to' => '@jec8363y',
			    'messages' => array(
				array(
				    'type' => 'text',
				    'text' => "Hello, user"
				),
				array(
				    'type' => 'text',
				    'text' => "May I help you?"
				)
			    )
			]
		   ]
	       ];
if (!is_null($events['events'])) {
	echo "chk 1";
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text sent
			$text = $event['message']['text'];
			// Get replyToken
			//$replyToken = $event['replyToken'];

			// Build message to reply back
			$messages = [
				'type' => 'text',
				'text' => $text
			];

			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/push';
			$data = [
				'to' => $event['to'],
				'messages' => [$messages],
			];
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			
			$result = curl_exec($ch);
			curl_close($ch);

			echo $result . "\r\n";
		}
	}
}
echo "OK";
