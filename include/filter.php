<?php
define('SITE_KEY', '6Leg4ssZAAAAANZ06zaKUp7Ye-SHUwWMkchgVADu');
define('SECRET_KEY', '6Leg4ssZAAAAACvelbOPUKYKBjyIa8uDpJ9KX6cE');


function clean($value = "") {
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);
    
    return $value;
}

function check_length($value = "", $min, $max) {
    $result = (mb_strlen($value) < $min || mb_strlen($value) > $max);
    return !$result;
}

function getCaptcha($SecretKey) {
    $Response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".SECRET_KEY."&response={$SecretKey}");
    $Return = json_decode($Response);
    return $Return;
}
