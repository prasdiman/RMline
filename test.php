<?php

$content = '{"events":[{"type":"message","replyToken":"059df46f296746d9980da26cf4e9340d","source":{"userId":"Ufbbcb4782a752c630900ec878b670642","type":"user"},"timestamp":1479200068302,"message":{"type":"text","id":"5208272933999","text":"...."}}]}';

$events = json_decode($content, true);

vardump($events);
