<?php

// === LINE Bot ===
if (isset($_POST['submit'])) {
    $message = $_POST['message'];


    if (!$has_notified) {
        // LINE NOTIFY
        $sMessage .= "Message for us: $message";

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
        $result = curl_exec($ch);
        curl_close($ch);

        // IP RECORD
        file_put_contents($ip_log_file, $user_ip . "\n", FILE_APPEND);

        //  RECORD LINE API 
        file_put_contents("line_result.log", $result . "\n", FILE_APPEND);
    }

    echo "🎉 THANK YOU！";
    exit();
}
