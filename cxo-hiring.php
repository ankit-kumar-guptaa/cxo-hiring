<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CXO Hiring Services | Top Executive Recruitment | CXOHire.com</title>
    <meta name="description" content="Specialized CXO hiring services for top-tier executive talent. Connect with exceptional C-level executives to drive growth and innovation for your organization.">
    <meta name="keywords" content="CXO hiring, executive recruitment, C-level executives, CEO hiring, CFO recruitment, CTO search, leadership hiring, executive search firm">
    <link rel="canonical" href="https://cxohire.com/cxo-hiring.php">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php include "include/assets.php"?>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #0d6efd;
            --secondary-color: #6c757d;
            --accent-color: #fd7e14;
            --dark-color: #212529;
            --light-color: #f8f9fa;
        }
        
        .bg-gradient-primary {
            background: linear-gradient(135deg, var(--primary-color) 0%, #0a58ca 100%);
        }
        
        .bg-gradient-dark {
            background: linear-gradient(135deg, var(--dark-color) 0%, #343a40 100%);
        }
        
        .text-gradient {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--accent-color) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .hero-section {
            position: relative;
            padding: 120px 0 80px;
            overflow: hidden;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80');
            background-size: cover;
            background-position: center;
            opacity: 0.15;
            z-index: 0;
        }
        
        .hero-content {
            position: relative;
            z-index: 1;
        }
        
        .card-hover {
            transition: all 0.3s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        .icon-box {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            margin-bottom: 20px;
            background: rgba(13, 110, 253, 0.1);
            color: var(--primary-color);
        }
        
        .process-step {
            position: relative;
            padding-left: 80px;
            margin-bottom: 50px;
        }
        
        .step-number {
            position: absolute;
            left: 0;
            top: 0;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: var(--primary-color);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            font-weight: bold;
        }
        
        .testimonial-card {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .testimonial-content {
            position: relative;
            padding: 30px;
        }
        
        .testimonial-content::before {
            content: '\201C';
            position: absolute;
            top: 10px;
            left: 20px;
            font-size: 80px;
            color: rgba(13, 110, 253, 0.1);
            font-family: Georgia, serif;
        }
        
        .author-image img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
        }
        
        .stat-card {
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            height: 100%;
            transition: all 0.3s ease;
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        .stat-number {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 10px;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--accent-color) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .accordion-button:not(.collapsed) {
            background-color: rgba(13, 110, 253, 0.1);
            color: var(--primary-color);
        }
        
        .cta-section {
            position: relative;
            overflow: hidden;
        }
        
        .cta-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80');
            background-size: cover;
            background-position: center;
            opacity: 0.15;
            z-index: 0;
        }
        
        .cta-content {
            position: relative;
            z-index: 1;
        }
        
        .role-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            height: 100%;
        }
        
        .role-card .card-img-top {
            height: 200px;
            object-fit: cover;
        }
        
        .role-card .card-body {
            padding: 25px;
        }
        
        .role-card .card-title {
            color: var(--primary-color);
            font-weight: 700;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>

    <?php include "include/header.php"?>

    <!-- Hero Section -->
    <section class="hero-section bg-gradient-primary text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 hero-content" data-aos="fade-right">
                    <h1 class="display-4 fw-bold mb-4">Strategic CXO Hiring Solutions</h1>
                    <p class="lead mb-4">Connecting exceptional C-level talent with forward-thinking companies to drive transformational growth and leadership excellence.</p>
                    <div class="d-flex gap-3 flex-wrap">
                        <button class="btn btn-light btn-lg px-4 py-3 fw-semibold open-cxo-modal">
                            <i class="fas fa-user-tie me-2"></i> Hire a CXO
                        </button>
                        <a href="#cxo-process" class="btn btn-outline-light btn-lg px-4 py-3 fw-semibold">
                            <i class="fas fa-arrow-right me-2"></i> Our Process
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block" data-aos="fade-left">
                    <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80" alt="Executive leadership" class="img-fluid rounded-4 shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-5">
        <div class="container py-4">
            <div class="row g-4">
                <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="stat-card bg-white shadow-sm">
                        <div class="stat-number">200+</div>
                        <h3 class="h5 fw-bold text-secondary">Executive Placements</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="stat-card bg-white shadow-sm">
                        <div class="stat-number">95%</div>
                        <h3 class="h5 fw-bold text-secondary">Retention Rate</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="stat-card bg-white shadow-sm">
                        <div class="stat-number">15+</div>
                        <h3 class="h5 fw-bold text-secondary">Years Experience</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="stat-card bg-white shadow-sm">
                        <div class="stat-number">50+</div>
                        <h3 class="h5 fw-bold text-secondary">Industries Served</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About CXO Hiring Section -->
    <section class="py-5 bg-light" id="about-cxo">
        <div class="container py-5">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h6 class="text-primary fw-bold text-uppercase" data-aos="fade-up">Who We Are</h6>
                    <h2 class="display-5 fw-bold mb-4" data-aos="fade-up" data-aos-delay="100">CXO Hiring Excellence</h2>
                    <p class="lead text-secondary" data-aos="fade-up" data-aos-delay="200">Strategic executive recruitment tailored to your organization's unique leadership needs</p>
                </div>
            </div>
            
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                    <h3 class="h2 fw-bold mb-4">Transforming Organizations Through Strategic Leadership</h3>
                    <p class="mb-4">At CXOHire.com, we specialize in connecting visionary organizations with exceptional C-suite talent that drives innovation, growth, and sustainable success. Our comprehensive CXO hiring solutions are designed to identify and secure the perfect executive match for your unique organizational culture and strategic objectives.</p>
                    <p class="mb-4">With our deep industry expertise and proprietary assessment methodologies, we go beyond traditional recruitment to ensure alignment between leadership capabilities, organizational values, and long-term business goals.</p>
                    
                    <div class="row g-4 mt-4">
                        <div class="col-md-6" data-aos="zoom-in" data-aos-delay="100">
                            <div class="d-flex">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-bullseye fa-2x"></i>
                                </div>
                                <div>
                                    <h4 class="h5 fw-bold">Strategic Talent Acquisition</h4>
                                    <p class="text-secondary">Our comprehensive approach identifies executives who bring both expertise and vision.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="zoom-in" data-aos-delay="200">
                            <div class="d-flex">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-chart-line fa-2x"></i>
                                </div>
                                <div>
                                    <h4 class="h5 fw-bold">Performance-Driven Selection</h4>
                                    <p class="text-secondary">We utilize advanced assessment tools to evaluate leadership capabilities.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80" alt="Executive leadership meeting" class="img-fluid rounded-4 shadow-lg">
                        <div class="position-absolute bottom-0 end-0 bg-white p-4 rounded-4 shadow-lg mb-n4 me-n4" data-aos="fade-up">
                            <h4 class="h5 fw-bold text-primary mb-2">Industry Expertise</h4>
                            <p class="mb-0">Specialized knowledge across 50+ industries and sectors</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CXO Roles Section -->
    <section class="py-5" id="cxo-roles">
        <div class="container py-5">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h6 class="text-primary fw-bold text-uppercase" data-aos="fade-up">Our Expertise</h6>
                    <h2 class="display-5 fw-bold mb-4" data-aos="fade-up" data-aos-delay="100">Executive Roles We Specialize In</h2>
                    <p class="lead text-secondary" data-aos="fade-up" data-aos-delay="200">Comprehensive C-suite talent acquisition across key leadership positions</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="role-card card-hover">
                        <img src="https://images.unsplash.com/photo-1507679799987-c73779587ccf?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80" class="card-img-top" alt="CEO Hiring">
                        <div class="card-body">
                            <h3 class="card-title">Chief Executive Officer (CEO)</h3>
                            <p class="card-text">Visionary leaders who drive organizational strategy, culture, and performance to achieve sustainable growth and stakeholder value.</p>
                            <ul class="list-unstyled mt-4">
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Strategic vision development</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Organizational leadership</li>
                                <li><i class="fas fa-check-circle text-primary me-2"></i> Stakeholder management</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="role-card card-hover">
                        <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80" class="card-img-top" alt="CFO Recruitment">
                        <div class="card-body">
                            <h3 class="card-title">Chief Financial Officer (CFO)</h3>
                            <p class="card-text">Strategic financial leaders who optimize capital allocation, ensure fiscal responsibility, and drive financial performance and business growth.</p>
                            <ul class="list-unstyled mt-4">
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Financial strategy</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Capital management</li>
                                <li><i class="fas fa-check-circle text-primary me-2"></i> Business performance</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="role-card card-hover">
                        <img src="https://images.unsplash.com/photo-1581092921461-7d65ca45393a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80" class="card-img-top" alt="CTO Hiring">
                        <div class="card-body">
                            <h3 class="card-title">Chief Technology Officer (CTO)</h3>
                            <p class="card-text">Innovative technology leaders who leverage emerging technologies to drive digital transformation and competitive advantage.</p>
                            <ul class="list-unstyled mt-4">
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Technology strategy</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Digital transformation</li>
                                <li><i class="fas fa-check-circle text-primary me-2"></i> Innovation leadership</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="role-card card-hover">
                        <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80" class="card-img-top" alt="COO Recruitment">
                        <div class="card-body">
                            <h3 class="card-title">Chief Operating Officer (COO)</h3>
                            <p class="card-text">Operational excellence leaders who optimize business processes, drive efficiency, and ensure seamless execution of strategic initiatives.</p>
                            <ul class="list-unstyled mt-4">
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Operational excellence</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Process optimization</li>
                                <li><i class="fas fa-check-circle text-primary me-2"></i> Strategic execution</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="role-card card-hover">
                        <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80" class="card-img-top" alt="CMO Hiring">
                        <div class="card-body">
                            <h3 class="card-title">Chief Marketing Officer (CMO)</h3>
                            <p class="card-text">Strategic marketing leaders who build powerful brands, drive customer acquisition, and create sustainable competitive advantage.</p>
                            <ul class="list-unstyled mt-4">
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Brand development</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Customer acquisition</li>
                                <li><i class="fas fa-check-circle text-primary me-2"></i> Marketing innovation</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="role-card card-hover">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80" class="card-img-top" alt="CHRO Recruitment">
                        <div class="card-body">
                            <h3 class="card-title">Chief Human Resources Officer (CHRO)</h3>
                            <p class="card-text">People-focused leaders who build high-performance cultures, talent strategies, and organizational capabilities that drive business success.</p>
                            <ul class="list-unstyled mt-4">
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Talent strategy</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Culture development</li>
                                <li><i class="fas fa-check-circle text-primary me-2"></i> Organizational design</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CXO Hiring Process Section -->
    <section class="py-5 bg-light" id="cxo-process">
        <div class="container py-5">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h6 class="text-primary fw-bold text-uppercase" data-aos="fade-up">Our Methodology</h6>
                    <h2 class="display-5 fw-bold mb-4" data-aos="fade-up" data-aos-delay="100">Strategic CXO Hiring Process</h2>
                    <p class="lead text-secondary" data-aos="fade-up" data-aos-delay="200">A comprehensive methodology designed to identify and secure exceptional executive talent</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-6">
                    <div class="process-step" data-aos="fade-right" data-aos-delay="100">
                        <div class="step-number">1</div>
                        <div class="ps-4">
                            <h3 class="h4 fw-bold mb-3">Strategic Needs Assessment</h3>
                            <p class="text-secondary">We begin with a thorough analysis of your organization's strategic objectives, culture, and leadership requirements to develop a comprehensive executive profile.</p>
                        </div>
                    </div>
                    
                    <div class="process-step" data-aos="fade-right" data-aos-delay="200">
                        <div class="step-number">2</div>
                        <div class="ps-4">
                            <h3 class="h4 fw-bold mb-3">Targeted Executive Search</h3>
                            <p class="text-secondary">Our specialized research team leverages industry networks, proprietary databases, and advanced search methodologies to identify qualified C-level candidates.</p>
                        </div>
                    </div>
                    
                    <div class="process-step" data-aos="fade-right" data-aos-delay="300">
                        <div class="step-number">3</div>
                        <div class="ps-4">
                            <h3 class="h4 fw-bold mb-3">Rigorous Assessment & Evaluation</h3>
                            <p class="text-secondary">Candidates undergo comprehensive evaluations including competency-based interviews, leadership assessments, and reference verification to ensure alignment with your requirements.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="process-step" data-aos="fade-right" data-aos-delay="400">
                        <div class="step-number">4</div>
                        <div class="ps-4">
                            <h3 class="h4 fw-bold mb-3">Strategic Presentation & Selection</h3>
                            <p class="text-secondary">We present a curated shortlist of exceptional candidates with detailed assessment reports, facilitating informed decision-making for your selection committee.</p>
                        </div>
                    </div>
                    
                    <div class="process-step" data-aos="fade-right" data-aos-delay="500">
                        <div class="step-number">5</div>
                        <div class="ps-4">
                            <h3 class="h4 fw-bold mb-3">Offer Negotiation & Onboarding</h3>
                            <p class="text-secondary">Our team manages the entire offer process and provides comprehensive onboarding support to ensure a successful leadership transition.</p>
                        </div>
                    </div>
                    
                    <div class="process-step" data-aos="fade-right" data-aos-delay="600">
                        <div class="step-number">6</div>
                        <div class="ps-4">
                            <h3 class="h4 fw-bold mb-3">Integration & Success Monitoring</h3>
                            <p class="text-secondary">We provide ongoing support during the critical first months to ensure successful integration and long-term executive performance.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-5" data-aos="fade-up">
                <button class="btn btn-primary btn-lg px-5 py-3 fw-semibold open-cxo-modal">
                    <i class="fas fa-arrow-right me-2"></i> Start Your Executive Search
                </button>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-5" id="why-choose">
        <div class="container py-5">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h6 class="text-primary fw-bold text-uppercase" data-aos="fade-up">Our Advantage</h6>
                    <h2 class="display-5 fw-bold mb-4" data-aos="fade-up" data-aos-delay="100">Why Choose CXOHire</h2>
                    <p class="lead text-secondary" data-aos="fade-up" data-aos-delay="200">Unparalleled expertise in connecting organizations with transformational leadership talent</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100 border-0 shadow-sm card-hover p-4">
                        <div class="icon-box mx-auto">
                            <i class="fas fa-network-wired"></i>
                        </div>
                        <div class="card-body text-center">
                            <h3 class="h4 fw-bold mb-3">Extensive Executive Network</h3>
                            <p class="text-secondary">Access to an exclusive network of pre-qualified C-level executives across industries and functional specialties.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100 border-0 shadow-sm card-hover p-4">
                        <div class="icon-box mx-auto">
                            <i class="fas fa-chart-pie"></i>
                        </div>
                        <div class="card-body text-center">
                            <h3 class="h4 fw-bold mb-3">Industry-Specific Expertise</h3>
                            <p class="text-secondary">Specialized consultants with deep understanding of industry-specific leadership requirements and market dynamics.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="card h-100 border-0 shadow-sm card-hover p-4">
                        <div class="icon-box mx-auto">
                            <i class="fas fa-search"></i>
                        </div>
                        <div class="card-body text-center">
                            <h3 class="h4 fw-bold mb-3">Proprietary Assessment</h3>
                            <p class="text-secondary">Advanced evaluation frameworks that assess both technical competencies and leadership capabilities.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="card h-100 border-0 shadow-sm card-hover p-4">
                        <div class="icon-box mx-auto">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <div class="card-body text-center">
                            <h3 class="h4 fw-bold mb-3">Guaranteed Placements</h3>
                            <p class="text-secondary">Our commitment to quality is reflected in our industry-leading placement guarantee and executive retention rates.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="card h-100 border-0 shadow-sm card-hover p-4">
                        <div class="icon-box mx-auto">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="card-body text-center">
                            <h3 class="h4 fw-bold mb-3">Performance-Driven Approach</h3>
                            <p class="text-secondary">Focus on identifying executives who deliver measurable business results and transformational leadership.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="card h-100 border-0 shadow-sm card-hover p-4">
                        <div class="icon-box mx-auto">
                            <i class="fas fa-globe"></i>
                        </div>
                        <div class="card-body text-center">
                            <h3 class="h4 fw-bold mb-3">Global Reach, Local Expertise</h3>
                            <p class="text-secondary">Ability to source exceptional talent globally while understanding local market nuances and cultural dynamics.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-5 bg-light" id="testimonials">
        <div class="container py-5">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h6 class="text-primary fw-bold text-uppercase" data-aos="fade-up">Success Stories</h6>
                    <h2 class="display-5 fw-bold mb-4" data-aos="fade-up" data-aos-delay="100">What Our Clients Say</h2>
                    <p class="lead text-secondary" data-aos="fade-up" data-aos-delay="200">Success stories from organizations that transformed through our executive hiring solutions</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="testimonial-card h-100">
                        <div class="testimonial-content">
                            <p class="mb-4">"CXOHire delivered exceptional results in our search for a transformational CEO. Their thorough understanding of our industry and organizational needs led to a perfect match that has accelerated our growth strategy."</p>
                            <div class="d-flex align-items-center">
                                <div class="author-image me-3">
                                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Testimonial Author">
                                </div>
                                <div>
                                    <h4 class="h5 fw-bold mb-1">Rajiv Sharma</h4>
                                    <p class="text-secondary mb-0">Board Chairman, Technology Solutions Ltd</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="testimonial-card h-100">
                        <div class="testimonial-content">
                            <p class="mb-4">"The CFO recruited through CXOHire has transformed our financial strategy and operational efficiency. Their rigorous selection process and deep understanding of our requirements resulted in a perfect executive match."</p>
                            <div class="d-flex align-items-center">
                                <div class="author-image me-3">
                                    <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Testimonial Author">
                                </div>
                                <div>
                                    <h4 class="h5 fw-bold mb-1">Priya Mehta</h4>
                                    <p class="text-secondary mb-0">CEO, Global Innovations Inc</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="testimonial-card h-100">
                        <div class="testimonial-content">
                            <p class="mb-4">"Working with CXOHire to find our CTO was a game-changer. Their ability to identify technically proficient leaders with strategic vision has accelerated our digital transformation journey significantly."</p>
                            <div class="d-flex align-items-center">
                                <div class="author-image me-3">
                                    <img src="https://randomuser.me/api/portraits/men/62.jpg" alt="Testimonial Author">
                                </div>
                                <div>
                                    <h4 class="h5 fw-bold mb-1">Vikram Malhotra</h4>
                                    <p class="text-secondary mb-0">Managing Director, Future Enterprises</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-5" id="faq">
        <div class="container py-5">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h6 class="text-primary fw-bold text-uppercase" data-aos="fade-up">Common Questions</h6>
                    <h2 class="display-5 fw-bold mb-4" data-aos="fade-up" data-aos-delay="100">Frequently Asked Questions</h2>
                    <p class="lead text-secondary" data-aos="fade-up" data-aos-delay="200">Common questions about our CXO hiring process and services</p>
                </div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-8" data-aos="fade-up">
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item border-0 mb-3 shadow-sm">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What makes your CXO hiring approach different from traditional recruitment?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>Our approach combines deep industry expertise, proprietary assessment methodologies, and a focus on both technical competencies and leadership capabilities. We emphasize cultural fit and strategic alignment to ensure long-term success, going beyond simply matching skills to job descriptions.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item border-0 mb-3 shadow-sm">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How long does the typical CXO hiring process take?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>While timelines vary based on position complexity and specific requirements, our typical executive search process takes 8-12 weeks from initial consultation to offer acceptance. Our structured methodology ensures efficiency without compromising the thoroughness required for C-level appointments.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item border-0 mb-3 shadow-sm">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Do you offer guarantees on executive placements?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>Yes, we stand behind the quality of our executive placements with an industry-leading guarantee. If an executive placed through our services leaves within 12 months, we will conduct a replacement search at no additional professional fee, subject to our standard terms and conditions.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item border-0 mb-3 shadow-sm">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    How do you ensure cultural fit in executive placements?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>Cultural alignment is a cornerstone of our methodology. We conduct comprehensive organizational culture assessments, utilize behavioral and values-based interview techniques, and employ psychometric tools to evaluate cultural compatibility, ensuring executives who will thrive in your specific organizational environment.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item border-0 shadow-sm">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    What industries do you specialize in for CXO recruitment?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>We have specialized expertise across multiple sectors including technology, financial services, manufacturing, healthcare, consumer goods, and professional services. Our industry-specific consultants bring deep understanding of sector challenges, trends, and leadership requirements to each executive search.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 bg-gradient-primary text-white cta-section">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center cta-content">
                    <h2 class="display-5 fw-bold mb-4" data-aos="fade-up">Ready to Transform Your Leadership Team?</h2>
                    <p class="lead mb-5" data-aos="fade-up" data-aos-delay="100">Connect with our executive search consultants to discuss your C-level hiring needs</p>
                    <div class="d-flex justify-content-center gap-3 flex-wrap" data-aos="fade-up" data-aos-delay="200">
                        <button class="btn btn-light btn-lg px-5 py-3 fw-semibold open-cxo-modal">
                            <i class="fas fa-user-tie me-2"></i> Request a Consultation
                        </button>
                        <a href="contact.php" class="btn btn-outline-light btn-lg px-5 py-3 fw-semibold">
                            <i class="fas fa-phone me-2"></i> Contact Our Team
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS and AOS Animation Library -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize AOS animation
            AOS.init({
                duration: 800,
                easing: 'ease-in-out',
                once: true
            });
        });
    </script>

    <?php include "include/footer.php"?>

</body>
</html>