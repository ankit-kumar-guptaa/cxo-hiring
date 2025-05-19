<?php include "include/assets.php"?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual CXO Services | Elite Corporate Solutions</title>
    <meta name="description" content="Access top-tier C-level professionals on a flexible, scalable basis. Our Virtual CXO solutions provide strategic leadership without the fixed costs of full-time executives.">
    <meta name="keywords" content="virtual CFO, virtual CIO, virtual CHRO, virtual COO, virtual CMO, strategic leadership, executive services, part-time executives, interim management">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/services.css">
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #e67e22;
            --accent-color: #3498db;
            --light-bg: #f8f9fa;
            --dark-bg: #2c3e50;
            --text-color: #333;
            --light-text: #f8f9fa;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            color: var(--text-color);
            overflow-x: hidden;
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Playfair Display', serif;
        }
        
        .hero-section {
            background: linear-gradient(135deg, #2c3e50 0%, #4a6990 100%);
            color: white;
            padding: 120px 0 80px;
            position: relative;
            overflow: hidden;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background-image: url('https://images.unsplash.com/photo-1573164713988-8665fc963095?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');
            background-size: cover;
            background-position: center;
            opacity: 0.15;
            z-index: 0;
        }
        
        .hero-content {
            position: relative;
            z-index: 1;
        }
        
        .hero-image-container {
            position: relative;
            z-index: 1;
        }
        
        .hero-image {
            border-radius: 10px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
            transform: perspective(1000px) rotateY(-5deg);
            transition: all 0.5s ease;
        }
        
        .hero-image:hover {
            transform: perspective(1000px) rotateY(0deg);
        }
        
        .floating-card {
            position: absolute;
            background: white;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            display: flex;
            align-items: center;
            max-width: 280px;
            z-index: 2;
            animation: float 3s ease-in-out infinite;
        }
        
        .card-1 {
            top: 20%;
            right: -50px;
            animation-delay: 0s;
        }
        
        .card-2 {
            bottom: 10%;
            left: -30px;
            animation-delay: 1.5s;
        }
        
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
        
        .service-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            border-top: 5px solid transparent;
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
            border-top: 5px solid var(--secondary-color);
        }
        
        .service-icon {
            width: 60px;
            height: 60px;
            background: rgba(230, 126, 34, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: var(--secondary-color);
        }
        
        .service-list {
            list-style-type: none;
            padding-left: 0;
            margin-bottom: 1.5rem;
        }
        
        .service-list li {
            padding: 0.75rem 0;
            border-bottom: 1px solid rgba(0,0,0,0.05);
            position: relative;
            padding-left: 30px;
        }
        
        .service-list li:before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--secondary-color);
            font-weight: bold;
        }
        
        .service-list li:last-child {
            border-bottom: none;
        }
        
        .result-box {
            background-color: #f8f9fa;
            border-left: 4px solid var(--secondary-color);
            padding: 1.25rem;
            margin: 1.5rem 0;
            border-radius: 0 8px 8px 0;
            font-style: italic;
        }
        
        .other-services {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border-radius: 15px;
            padding: 40px;
            margin-top: 60px;
        }
        
        .service-item {
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
            height: 100%;
        }
        
        .service-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        
        .benefit-section {
            background: linear-gradient(135deg, #2c3e50 0%, #4a6990 100%);
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .benefit-section::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background-image: url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');
            background-size: cover;
            background-position: center;
            opacity: 0.1;
            z-index: 0;
        }
        
        .benefit-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            height: 100%;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .benefit-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.2);
            background: rgba(255, 255, 255, 0.15);
        }
        
        .benefit-icon {
            width: 70px;
            height: 70px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            font-size: 1.75rem;
            color: var(--secondary-color);
        }
        
        .industry-section {
            background: #f8f9fa;
            position: relative;
            overflow: hidden;
        }
        
        .industry-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: radial-gradient(circle, #e9ecef 10%, transparent 10%);
            background-size: 30px 30px;
            opacity: 0.5;
            z-index: 0;
        }
        
        .industry-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
            position: relative;
            z-index: 1;
        }
        
        .industry-item {
            background: white;
            padding: 1.5rem;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            text-align: center;
            transition: all 0.3s ease;
            border-bottom: 3px solid transparent;
        }
        
        .industry-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
            border-bottom: 3px solid var(--secondary-color);
        }
        
        .industry-icon {
            font-size: 2.5rem;
            color: var(--secondary-color);
            margin-bottom: 1rem;
        }
        
        .cta-section {
            background: linear-gradient(135deg, #e67e22 0%, #f39c12 100%);
            color: white;
            border-radius: 15px;
            padding: 60px 40px;
            margin: 80px 0;
            position: relative;
            overflow: hidden;
        }
        
        .cta-section::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            transform: translate(50%, -50%);
        }
        
        .cta-section::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 200px;
            height: 200px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            transform: translate(-50%, 50%);
        }
        
        .cta-content {
            position: relative;
            z-index: 1;
        }
        
        .btn-light-outline {
            background: transparent;
            border: 2px solid white;
            color: white;
            font-weight: 600;
            padding: 12px 30px;
            border-radius: 50px;
            transition: all 0.3s ease;
        }
        
        .btn-light-outline:hover {
            background: white;
            color: var(--secondary-color);
        }
        
        .btn-primary {
            background: var(--secondary-color);
            border: none;
            color: white;
            font-weight: 600;
            padding: 15px 40px;
            border-radius: 50px;
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(230, 126, 34, 0.3);
        }
        
        .btn-primary:hover {
            background: #d35400;
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(230, 126, 34, 0.4);
        }
        
        .whatsapp-float {
            position: fixed;
            bottom: 30px;
            left: 30px;
            background: #25d366;
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            text-align: center;
            font-size: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.15);
            z-index: 100;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }
        
        .whatsapp-float:hover {
            background: #128C7E;
            transform: scale(1.1);
        }
        
        @media (max-width: 991px) {
            .hero-section {
                padding: 80px 0 60px;
            }
            
            .floating-card {
                display: none;
            }
            
            .other-services {
                padding: 30px;
            }
        }
        
        @media (max-width: 767px) {
            .hero-image {
                margin-top: 40px;
                transform: none;
            }
            
            .benefit-card, .service-card, .industry-item {
                margin-bottom: 20px;
            }
            
            .cta-section {
                padding: 40px 20px;
                margin: 40px 0;
            }
        }
    </style>
</head>

<body>
    <?php include "include/header.php"; ?>

    <!-- WhatsApp Float Button
    <a href="https://wa.me/919211460101?text=Hi!%20I'm%20interested%20in%20your%20Virtual%20CXO%20services.%20Can%20you%20provide%20more%20information?" class="whatsapp-float" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a> -->

    <!-- ===== HERO SECTION ===== -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 hero-content">
                    <h1 class="display-4 fw-bold mb-4">Virtual CXO Services</h1>
                    <p class="lead mb-4">Strategic Leadership, On Demand</p>
                    <p>In an era of rapid change and increasing complexity, organizations need experienced leadership to stay competitive—but without the fixed cost of full-time executives. Our Virtual CXO solutions give you access to top-tier C-level professionals who bring strategic insight, operational efficiency, and business acumen—on a flexible, scalable basis.</p>
                    <p>Whether you're a startup looking to scale, a mid-sized company optimizing operations, or a large organization navigating transformation, our Virtual CXOs step in to deliver immediate impact.</p>
                    
                    <div class="d-flex gap-3 mt-5">
                        <a href="#contact" class="btn btn-primary btn-lg px-5 py-3">Get Started</a>
                        <a href="#services" class="btn btn-light-outline btn-lg px-4">Explore Services</a>
                    </div>
                </div>
                <div class="col-lg-6 hero-image-container">
                    <img src="https://media.istockphoto.com/id/1333390966/photo/diverse-employees-on-online-conference-video-call-on-tv-screen-in-meeting-room.jpg?s=612x612&w=0&k=20&c=YfmkHUXurRccwoNORCTi-6hfqvTmw3Zzkmkst4WylRE=" 
                         alt="Virtual CXO Services" 
                         class="img-fluid hero-image" 
                         loading="lazy">
                         
                    <div class="floating-card card-1">
                        <div class="me-3 text-primary">
                            <i class="fas fa-chart-line fa-2x"></i>
                        </div>
                        <div>
                            <h5 class="mb-0">Strategic Leadership</h5>
                            <p class="small mb-0">Without full-time costs</p>
                        </div>
                    </div>
                    
                    <div class="floating-card card-2">
                        <div class="me-3 text-primary">
                            <i class="fas fa-users-cog fa-2x"></i>
                        </div>
                        <div>
                            <h5 class="mb-0">Expert Guidance</h5>
                            <p class="small mb-0">15-25+ years experience</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== OUR SERVICES ===== -->
    <section id="services" class="py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Our Virtual CXO Services</h2>
                <p class="lead text-muted mx-auto" style="max-width: 700px;">Expert leadership solutions tailored to your business needs</p>
            </div>
            
            <div class="row g-4">
                <!-- Virtual CFO -->
                <div class="col-lg-4">
                    <div class="service-card h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-4">
                                <div class="service-icon me-3">
                                    <i class="fas fa-file-invoice-dollar"></i>
                                </div>
                                <h3 class="h4 mb-0">Virtual CFO</h3>
                            </div>
                            
                            <p>Your finance strategy deserves more than bookkeeping and compliance. Our Virtual CFOs are seasoned financial leaders who:</p>
                            
                            <ul class="service-list">
                                <li>Design and implement robust financial strategies</li>
                                <li>Improve cash flow and cost control mechanisms</li>
                                <li>Manage fundraising, investor relations, and M&A support</li>
                                <li>Build financial forecasting, reporting, and budgeting systems</li>
                                <li>Ensure compliance with tax laws, audits, and corporate governance</li>
                            </ul>
                            
                            <div class="result-box">
                                <strong>Result:</strong> Stronger financial discipline, better investor confidence, and strategic planning for long-term sustainability.
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Virtual HR Head -->
                <div class="col-lg-4">
                    <div class="service-card h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-4">
                                <div class="service-icon me-3">
                                    <i class="fas fa-users"></i>
                                </div>
                                <h3 class="h4 mb-0">Virtual HR Head</h3>
                            </div>
                            
                            <p>Human capital is your most valuable asset. Our Virtual HR Heads bring structure and strategy to your workforce by:</p>
                            
                            <ul class="service-list">
                                <li>Setting up or revamping HR policies, SOPs, and compliance systems</li>
                                <li>Leading talent acquisition and performance management processes</li>
                                <li>Implementing employee engagement and retention strategies</li>
                                <li>Driving leadership development and succession planning</li>
                                <li>Managing labor law, POSH compliance, and statutory obligations</li>
                            </ul>
                            
                            <div class="result-box">
                                <strong>Result:</strong> A productive, legally compliant, and motivated workforce aligned to your business goals.
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Virtual IT Head -->
                <div class="col-lg-4">
                    <div class="service-card h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-4">
                                <div class="service-icon me-3">
                                    <i class="fas fa-laptop-code"></i>
                                </div>
                                <h3 class="h4 mb-0">Virtual IT Head</h3>
                            </div>
                            
                            <p>Digital transformation isn't optional—it's mission-critical. Our Virtual IT leaders help you leverage technology for business advantage:</p>
                            
                            <ul class="service-list">
                                <li>Create and execute IT strategies aligned with business objectives</li>
                                <li>Oversee infrastructure, cybersecurity, and data privacy</li>
                                <li>Drive adoption of enterprise platforms (ERP, CRM, etc.)</li>
                                <li>Lead digital transformation and automation projects</li>
                                <li>Ensure IT governance, compliance, and vendor management</li>
                            </ul>
                            
                            <div class="result-box">
                                <strong>Result:</strong> A secure, efficient, and scalable technology environment that supports growth and innovation.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Other CXO Roles -->
            <div class="other-services">
                <h3 class="h3 fw-bold mb-4 text-center">Other Virtual CXO Roles We Offer</h3>
                <p class="text-center mb-5">In addition to finance, HR, and IT, we offer access to virtual leaders in other domains:</p>
                
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="service-item">
                            <div class="d-flex align-items-center mb-3">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-cogs fa-2x"></i>
                                </div>
                                <h4 class="h5 mb-0">Virtual COO (Operations)</h4>
                            </div>
                            <p class="mb-0">Optimize workflows and execution, streamline processes, and drive operational excellence across your organization.</p>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4">
                        <div class="service-item">
                            <div class="d-flex align-items-center mb-3">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-bullhorn fa-2x"></i>
                                </div>
                                <h4 class="h5 mb-0">Virtual CMO (Marketing)</h4>
                            </div>
                            <p class="mb-0">Build brand strategy and digital outreach, develop marketing campaigns, and drive customer acquisition and retention.</p>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4">
                        <div class="service-item">
                            <div class="d-flex align-items-center mb-3">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-chess fa-2x"></i>
                                </div>
                                <h4 class="h5 mb-0">Virtual CSO (Strategy)</h4>
                            </div>
                            <p class="mb-0">Develop roadmaps for long-term growth, identify market opportunities, and create competitive advantage strategies.</p>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4">
                        <div class="service-item">
                            <div class="d-flex align-items-center mb-3">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-balance-scale fa-2x"></i>
                                </div>
                                <h4 class="h5 mb-0">Virtual Compliance Head</h4>
                            </div>
                            <p class="mb-0">Ensure regulatory preparedness, manage legal risks, and develop compliance frameworks for your organization.</p>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4">
                        <div class="service-item">
                            <div class="d-flex align-items-center mb-3">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-building fa-2x"></i>
                                </div>
                                <h4 class="h5 mb-0">Virtual Admin Head</h4>
                            </div>
                            <p class="mb-0">Oversee company-wide administration, streamline office operations, and manage facilities and administrative staff.</p>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4">
                        <div class="service-item">
                            <div class="d-flex align-items-center mb-3">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-handshake fa-2x"></i>
                                </div>
                                <h4 class="h5 mb-0">Virtual Business Development</h4>
                            </div>
                            <p class="mb-0">Drive revenue growth, identify new business opportunities, and develop strategic partnerships and client relationships.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== WHY CHOOSE US ===== -->
    <section class="benefit-section py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Why Choose Our Virtual CXO Services?</h2>
                <p class="lead mx-auto" style="max-width: 700px;">Strategic leadership solutions that deliver measurable results</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <h3 class="h5 mb-3">Experienced Leadership</h3>
                        <p>Get access to domain experts with 15–25+ years of experience, without incurring the cost of a full-time C-suite hire.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <i class="fas fa-sliders-h"></i>
                        </div>
                        <h3 class="h5 mb-3">Flexible Engagement Models</h3>
                        <p>Choose from part-time, project-based, or interim roles to suit your organization's size, stage, and complexity.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <h3 class="h5 mb-3">Quick Onboarding, Faster Impact</h3>
                        <p>Our CXOs bring ready-to-deploy frameworks, KPIs, and best practices—delivering measurable outcomes quickly.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <i class="fas fa-expand-arrows-alt"></i>
                        </div>
                        <h3 class="h5 mb-3">Scalable Support</h3>
                        <p>Our services adapt with your growth—from startup mode to expansion, funding rounds, or pre-IPO stage.</p>
                    </div>
                </div>
            </div>
            
          
        </div>
    </section>

    <!-- ===== INDUSTRIES WE SERVE ===== -->
    <section class="industry-section py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Industries We Serve</h2>
                <p class="lead text-muted mx-auto" style="max-width: 700px;">Specialized expertise across diverse sectors</p>
            </div>
            
            <div class="industry-grid">
                <div class="industry-item">
                    <div class="industry-icon">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <h3 class="h5 mb-2">Healthcare & Hospitals</h3>
                    <p class="small mb-0">Medical facilities, clinics, and healthcare service providers</p>
                </div>

                <div class="industry-item">
                    <div class="industry-icon">
                        <i class="fas fa-shopping-basket"></i>
                    </div>
                    <h3 class="h5 mb-2">E-commerce & Retail</h3>
                    <p class="small mb-0">Online stores, e-commerce platforms, and retail businesses</p>
                </div>

                <div class="industry-item">
                    <div class="industry-icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3 class="h5 mb-2">Manufacturing & Construction</h3>
                    <p class="small mb-0">Industrial facilities, construction companies, and manufacturing plants</p>
                </div>

                <div class="industry-item">
                    <div class="industry-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="h5 mb-2">Financial Services & Banking</h3>
                    <p class="small mb-0">Banks, financial institutions, and insurance companies</p>
                </div>

                <div class="industry-item">
                    <div class="industry-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3 class="h5 mb-2">Education & Training</h3>
                    <p class="small mb-0">Schools, universities, and training institutions</p>
                </div>
                <div class="industry-item">
                    <div class="industry-icon">
                        <i class="fas fa-microchip"></i>
                    </div>
                    <h3 class="h5 mb-2">Technology & SaaS</h3>
                    <p class="small mb-0">Software companies, IT services, and technology startups</p>
                </div>
                
                <div class="industry-item">
                    <div class="industry-icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3 class="h5 mb-2">Manufacturing & Supply Chain</h3>
                    <p class="small mb-0">Production facilities, logistics, and distribution networks</p>
                </div>
                
                <div class="industry-item">
                    <div class="industry-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3 class="h5 mb-2">Education & EdTech</h3>
                    <p class="small mb-0">Schools, universities, and educational technology platforms</p>
                </div>
                
                <div class="industry-item">
                    <div class="industry-icon">
                        <i class="fas fa-landmark"></i>
                    </div>
                    <h3 class="h5 mb-2">FinTech & BFSI</h3>
                    <p class="small mb-0">Banking, financial services, insurance, and financial technology</p>
                </div>
                
                <div class="industry-item">
                    <div class="industry-icon">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h3 class="h5 mb-2">NGOs & Social Enterprises</h3>
                    <p class="small mb-0">Non-profit organizations and social impact ventures</p>
                </div>
                
              
            </div>
        </div>
    </section>

    <!-- ===== CTA SECTION ===== -->
    <section id="contact" class="py-5">
        <div class="container">
            <div class="cta-section">
                <div class="row justify-content-center">
                    <div class="col-lg-10 cta-content text-center">
                        <h2 class="display-5 fw-bold mb-4">Ready to Bring Strategic Leadership to Your Business?</h2>
                        <p class="lead mb-5">Let's discuss how our Virtual CXO experts can help you drive transformation, control costs, and achieve your business goals—without the burden of full-time executive hiring.</p>
                        <div class="d-flex justify-content-center gap-3">
                            <a href="contact.php" class="btn btn-light btn-lg px-5 py-3 rounded-pill">
                                <i class="fas fa-envelope me-2"></i> Contact us today
                            </a>
                            <a href="https://wa.me/919211460101?text=Hi!%20I'm%20interested%20in%20your%20Virtual%20CXO%20services.%20Can%20you%20provide%20more%20information?" class="btn btn-light-outline btn-lg px-4 py-3 rounded-pill" target="_blank">
                                <i class="fab fa-whatsapp me-2"></i> WhatsApp Us
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== TESTIMONIALS ===== -->
    <section class="py-5 bg-light">
        <div class="container py-4">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">What Our Clients Say</h2>
                <p class="lead text-muted mx-auto" style="max-width: 700px;">Hear from businesses that have transformed with our Virtual CXO services</p>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="p-5 bg-white rounded-4 shadow-sm">
                                    <div class="d-flex justify-content-between mb-4">
                                        <div>
                                            <h4 class="mb-1">Transformative Financial Leadership</h4>
                                            <p class="text-muted mb-0">Healthcare Technology Startup</p>
                                        </div>
                                        <div class="text-warning">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <p class="lead fst-italic">"The Virtual CFO service has been instrumental in our growth journey. Within six months, we optimized our cash flow, secured Series A funding, and established financial systems that impressed our investors. The strategic guidance went far beyond what we expected."</p>
                                    <div class="d-flex align-items-center mt-4">
                                        <div class="flex-shrink-0">
                                            <div class="bg-primary bg-opacity-10 rounded-circle p-3">
                                                <i class="fas fa-user text-primary"></i>
                                            </div>
                                        </div>
                                        <div class="ms-3">
                                            <h5 class="mb-0">Rajiv Mehta</h5>
                                            <p class="small mb-0">CEO & Co-founder</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="p-5 bg-white rounded-4 shadow-sm">
                                    <div class="d-flex justify-content-between mb-4">
                                        <div>
                                            <h4 class="mb-1">Strategic HR Transformation</h4>
                                            <p class="text-muted mb-0">Mid-sized Manufacturing Company</p>
                                        </div>
                                        <div class="text-warning">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <p class="lead fst-italic">"Our Virtual HR Head completely revamped our people processes. Employee turnover dropped by 30%, we implemented performance management systems that actually work, and our compliance issues were resolved. The part-time arrangement gave us executive-level expertise at a fraction of the cost."</p>
                                    <div class="d-flex align-items-center mt-4">
                                        <div class="flex-shrink-0">
                                            <div class="bg-primary bg-opacity-10 rounded-circle p-3">
                                                <i class="fas fa-user text-primary"></i>
                                            </div>
                                        </div>
                                        <div class="ms-3">
                                            <h5 class="mb-0">Priya Sharma</h5>
                                            <p class="small mb-0">Managing Director</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="p-5 bg-white rounded-4 shadow-sm">
                                    <div class="d-flex justify-content-between mb-4">
                                        <div>
                                            <h4 class="mb-1">Digital Transformation Success</h4>
                                            <p class="text-muted mb-0">Educational Institution</p>
                                        </div>
                                        <div class="text-warning">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                    </div>
                                    <p class="lead fst-italic">"Our Virtual IT Head guided our digital transformation with expertise we couldn't have afforded full-time. From implementing a new LMS to strengthening our cybersecurity posture, the impact has been tremendous. The flexible arrangement allowed us to access top-tier talent within our budget constraints."</p>
                                    <div class="d-flex align-items-center mt-4">
                                        <div class="flex-shrink-0">
                                            <div class="bg-primary bg-opacity-10 rounded-circle p-3">
                                                <i class="fas fa-user text-primary"></i>
                                            </div>
                                        </div>
                                        <div class="ms-3">
                                            <h5 class="mb-0">Dr. Anand Verma</h5>
                                            <p class="small mb-0">Director</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== FAQ SECTION ===== -->
    <section class="py-5 bg-white">
        <div class="container py-4">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Frequently Asked Questions</h2>
                <p class="lead text-muted mx-auto" style="max-width: 700px;">Common questions about our Virtual CXO services</p>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item border-0 mb-3 shadow-sm">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    How does the Virtual CXO engagement work?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Our Virtual CXO engagements are tailored to your specific needs. We begin with a comprehensive assessment of your organization's requirements, followed by a proposal outlining the scope, deliverables, and engagement model. Depending on your needs, our CXOs can work on a part-time basis (a few days per week/month), project basis, or for interim periods. We establish clear communication channels, reporting structures, and KPIs to ensure accountability and measurable results.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item border-0 mb-3 shadow-sm">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    What are the cost advantages compared to hiring full-time executives?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Virtual CXO services typically cost 30-70% less than hiring a full-time executive when you consider the total compensation package (salary, benefits, bonuses, equity). Additionally, you avoid recruitment costs, onboarding expenses, and long-term commitments. Our flexible engagement models allow you to scale the involvement up or down based on your current needs, providing cost efficiency while still accessing top-tier executive expertise.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item border-0 mb-3 shadow-sm">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How quickly can your Virtual CXOs make an impact?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Our Virtual CXOs typically begin delivering value within the first 2-4 weeks of engagement. They start with quick wins while developing longer-term strategic initiatives. Because they bring pre-built frameworks, templates, and best practices, they can implement improvements much faster than executives starting from scratch. Most clients see measurable improvements in their key metrics within the first 90 days of engagement.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item border-0 mb-3 shadow-sm">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    What qualifications do your Virtual CXOs have?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Our Virtual CXOs are seasoned professionals with 15-25+ years of experience, including significant time in leadership roles at respected organizations. They hold relevant advanced degrees and professional certifications in their domains. Many have led successful transformations, managed large teams, and have experience across multiple industries. We carefully match each client with CXOs who have specific experience relevant to their industry, growth stage, and unique challenges.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item border-0 shadow-sm">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Can a Virtual CXO transition to a full-time role if needed?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, in some cases. While many of our Virtual CXOs prefer the flexibility of part-time arrangements, we can discuss transition possibilities if there's mutual interest. This "try before you buy" approach reduces hiring risk for both parties. Alternatively, our Virtual CXOs can help define the role requirements and assist in recruiting a permanent executive when your organization is ready for that investment.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include "include/footer.php"; ?>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

                