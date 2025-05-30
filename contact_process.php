<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// Check if session is already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Database credentials
$db_host = 'localhost';
$db_user = 'recru2l1_cxo_hiring';
$db_pass = 'Elite@007!';
$db_name = 'recru2l1_cxo_hiring';
// $db_host = 'localhost';
// $db_user = 'root';
// $db_pass = '';
// $db_name = 'cxo_hiring';

// Connect to database
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($conn->connect_error) {
    die('Database connection failed: ' . $conn->connect_error);
}

// Verify reCAPTCHA
$recaptcha_secret = "6LfVUUgrAAAAACYZdWO_B2g-JS8dzvsHHvygr7Cy";
$recaptcha_response = $_POST['g-recaptcha-response'] ?? '';

// Make request to Google reCAPTCHA API
$recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
$recaptcha_data = [
    'secret' => $recaptcha_secret,
    'response' => $recaptcha_response,
    'remoteip' => $_SERVER['REMOTE_ADDR']
];

$recaptcha_options = [
    'http' => [
        'header' => "Content-type: application/x-www-form-urlencoded\r\n",
        'method' => 'POST',
        'content' => http_build_query($recaptcha_data)
    ]
];

$recaptcha_context = stream_context_create($recaptcha_options);
$recaptcha_result = file_get_contents($recaptcha_url, false, $recaptcha_context);
$recaptcha_json = json_decode($recaptcha_result, true);

// Check if reCAPTCHA verification failed
if (!$recaptcha_json['success'] || $recaptcha_json['score'] < 0.5) {
    // For AJAX submissions
    if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
        echo json_encode(['success' => false, 'message' => 'Bot activity detected. Please try again.']);
        exit;
    }
    
    // For regular form submissions
    $_SESSION['form_errors'] = ['Bot activity detected. Please try again.'];
    header('Location: contact.php?error=1');
    exit;
}

// Validate input
$errors = [];
$requiredFields = ['full_name', 'email', 'phone', 'position', 'challenges'];

foreach ($requiredFields as $field) {
    if (!isset($_POST[$field]) || empty(trim($_POST[$field]))) {
        $errors[] = ucfirst(str_replace('_', ' ', $field)) . ' is required';
    }
}

if (isset($_POST['email']) && !empty($_POST['email']) && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Invalid email format';
}

if (!empty($errors)) {
    // For AJAX submissions
    if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
        echo json_encode(['success' => false, 'message' => implode(', ', $errors)]);
        exit;
    }
    
    // For regular form submissions
    $_SESSION['form_errors'] = $errors;
    $_SESSION['form_data'] = $_POST;
    header('Location: contact.php?error=1');
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

// Save to database
$stmt = $conn->prepare("INSERT INTO cxo_requests (full_name, email, phone, company, position, challenges, submitted_at) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss", $data['full_name'], $data['email'], $data['phone'], $data['company'], $data['position'], $data['challenges'], $data['submitted_at']);
if (!$stmt->execute()) {
    echo json_encode(['success' => false, 'message' => 'Database error: ' . $stmt->error]);
    exit;
}
$stmt->close();
$conn->close();

try {
    // Send email to admin
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host       = 'smtp.hostinger.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'rajiv@greencarcarpool.com';
    $mail->Password   = 'Rajiv@111@';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    $mail->setFrom('rajiv@greencarcarpool.com', 'CXO Recruitment');
    $mail->addAddress('rajiv@elitecorporatesolutions.com', 'Admin');

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

    // Redirect to thank you page
    header('Location: thankyou.php');
    exit;

} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"]);
}
?>