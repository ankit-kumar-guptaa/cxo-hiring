<?php include "include/assets.php"?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Elite Corporate Solutions | CXO Hire</title>
    <meta name="description" content="Elite Corporate Solutions is a leading manpower recruitment agency in India with over a decade of expertise connecting top talent with leading organizations across IT, Non-IT, and specialized sectors.">
    <meta name="keywords" content="Elite Corporate Solutions, recruitment agency India, executive search firm, talent acquisition, HR solutions, CXO recruitment, leadership hiring, IT recruitment, specialized recruitment">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="assets/css/services.css">
    <style>
        /* About Page Specific Styles */
        :root {
            --primary-color: #0d6efd;
            --primary-dark: #084298;
            --primary-light: rgba(13, 110, 253, 0.1);
            --accent-color: #fd7e14;
            --text-dark: #212529;
            --text-light: #6c757d;
            --white: #ffffff;
            --light-bg: #f8f9fa;
        }
        
        .about-hero {
            background: linear-gradient(135deg, #213756 0%, #0a2e64 100%);
    padding: 8rem 0 6rem;
    color: var(--white);
    position: relative;
    overflow: hidden;
    clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
        }
        
        .about-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80') center/cover;
            opacity: 0.15;
        }
        
        .hero-shape {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 150px;
            background: var(--white);
            clip-path: polygon(0 100%, 100% 0, 100% 100%);
            z-index: 1;
        }
        
        .floating-card {
            position: relative;
            z-index: 10;
            margin-top: -80px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(0,0,0,0.1);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        
        .floating-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 30px 60px rgba(0,0,0,0.15);
        }
        
        .timeline {
            position: relative;
            padding: 30px 0;
        }
        
        .timeline::before {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            left: 50%;
            width: 4px;
            background: linear-gradient(to bottom, var(--primary-color), var(--primary-dark));
            transform: translateX(-50%);
        }
        
        .timeline-item {
            position: relative;
            margin-bottom: 50px;
        }
        
        .timeline-content {
            position: relative;
            width: 45%;
            padding: 30px;
            background: var(--white);
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
        }
        
        .timeline-content:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        }
        
        .timeline-item:nth-child(odd) .timeline-content {
            margin-left: auto;
        }
        
        .timeline-item:nth-child(odd) .timeline-content::before {
            content: '';
            position: absolute;
            top: 30px;
            left: -15px;
            width: 0;
            height: 0;
            border-top: 15px solid transparent;
            border-bottom: 15px solid transparent;
            border-right: 15px solid var(--white);
        }
        
        .timeline-item:nth-child(even) .timeline-content::before {
            content: '';
            position: absolute;
            top: 30px;
            right: -15px;
            width: 0;
            height: 0;
            border-top: 15px solid transparent;
            border-bottom: 15px solid transparent;
            border-left: 15px solid var(--white);
        }
        
        .timeline-dot {
            position: absolute;
            top: 30px;
            left: 50%;
            width: 30px;
            height: 30px;
            background: var(--primary-color);
            border-radius: 50%;
            transform: translateX(-50%);
            z-index: 1;
            box-shadow: 0 0 0 5px rgba(13, 110, 253, 0.2);
            transition: all 0.3s ease;
        }
        
        .timeline-item:hover .timeline-dot {
            background: var(--accent-color);
            box-shadow: 0 0 0 8px rgba(253, 126, 20, 0.2);
        }
        
        .timeline-date {
            display: inline-block;
            padding: 8px 20px;
            background: var(--primary-color);
            color: var(--white);
            border-radius: 30px;
            font-weight: bold;
            margin-bottom: 15px;
            transition: all 0.3s ease;
        }
        
        .timeline-item:hover .timeline-date {
            background: var(--accent-color);
            transform: scale(1.05);
        }
        
        .value-card {
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0,0,0,0.08);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            height: 100%;
            border-top: 5px solid var(--primary-color);
            background: var(--white);
            position: relative;
            z-index: 1;
        }
        
        .value-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 0;
            background: linear-gradient(135deg, var(--primary-light) 0%, rgba(13, 110, 253, 0.05) 100%);
            transition: all 0.5s ease;
            z-index: -1;
        }
        
        .value-card:hover {
            transform: translateY(-20px);
            box-shadow: 0 25px 50px rgba(0,0,0,0.15);
            border-top-color: var(--accent-color);
        }
        
        .value-card:hover::before {
            height: 100%;
        }
        
        .value-icon {
            width: 90px;
            height: 90px;
            background: var(--primary-light);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            box-shadow: 0 10px 20px rgba(13, 110, 253, 0.1);
        }
        
        .value-card:hover .value-icon {
            background: var(--primary-color);
            transform: scale(1.1) rotate(10deg);
            box-shadow: 0 15px 30px rgba(13, 110, 253, 0.2);
        }
        
        .value-card:hover .value-icon i {
            color: var(--white) !important;
        }
        
        .expertise-card {
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            height: 100%;
            border-left: 5px solid var(--primary-color);
            background: var(--white);
        }
        
        .expertise-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 25px 50px rgba(0,0,0,0.15);
            border-left-color: var(--accent-color);
        }
        
        .expertise-icon {
            width: 70px;
            height: 70px;
            background: var(--primary-light);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }
        
        .expertise-card:hover .expertise-icon {
            background: var(--primary-color);
            transform: scale(1.1);
        }
        
        .expertise-card:hover .expertise-icon i {
            color: var(--white) !important;
        }
        
        .stat-card {
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0,0,0,0.08);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            height: 100%;
            border: none;
            position: relative;
            z-index: 1;
        }
        
        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background: var(--primary-color);
            transition: all 0.3s ease;
            z-index: -1;
        }
        
        .stat-card:hover {
            transform: translateY(-15px) scale(1.03);
            box-shadow: 0 25px 50px rgba(0,0,0,0.15);
        }
        
        .stat-card:hover::before {
            width: 100%;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
            opacity: 0.1;
        }
        
        .stat-card .display-4 {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            transition: all 0.3s ease;
        }
        
        .stat-card:hover .display-4 {
            transform: scale(1.1);
        }
        
        .quote-card {
            position: absolute;
            bottom: -30px;
            right: -30px;
            width: 60%;
            background: var(--white);
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
            z-index: 10;
        }
        
        .quote-text {
            position: relative;
        }
        
        .quote-logo {
            width: 50px;
            height: 50px;
            background: var(--light-bg);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .contact-form-wrapper {
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(0,0,0,0.1);
            background: var(--white);
        }
        
        /* .contact-info {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
            color: var(--white);
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        
        .contact-info-item {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        } */
        
        .contact-icon {
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
        }
        
        .animated-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 0;
        }
        
        .animated-bg span {
            position: absolute;
            display: block;
            width: 20px;
            height: 20px;
            background: rgba(255, 255, 255, 0.1);
            animation: animate 25s linear infinite;
            bottom: -150px;
            border-radius: 50%;
        }
        
        .animated-bg span:nth-child(1) {
            left: 25%;
            width: 80px;
            height: 80px;
            animation-delay: 0s;
        }
        
        .animated-bg span:nth-child(2) {
            left: 10%;
            width: 20px;
            height: 20px;
            animation-delay: 2s;
            animation-duration: 12s;
        }
        
        .animated-bg span:nth-child(3) {
            left: 70%;
            width: 20px;
            height: 20px;
            animation-delay: 4s;
        }
        
        .animated-bg span:nth-child(4) {
            left: 40%;
            width: 60px;
            height: 60px;
            animation-delay: 0s;
            animation-duration: 18s;
        }
        
        .animated-bg span:nth-child(5) {
            left: 65%;
            width: 20px;
            height: 20px;
            animation-delay: 0s;
        }
        
        .animated-bg span:nth-child(6) {
            left: 75%;
            width: 110px;
            height: 110px;
            animation-delay: 3s;
        }
        
        .animated-bg span:nth-child(7) {
            left: 35%;
            width: 150px;
            height: 150px;
            animation-delay: 7s;
        }
        
        .animated-bg span:nth-child(8) {
            left: 50%;
            width: 25px;
            height: 25px;
            animation-delay: 15s;
            animation-duration: 45s;
        }
        
        .animated-bg span:nth-child(9) {
            left: 20%;
            width: 15px;
            height: 15px;
            animation-delay: 2s;
            animation-duration: 35s;
        }
        
        .animated-bg span:nth-child(10) {
            left: 85%;
            width: 150px;
            height: 150px;
            animation-delay: 0s;
            animation-duration: 11s;
        }
        
        @keyframes animate {
            0% {
                transform: translateY(0) rotate(0deg);
                opacity: 1;
                border-radius: 50%;
            }
            100% {
                transform: translateY(-1000px) rotate(720deg);
                opacity: 0;
                border-radius: 50%;
            }
        }
        
        @media (max-width: 768px) {
            .about-hero {
                padding: 6rem 0 4rem;
                clip-path: polygon(0 0, 100% 0, 100% 90%, 0 100%);
            }
            
            .timeline::before {
                left: 30px;
            }
            
            .timeline-content {
                width: calc(100% - 60px);
                margin-left: 60px !important;
            }
            
            .timeline-item:nth-child(odd) .timeline-content::before,
            .timeline-item:nth-child(even) .timeline-content::before {
                left: -15px;
                border-right: 15px solid var(--white);
                border-left: 0;
            }
            
            .timeline-dot {
                left: 30px;
            }
            
            .quote-card {
                position: relative;
                bottom: 0;
                right: 0;
                width: 100%;
                margin-top: 30px;
            }
        }
    </style>
</head>

<body>
    <?php include "include/header.php"; ?>

    <!-- ===== ABOUT HERO ===== -->
    <section class="about-hero">
        <div class="animated-bg">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        
        <div class="container position-relative">
            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb breadcrumb-nav">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
            </nav>
            
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-3 fw-bold mb-4">About Elite Corporate Solutions</h1>
                    <p class="lead mb-4 fs-4">Your trusted partner in talent acquisition and HR solutions since 2010</p>
                    <p class="fs-5">Elite Corporate Solutions is a leading manpower recruitment agency in India, connecting top talent with leading organizations across IT, Non-IT, and specialized sectors. With over a decade of expertise, we ensure the perfect match for both employers and job seekers.</p>
                    
                    <div class="d-flex gap-3 mt-5">
                        <a href="#journey" class="btn btn-warning btn-lg px-4 fw-bold rounded-pill">
                            <i class="fas fa-history me-2"></i> Our Journey
                        </a>
                        <a href="#contact" class="btn btn-outline-light btn-lg px-4 rounded-pill">
                            <i class="fas fa-envelope me-2"></i> Contact Us
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80" 
                         alt="Elite Corporate Solutions office" 
                         class="img-fluid rounded-3 shadow-lg" 
                         loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- ===== ABOUT STATS ===== -->
    <section class="py-5 bg-light position-relative" style="margin-top: -50px; z-index: 10;">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="stat-card p-4 rounded-3 h-100 bg-white">
                        <div class="display-4 fw-bold mb-2">15+</div>
                        <p class="mb-0 fw-bold">Years of Excellence</p>
                        <p class="small text-muted">Established in 2010</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card p-4 rounded-3 h-100 bg-white">
                        <div class="display-4 fw-bold mb-2">5000+</div>
                        <p class="mb-0 fw-bold">Successful Placements</p>
                        <p class="small text-muted">Across various industries</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card p-4 rounded-3 h-100 bg-white">
                        <div class="display-4 fw-bold mb-2">200+</div>
                        <p class="mb-0 fw-bold">Corporate Clients</p>
                        <p class="small text-muted">From startups to Fortune 500</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card p-4 rounded-3 h-100 bg-white">
                        <div class="display-4 fw-bold mb-2">15+</div>
                        <p class="mb-0 fw-bold">Industry Sectors</p>
                        <p class="small text-muted">Specialized expertise</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== OUR JOURNEY ===== -->
    <section id="journey" class="py-5 bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-4 fw-bold mb-3">Our Journey</h2>
                <p class="lead text-muted mx-auto" style="max-width: 700px;">Since our establishment in 2010, Elite Corporate Solutions has been at the forefront of revolutionizing recruitment practices in India</p>
            </div>
            
            <div class="timeline">
                <!-- 2010 -->
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-date">2010</div>
                        <h3 class="h4 fw-bold">Foundation</h3>
                        <p>Elite Corporate Solutions was founded with a vision to bridge the gap between talented professionals and leading organizations in India. Starting with a small team of dedicated recruitment specialists, we began our journey in the IT sector.</p>
                    </div>
                </div>
                
                <!-- 2013 -->
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-date">2013</div>
                        <h3 class="h4 fw-bold">Expansion to Multiple Sectors</h3>
                        <p>After establishing a strong presence in IT recruitment, we expanded our services to include manufacturing, healthcare, and finance sectors. This diversification allowed us to serve a broader range of clients and job seekers.</p>
                    </div>
                </div>
                
                <!-- 2015 -->
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-date">2015</div>
                        <h3 class="h4 fw-bold">Launch of Executive Search Division</h3>
                        <p>Recognizing the growing demand for specialized leadership talent, we established our executive search division, CXO Hire, focused on C-suite and senior leadership recruitment across industries.</p>
                    </div>
                </div>
                
                <!-- 2018 -->
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-date">2018</div>
                        <h3 class="h4 fw-bold">Digital Transformation</h3>
                        <p>We embraced digital technologies to enhance our recruitment processes, implementing advanced candidate matching algorithms and creating a comprehensive talent database to better serve our clients.</p>
                    </div>
                </div>
                
                <!-- 2020 -->
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-date">2020</div>
                        <h3 class="h4 fw-bold">10 Years of Excellence</h3>
                        <p>Celebrating a decade of success with over 3,000 successful placements and 150+ corporate clients. Despite the global pandemic, we adapted quickly to remote recruitment practices and continued to deliver exceptional service.</p>
                    </div>
                </div>
                
                <!-- 2023 -->
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-date">2023</div>
                        <h3 class="h4 fw-bold">Global Expansion</h3>
                        <p>Expanding our reach beyond India to serve multinational corporations and facilitate international placements. Our commitment to excellence and deep industry knowledge continues to drive our growth and success.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== OUR EXPERTISE ===== -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h2 class="display-4 fw-bold mb-4">Our Expertise</h2>
                    <p class="lead">A deep understanding of various industry sectors and a commitment to excellence</p>
                    <p>With over a decade of experience in the recruitment industry, Elite Corporate Solutions has developed specialized expertise across multiple sectors. Our team of recruitment professionals combines industry knowledge with a thorough understanding of organizational needs to deliver exceptional talent solutions.</p>
                    
                    <div class="mt-5">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="expertise-card p-4 h-100">
                                    <div class="d-flex mb-3">
                                        <div class="expertise-icon">
                                            <i class="fas fa-laptop-code fa-2x text-primary"></i>
                                        </div>
                                    </div>
                                    <h3 class="h5 mb-2">Information Technology</h3>
                                    <p class="mb-0 small">Specialized recruitment for software development, IT infrastructure, cybersecurity, data science, and digital transformation roles.</p>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="expertise-card p-4 h-100">
                                    <div class="d-flex mb-3">
                                        <div class="expertise-icon">
                                            <i class="fas fa-industry fa-2x text-primary"></i>
                                        </div>
                                    </div>
                                    <h3 class="h5 mb-2">Manufacturing & Engineering</h3>
                                    <p class="mb-0 small">Talent acquisition for production, quality control, R&D, supply chain, and engineering leadership positions.</p>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="expertise-card p-4 h-100">
                                    <div class="d-flex mb-3">
                                        <div class="expertise-icon">
                                            <i class="fas fa-heartbeat fa-2x text-primary"></i>
                                        </div>
                                    </div>
                                    <h3 class="h5 mb-2">Healthcare & Pharmaceuticals</h3>
                                    <p class="mb-0 small">Recruitment solutions for clinical, research, regulatory affairs, and healthcare management professionals.</p>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="expertise-card p-4 h-100">
                                    <div class="d-flex mb-3">
                                        <div class="expertise-icon">
                                            <i class="fas fa-chart-line fa-2x text-primary"></i>
                                        </div>
                                    </div>
                                    <h3 class="h5 mb-2">Finance & Banking</h3>
                                    <p class="mb-0 small">Specialized search for financial analysts, investment professionals, banking executives, and fintech leadership.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80" 
                             alt="Elite Corporate Solutions expertise" 
                             class="img-fluid rounded-3 shadow" 
                             loading="lazy">
                        <div class="quote-card">
                            <div class="quote-text">
                                <i class="fas fa-quote-left text-primary mb-3"></i>
                                <p class="mb-4">Elite Corporate Solutions has been our trusted recruitment partner for over 5 years. Their deep understanding of our industry and organizational needs has consistently delivered exceptional talent that has driven our growth.</p>
                                <div class="d-flex align-items-center">
                                    <div class="quote-logo">
                                        <i class="fas fa-building fa-2x text-secondary"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h4 class="h6 mb-1">Leading Technology Company</h4>
                                        <p class="small mb-0">Chief Human Resources Officer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== OUR VALUES ===== -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Our Core Values</h2>
                <p class="lead text-muted mx-auto" style="max-width: 700px;">The principles that guide our approach to recruitment and client service</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="value-card text-center p-4">
                        <div class="value-icon">
                            <i class="fas fa-handshake fa-2x text-primary"></i>
                        </div>
                        <h3 class="h4 mb-3">Integrity</h3>
                        <p>We operate with the highest ethical standards, ensuring transparency and honesty in all our interactions with clients and candidates.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="value-card text-center p-4">
                        <div class="value-icon">
                            <i class="fas fa-bullseye fa-2x text-primary"></i>
                        </div>
                        <h3 class="h4 mb-3">Excellence</h3>
                        <p>We are committed to delivering exceptional service and results, continuously improving our processes and methodologies to exceed expectations.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="value-card text-center p-4">
                        <div class="value-icon">
                            <i class="fas fa-users fa-2x text-primary"></i>
                        </div>
                        <h3 class="h4 mb-3">Partnership</h3>
                        <p>We build long-term relationships with our clients and candidates, working collaboratively to understand their unique needs and aspirations.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="value-card text-center p-4">
                        <div class="value-icon">
                            <i class="fas fa-lightbulb fa-2x text-primary"></i>
                        </div>
                        <h3 class="h4 mb-3">Innovation</h3>
                        <p>We embrace new technologies and methodologies to enhance our recruitment processes and deliver more effective talent solutions.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="value-card text-center p-4">
                        <div class="value-icon">
                            <i class="fas fa-balance-scale fa-2x text-primary"></i>
                        </div>
                        <h3 class="h4 mb-3">Diversity</h3>
                        <p>We champion diversity and inclusion, helping organizations build teams that reflect a wide range of perspectives, experiences, and backgrounds.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="value-card text-center p-4">
                        <div class="value-icon">
                            <i class="fas fa-chart-line fa-2x text-primary"></i>
                        </div>
                        <h3 class="h4 mb-3">Results-Driven</h3>
                        <p>We focus on delivering measurable outcomes for our clients, with a commitment to finding talent that drives organizational success and growth.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CONTACT SECTION ===== -->
    <section id="contact" class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center mb-5">
                    <h2 class="display-5 fw-bold mb-3">Get in Touch</h2>
                    <p class="lead">Contact us to discuss your talent acquisition needs</p>
                </div>
            </div>
            
            <?php include "include/contactForm.php"; ?>
        </div>
    </section>

    <?php include "include/footer.php"; ?>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>