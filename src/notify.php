<?php

$alert  = null;
$field  = null;
$notify = null;

define('DB_HOST',"localhost");
define('DB_USER',"paasify_user");
define('DB_PASS',"T[*,!7#ziEcO");
define('DB_NAME',"paasify_commingsoon");


// Create connection

if(isset($_POST['notify'])) {

    $notify = $_POST['notify'];

    $is_email = false;
    $is_mobile = false;

    if(!($is_email = filter_var($_POST['notify'], FILTER_VALIDATE_EMAIL))) {
        if(!($is_mobile = preg_match("/^09[0-9]{9}$/",$_POST['notify']))) {
            $alert = 'شماره موبایل یا ایمیلی که وارد کردید اشتباه است';
        } else {
            $field = "mobile";
        }
    } else {
        $field = "email";
    }


    if ($is_mobile || $is_email) {

        $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        // Check connection
        if ($conn->connect_error) {
            $alert('ارتباط با دیتابیس ممکن نبود، متاسفم');
        }

        // create insert query


        $sql = "INSERT INTO notify ($field) VALUES ('$notify')";

        if ($conn->query($sql) === TRUE) {
            $alert = $is_email ? 'آدرس ایمیل' : 'شماره موبایل' ;
            $alert .= " <code>$notify</code> در سیستم ثبت شد و به محض راه اندازی سایت همراه با یک کد خوش‌آمد گویی <code>2 میلیون ریالی</code> به شما اطلاع رسانی خواهد شد";
        } else {
            $alert = "خطای در ثبت رکورد پیش آمده است <br><code>$sql</code>";
        }

        $conn->close();
    }

}
?>