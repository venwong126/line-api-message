<?php
// Contact Form 7
$name = $_POST['your-name'] ?? 'Messeage';


$channelToken = 'YOUR TOKEN ID ';
$toUserId = 'USER ID';

$sMessage = "Your Messeage";

$postData = [
    'to' => $toUserId,
    'messages' => [[
        'type' => 'text',
        'text' => $sMessage
    ]]
];

$headers = [
    'Content-Type: application/json',
    'Authorization: Bearer ' . $channelToken
];

$ch = curl_init('https://api.line.me/v2/bot/message/push');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

// ERROR
echo "<h3>LINE REPORT</h3>";
echo "<strong>HTTP Code:</strong> $httpcode<br>";
echo "<strong>Response:</strong><pre>" . htmlspecialchars($response) . "</pre>";
