<?php
function validateAccount($str)
{
    $regexp = '/^[a-z0-9_]{6,}$/';
    if (preg_match_all($regexp, $str)) {
        echo ("Email hợp lệ");
    } else {
        echo ("Email ko hợp lệ");
    }
}

validateAccount("1234_");