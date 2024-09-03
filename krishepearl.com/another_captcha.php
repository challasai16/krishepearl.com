<?php
// session_start();

// Function to generate two random numbers and store their sum in the session
$captchaKey2 = 'captcha_sum_2';

// Function to generate two random numbers and store their sum in the session
$num1 = rand(1, 10);
$num2 = rand(1, 10);
$sum = $num1 + $num2;

// Store the captcha sum in the session using a unique key
$_SESSION[$captchaKey2] = $sum;

// Output the captcha text as plain text
echo "{$num1} + {$num2} = ?";
?>
