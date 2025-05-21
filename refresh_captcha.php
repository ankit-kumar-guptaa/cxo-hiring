<?php
// Check if session is already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Generate a new random captcha code
$captcha_code = substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 6);

// Store the captcha code in session
$_SESSION['captcha_code'] = $captcha_code;

// Return the new captcha code
echo $captcha_code;
?>