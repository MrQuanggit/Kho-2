<?php
function validatePhone($str)
{
    $regexp = '/^[(]+[0-9_]{2,}+[)]+[-]+[(][0-9_]{10,}+[)]$/';
    if (preg_match_all($regexp, $str)) {
        echo ("hợp lệ");
    } else {
        echo ("ko hợp lệ");
    }
}

validatePhone("(84)-(0978489648)");
