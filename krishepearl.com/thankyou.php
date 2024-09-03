<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'PHPMailer/Exception.php';
require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/SMTP.php';

// Enable error reporting
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit-from'])) {
    $customerName = htmlspecialchars($_POST['name']);
    $mobileNumber = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    // Database connection

    $mail = new PHPMailer(true);

    try {
        // Server settings

        $mail = new PHPMailer(true);
        $mail->isSMTP();
       $mail->Host = 'srikrishnadeveloppers.com'; // GoDaddy SMTP server
    $mail->Port = 465; // SSL port
    $mail->SMTPAuth = true; // SMTP authentication is required
        $mail->Username = 'krishe@srikrishnadeveloppers.com';
        $mail->Password = 'Krishe@1234';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        // Sender and recipient settings
        $mail->setFrom('shivamadworks@gmail.com', 'Lead From krishepearl Website');
        $mail->addAddress('leads@madworks.in', 'Lead From krishepearl Website');
        $mail->addAddress('shivamadworks@gmail.com', 'Lead From krishepearl Website');
        $mail->addReplyTo($email, 'Lead From krishepearl Website');
        // Email content
        $mail->isHTML(true);
        $mail->Subject = "Lead From Srikrishna Developers Website";
        $mail->Body = "Name: $customerName <br> Mobile No: $mobileNumber <br> Email Id: $email";
        $mail->SMTPDebug = 0;
        // $mail->Debugoutput = 'html';

        if ($mail->send()) {
            // echo "Email sent successfully.";

        } else {
            // echo "Email not sent. Error: " . $mail->ErrorInfo;
        }
    } 
    catch (Exception $e) {
        echo '<span>Form not submitted. Mailer Error: ' . $e->getMessage() . '</span>';
    }


    $conn = new mysqli('localhost', 'srikrishnaDeveloper', 'leads@123', 'srikrishnaDeveloper');

    if ($conn->connect_error) {
        error_log("Database connection failed: " . $conn->connect_error);
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepared statement to check if the email or mobile number already exists
    $sql_check = "SELECT * FROM `pearl_leads` WHERE `Email` = ? OR `Mobile` = ?";
    $stmt_check = $conn->prepare($sql_check);
    $stmt_check->bind_param('ss', $email, $mobileNumber);
    $stmt_check->execute();
    $result = $stmt_check->get_result();

    if ($result->num_rows > 0) {
        echo "<script>alert('Email or phone number already exists. Please use a different email or phone number.');</script>";
        echo "<script>window.history.back();</script>";
    } else {
        // Insert lead data into the database
        $currentDateTime = date("Y-m-d H:i:s");
        $stmt = $conn->prepare("INSERT INTO `pearl_leads`(`Name`, `Email`, `Mobile`, `Date`) VALUES (?, ?, ?, ?)");
        $stmt->bind_param('ssss', $customerName, $email, $mobileNumber, $currentDateTime);

        if (!$stmt->execute()) {
            error_log("Database insertion failed: " . $stmt->error);
            die("Error in saving lead data. Please try again later.");
        }

        $stmt->close();
        $conn->close();
        $crm_api_url = "https://srikrishnadeveloppers.tranquilcrmone.in/mobileapp/mblead?api_key=&mobile_number=" . urlencode($mobileNumber) . "&customer_name=" . urlencode($customerName) . "&email=" . urlencode($email) . "&country_code=" . urlencode("+91") . "&lead_project_nm=" . urlencode("1") . "&source_type=" . urlencode("3");

        // $crm_api_url = "https://srikrishnadeveloppers.tranquilcrmone.in/mobileapp/mblead?api_key=&mobile_number=$mobileNumber&customer_name=$customerName&email=$email";
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => $crm_api_url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_HTTPHEADER => [
                'Cookie: ci_session=kt7tve86frcqoi04v1b9udvop1nr3b5c'
            ],
        ]);

        $response = curl_exec($curl);
        $curlError = curl_error($curl);
        curl_close($curl);
        if ($curlError) {
            die("CRM integration failed: " . $curlError);
        } else {
            // echo $response;
        }




    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--<link href="img/pearl-logo.png" rel="icon" />-->
    <?php include 'head.php'; ?>
</head>
<body>
    <?php include 'header.php'; ?>
    <div
        style="margin: 0 auto; padding:5rem 0; border-radius: 1rem; text-align: center; margin-top:20px; font-size: 24px;">
        Thank you..!<br>We will get back to you soon..!<br><br>
        <button onclick="history.back()"
            style="padding: 10px 20px; font-size: 18px; background-color:#eab52b; color: white; border: none; border-radius: 5px; cursor: pointer;">
            Go Back to Home
        </button>
        <a class="broucher" href="https://www.krishepearl.com/media/broucher/KrishePearl_E-Brochure.pdf" download target=_blank>Download Brochure</a>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>