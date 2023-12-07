<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-store');
header("Access-Control-Allow-Origin: *");
header('X-Accel-Buffering: no');
while(true) {
    printf("data: %s\n\n", json_encode([
        'time' => (new DateTime('now', new DateTimeZone('Asia/Tokyo')))->format('H:i:s'),
        'word' => 'send data',
    ]));
    flush();
    sleep(5);
}