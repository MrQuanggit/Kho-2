<?php
function validateClass($str)
{
    $regexp = '/^[A,P,C]+[0-9_]{4,}+[G,H,I,K,L,M]$/';
    if (preg_match_all($regexp, $str)) {
        echo ("hợp lệ");
    } else {
        echo ("ko hợp lệ");
    }
}

validateClass("C0318G");
