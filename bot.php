<?php

function makeCurl($api,$method,$datas=[]){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,"https://api.telegram.org/bot{$api}/{$method}");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,
        http_build_query($datas));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $server_output = curl_exec ($ch);
    curl_close ($ch);
    return $server_output;
}

$api = "284890957:AAHovpM5UlIoV8eBhowl4KEZukFNjhQ9XQo";
$robot = makeCurl($api,"getMe");
$updates = makeCurl($api,"getUpdates",[
    "limit"=>1
]);
