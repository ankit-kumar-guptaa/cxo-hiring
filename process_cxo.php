<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

header('Content-Type: application/json');

// Validate input
$errors = [];
$requiredFields = ['full_name', 'email', 'phone', 'position', 'challenges'];

foreach ($requiredFields as $field) {
    if (empty($_POST[$field])) {
        $errors[] = ucfirst(str_replace('_', ' ', $field)) . ' is required';
    }
}

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Invalid email format';
}

if (!empty($errors)) {
    echo json_encode(['success' => false, 'message' => implode(', ', $errors)]);
    exit;
}

// Process form data
$data = [
    'full_name' => htmlspecialchars($_POST['full_name']),
    'email' => htmlspecialchars($_POST['email']),
    'phone' => htmlspecialchars($_POST['phone']),
    'company' => htmlspecialchars($_POST['company'] ?? ''),
    'position' => htmlspecialchars($_POST['position']),
    'challenges' => htmlspecialchars($_POST['challenges']),
    'submitted_at' => date('Y-m-d H:i:s')
];

try {
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cxo_hiring";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        throw new Exception("Database connection failed: " . $conn->connect_error);
    }
    
    // Insert data into database
    $sql = "INSERT INTO cxo_applications (full_name, email, phone, company, position, challenges, submitted_at) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssss", 
        $data['full_name'], 
        $data['email'], 
        $data['phone'], 
        $data['company'], 
        $data['position'], 
        $data['challenges'], 
        $data['submitted_at']
    );
    
    $stmt->execute();
    $stmt->close();
    $conn->close();
    
    // Send email to admin
    $mail = new PHPMailer(true);
    
    // SMTP Configuration
    $mail->isSMTP();
    $mail->Host       = 'smtp.hostinger.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'rajiv@greencarcarpool.com';
    $mail->Password   = 'Rajiv@111@';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;
    
    // Recipients
    $mail->setFrom('rajiv@greencarcarpool.com', 'CXO Recruitment');
    $mail->addAddress('ankitkumarsahuu@gmail.com', 'Admin');
    
    // Content
    $mail->isHTML(true);
    $mail->Subject = 'New CXO Request: ' . $data['position'];
    $mail->Body    = "
        <h2>New CXO Request</h2>
        <p><strong>Name:</strong> {$data['full_name']}</p>
        <p><strong>Email:</strong> {$data['email']}</p>
        <p><strong>Phone:</strong> {$data['phone']}</p>
        <p><strong>Company:</strong> {$data['company']}</p>
        <p><strong>Position:</strong> {$data['position']}</p>
        <p><strong>Challenges:</strong> {$data['challenges']}</p>
        <p><strong>Submitted At:</strong> {$data['submitted_at']}</p>
    ";
    
    $mail->send();
    
    // Send confirmation to user
    $userMail = new PHPMailer(true);
    $userMail->isSMTP();
    $userMail->Host       = 'smtp.hostinger.com';
    $userMail->SMTPAuth   = true;
    $userMail->Username   = 'rajiv@greencarcarpool.com';
    $userMail->Password   = 'Rajiv@111@';
    $userMail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $userMail->Port       = 587;
    
    $userMail->setFrom('rajiv@greencarcarpool.com', 'CXO Recruitment');
    $userMail->addAddress($data['email'], $data['full_name']);
    
    $userMail->isHTML(true);
    $userMail->Subject = 'Your CXO Request Received';
    $userMail->Body    = "
        <h2>Thank You, {$data['full_name']}!</h2>
        <p>We've received your request for a {$data['position']} and our team will contact you within 24 hours.</p>
        <p><strong>Request Details:</strong></p>
        <ul>
            <li><strong>Position:</strong> {$data['position']}</li>
            <li><strong>Submitted:</strong> {$data['submitted_at']}</li>
        </ul>
        <p>If you have any questions, please reply to this email.</p>
        <p>Best regards,<br>CXO Recruitment Team</p>
    ";
    
    $userMail->send();
    
    echo json_encode(['success' => true]);
    
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => "Error: " . $e->getMessage()]);
    exit;
}