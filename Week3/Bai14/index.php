<?php
$subject = "CodeGym@gmail.com";
$pattern = '/^\w+@\w+(\.\w+){1,3}$/';
if(preg_match($pattern, $subject, $matches))
echo 'Khớp';
else
echo 'Không khớp';
