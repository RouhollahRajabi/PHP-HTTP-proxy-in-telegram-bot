<?php

$PROXY_HOST = "IP-Address"; // Proxy server address
$PROXY_PORT = "Port";    // Proxy server port
$PROXY_USER = "Proxy-Username";    // Username of HTTP proxy if requierd
$PROXY_PASS = "Proxy-Password";   // Password of HTTP proxy if requierd

$auth = base64_encode("$PROXY_USER:$PROXY_PASS");
stream_context_set_default(
 array(
  'http' => array(
   'proxy' => "tcp://$PROXY_HOST:$PROXY_PORT",
   'request_fulluri' => true,
   'header' => "Proxy-Authorization: Basic $auth" // This line is necessary if username and password requierd
    )
 )
);


$apiToken = "Your-Token"; //bot token from Telegram botfather

$message = " Some Text or message". "\n" .$nurl ; // your custom message
$data = [
'chat_id' => 'Chat-ID', // Set your chat-Id instead Chat-ID
'text' => $message 
];
$url = "https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data); //data variable has send to telegram api as an array

print_r( get_headers($url) ); //this line prints $url content

?>