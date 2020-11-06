<?php
function validateEmail($str)
{
    $regexp = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
    if (preg_match_all($regexp, $str)) {
        echo ("Email hợp lệ");
    } else {
        echo ("Email ko hợp lệ");
    }
}

validateEmail("@#abc@gmail.com");