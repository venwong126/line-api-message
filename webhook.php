<?php
// webhook.php userId

file_put_contents('webhook_log.txt', date('Y-m-d H:i:s') . "\n" . file_get_contents("php://input") . "\n\n", FILE_APPEND);

$body = file_get_contents("php://input");
$data = json_decode($body, true);

if (isset($data['events'][0]['source']['userId'])) {
    $userId = $data['events'][0]['source']['userId'];
    $log = "userId: " . $userId . "\n";
    file_put_contents('user_id_log.txt', $log, FILE_APPEND);
}

http_response_code(200);
echo "OK";
