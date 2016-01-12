<?php
include 'login.php';
include_once "../php-security/db_connect.php";
include_once "../php-security/security_functions.php";

// We use Google's supplied recaptcha code library
require_once "../includes/recaptchalib.php";

$secret_key = "6LeajhATAAAAAETdecYEOT9QSql6xeUvNw_e_GST";
$response = null;
$reCAPTCHA = new ReCaptcha($secret_key);
if (isset($_POST['g-recaptcha-response'], $_POST['jobname'], $_POST['exe'], $_POST['file'])) {
    $reponse = $reCAPTCHA->verifyResponse(
        $_SERVER['REMOTE_ADDR'],
        $_POST['g-recaptcha-response']
    );

    if ($response == null || !($response->success)) header("location:javascript://history.go(-1)");

    $jobname = $_POST['jobname'];
    $exe = $_POST['exe'];
    $file = $_POST['file'];
    $filetype = $_POST['type'];
if(check_login($db_connection)){
    #finish this
   exec("python make_sub_file.py -jobname "+$jobname+" -outfile "+$jobname+".out -executable_file "+$exe+"-filetype "+$type+"-user_args "+$file);
}

}

header("location:javascript://history.go(-1)");

