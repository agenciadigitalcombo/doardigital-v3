<?php

namespace app\Library;

class WhatsApp
{
    function postJSON($full_path, $payload)
    {
        $defaults = [
            CURLOPT_POST           => true,
            CURLOPT_HEADER         => false,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_URL            => $full_path,
            CURLOPT_POSTFIELDS     => json_encode($payload, JSON_UNESCAPED_UNICODE),
            CURLOPT_HTTPHEADER     => [
                'content-type: application/json',
                "accept: */*",
            ]
        ];
        $con = curl_init();
        curl_setopt_array($con, $defaults);
        $ex = curl_exec($con);
        $info = curl_getinfo($con);
        curl_close($con);
        return json_decode($ex, true);
    }

    function sendMessage($phone, $message)
    {
        $path = "https://back.botcombo.com.br/api/messages/send";
        $payload = [
            "number" => "55{$phone}",
            "body" => $message
        ];
        return $this->postJSON($path, $payload);
    }
}
