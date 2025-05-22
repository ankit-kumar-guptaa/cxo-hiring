<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You | Elite Corporate Solutions</title>
    <?php include "include/assets.php"?>

<!-- Event snippet for Submit lead form conversion page -->



<script>
  gtag('event', 'conversion', {'send_to': 'AW-17101803710/i528CIDbn8saEL6h49o_'});
</script>

    <style>
        .thank-you-section {
            padding: 80px 0;
            min-height: 70vh; /* बढ़ाया गया ऊंचाई */
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f8f9fa;
        }
        
        .thank-you-container {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            padding: 40px;
            text-align: center;
            max-width: 500px; /* थोड़ा छोटा किया */
            width: 100%;
            margin: 0 auto; /* सेंटर में लाने के लिए */
            border-top: 5px solid #0d6efd;
        }
        
        /* बाकी स्टाइल्स रहेंगे */
        .thank-you-container h1 {
            color: #0d6efd;
            margin-bottom: 20px;
            font-size: 2.5rem;
        }
        
        .thank-you-container p {
            color: #6c757d;
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 30px;
        }
        
        .home-btn {
            display: inline-block;
            background: linear-gradient(135deg, #0d6efd, #0a58ca);
            color: #fff;
            padding: 12px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(13, 110, 253, 0.2);
        }
        
        .home-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(13, 110, 253, 0.4);
            color: #fff;
        }
        
        .check-icon {
            background: #e8f3fe;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
        }
        
        .check-icon i {
            color: #0d6efd;
            font-size: 40px;
        }
        
        @media (max-width: 768px) {
            .thank-you-container {
                padding: 30px 20px;
            }
            
            .thank-you-container h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <?php include "include/header.php"?>
    
    <section class="thank-you-section">
        <div class="container">
            <div class="thank-you-container">
                <div class="check-icon">
                    <i class="fas fa-check"></i>
                </div>
                <h1>Thank You!</h1>
                <p>Your form has been submitted successfully.<br>Our team will contact you soon.</p>
                <a href="index.php" class="home-btn"><i class="fas fa-home me-2"></i>Go to Home Page</a>
            </div>
        </div>
    </section>

    <?php include "include/footer.php"?>
</body>
</html>