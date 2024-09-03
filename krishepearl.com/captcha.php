<?php
// session_start();

// Function to generate two random numbers and store their sum in the session
function generateRandomSum() {
    $num1 = rand(1, 10);
    $num2 = rand(1, 10);
    $sum = $num1 + $num2;
    
    $_SESSION['captcha_sum'] = $sum;

    return "{$num1} + {$num2} = ?";
}

// Generate random sum and store it in the session
$captchaText = generateRandomSum();

// Output the captcha text as plain text
echo $captchaText;
?>
