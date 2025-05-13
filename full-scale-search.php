<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "include/assets.php"; ?>
    <title>Full-Scale Executive Search | CXOHire.com</title>
    <style>
        /* ========== CUSTOM SERVICE PAGE STYLES ========== */
        :root {
            --exec-blue: #1e3a8a;
            --exec-dark: #0f172a;
            --exec-orange: #ea580c;
            --exec-light: #f8fafc;
            --exec-gray: #64748b;
        }
        
        .service-hero {
            background: linear-gradient(135deg, var(--exec-blue) 0%, var(--exec-dark) 100%);
            padding: 6rem 0 4rem;
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .service-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80') center/cover;
            opacity: 0.15;
        }
        
        .breadcrumb-nav {
            --bs-breadcrumb-divider: '›';
            font-size: 0.9rem;
        }
        
        .breadcrumb-item a {
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .breadcrumb-item.active {
            color: white;
        }
        
        .breadcrumb-item a:hover {
            color: var(--exec-orange);
        }
        
        .service-card {
            border: none;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.1);
            height: 100%;
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        }
        
        .service-card .card-img-top {
            height: 200px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .service-card:hover .card-img-top {
            transform: scale(1.05);
        }
        
        .service-card .card-body {
            padding: 2rem;
        }
        
        .service-card .card-title {
            color: var(--exec-blue);
            font-weight: 700;
            position: relative;
            padding-bottom: 1rem;
        }
        
        .service-card .card-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background: var(--exec-orange);
        }
        
        .tab-content {
            padding: 2.5rem;
            background: white;
            border-radius: 0 0 12px 12px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        }
        
        .nav-tabs .nav-link {
            border: none;
            padding: 1.2rem 1.5rem;
            font-weight: 600;
            color: var(--exec-gray);
            position: relative;
        }
        
        .nav-tabs .nav-link::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 3px;
            background: var(--exec-orange);
            transition: all 0.3s ease;
        }
        
        .nav-tabs .nav-link:hover::before,
        .nav-tabs .nav-link.active::before {
            width: 100%;
        }
        
        .nav-tabs .nav-link.active {
            color: var(--exec-blue);
            background: transparent;
        }
        
        .feature-icon-circle {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: rgba(234,88,12,0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--exec-orange);
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
        }
        
        .stats-card {
            background: white;
            border-radius: 12px;
            padding: 2rem;
            text-align: center;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }
        
        .stats-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        
        .stats-number {
            font-size: 3rem;
            font-weight: 800;
            color: var(--exec-blue);
            line-height: 1;
            margin-bottom: 0.5rem;
        }
        
        .stats-label {
            color: var(--exec-gray);
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.85rem;
        }
        
        .case-study-card {
            border: none;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
        }
        
        .case-study-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.12);
        }
        
        .case-study-card .card-img-top {
            height: 200px;
            object-fit: cover;
        }
        
        .case-study-badge {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: var(--exec-orange);
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 50px;
            font-size: 0.75rem;
            font-weight: 600;
        }
        
        .accordion-button:not(.collapsed) {
            background: rgba(30,58,138,0.05);
            color: var(--exec-blue);
        }
        
        .accordion-button:focus {
            box-shadow: none;
            border-color: rgba(0,0,0,0.1);
        }
        
        .process-step {
            position: relative;
            padding-left: 3rem;
            margin-bottom: 2.5rem;
        }
        
        .process-step::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: var(--exec-orange);
        }
        
        .process-step::after {
            content: '';
            position: absolute;
            left: 15px;
            top: 30px;
            width: 2px;
            height: calc(100% - 30px);
            background: #e2e8f0;
        }
        
        .process-step:last-child::after {
            display: none;
        }
        
        @media (max-width: 768px) {
            .service-hero {
                padding: 4rem 0 2rem;
            }
            
            .service-card .card-body {
                padding: 1.5rem;
            }
            
            .tab-content {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <?php include "include/header.php"; ?>

    <!-- ===== SERVICE HERO ===== -->
    <section class="service-hero">
        <div class="container position-relative">
            <!-- <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb breadcrumb-nav">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/services">Services</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Full-Scale Executive Search</li>
                </ol>
            </nav> -->
            
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">Full-Scale Executive Search</h1>
                    <p class="lead mb-4">Transformational leadership acquisition for C-suite and senior management roles</p>
                    <p>We identify and secure top-tier executive talent through our proprietary 5D assessment methodology that evaluates cognitive agility, emotional intelligence, and cultural alignment to deliver leaders who outperform industry benchmarks.</p>
                    
                    <div class="d-flex gap-3 mt-4">
                        <a href="#contact" class="btn btn-warning btn-lg px-4 fw-bold">Get Started</a>
                        <a href="#methodology" class="btn btn-outline-light btn-lg px-4">Our Process</a>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80" 
                         alt="Executive team meeting" 
                         class="img-fluid rounded-3 shadow-lg" 
                         loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- ===== SERVICE BENEFITS ===== -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="service-card">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80" 
                             class="card-img-top" 
                             alt="Technology executives">
                        <div class="card-body">
                            <h3 class="card-title h4">Industry Specialization</h3>
                            <p class="card-text">Dedicated practice groups for technology, healthcare, financial services with domain-specific researchers who understand your unique leadership requirements.</p>
                            <ul class="list-unstyled">
                                <li class="mb-2 d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>CTOs for SaaS companies</span>
                                </li>
                                <li class="mb-2 d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>Healthcare system CEOs</span>
                                </li>
                                <li class="d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>Fintech leadership</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="service-card">
                        <img src="https://images.unsplash.com/photo-1521791055366-0d553872125f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80" 
                             class="card-img-top" 
                             alt="Global network">
                        <div class="card-body">
                            <h3 class="card-title h4">Global Talent Network</h3>
                            <p class="card-text">Access to 300,000+ executives across 40 countries including 85% passive candidates not actively seeking opportunities.</p>
                            <ul class="list-unstyled">
                                <li class="mb-2 d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>Silicon Valley tech leaders</span>
                                </li>
                                <li class="mb-2 d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>London financial executives</span>
                                </li>
                                <li class="d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>Asian market specialists</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="service-card">
                        <img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80" 
                             class="card-img-top" 
                             alt="Performance guarantee">
                        <div class="card-body">
                            <h3 class="card-title h4">Performance Guarantee</h3>
                            <p class="card-text">12-month replacement guarantee with 94% retention rate beyond 3 years (vs. industry average of 72%).</p>
                            <ul class="list-unstyled">
                                <li class="mb-2 d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>Onboarding support</span>
                                </li>
                                <li class="mb-2 d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>Quarterly check-ins</span>
                                </li>
                                <li class="d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>Leadership coaching</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== ROLES WE FILL ===== -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Leadership Roles We Specialize In</h2>
                <p class="lead text-muted mx-auto" style="max-width: 700px;">Comprehensive search capabilities for all C-level and senior executive positions</p>
            </div>
            
            <ul class="nav nav-tabs justify-content-center" id="rolesTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="ceo-tab" data-bs-toggle="tab" data-bs-target="#ceo" type="button" role="tab">
                        <i class="fas fa-crown me-2"></i> CEO/Board
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="cfo-tab" data-bs-toggle="tab" data-bs-target="#cfo" type="button" role="tab">
                        <i class="fas fa-chart-line me-2"></i> CFO
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="cto-tab" data-bs-toggle="tab" data-bs-target="#cto" type="button" role="tab">
                        <i class="fas fa-microchip me-2"></i> CTO
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="coo-tab" data-bs-toggle="tab" data-bs-target="#coo" type="button" role="tab">
                        <i class="fas fa-cogs me-2"></i> COO
                    </button>
                </li>
            </ul>
            
            <div class="tab-content mt-4" id="rolesTabContent">
                <!-- CEO Tab -->
                <div class="tab-pane fade show active" id="ceo" role="tabpanel">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="h2 fw-bold text-primary mb-4">Chief Executive Officer Search</h3>
                            <p>We identify visionary leaders who can drive strategic direction while balancing short-term performance with long-term value creation.</p>
                            
                            <h4 class="h5 mt-4 mb-3">Candidate Profile</h4>
                            <ul class="list-unstyled">
                                <li class="mb-3 d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span><strong>Experience:</strong> 15-25 years progressive leadership with $500M+ P&L responsibility</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span><strong>Key Attributes:</strong> Strategic vision, capital allocation, stakeholder management</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span><strong>Assessment Focus:</strong> Digital transformation experience, crisis leadership, board dynamics</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-light p-4 rounded-3 h-100">
                                <h4 class="h5 text-primary mb-3">Recent Placements</h4>
                                <ul class="list-unstyled">
                                    <li class="mb-3 d-flex">
                                        <span class="me-2 text-primary">•</span>
                                        <span>14 Fortune 500 CEOs in past 5 years</span>
                                    </li>
                                    <li class="mb-3 d-flex">
                                        <span class="me-2 text-primary">•</span>
                                        <span>7 private equity portfolio company CEOs</span>
                                    </li>
                                    <li class="mb-3 d-flex">
                                        <span class="me-2 text-primary">•</span>
                                        <span>3 unicorn startup CEOs</span>
                                    </li>
                                </ul>
                                
                                <div class="mt-4 pt-3 border-top">
                                    <h4 class="h5 text-primary mb-3">Case Study</h4>
                                    <p><strong>Challenge:</strong> $3B retailer needed CEO to lead digital transformation against Amazon</p>
                                    <p><strong>Solution:</strong> Placed omnichannel expert from Silicon Valley</p>
                                    <p class="mb-0"><strong>Result:</strong> 28% revenue growth in first year</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Additional tabs would follow same pattern -->
            </div>
        </div>
    </section>

    <!-- ===== OUR METHODOLOGY ===== -->
    <section id="methodology" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Our 5D Executive Assessment</h2>
                <p class="lead text-muted mx-auto" style="max-width: 700px;">Beyond resumes - we evaluate leadership potential through multiple dimensions</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="p-4 text-center">
                        <div class="feature-icon-circle mx-auto">
                            <i class="fas fa-brain"></i>
                        </div>
                        <h3 class="h4 mb-3">Cognitive Agility</h3>
                        <p class="mb-0">Case-based problem solving under time constraints, strategic decision-making simulations, and innovation index measurement.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="p-4 text-center">
                        <div class="feature-icon-circle mx-auto">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h3 class="h4 mb-3">Emotional Intelligence</h3>
                        <p class="mb-0">360° stakeholder feedback analysis, conflict resolution simulations, and validated psychometric testing.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="p-4 text-center">
                        <div class="feature-icon-circle mx-auto">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h3 class="h4 mb-3">Digital Quotient</h3>
                        <p class="mb-0">Evaluation of technology adoption mindset, data-driven decision making, and digital transformation experience.</p>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="p-4 text-center">
                        <div class="feature-icon-circle mx-auto">
                            <i class="fas fa-people-arrows"></i>
                        </div>
                        <h3 class="h4 mb-3">Cultural Alignment</h3>
                        <p class="mb-0">Organizational values assessment, leadership style mapping, and team compatibility analysis.</p>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="p-4 text-center">
                        <div class="feature-icon-circle mx-auto">
                            <i class="fas fa-chart-network"></i>
                        </div>
                        <h3 class="h4 mb-3">Stakeholder Influence</h3>
                        <p class="mb-0">Board engagement capability, investor relations experience, and cross-functional collaboration assessment.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== OUR PROCESS ===== -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="display-5 fw-bold mb-4">Our Executive Search Process</h2>
                    <p class="lead">A rigorous, multi-stage approach that ensures we identify leaders who will drive your organization forward.</p>
                    <p>From initial briefing to successful onboarding, our process combines market intelligence with behavioral science to deliver transformational leadership solutions.</p>
                    
                    <div class="mt-5">
                        <a href="#" class="btn btn-primary btn-lg px-4 me-3">
                            <i class="fas fa-download me-2"></i> Download Process PDF
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <div class="process-steps ps-4">
                        <div class="process-step">
                            <h3 class="h4 mb-3">Strategic Briefing</h3>
                            <p>Deep dive into your organizational culture, strategic objectives, and specific leadership requirements through stakeholder interviews and data analysis.</p>
                        </div>
                        
                        <div class="process-step">
                            <h3 class="h4 mb-3">Talent Mapping</h3>
                            <p>Comprehensive identification and evaluation of potential candidates through our global network and proprietary database.</p>
                        </div>
                        
                        <div class="process-step">
                            <h3 class="h4 mb-3">Candidate Engagement</h3>
                            <p>Discreet approach and thorough evaluation of shortlisted candidates through multi-stage interviews and assessments.</p>
                        </div>
                        
                        <div class="process-step">
                            <h3 class="h4 mb-3">Selection & Onboarding</h3>
                            <p>Facilitation of final selection, negotiation, and comprehensive onboarding support for first 100 days.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CASE STUDIES ===== -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Executive Search Success Stories</h2>
                <p class="lead text-muted mx-auto" style="max-width: 700px;">Transformational leadership placements across industries</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="case-study-card card h-100">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80" 
                                 class="card-img-top" 
                                 alt="Financial executives">
                            <span class="case-study-badge">Financial Services</span>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title h5">Global Fintech CEO Search</h3>
                            <p class="card-text text-muted small">For $2B payments technology company</p>
                            
                            <div class="mt-3">
                                <h4 class="h6 text-primary">Challenge</h4>
                                <p class="small">Needed CEO who could lead digital transformation while maintaining 20% annual growth</p>
                                
                                <h4 class="h6 text-primary mt-3">Solution</h4>
                                <ul class="small ps-3">
                                    <li>Identified 28 candidates across 3 continents</li>
                                    <li>Assessed digital leadership through simulations</li>
                                    <li>Presented 5 exceptionally qualified candidates</li>
                                </ul>
                                
                                <h4 class="h6 text-primary mt-3">Result</h4>
                                <p class="small mb-0">Placed former PayPal executive who grew revenue by 40% in first 18 months</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="case-study-card card h-100">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80" 
                                 class="card-img-top" 
                                 alt="Healthcare executives">
                            <span class="case-study-badge">Healthcare</span>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title h5">Hospital System Leadership</h3>
                            <p class="card-text text-muted small">For regional healthcare network</p>
                            
                            <div class="mt-3">
                                <h4 class="h6 text-primary">Challenge</h4>
                                <p class="small">Required complete leadership team to implement value-based care models</p>
                                
                                <h4 class="h6 text-primary mt-3">Solution</h4>
                                <ul class="small ps-3">
                                    <li>Concurrent searches for CEO, CMO and CFO</li>
                                    <li>Emphasized experience in bundled payments</li>
                                    <li>Prioritized cultural fit with community mission</li>
                                </ul>
                                
                                <h4 class="h6 text-primary mt-3">Result</h4>
                                <p class="small mb-0">35% improvement in patient satisfaction scores while reducing costs</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="case-study-card card h-100">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80" 
                                 class="card-img-top" 
                                 alt="Technology executives">
                            <span class="case-study-badge">Technology</span>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title h5">Unicorn CTO Search</h3>
                            <p class="card-text text-muted small">For AI startup preparing for IPO</p>
                            
                            <div class="mt-3">
                                <h4 class="h6 text-primary">Challenge</h4>
                                <p class="small">Needed CTO who could scale infrastructure for hypergrowth</p>
                                
                                <h4 class="h6 text-primary mt-3">Solution</h4>
                                <ul class="small ps-3">
                                    <li>Targeted candidates from FAANG companies</li>
                                    <li>Assessed architecture decision-making skills</li>
                                    <li>Evaluated developer productivity metrics</li>
                                </ul>
                                
                                <h4 class="h6 text-primary mt-3">Result</h4>
                                <p class="small mb-0">Reduced platform downtime from 3.2% to 0.01% while cutting costs</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-5">
                <a href="#" class="btn btn-outline-primary btn-lg px-4">
                    <i class="fas fa-book-open me-2"></i> View All Case Studies
                </a>
            </div>
        </div>
    </section>

    <!-- ===== STATISTICS ===== -->
    <section class="py-5 bg-primary text-white">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 mb-4 mb-md-0">
                    <div class="stats-card">
                        <div class="stats-number">92%</div>
                        <div class="stats-label">Placement Success Rate</div>
                    </div>
                </div>
                <div class="col-md-3 mb-4 mb-md-0">
                    <div class="stats-card">
                        <div class="stats-number">3.5x</div>
                        <div class="stats-label">Average Client ROI</div>
                    </div>
                </div>
                <div class="col-md-3 mb-4 mb-md-0">
                    <div class="stats-card">
                        <div class="stats-number">24</div>
                        <div class="stats-label">Countries</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stats-card">
                        <div class="stats-number">15+</div>
                        <div class="stats-label">Years Experience</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== INDUSTRY EXPERTISE ===== -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Industry-Specific Executive Search</h2>
                <p class="lead text-muted mx-auto" style="max-width: 700px;">We understand the unique leadership requirements of each sector</p>
            </div>
            
            <div class="accordion" id="industryAccordion">
                <!-- Technology Accordion -->
                <div class="accordion-item border-0 mb-3 shadow-sm">
                    <h2 class="accordion-header" id="techHeading">
                        <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#techCollapse">
                            <i class="fas fa-microchip text-primary me-3"></i>
                            <span class="fw-bold">Technology & SaaS</span>
                        </button>
                    </h2>
                    <div id="techCollapse" class="accordion-collapse collapse" data-bs-parent="#industryAccordion">
                        <div class="accordion-body">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <h3 class="h4 text-primary mb-3">Key Hiring Challenges</h3>
                                    <ul class="list-unstyled">
                                        <li class="mb-3 d-flex">
                                            <span class="me-2 text-primary">•</span>
                                            <span>Balancing technical depth with business acumen</span>
                                        </li>
                                        <li class="mb-3 d-flex">
                                            <span class="me-2 text-primary">•</span>
                                            <span>Scaling leadership for hyper-growth phases</span>
                                        </li>
                                        <li class="mb-3 d-flex">
                                            <span class="me-2 text-primary">•</span>
                                            <span>Transitioning from founder-led to professional management</span>
                                        </li>
                                    </ul>
                                    
                                    <h3 class="h4 text-primary mb-3 mt-4">Our Approach</h3>
                                    <p>We maintain a specialized network of 8,500+ tech executives who've scaled companies from Series A to IPO.</p>
                                </div>
                                <div class="col-lg-6 mt-4 mt-lg-0">
                                    <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80" 
                                         alt="Tech executives" 
                                         class="img-fluid rounded-3 shadow" 
                                         loading="lazy">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Additional industry accordions would follow same pattern -->
            </div>
        </div>
    </section>

    <?php include "include/footer.php"; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/your-code.js" crossorigin="anonymous"></script>
</body>
</html>