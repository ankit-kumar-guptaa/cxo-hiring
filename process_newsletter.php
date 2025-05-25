<?php
// Import PHPMailer classes at the top of the file
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Require autoloader
require 'vendor/autoload.php';

// Database connection details
$servername = "localhost";
$username = "recru2l1_cxo_hiring"; 
$password = "Elite@007!"; 
$dbname = "recru2l1_cxo_hiring"; 
// $servername = "localhost";
// $username = "root"; 
// $password = ""; 
// $dbname = "cxo_hiring"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    
    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: index.php?newsletter=invalid");
        exit;
    }
    
    // Check if email already exists
    $check_sql = "SELECT * FROM newsletter_subscribers WHERE email = ?";
    $check_stmt = $conn->prepare($check_sql);
    $check_stmt->bind_param("s", $email);
    $check_stmt->execute();
    $result = $check_stmt->get_result();
    
    if ($result->num_rows > 0) {
        header("Location: index.php?newsletter=exists");
        exit;
    }
    
    // Insert new subscriber
    $sql = "INSERT INTO newsletter_subscribers (email, subscription_date) VALUES (?, NOW())";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    
    if ($stmt->execute()) {
        // Send confirmation email
        $mail = new PHPMailer(true);
        
        try {
            // Enable verbose debug output
            $mail->SMTPDebug = 0; // 0 = off, 1 = client messages, 2 = client and server messages
            
            // Server settings
            $mail->isSMTP();
            $mail->Host       = 'smtp.rediffmailpro.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'cxo@elitecorporatesolutions.com';
            $mail->Password   = 'Cxo@2025!';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;
            
            // Recipients
            $mail->setFrom('rajiv@greencarcarpool.com', 'CXO Hiring');
            $mail->addAddress($email); // Add subscriber
            $mail->addAddress('ankit@elitecorporatesolutions.com'); // Add admin email
            
            // Content
            $mail->isHTML(true);
            $mail->Subject = 'Welcome to CXO Hiring Newsletter';
            $mail->Body = '
                <html>
                <head>
                    <style>
                        body { font-family: Arial, sans-serif; line-height: 1.6; }
                        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                        .header { background-color: #2c3e50; color: white; padding: 20px; text-align: center; }
                        .content { padding: 20px; background-color: #f9f9f9; }
                        .footer { text-align: center; margin-top: 20px; font-size: 12px; color: #777; }
                    </style>
                </head>
                <body>
                    <div class="container">
                        <div class="header">
                            <h2>Welcome to CXO Hiring Newsletter</h2>
                        </div>
                        <div class="content">
                            <p>Dear Subscriber,</p>
                            <p>Thank you for subscribing to our newsletter. You will now receive the latest insights on executive leadership and talent trends.</p>
                            <p>We\'re excited to have you join our community of professionals interested in executive leadership.</p>
                            <p>Best regards,<br>The CXO Hiring Team</p>
                        </div>
                        <div class="footer">
                            <p>© 2025 CXO Hiring. All Rights Reserved.</p>
                            <p>If you wish to unsubscribe, <a href="https://cxohiring.com/unsubscribe?email='.$email.'">click here</a>.</p>
                        </div>
                    </div>
                </body>
                </html>
            ';
            
            // Admin notification
            $adminMail = new PHPMailer(true);
            $adminMail->isSMTP();
            $adminMail->Host       = 'smtp.hostinger.com';
            $adminMail->SMTPAuth   = true;
            $adminMail->Username   = 'rajiv@greencarcarpool.com';
            $adminMail->Password   = 'Rajiv@111@';
            $adminMail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $adminMail->Port       = 587;
            
            $adminMail->setFrom('rajiv@greencarcarpool.com', 'CXO Hiring System');
            $adminMail->addAddress('ankit@elitecorporatesolutions.com');
            
            $adminMail->isHTML(true);
            $adminMail->Subject = 'New Newsletter Subscription';
            $adminMail->Body = '
                <html>
                <body>
                    <h2>New Newsletter Subscription</h2>
                    <p>A new user has subscribed to the CXO Hiring newsletter.</p>
                    <p><strong>Email:</strong> '.$email.'</p>
                    <p><strong>Date:</strong> '.date('Y-m-d H:i:s').'</p>
                </body>
                </html>
            ';
            
            // Send emails
            $mail->send();
            $adminMail->send();
            
            header("Location: index.php?newsletter=success");
        } catch (Exception $e) {
            // Log the error for debugging
            error_log("Mailer Error: " . $mail->ErrorInfo);
            header("Location: index.php?newsletter=error");
        }
    } else {
        header("Location: index.php?newsletter=dberror");
    }
    
    $stmt->close();
    $check_stmt->close();
}

$conn->close();
?>