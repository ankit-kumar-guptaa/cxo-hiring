<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elite Corporate Solutions - Premier Global Recruitment Services</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php include "include/assets.php" ?>
</head>

<body>

    <?php include "include/header.php" ?>

    <!-- Hero Section -->
    <!-- <section class="hero" id="home">
        <div class="hero-content">
            <h1>Transform Your Business With World-Class Talent Across All Industries</h1>
            <p>Elite Corporate Solutions connects organizations worldwide with exceptional talent in Healthcare, IT, Construction, Petroleum, Engineering, and all major industries across UAE, India, USA, and beyond to drive growth and innovation.</p>
            <div class="hero-buttons">
                <a href="#!" class="cta-button open-recruit-modal">Hire Talent <i class="fas fa-arrow-right"></i></a>
                <a href="#services" class="cta-button secondary">Our Services <i class="fas fa-search"></i></a>
            </div>
        </div>
    </section> -->

    <!-- Hero Section -->
<section class="ecs-recruitment-hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 order-2 order-lg-1">
                <div class="ecs-hero-main-content">
                    <div class="ecs-company-badge">
                        <i class="fas fa-briefcase"></i>
                        <span>Elite Corporate Solutions</span>
                    </div>
                    
                    <h1 class="ecs-main-heading">Building Teams for Healthcare, IT, Construction & More</h1>
                    
                    <p class="ecs-hero-tagline">
                        Your Global Recruitment Partner — over 5000 placements in India, UAE, Dubai, USA, Europe. Connecting top talent and driving innovation worldwide.
                    </p>
                    
                    <div class="ecs-stats-wrapper">
                        <div class="ecs-stat-box">
                            <i class="fas fa-globe"></i>
                            <div>
                                <strong>15+</strong>
                                <span>Countries</span>
                            </div>
                        </div>
                        
                        <div class="ecs-stat-box">
                            <i class="fas fa-users"></i>
                            <div>
                                <strong>5000+</strong>
                                <span>Placements</span>
                            </div>
                        </div>
                        
                        <div class="ecs-stat-box">
                            <i class="fas fa-trophy"></i>
                            <div>
                                <strong>Award</strong>
                                <span>Winning</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="ecs-cta-buttons">
                        <a href="#!" class="ecs-primary-btn open-recruit-modal">
                            Hire Talent <i class="fas fa-arrow-right"></i>
                        </a>
                        <a href="#services" class="ecs-secondary-btn">
                            Our Services <i class="fas fa-search"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 col-md-12 order-1 order-lg-2">
                <div class="ecs-image-section-wrapper">
                    <div class="ecs-main-image-container">
                        <img src="https://www.bobsearch.com/wp-content/uploads/2025/01/executive-process.jpg" alt="Recruitment Hero" class="ecs-hero-main-image">
                    </div>
                    
                    <!-- Success Rate Card -->
                    <div class="ecs-float-card ecs-success-rate-card">
                        <div class="ecs-card-top-header">
                            <i class="fas fa-check-circle"></i>
                            <span>Success Rate</span>
                        </div>
                        <div class="ecs-circular-progress">
                            <svg width="70" height="70">
                                <circle cx="35" cy="35" r="30" class="ecs-progress-bg-circle"></circle>
                                <circle cx="35" cy="35" r="30" class="ecs-progress-active-circle"></circle>
                            </svg>
                            <span class="ecs-progress-value">90%</span>
                        </div>
                    </div>
                    
                    <!-- Active Recruitments Card - Improved -->
                    <div class="ecs-float-card ecs-recruitment-active-card">
                        <div class="ecs-active-card-header">
                            <i class="fas fa-briefcase"></i>
                            <span>Active Recruitments</span>
                        </div>
                        <div class="ecs-recruitment-count-box">
                            <h3>250+</h3>
                            <p>Open Positions</p>
                        </div>
                        <div class="ecs-industry-tags-wrapper">
                            <span>Healthcare</span>
                            <span>IT</span>
                            <span>Construction</span>
                        </div>
                        <div class="ecs-card-footer-info">
                            <div class="ecs-urgency-badge">
                                <i class="fas fa-bolt"></i>
                                <span>Urgent Hiring</span>
                            </div>
                            <div class="ecs-location-mini">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Global</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Global Presence Card -->
                    <div class="ecs-float-card ecs-global-location-card">
                        <div class="ecs-location-icon-box">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="ecs-location-text-box">
                            <p>Global Presence</p>
                            <h4 id="ecsLocationChanger">India</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Hero Section - Professional Layout */
    .ecs-recruitment-hero-section {
        background: linear-gradient(135deg, #4a5fc1 0%, #3b4cb8 50%, #2d3a8c 100%);
        padding: 60px 0;
        position: relative;
        overflow: hidden;
    }

    .ecs-recruitment-hero-section::before {
        content: '';
        position: absolute;
        top: -20%;
        right: -15%;
        width: 500px;
        height: 500px;
        background: radial-gradient(circle, rgba(255,255,255,0.08) 0%, transparent 70%);
        border-radius: 50%;
    }

    .ecs-hero-main-content {
        position: relative;
        z-index: 2;
    }

    /* Company Badge */
    .ecs-company-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(10px);
        padding: 8px 18px;
        border-radius: 30px;
        margin-bottom: 20px;
    }

    .ecs-company-badge i {
        font-size: 16px;
        color: #ffd700;
    }

    .ecs-company-badge span {
        color: #ffffff;
        font-weight: 600;
        font-size: 14px;
    }

    /* Main Heading */
    .ecs-main-heading {
        font-size: 42px;
        font-weight: 700;
        color: #ffffff;
        line-height: 1.3;
        margin-bottom: 20px;
    }

    /* Hero Tagline */
    .ecs-hero-tagline {
        font-size: 16px;
        color: rgba(255, 255, 255, 0.9);
        line-height: 1.7;
        margin-bottom: 30px;
        max-width: 550px;
    }

    /* Stats Wrapper */
    .ecs-stats-wrapper {
        display: flex;
        gap: 25px;
        margin-bottom: 30px;
        flex-wrap: wrap;
    }

    .ecs-stat-box {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .ecs-stat-box i {
        font-size: 24px;
        color: #ffd700;
    }

    .ecs-stat-box div {
        display: flex;
        flex-direction: column;
    }

    .ecs-stat-box strong {
        font-size: 20px;
        font-weight: 700;
        color: #ffffff;
        line-height: 1;
    }

    .ecs-stat-box span {
        font-size: 12px;
        color: rgba(255, 255, 255, 0.8);
        margin-top: 3px;
    }

    /* CTA Buttons */
    .ecs-cta-buttons {
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
    }

    .ecs-primary-btn {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: #ffffff;
        color: #3b4cb8;
        padding: 13px 30px;
        border-radius: 8px;
        font-size: 15px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .ecs-primary-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        color: #3b4cb8;
    }

    .ecs-primary-btn i {
        font-size: 14px;
        transition: transform 0.3s ease;
    }

    .ecs-primary-btn:hover i {
        transform: translateX(5px);
    }

    .ecs-secondary-btn {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: transparent;
        color: #ffffff;
        padding: 13px 30px;
        border-radius: 8px;
        font-size: 15px;
        font-weight: 600;
        text-decoration: none;
        border: 2px solid rgba(255, 255, 255, 0.3);
        transition: all 0.3s ease;
    }

    .ecs-secondary-btn:hover {
        background: rgba(255, 255, 255, 0.1);
        border-color: rgba(255, 255, 255, 0.5);
        color: #ffffff;
        transform: translateY(-3px);
    }

    /* Image Section */
    .ecs-image-section-wrapper {
        position: relative;
        padding: 20px;
    }

    .ecs-main-image-container {
        position: relative;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
    }

    .ecs-hero-main-image {
        width: 100%;
        height: auto;
        display: block;
    }

    /* Floating Cards */
    .ecs-float-card {
        position: absolute;
        background: #ffffff;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        padding: 16px;
        animation: ecsFloatAnimation 3.5s ease-in-out infinite;
    }

    @keyframes ecsFloatAnimation {
        0%, 100% {
            transform: translateY(0px);
        }
        50% {
            transform: translateY(-12px);
        }
    }

    /* Success Rate Card */
    .ecs-success-rate-card {
        top: 10%;
        left: -6%;
        padding: 16px 20px;
        min-width: 170px;
    }

    .ecs-card-top-header {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 12px;
        font-size: 13px;
        font-weight: 600;
        color: #2b2d42;
    }

    .ecs-card-top-header i {
        font-size: 16px;
        color: #00d9a5;
    }

    .ecs-circular-progress {
        position: relative;
        width: 70px;
        height: 70px;
        margin: 0 auto;
    }

    .ecs-progress-bg-circle {
        fill: none;
        stroke: #e0e0e5;
        stroke-width: 6;
    }

    .ecs-progress-active-circle {
        fill: none;
        stroke: #00d9a5;
        stroke-width: 6;
        stroke-dasharray: 188;
        stroke-dashoffset: 19;
        stroke-linecap: round;
        transform: rotate(-90deg);
        transform-origin: 50% 50%;
        animation: ecsProgressAnim 2s ease-out forwards;
    }

    @keyframes ecsProgressAnim {
        from {
            stroke-dashoffset: 188;
        }
        to {
            stroke-dashoffset: 19;
        }
    }

    .ecs-progress-value {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 20px;
        font-weight: 700;
        color: #00d9a5;
    }

    /* Active Recruitments Card - Enhanced */
    .ecs-recruitment-active-card {
        top: 40%;
        right: -8%;
        min-width: 260px;
        animation-delay: 0.5s;
    }

    .ecs-active-card-header {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 14px;
        font-size: 13px;
        font-weight: 600;
        color: #2b2d42;
    }

    .ecs-active-card-header i {
        font-size: 14px;
        color: #3b4cb8;
    }

    .ecs-recruitment-count-box {
        text-align: center;
        margin-bottom: 14px;
    }

    .ecs-recruitment-count-box h3 {
        font-size: 36px;
        font-weight: 800;
        color: #3b4cb8;
        margin: 0;
        line-height: 1;
    }

    .ecs-recruitment-count-box p {
        font-size: 12px;
        color: #656565;
        margin: 6px 0 0 0;
    }

    .ecs-industry-tags-wrapper {
        display: flex;
        gap: 6px;
        flex-wrap: wrap;
        justify-content: center;
        margin-bottom: 14px;
    }

    .ecs-industry-tags-wrapper span {
        background: #f0f0f5;
        padding: 5px 12px;
        border-radius: 15px;
        font-size: 10px;
        font-weight: 600;
        color: #2b2d42;
    }

    /* Card Footer Info - New Addition */
    .ecs-card-footer-info {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-top: 12px;
        border-top: 1px solid #e8e8f0;
    }

    .ecs-urgency-badge {
        display: flex;
        align-items: center;
        gap: 5px;
        background: linear-gradient(135deg, #ff6b6b 0%, #ff5252 100%);
        padding: 5px 10px;
        border-radius: 12px;
    }

    .ecs-urgency-badge i {
        font-size: 10px;
        color: #ffffff;
        animation: ecsFlashAnim 1.5s ease-in-out infinite;
    }

    @keyframes ecsFlashAnim {
        0%, 100% {
            opacity: 1;
        }
        50% {
            opacity: 0.5;
        }
    }

    .ecs-urgency-badge span {
        font-size: 10px;
        font-weight: 700;
        color: #ffffff;
    }

    .ecs-location-mini {
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .ecs-location-mini i {
        font-size: 11px;
        color: #3b4cb8;
    }

    .ecs-location-mini span {
        font-size: 11px;
        font-weight: 600;
        color: #656565;
    }

    /* Global Presence Card */
    .ecs-global-location-card {
        bottom: 15%;
        left: 4%;
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 14px 20px;
        min-width: 210px;
        animation-delay: 1s;
    }

    .ecs-location-icon-box {
        width: 45px;
        height: 45px;
        background: linear-gradient(135deg, #ffd700 0%, #ffed4e 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        color: #3b4cb8;
        animation: ecsPulseAnim 2s ease-in-out infinite;
    }

    @keyframes ecsPulseAnim {
        0%, 100% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.08);
        }
    }

    .ecs-location-text-box {
        flex: 1;
    }

    .ecs-location-text-box p {
        font-size: 11px;
        color: #656565;
        margin: 0 0 4px 0;
        font-weight: 500;
    }

    .ecs-location-text-box h4 {
        font-size: 20px;
        font-weight: 700;
        color: #2b2d42;
        margin: 0;
        animation: ecsSlideInAnim 0.5s ease-out;
    }

    @keyframes ecsSlideInAnim {
        from {
            opacity: 0;
            transform: translateX(-15px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    /* Responsive Design */
    @media (max-width: 991px) {
        .ecs-recruitment-hero-section {
            padding: 50px 0;
        }

        .ecs-main-heading {
            font-size: 36px;
        }

        .ecs-float-card {
            display: none;
        }

        .ecs-stats-wrapper {
            justify-content: center;
        }

        .ecs-cta-buttons {
            justify-content: center;
        }

        .ecs-hero-tagline {
            text-align: center;
            margin-left: auto;
            margin-right: auto;
        }

        .ecs-company-badge {
            margin-left: auto;
            margin-right: auto;
        }
    }

    @media (max-width: 767px) {
        .ecs-main-heading {
            font-size: 28px;
        }

        .ecs-hero-tagline {
            font-size: 14px;
        }

        .ecs-stat-box strong {
            font-size: 18px;
        }

        .ecs-stat-box span {
            font-size: 11px;
        }

        .ecs-primary-btn,
        .ecs-secondary-btn {
            padding: 12px 25px;
            font-size: 14px;
        }
    }
</style>

<script>
    // Location Changer Animation
    const ecsLocations = ['India', 'USA', 'UAE', 'Dubai', 'Europe'];
    let ecsCurrentIndex = 0;
    const ecsLocationEl = document.getElementById('ecsLocationChanger');

    function ecsUpdateLocation() {
        ecsLocationEl.style.opacity = '0';
        ecsLocationEl.style.transform = 'translateX(-15px)';
        
        setTimeout(() => {
            ecsCurrentIndex = (ecsCurrentIndex + 1) % ecsLocations.length;
            ecsLocationEl.textContent = ecsLocations[ecsCurrentIndex];
            
            ecsLocationEl.style.animation = 'none';
            setTimeout(() => {
                ecsLocationEl.style.animation = 'ecsSlideInAnim 0.5s ease-out';
                ecsLocationEl.style.opacity = '1';
                ecsLocationEl.style.transform = 'translateX(0)';
            }, 50);
        }, 400);
    }

    setInterval(ecsUpdateLocation, 3000);
</script>



    <!-- Stats Section -->
    <section class="stats">
        <div class="stats-container">
            <div class="stat-item">
                <div class="stat-number">5000+</div>
                <div class="stat-label">Global Placements</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">97%</div>
                <div class="stat-label">Retention Rate</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">20+</div>
                <div class="stat-label">Years Experience</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">15+</div>
                <div class="stat-label">Countries Served</div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
        <div class="section-title">
            <h2>About Elite Corporate Solutions</h2>
            <p>We are a premier global recruitment firm specializing in talent acquisition across Healthcare, IT, Construction, Petroleum, and all major industries worldwide.</p>
        </div>
        <div class="about-content">
            <div class="about-text">
                <h3>Your Trusted Global Partner for Talent Acquisition</h3>
                <p>Elite Corporate Solutions has established itself as a leader in international recruitment, known for our rigorous methodology, extensive global network, and deep understanding of talent requirements across diverse sectors including Healthcare, IT, Construction, Petroleum, Engineering, and more across UAE, India, USA, Europe, and Asia-Pacific.</p>
                <p>We go beyond traditional recruitment by focusing on cultural fit, skill alignment, and strategic matching to ensure long-term success for both our clients and candidates across borders.</p>
                <div class="about-features">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <div class="feature-text">
                            <h4>Precision Matching</h4>
                            <p>Our proprietary assessment tools ensure perfect alignment between candidate capabilities and organizational needs globally across all industries.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-globe"></i>
                        </div>
                        <div class="feature-text">
                            <h4>Global Reach</h4>
                            <p>Access to an extensive network of talent across UAE, India, USA, Europe, Middle East, and Asia-Pacific regions in all major sectors.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="feature-text">
                            <h4>Discretion Assured</h4>
                            <p>Complete confidentiality for sensitive searches and talent transitions across all markets and industries.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-image">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTyDgnA2p6Mf3JnXxYkIU6z839avbKVrzGmUA&s"
                    alt="Executive team meeting">
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="services">
        <div class="section-title">
            <h2>Our Global Recruitment Services</h2>
            <p>Comprehensive solutions tailored to your international hiring needs across all industries</p>
        </div>
        <div class="services-container">
            <div class="service-card">
                <div class="service-image">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                        alt="Executive Search">
                </div>
                <div class="service-content">
                    <h3>Executive & Leadership Hiring</h3>
                    <p>End-to-end recruitment for senior leadership positions across Healthcare, IT, Construction, Petroleum, and all industries in UAE, India, USA, and international markets.</p>
                    <a href="full-scale-search.php" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="service-card">
                <div class="service-image">
                    <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80"
                        alt="IT Recruitment">
                </div>
                <div class="service-content">
                    <h3>IT & Technology Recruitment</h3>
                    <p>Specialized recruitment services for Software Engineers, Data Scientists, Cloud Architects, Cybersecurity Experts, and all IT roles across global markets.</p>
                    <a href="confidential-executive-search.php" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="service-card">
                <div class="service-image">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80"
                        alt="Healthcare Recruitment">
                </div>
                <div class="service-content">
                    <h3>Healthcare Recruitment</h3>
                    <p>Comprehensive hiring solutions for Doctors, Nurses, Medical Specialists, Healthcare Administrators, and all medical professionals internationally.</p>
                    <a href="leader-transition-service.php" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="service-card">
                <div class="service-image">
                    <img src="https://images.unsplash.com/photo-1573164713988-8665fc963095?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80"
                        alt="Construction Recruitment">
                </div>
                <div class="service-content">
                    <h3>Construction & Engineering</h3>
                    <p>Specialized recruitment for Civil Engineers, Project Managers, Site Supervisors, Architects, and all construction professionals for global projects.</p>
                    <a href="board-advisory.php" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="service-card">
                <div class="service-image">
                    <img src="https://images.unsplash.com/photo-1521791055366-0d553872125f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80"
                        alt="Petroleum Recruitment">
                </div>
                <div class="service-content">
                    <h3>Petroleum & Energy Sector</h3>
                    <p>Expert recruitment for Petroleum Engineers, Drilling Specialists, Refinery Managers, Energy Consultants, and oil & gas professionals globally.</p>
                    <a href="diversity-search.php" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="service-card">
                <div class="service-image">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                        alt="Manufacturing Recruitment">
                </div>
                <div class="service-content">
                    <h3>Manufacturing & Operations</h3>
                    <p>Complete recruitment solutions for Production Managers, Quality Controllers, Operations Managers, and all manufacturing roles across industries.</p>
                    <a href="virtual-cxo-services.php" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="process" id="process">
        <div class="section-title">
            <h2>Our Proven Global Recruitment Process</h2>
            <p>A rigorous methodology that delivers exceptional results worldwide across all industries</p>
        </div>
        <div class="process-steps">
            <div class="step">
                <div class="step-number">1</div>
                <h4>Requirement Analysis</h4>
                <p>Deep understanding of your industry-specific needs, company culture, and strategic objectives across global markets.</p>
            </div>
            <div class="step">
                <div class="step-number">2</div>
                <h4>Global Talent Mapping</h4>
                <p>Comprehensive identification of qualified candidates in Healthcare, IT, Construction, Petroleum, and other sectors across UAE, India, USA, and international markets.</p>
            </div>
            <div class="step">
                <div class="step-number">3</div>
                <h4>Candidate Screening</h4>
                <p>Rigorous assessment and verification of technical skills, experience, and qualifications across multiple industries and geographies.</p>
            </div>
            <div class="step">
                <div class="step-number">4</div>
                <h4>Interview & Selection</h4>
                <p>Carefully vetted shortlist of top-tier candidates matched to your specific industry requirements for consideration.</p>
            </div>
            <div class="step">
                <div class="step-number">5</div>
                <h4>Placement Support</h4>
                <p>Ensuring smooth transition and successful integration of talent across borders, cultures, and industries.</p>
            </div>
        </div>
    </section>

    <!-- Industries Section -->
    <section class="industries" id="industries">
        <div class="section-title">
            <h2>Industries We Serve Globally</h2>
            <p>Specialized expertise across key sectors worldwide</p>
        </div>
        <div class="industries-grid">
            <div class="industry-card">
                <div class="industry-icon">
                    <i class="fas fa-heartbeat"></i>
                </div>
                <h4>Healthcare</h4>
                <p>Doctors, Nurses, Medical Specialists, Healthcare Administrators</p>
            </div>
            <div class="industry-card">
                <div class="industry-icon">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <h4>Information Technology</h4>
                <p>Software Engineers, Data Scientists, Cloud Architects, Cybersecurity</p>
            </div>
            <div class="industry-card">
                <div class="industry-icon">
                    <i class="fas fa-hard-hat"></i>
                </div>
                <h4>Construction</h4>
                <p>Civil Engineers, Project Managers, Site Supervisors, Architects</p>
            </div>
            <div class="industry-card">
                <div class="industry-icon">
                    <i class="fas fa-oil-can"></i>
                </div>
                <h4>Petroleum & Energy</h4>
                <p>Petroleum Engineers, Drilling Specialists, Refinery Managers</p>
            </div>
            <div class="industry-card">
                <div class="industry-icon">
                    <i class="fas fa-industry"></i>
                </div>
                <h4>Manufacturing</h4>
                <p>Production Managers, Quality Controllers, Operations Managers</p>
            </div>
            <div class="industry-card">
                <div class="industry-icon">
                    <i class="fas fa-dollar-sign"></i>
                </div>
                <h4>Banking & Finance</h4>
                <p>Financial Analysts, Accountants, Investment Managers, Auditors</p>
            </div>
            <div class="industry-card">
                <div class="industry-icon">
                    <i class="fas fa-hotel"></i>
                </div>
                <h4>Hospitality & Tourism</h4>
                <p>Hotel Managers, Chefs, Front Desk, Hospitality Professionals</p>
            </div>
            <div class="industry-card">
                <div class="industry-icon">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <h4>Retail & E-commerce</h4>
                <p>Store Managers, Sales Associates, Supply Chain, Logistics</p>
            </div>
        </div>
    </section>

    <!-- Methodology Section -->
    <section class="methodology" id="methodology">
        <div class="section-title">
            <h2 data-aos="fade-up">Our Global Talent Selection Methodology</h2>
            <p data-aos="fade-up" data-aos-delay="100">Proven framework for identifying exceptional talent across all industries worldwide</p>
        </div>
        <div class="methodology-container">
            <div class="methodology-card" data-aos="fade-right" data-aos-delay="200">
                <div class="methodology-icon">
                    <i class="fas fa-user-check"></i>
                </div>
                <div class="methodology-content">
                    <h3>Comprehensive Skill Assessment</h3>
                    <p>We evaluate technical skills, industry experience, and competencies through rigorous interviews, practical tests, and background verification tailored for each sector.</p>
                    <div class="methodology-badge">Phase 1</div>
                </div>
            </div>
            <div class="methodology-card" data-aos="fade-right" data-aos-delay="300">
                <div class="methodology-icon">
                    <i class="fas fa-briefcase"></i>
                </div>
                <div class="methodology-content">
                    <h3>Industry-Specific Matching</h3>
                    <p>Deep understanding of Healthcare, IT, Construction, Petroleum, and other sectors to ensure perfect alignment with your industry requirements.</p>
                    <div class="methodology-badge">Phase 2</div>
                </div>
            </div>
            <div class="methodology-card" data-aos="fade-right" data-aos-delay="400">
                <div class="methodology-icon">
                    <i class="fas fa-passport"></i>
                </div>
                <div class="methodology-content">
                    <h3>Global Mobility Support</h3>
                    <p>Complete assistance with visa processing, relocation, and compliance for international placements across UAE, India, USA, and beyond.</p>
                    <div class="methodology-badge">Phase 3</div>
                </div>
            </div>
            <div class="methodology-card" data-aos="fade-right" data-aos-delay="500">
                <div class="methodology-icon">
                    <i class="fas fa-hands-helping"></i>
                </div>
                <div class="methodology-content">
                    <h3>Post-Placement Support</h3>
                    <p>Continuous follow-up and support to ensure successful integration and performance of placed candidates across all industries.</p>
                    <div class="methodology-badge">Phase 4</div>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* Methodology Section Styles */
        .methodology {
            padding: 100px 5%;
            background-color: #f8fafc;
        }

        .methodology-container {
            max-width: 900px;
            margin: 60px auto 0;
        }

        .methodology-card {
            background-color: white;
            border-radius: 12px;
            padding: 30px;
            margin-bottom: 20px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            display: flex;
            align-items: center;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            border-left: 4px solid #2563eb;
        }

        .methodology-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);
        }

        .methodology-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(37, 99, 235, 0.03) 0%, rgba(255, 255, 255, 0) 100%);
            z-index: 0;
        }

        .methodology-icon {
            background: linear-gradient(135deg, #2563eb 0%, #1e40af 100%);
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-right: 25px;
            flex-shrink: 0;
            position: relative;
            z-index: 1;
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.2);
        }

        .methodology-content {
            position: relative;
            z-index: 1;
            flex: 1;
        }

        .methodology-content h3 {
            font-size: 1.3rem;
            color: #1e293b;
            margin-bottom: 12px;
        }

        .methodology-content p {
            color: #64748b;
            font-size: 0.95rem;
            line-height: 1.6;
        }

        .methodology-badge {
            position: absolute;
            top: 10px;
            right: 20px;
            background-color: #f59e0b;
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        @media (max-width: 768px) {
            .methodology-card {
                flex-direction: column;
                text-align: center;
                padding: 25px;
            }

            .methodology-icon {
                margin-right: 0;
                margin-bottom: 20px;
            }

            .methodology-badge {
                position: static;
                display: inline-block;
                margin-top: 15px;
            }
        }
    </style>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="cta-content">
            <h2>Ready to Build Your Dream Team Across Any Industry?</h2>
            <p>Partner with Elite Corporate Solutions to find exceptional talent in Healthcare, IT, Construction, Petroleum, and all major sectors across UAE, India, USA, and beyond.</p>
            <div class="hero-buttons">
                <a href="#he" class="cta-button">Get Started <i class="fas fa-arrow-right"></i></a>
                <a href="tel:+919211610707" class="cta-button secondary"><i class="fas fa-phone"></i> Call Us Now</a>
            </div>
        </div>
    </section>

    <section class="client-carousel-section">
        <div class="container">
            <h2 class="section-title">Our Esteemed Global Clients</h2>
            <div class="client-carousel">
                <div class="client-track">
                    <!-- First Set -->
                    <div class="client-slide">
                        <img src="assets/client/acs.jpg" alt="ACS" class="client-logo">
                    </div>
                    <div class="client-slide">
                        <img src="assets/client/byjus.png" alt="BYJU'S" class="client-logo">
                    </div>
                    <div class="client-slide">
                        <img src="assets/client/ccd.png" alt="CCD" class="client-logo">
                    </div>
                    <div class="client-slide">
                        <img src="assets/client/dtz.png" alt="DTZ" class="client-logo">
                    </div>
                    <div class="client-slide">
                        <img src="assets/client/everest.jpg" alt="Everest" class="client-logo">
                    </div>
                    <div class="client-slide">
                        <img src="assets/client/fortis.png" alt="Fortis" class="client-logo">
                    </div>
                    <div class="client-slide">
                        <img src="assets/client/hcl.png" alt="HCL" class="client-logo">
                    </div>
                    <div class="client-slide">
                        <img src="assets/client/icici.png" alt="ICICI" class="client-logo">
                    </div>
                    <div class="client-slide">
                        <img src="assets/client/indus.png" alt="Inclus" class="client-logo">
                    </div>
                    <div class="client-slide">
                        <img src="assets/client/pvr.jpg" alt="PVR" class="client-logo">
                    </div>

                    <!-- Duplicate for infinite loop -->
                    <div class="client-slide">
                        <img src="assets/client/acs.png" alt="ACS" class="client-logo">
                    </div>
                    <div class="client-slide">
                        <img src="assets/client/byjus.png" alt="BYJU'S" class="client-logo">
                    </div>
                    <div class="client-slide">
                        <img src="assets/client/ccd.png" alt="CCD" class="client-logo">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .client-carousel-section {
            padding: 80px 0;
            background: linear-gradient(135deg, #f5f7fa 0%, #e4e8f0 100%);
            overflow: hidden;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
            font-size: 2.5rem;
            color: #2c3e50;
            position: relative;
        }

        .section-title:after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background: #4e54c8;
            margin: 15px auto 0;
            border-radius: 2px;
        }

        .client-carousel {
            width: 100%;
            overflow: hidden;
            position: relative;
        }

        .client-track {
            display: flex;
            animation: scroll 30s linear infinite;
            width: calc(250px * 13);
        }

        .client-slide {
            flex: 0 0 250px;
            height: 120px;
            margin: 0 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: white;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            padding: 20px;
            transition: all 0.3s ease;
        }

        .client-slide:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .client-logo {
            max-width: 100%;
            max-height: 90px;
            object-fit: contain;
            transition: all 0.3s ease;
        }

        .client-slide:hover .client-logo {
            filter: grayscale(0);
            opacity: 1;
        }

        @keyframes scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(calc(-250px * 6.5));
            }
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .client-track {
                animation: scroll 20s linear infinite;
            }

            .client-slide {
                flex: 0 0 180px;
            }
        }
    </style>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <div class="section-title">
            <h2 id="he" data-aos="fade-up">Connect With Our Global Recruitment Team</h2>
            <p data-aos="fade-up" data-aos-delay="100">Schedule a consultation about your hiring needs across Healthcare, IT, Construction, Petroleum, and more</p>
        </div>
        <div class="contact-container">
            <div class="contact-info">
                <div class="contact-card" data-aos="fade-right">
                    <h3>Our Office</h3>
                    <div class="contact-details">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h4>Corporate Headquarters</h4>
                                <p>916, Astralis Tower, Supernova<br>Sector 94, Noida, India</p>
                                <div class="map-link">
                                    <a href="https://maps.app.goo.gl/npsJKyqJ1aDGZeHe9" target="_blank">View on Map <i
                                            class="fas fa-external-link-alt"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="contact-text">
                                <h4>Direct Line</h4>
                                <p><a href="tel:+919211610707">+919211610707</a></p>
                                <div class="whatsapp-link">
                                    <a href="https://wa.me/919211610707" target="_blank">Chat on WhatsApp <i
                                            class="fab fa-whatsapp"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-text">
                                <h4>Email</h4>
                                <p><a href="mailto:info@elitecorporatesolutions.com">info@elitecorporatesolutions.com</a></p>
                                <div class="email-link">
                                    <a href="mailto:info@elitecorporatesolutions.com">Send Email <i
                                            class="fas fa-paper-plane"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-hours">
                        <h4>Office Hours</h4>
                        <p>Monday - Friday: 9:00 AM - 6:00 PM<br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="contact-form" data-aos="fade-left">
                <h3>Request a Consultation</h3>
                <form>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Full Name*</label>
                            <input type="text" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="company">Company Name</label>
                            <input type="text" id="company" class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">Email Address*</label>
                            <input type="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number*</label>
                            <input type="tel" id="phone" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="position">Industry / Sector</label>
                        <select id="position" class="form-control">
                            <option value="">Select industry</option>
                            <option value="healthcare">Healthcare</option>
                            <option value="it">Information Technology</option>
                            <option value="construction">Construction</option>
                            <option value="petroleum">Petroleum & Energy</option>
                            <option value="manufacturing">Manufacturing</option>
                            <option value="finance">Banking & Finance</option>
                            <option value="hospitality">Hospitality & Tourism</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message">Your Hiring Requirements*</label>
                        <textarea id="message" class="form-control" required></textarea>
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="submit-btn">Submit Request <i
                                class="fas fa-chevron-right"></i></button>
                        <p class="disclaimer">We respect your privacy. All information is kept strictly confidential.
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <style>
        /* Contact Section Styles */
        .contact {
            padding: 100px 5%;
            background-color: #f8fafc;
        }

        .contact-container {
            display: flex;
            gap: 40px;
            max-width: 1200px;
            margin: 60px auto 0;
        }

        .contact-info {
            flex: 1;
        }

        .contact-form {
            flex: 1;
            background-color: white;
            border-radius: 12px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        }

        .contact-card {
            background-color: white;
            border-radius: 12px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            height: 100%;
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 30px;
        }

        .contact-icon {
            background: linear-gradient(135deg, #2563eb 0%, #1e40af 100%);
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            flex-shrink: 0;
            font-size: 1.1rem;
        }

        .contact-text h4 {
            font-size: 1.1rem;
            color: #1e293b;
            margin-bottom: 5px;
        }

        .contact-text p {
            color: #64748b;
            margin-bottom: 8px;
        }

        .map-link a,
        .whatsapp-link a,
        .email-link a {
            color: #2563eb;
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            transition: color 0.3s ease;
        }

        .map-link a:hover,
        .whatsapp-link a:hover,
        .email-link a:hover {
            color: #1e40af;
        }

        .map-link i,
        .whatsapp-link i,
        .email-link i {
            margin-left: 6px;
            font-size: 0.8rem;
        }

        .whatsapp-link a {
            color: #25D366;
        }

        .whatsapp-link a:hover {
            color: #128C7E;
        }

        .contact-hours {
            margin-top: 40px;
            padding-top: 30px;
            border-top: 1px solid #e2e8f0;
        }

        .contact-hours h4 {
            color: #1e293b;
            margin-bottom: 10px;
            font-size: 1.1rem;
        }

        .contact-hours p {
            color: #64748b;
            font-size: 0.95rem;
        }

        .contact-form h3 {
            font-size: 1.5rem;
            color: #1e293b;
            margin-bottom: 30px;
        }

        .form-row {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
        }

        .form-group {
            flex: 1;
            margin-bottom: 0;
        }

        .form-group label {
            display: block;
            font-size: 0.95rem;
            color: #1e293b;
            margin-bottom: 8px;
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            outline: none;
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }

        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }

        select.form-control {
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%2364748b' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 15px center;
            background-size: 12px;
        }

        .form-footer {
            margin-top: 30px;
        }

        .submit-btn {
            background: linear-gradient(135deg, #2563eb 0%, #1e40af 100%);
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(37, 99, 235, 0.3);
        }

        .submit-btn i {
            margin-left: 8px;
            font-size: 0.9rem;
        }

        .disclaimer {
            color: #64748b;
            font-size: 0.8rem;
            margin-top: 15px;
            line-height: 1.5;
        }

        @media (max-width: 992px) {
            .contact-container {
                flex-direction: column;
            }

            .form-row {
                flex-direction: column;
                gap: 0;
            }

            .form-group {
                margin-bottom: 20px;
            }
        }
    </style>


    <!-- Popup Form HTML -->
    <div class="modal fade" id="cxoRecruitModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close" style="position: absolute; top: 10px; right: 10px;"></button>
                    <div class="text-center w-100">
                        <div class="bg-white bg-opacity-25 rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <i class="fas fa-users text-white"></i>
                        </div>
                        <h4 class="modal-title mt-2">Find Your Perfect <span class="text-warning">Talent Match</span></h4>
                        <p class="small mb-0">we'll connect with you in <strong>24 hours</strong> to discuss your recruitment needs across all industries</p>
                    </div>
                </div>

                <!-- Progress Tracker -->
                <div class="px-4 pt-3">
                    <div class="progress-tracker">
                        <div class="progress-step active" data-step="1">
                            <div class="step-numberr">1</div>
                            <div class="step-label">BASIC INFO</div>
                        </div>
                        <div class="progress-step" data-step="2">
                            <div class="step-numberr">2</div>
                            <div class="step-label">REQUIREMENTS</div>
                        </div>
                    </div>
                </div>

                <form id="cxoRecruitForm" action="process_recruitment.php" method="POST" onsubmit="event.preventDefault(); executeRecaptcha('recruitment', 'cxoRecruitForm').then(() => this.submit());">
                    <!-- Step 1 -->
                    <div class="modal-body form-step active" data-step="1">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" name="full_name" class="form-control" placeholder="Full Name*" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control" placeholder="Email*" required>
                            </div>
                            <div class="col-md-6">
                                <input type="tel" name="phone" class="form-control" placeholder="Phone*" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="company" class="form-control" placeholder="Company">
                            </div>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="modal-body form-step" data-step="2">
                        <div class="mb-4">
                            <label class="form-label fw-bold">Which industry are you hiring for?*</label>
                            <div class="row g-3">
                                <div class="col-6 col-md-3">
                                    <input type="radio" class="btn-check" name="position" id="position_healthcare" value="Healthcare" checked>
                                    <label class="btn btn-outline-primary position-btn w-100" for="position_healthcare">
                                        <i class="fas fa-heartbeat"></i>
                                        <span>Healthcare</span>
                                    </label>
                                </div>
                                <div class="col-6 col-md-3">
                                    <input type="radio" class="btn-check" name="position" id="position_it" value="IT">
                                    <label class="btn btn-outline-primary position-btn w-100" for="position_it">
                                        <i class="fas fa-laptop-code"></i>
                                        <span>IT</span>
                                    </label>
                                </div>
                                <div class="col-6 col-md-3">
                                    <input type="radio" class="btn-check" name="position" id="position_construction" value="Construction">
                                    <label class="btn btn-outline-primary position-btn w-100" for="position_construction">
                                        <i class="fas fa-hard-hat"></i>
                                        <span>Construction</span>
                                    </label>
                                </div>
                                <div class="col-6 col-md-3">
                                    <input type="radio" class="btn-check" name="position" id="position_petroleum" value="Petroleum">
                                    <label class="btn btn-outline-primary position-btn w-100" for="position_petroleum">
                                        <i class="fas fa-oil-can"></i>
                                        <span>Petroleum</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">What are your hiring requirements?*</label>
                            <textarea name="challenges" class="form-control" rows="3" placeholder="Describe your requirements..." required></textarea>
                        </div>

                        <div class="mb-3">
                            <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response-cxo">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary prev-step">
                            <i class="fas fa-chevron-left me-2"></i> Back
                        </button>
                        <button type="button" class="btn btn-primary next-step">
                            Continue <i class="fas fa-chevron-right ms-2"></i>
                        </button>
                        <button type="submit" class="btn btn-success submit-form d-none" id="submitBtn">
                            Submit <i class="fas fa-paper-plane ms-2"></i>
                        </button>
                    </div>
                </form>

                <!-- Loader -->
                <div class="loader-overlay d-none" id="loader">
                    <div class="spinner">
                        <div class="spinner-border text-primary" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <p class="mt-2 text-white">Processing your request...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Success Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center p-4">
                <div class="text-success mb-3" style="font-size: 4rem;">
                    <i class="fas fa-check-circle"></i>
                </div>
                <h4>Request Received!</h4>
                <p class="mb-4">Our recruitment team will contact you within <strong>24 hours</strong>.</p>
                <button class="btn btn-primary w-100" data-bs-dismiss="modal">Done</button>
            </div>
        </div>
    </div>

    <style>
        .progress-tracker {
            display: flex;
            justify-content: center;
            margin: 20px 0;
        }

        .progress-step {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100px;
        }

        .step-numberr {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: #e9ecef;
            color: #6c757d;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .step-label {
            font-size: 12px;
            font-weight: 500;
            color: #6c757d;
            text-align: center;
        }

        .progress-step.active .step-numberr {
            background: #0d6efd;
            color: white;
        }

        .progress-step.active .step-label {
            color: #0d6efd;
            font-weight: 600;
        }

        .position-btn {
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 15px 5px;
        }

        .position-btn i {
            font-size: 24px;
            margin-bottom: 8px;
        }

        .form-step {
            display: none;
        }

        .form-step.active {
            display: block;
            animation: fadeIn 0.3s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .custom-captcha {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;
        }

        #captchaCanvas {
            border: 1px solid #dee2e6;
            border-radius: 5px;
        }

        #captchaInput {
            max-width: 150px;
        }

        .captcha-error {
            color: #dc3545;
            font-size: 14px;
            margin-top: 10px;
            width: 100%;
            padding: 8px;
            background: #f8d7da;
            border: 1px solid #f5c2c7;
            border-radius: 4px;
        }

        .captcha-error.shake {
            animation: shake 0.5s cubic-bezier(0.36, 0.07, 0.19, 0.97) both;
        }

        @keyframes shake {

            10%,
            90% {
                transform: translateX(-1px);
            }

            20%,
            80% {
                transform: translateX(2px);
            }

            30%,
            50%,
            70% {
                transform: translateX(-4px);
            }

            40%,
            60% {
                transform: translateX(4px);
            }
        }

        /* Loader Styles */
        .loader-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 2000;
        }

        .spinner {
            text-align: center;
        }

        .spinner-border {
            width: 3rem;
            height: 3rem;
        }
    </style>

    <script>
        // reCAPTCHA execution function
        async function executeRecaptcha(action, formId) {
            return new Promise((resolve, reject) => {
                try {
                    grecaptcha.ready(function() {
                        grecaptcha.execute('6LfVUUgrAAAAAKFj7HuGET-_vJ7ZcCztfDkdxPEy', {
                                action: action
                            })
                            .then(function(token) {
                                document.getElementById('g-recaptcha-response-cxo').value = token;
                                resolve(token);
                            })
                            .catch(function(error) {
                                console.error('reCAPTCHA error:', error);
                                reject(error);
                            });
                    });
                } catch (error) {
                    console.error('reCAPTCHA execution error:', error);
                    reject(error);
                }
            });
        }

        document.addEventListener('DOMContentLoaded', function() {
            // Modal elements
            const cxoModal = document.getElementById('cxoRecruitModal');
            const successModal = document.getElementById('successModal');
            const form = document.getElementById('cxoRecruitForm');
            const loader = document.getElementById('loader');
            const submitBtn = document.getElementById('submitBtn');
            const nextBtn = document.querySelector('.next-step');
            const prevBtn = document.querySelector('.prev-step');

            // Open modal when clicking on the open-recruit-modal buttons/links
            document.querySelectorAll('.open-recruit-modal').forEach(btn => {
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    resetFormState(); // Reset form before showing
                    const bsModal = new bootstrap.Modal(cxoModal);
                    bsModal.show();
                });
            });

            // Form navigation
            if (nextBtn) {
                nextBtn.addEventListener('click', function() {
                    const currentStep = document.querySelector('#cxoRecruitModal .form-step.active');
                    const nextStep = currentStep?.nextElementSibling;

                    if (validateStep(currentStep)) {
                        currentStep.classList.remove('active');
                        nextStep.classList.add('active');
                        updateProgress(2);

                        // Show submit button, hide next button on last step
                        nextBtn.classList.add('d-none');
                        submitBtn.classList.remove('d-none');
                        prevBtn.classList.remove('d-none');
                    }
                });
            }

            if (prevBtn) {
                prevBtn.addEventListener('click', function() {
                    const currentStep = document.querySelector('#cxoRecruitModal .form-step.active');
                    const prevStep = currentStep?.previousElementSibling;

                    currentStep.classList.remove('active');
                    prevStep.classList.add('active');
                    updateProgress(1);

                    // Show next button, hide submit button on first step
                    nextBtn.classList.remove('d-none');
                    submitBtn.classList.add('d-none');
                    if (prevStep.dataset.step === '1') {
                        prevBtn.classList.add('d-none');
                    }
                });
            }

            // Form submission
            if (form) {
                form.addEventListener('submit', async function(e) {
                    e.preventDefault();

                    if (!validateStep(document.querySelector('.form-step.active'))) {
                        return;
                    }

                    try {
                        // Remove loader functionality
                        if (submitBtn) {
                            submitBtn.disabled = true;
                        }

                        // Execute reCAPTCHA
                        await executeRecaptcha('recruitment', 'cxoRecruitForm');

                        const formData = new FormData(form);
                        const response = await fetch(form.action, {
                            method: 'POST',
                            body: formData
                        });

                        const data = await response.json();

                        if (data.success) {
                            // Hide form modal, show success modal
                            if (cxoModal) {
                                const bsModal = bootstrap.Modal.getInstance(cxoModal) || new bootstrap.Modal(cxoModal);
                                bsModal.hide();
                            }

                            if (successModal) {
                                const successBsModal = new bootstrap.Modal(successModal);
                                successBsModal.show();
                            }

                            // Reset form
                            form.reset();
                            resetFormState();
                        } else {
                            throw new Error(data.message || 'Submission failed');
                        }
                    } catch (error) {
                        console.error('Form submission error:', error);
                        alert('Form submission failed. Please try again.');
                    } finally {
                        // Reset button without loader
                        if (submitBtn) {
                            submitBtn.disabled = false;
                            submitBtn.innerHTML = 'Submit <i class="fas fa-paper-plane ms-2"></i>';
                        }
                    }
                });
            }

            // Helper functions
            function validateStep(step) {
                if (!step) return false;
                let isValid = true;
                step.querySelectorAll('[required]').forEach(input => {
                    if (!input.value.trim()) {
                        input.classList.add('is-invalid');
                        isValid = false;
                    } else {
                        input.classList.remove('is-invalid');
                    }
                });
                return isValid;
            }

            function updateProgress(step) {
                document.querySelectorAll('.progress-step').forEach(stepEl => {
                    stepEl.classList.toggle('active', parseInt(stepEl.dataset.step) <= step);
                });
            }

            function resetFormState() {
                if (!form) return;

                // Reset to first step
                const steps = form.querySelectorAll('.form-step');
                steps.forEach(step => step.classList.remove('active'));
                if (steps[0]) steps[0].classList.add('active');

                // Reset buttons
                if (nextBtn) nextBtn.classList.remove('d-none');
                if (submitBtn) submitBtn.classList.add('d-none');
                if (prevBtn) prevBtn.classList.add('d-none');

                // Reset progress
                updateProgress(1);

                // Clear validation states
                form.querySelectorAll('.is-invalid').forEach(el => el.classList.remove('is-invalid'));
            }
        });
    </script>


    <script>
        var mainSlider = new Swiper(".mySwiper2", {
            parallax: true,
            speed: 1200,
            effect: 'slide',
            direction: "vertical",
            autoplay: true,
            navigation: {
                nextEl: '.upk-button-next',
                prevEl: '.upk-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                renderBullet: function(index, className) {
                    return '<span class="' + className + ' swiper-pagination-bullet--svg-animation"><svg width="28" height="28" viewBox="0 0 28 28"><circle class="svg__circle" cx="14" cy="14" r="10" fill="none" stroke-width="2"></circle><circle class="svg__circle-inner" cx="14" cy="14" r="2" stroke-width="3"></circle></svg></span>';
                },
            },
        });
    </script>
    <?php include "include/footer.php" ?>

</body>

</html>