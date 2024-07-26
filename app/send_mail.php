<?php
ini_set('display_errors', '1');
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';
//Define name spaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Include PHPMailer

// SMTP configuration
$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'mail.wetindeycodeacademy.com.ng';
$mail->SMTPAuth = true;
$mail->Username = 'moonwalker@wetindeycodeacademy.com.ng';
$mail->Password = 'Emmakulate1@';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;
$mail->setFrom('moonwalker@wetindeycodeacademy.com.ng');

// Collect form data
$subject = $_POST['subject'];
$body = $_POST['body'];

// Handle file upload
$flyer_path = '';
$flyer_cid = 'flyer_cid';
if (isset($_FILES['flyer']) && $_FILES['flyer']['error'] == UPLOAD_ERR_OK) {
    $upload_dir = 'uploads/';
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }
    $flyer_path = $upload_dir . basename($_FILES['flyer']['name']);
    move_uploaded_file($_FILES['flyer']['tmp_name'], $flyer_path);
}

// Email template
$email_template = "
<style>
    html,
    body {
        margin: 0 auto !important;
        padding: 0 !important;
        height: 100% !important;
        width: 100% !important;
        font-family: 'Roboto', sans-serif !important;
        font-size: 14px;
        margin-bottom: 10px;
        line-height: 24px;
        color: #8094ae;
        font-weight: 400;
    }
    * {
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%;
        margin: 0;
        padding: 0;
    }
    table,
    td {
        mso-table-lspace: 0pt !important;
        mso-table-rspace: 0pt !important;
    }
    table {
        border-spacing: 0 !important;
        border-collapse: collapse !important;
        table-layout: fixed !important;
        margin: 0 auto !important;
    }
    table table table {
        table-layout: auto;
    }
    a {
        text-decoration: none;
    }
    img {
        -ms-interpolation-mode:bicubic;
    }
</style>

<center style='width: 100%; background-color: #f5f6fa;'>
    <table width='100%' border='0' cellpadding='0' cellspacing='0' bgcolor='#f5f6fa'>
        <tr>
           <td style='padding: 40px 0;'>
                <table style='width:100%;max-width:620px;margin:0 auto;'>
                    <tbody>
                        <tr>
                            <td style='text-align: center; padding-bottom:25px'>
                                <a href='https://georgenekoko.com' target='_blank'><img style='height: 60px' src='https://georgenekoko.com/logo.png' alt='logo'></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table style='width:100%;max-width:620px;margin:0 auto;background-color:#ffffff;'>
                    <tbody align='left'>
                        <tr>
                            <td style='padding: 30px 30px 15px 30px;'>
                                <h2 style='font-size: 18px; color: #F07C00; font-weight: 600; margin: 0;'>$subject</h2>
                            </td>
                        </tr>
                        <tr>
                            <td style='padding: 0 30px 20px;'>
                                <p style='margin-bottom: 10px;'>Hello <b>{name}</b>,</p>
                                <p style='margin-bottom: 10px;'>$body</p><br>
                                <p style='margin-bottom: 10px;'><img src='cid:$flyer_cid' style='max-width:100%;'></p>
                                
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table style='width:100%;max-width:620px;margin:0 auto;'>
                    <tbody>
                        <tr>
                            <td style='text-align: center; padding:25px 20px 0;'>
                                <p style='font-size: 13px;'>Copyright © " . date('Y') . " <strong>Georgenekoko</strong>. All rights reserved. <br> </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
           </td>
        </tr>
    </table>
</center>";

// Database connection
$conn = new mysqli("localhost", "walkermoon", "wetindeh2_Oluwapelumi1@", "wetindeh2_businessdb");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize message variable
$message = '';

if ($result = $conn->query("SELECT businessname, emailaddress FROM register")) {
    while ($row = $result->fetch_assoc()) {
        $mail->addAddress($row['emailaddress'], $row['businessname']);

        // Replace placeholder with recipient's name
        $personalized_body = str_replace("{businessname}", $row['businessname'], $email_template);

        // Email content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $personalized_body;
        $mail->AltBody = strip_tags("Hello " . $row['businessname'] . ",\n" . $body);

        // Attach and embed flyer if uploaded
        if ($flyer_path) {
            $mail->addEmbeddedImage($flyer_path, $flyer_cid);
        }

        // Send email
        try {
            $mail->send();
            $message .= "Message has been sent to " . $row['emailaddress'] . "\\n";
        } catch (Exception $e) {
            $message .= "Message could not be sent to " . $row['emailaddress'] . ". Mailer Error: {$mail->ErrorInfo}\\n";
        }

        // Clear all recipients and attachments for the next iteration
        $mail->clearAddresses();
        $mail->clearAttachments();
    }
    $result->close();
} else {
    $message = "No emails found.";
}

$conn->close();

// Display alert and redirect to index.php
echo "<script type='text/javascript'>
    alert('$message');
    window.location.href = 'index.php';
</script>";
?>
