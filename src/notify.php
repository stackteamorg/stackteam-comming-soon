<?php

//ini_set('display_errors', 'On');

$alert  = null;
$data  = null;
$notify = null;



// Create connection

if(isset($_POST['notify'])) {

    $notify = $_POST['notify'];


    $is_email = false;
    $is_mobile = false;

    if(!($is_email = filter_var($_POST['notify'], FILTER_VALIDATE_EMAIL))) {
        if(!($is_mobile = preg_match("/^09[0-9]{9}$/",$_POST['notify']))) {
            $alert = 'شماره موبایل یا ایمیلی که وارد کردید اشتباه است';
        } else {
            $data = "&mobile=$notify";
        }
    } else {
        $data = "&email=$notify";
    }

    if ($is_mobile || $is_email) {

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL,"http://stackteam.org/api/comming-soon");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,
                    'apikey=' . _env('APIKEY')  . "$data&platform=" . _env('PLATFORM'));

        // In real life you should use something like:
        // curl_setopt($ch, CURLOPT_POSTFIELDS, 
        //          http_build_query(array('postvar1' => 'value1')));

        // Receive server response ...
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $server_output = json_decode(curl_exec($ch));

        if ($server_output->success) {
            $alert = "<code>$notify</code> در سیستم ثبت شد و به محض راه اندازی سایت همراه با یک کد خوش‌آمد گویی <code>2 میلیون ریالی</code> به شما اطلاع رسانی خواهد شد";
        } else {

            $alert = 'خطایی رخ داده است';
        }

        curl_close($ch);
    }

}

?>