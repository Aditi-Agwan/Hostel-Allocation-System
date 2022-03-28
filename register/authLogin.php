<?php
session_start();

//print_r($_SESSION);
//print_r($_POST);
if(isset($_POST['login']) && !empty($_POST['login']))
{
    $capthca_txt = $_POST['captcha_challenge'];
    $captcha_code = $_SESSION['captcha_code'];
    if(!empty($captcha_code) && strcasecmp($captcha_code,$capthca_txt)!=0)
    {
         echo "Login failed . Captcha code invalid . ";
         exit();
    }
    else
    {
        echo "Capctha valid";
        exit();
    }
}
?>