<?php
ini_set('display_errors', 'On');
$_q = [
    'username' => '09166362279',
    'password' => '427873',
    'from' => '10002147',
    'to' => $_GET['number'],
    'text' => $_GET['text']
];

$query = http_build_query($_q);
// file_get_contents("https://webone-sms.ir/smsinoutbox/sendsms?$query");


// create curl resource
        $ch = curl_init();

        // set url
        curl_setopt($ch, CURLOPT_URL, "https://webone-sms.ir/smsinoutbox/sendsms?$query");

        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string
        $output = curl_exec($ch);

        // close curl resource to free up system resources
        curl_close($ch); 