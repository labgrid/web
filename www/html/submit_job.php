<?php
include 'login.php';
include "../php-security/db_connect.php";
include "../php-security/security_functions.php";




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
    $size=$_POST['size']
    $description=$_POST['description']

sec_session_start();
if (isset($_POST['username'], $_POST['password'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	if (secure_login($username, $password, $db_connection)) {
		exec("python make_sub_file.py -jobname "+$jobname+" -outfile "+$jobname+".out -executable_file "+$exe+"-filetype "+$type+"-user_args "+$file);
   		
	}

}


function store_job_to_db($username, $db_connection) {
    $existing_session = check_existing_session($username, $db_connection);
    if ($existing_session) {
        update_session($username, $db_connection);
        return true;
    }
    $sql = "INSERT INTO jobs (username, jobname, request_time, description, size) VALUES (?, ?, ?)";
    $stmt = $db_connection->prepare($sql);
    $request_time = time();
    $hash = $_SESSION['login_session_id'];
    $jobname=$jobname
    $username=$username
    if ($stmt) {
        $stmt->bind_param('ssi', $username, $request_time, $jobname, $size, $description);
        $stmt->execute();
        return true;
    } else return false;
}


header("location:javascript://history.go(-1)");

