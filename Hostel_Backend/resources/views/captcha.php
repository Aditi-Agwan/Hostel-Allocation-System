<?php
 
session_start();
 
$str = 'ABCDEFGHJKLMNPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz';
$random_str=str_shuffle($str); 
$captcha_code =substr($random_str,0,6);
$_SESSION['captcha_code'] = $captcha_code;

$font ="./font.ttf";
$font_size=20;
$image_width=135;
$image_height=35;

$image = imagecreate($image_width , $image_height);
imagecolorallocate($image, 255 , 255 , 255);

$image_color = imagecolorallocate($image , 0 ,0 , 0);

imagettftext($image , $font_size , 0 , 15 , 30 , $image_color , $font , $captcha_code);
header("Content-type: image/jpeg");
imagejpeg($image);

?>