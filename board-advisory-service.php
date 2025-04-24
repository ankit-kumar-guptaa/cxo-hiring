<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "include/assets.php"; ?>
    <title>Board Advisory Services | CXOHire.com</title>
    <style>
        /* ========== BOARD ADVISORY STYLES ========== */
        :root {
            --board-blue: #1e3a8a;
            --board-dark: #0f172a;
            --board-accent: #10b981;
            --board-light: #f8fafc;
            --board-gray: #64748b;
        }
        
        .board-hero {
            background: linear-gradient(135deg, var(--board-blue) 0%, var(--board-dark) 100%);
            padding: 6rem 0 4rem;
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .board-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80') center/cover;
            opacity: 0.15;
        }
        
        .board-card {
            border: none;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.1);
            height: 100%;
            border-top: 4px solid var(--board-accent);
        }
        
        .board-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        }
        
        .advisory-phase {
            position: relative;
            padding-left: 3rem;
            margin-bottom: 2.5rem;
        }
        
        .advisory-phase::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: var(--board-accent);
        }
        
        .advisory-phase::after {
            content: '';
            position: absolute;
            left: 15px;
            top: 30px;
            width: 2px;
            height: calc(100% - 30px);
            background: #e2e8f0;
        }
        
        .advisory-phase:last-child::after {
            display: none;
        }
        
        .service-card {
            border-left: 4px solid var(--board-accent);
            transition: all 0.3s ease;
        }
        
        .service-card:hover {
            transform: translateX(5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .board-badge {
            background: var(--board-accent);
            color: white;
        }
        
        @media (max-width: 768px) {
            .board-hero {
                padding: 4rem 0 2rem;
            }
        }
    </style>
</head>
<body>
    <?php include "include/header.php"; ?>

    <!-- ===== BOARD ADVISORY HERO ===== -->
    <section class="board-hero">
        <div class="container position-relative">
            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb breadcrumb-nav">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/services">Services</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Board Advisory</li>
                </ol>
            </nav>
            
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">Board Advisory Services</h1>
                    <p class="lead mb-4">Enhancing governance effectiveness and board performance</p>
                    <p>We help boards navigate complex governance challenges, optimize composition, and enhance strategic oversight through data-driven advisory services.</p>
                    
                    <div class="d-flex gap-3 mt-4">
                        <a href="#contact" class="btn btn-warning btn-lg px-4 fw-bold">Consult Our Advisors</a>
                        <a href="#services" class="btn btn-outline-light btn-lg px-4">Our Services</a>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <img src="https://images.unsplash.com/photo-1573164713988-8665fc963095?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80" 
                         alt="Board meeting" 
                         class="img-fluid rounded-3 shadow-lg" 
                         loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- ===== WHY BOARD ADVISORY ===== -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80" 
                         alt="Corporate governance" 
                         class="img-fluid rounded-3 shadow" 
                         loading="lazy">
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <h2 class="display-5 fw-bold mb-4">The Modern Board's Challenges</h2>
                    <p>Today's boards face unprecedented scrutiny and complexity in their oversight responsibilities:</p>
                    
                    <div class="advisory-phase">
                        <h3 class="h4 mb-3">Governance Complexity</h3>
                        <p>72% of boards report difficulty keeping pace with evolving regulatory requirements and ESG expectations.</p>
                    </div>
                    
                    <div class="advisory-phase">
                        <h3 class="h4 mb-3">Talent Gaps</h3>
                        <p>58% of boards lack critical skills in digital transformation, cybersecurity, or sustainability.</p>
                    </div>
                    
                    <div class="advisory-phase">
                        <h3 class="h4 mb-3">Stakeholder Pressure</h3>
                        <p>Investors increasingly vote against directors at companies with poor governance practices.</p>
                    </div>
                    
                    <div class="advisory-phase">
                        <h3 class="h4 mb-3">Strategy Oversight</h3>
                        <p>Only 39% of directors believe their board has sufficient expertise to oversee company strategy.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== OUR SERVICES ===== -->
    <section id="services" class="py-5 bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Our Board Advisory Services</h2>
                <p class="lead text-muted mx-auto" style="max-width: 700px;">Comprehensive support for governance excellence</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="board-card h-100">
                        <div class="card-body p-4">
                            <div class="bg-green-100 rounded-circle p-3 d-inline-flex mb-4">
                                <i class="fas fa-user-tie fa-2x text-green-600"></i>
                            </div>
                            <h3 class="h5 mb-3">Board Composition Optimization</h3>
                            <ul class="list-unstyled small">
                                <li class="mb-2 d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>Skills gap analysis and matrix development</span>
                                </li>
                                <li class="mb-2 d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>Diversity benchmarking</span>
                                </li>
                                <li class="mb-2 d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>Succession planning frameworks</span>
                                </li>
                                <li class="d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>Director evaluation methodologies</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="board-card h-100">
                        <div class="card-body p-4">
                            <div class="bg-green-100 rounded-circle p-3 d-inline-flex mb-4">
                                <i class="fas fa-chart-network fa-2x text-green-600"></i>
                            </div>
                            <h3 class="h5 mb-3">Governance Effectiveness</h3>
                            <ul class="list-unstyled small">
                                <li class="mb-2 d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>Committee structure optimization</span>
                                </li>
                                <li class="mb-2 d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>Decision-making process review</span>
                                </li>
                                <li class="mb-2 d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>Board information flow analysis</span>
                                </li>
                                <li class="d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>Meeting effectiveness assessments</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="board-card h-100">
                        <div class="card-body p-4">
                            <div class="bg-green-100 rounded-circle p-3 d-inline-flex mb-4">
                                <i class="fas fa-shield-alt fa-2x text-green-600"></i>
                            </div>
                            <h3 class="h5 mb-3">Risk & Compliance</h3>
                            <ul class="list-unstyled small">
                                <li class="mb-2 d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>Emerging risk oversight frameworks</span>
                                </li>
                                <li class="mb-2 d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>Cybersecurity governance</span>
                                </li>
                                <li class="mb-2 d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>Regulatory change management</span>
                                </li>
                                <li class="d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>ESG oversight models</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="board-card h-100">
                        <div class="card-body p-4">
                            <div class="bg-green-100 rounded-circle p-3 d-inline-flex mb-4">
                                <i class="fas fa-chess-king fa-2x text-green-600"></i>
                            </div>
                            <h3 class="h5 mb-3">CEO & Executive Oversight</h3>
                            <ul class="list-unstyled small">
                                <li class="mb-2 d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>Succession planning frameworks</span>
                                </li>
                                <li class="mb-2 d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>Compensation benchmarking</span>
                                </li>
                                <li class="mb-2 d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>Performance evaluation systems</span>
                                </li>
                                <li class="d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>Leadership development oversight</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="board-card h-100">
                        <div class="card-body p-4">
                            <div class="bg-green-100 rounded-circle p-3 d-inline-flex mb-4">
                                <i class="fas fa-lightbulb fa-2x text-green-600"></i>
                            </div>
                            <h3 class="h5 mb-3">Strategy & Innovation</h3>
                            <ul class="list-unstyled small">
                                <li class="mb-2 d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>Digital transformation oversight</span>
                                </li>
                                <li class="mb-2 d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>Disruption preparedness assessments</span>
                                </li>
                                <li class="mb-2 d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>Strategic planning facilitation</span>
                                </li>
                                <li class="d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>Innovation governance models</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== ADVISORY PROCESS ===== -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="display-5 fw-bold mb-4">Our Advisory Approach</h2>
                    <p class="lead">A structured methodology to enhance board effectiveness and governance</p>
                    <p>We combine global best practices with customized solutions tailored to your organization's specific needs and challenges.</p>
                    
                    <div class="mt-5">
                        <button class="btn btn-primary btn-lg px-4 me-3">
                            <i class="fas fa-download me-2"></i> Download Framework
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <div class="bg-white p-4 rounded-3 shadow-sm h-100">
                        <div class="advisory-phase">
                            <h3 class="h4 mb-3">Assessment Phase</h3>
                            <ul class="list-unstyled small">
                                <li class="mb-2 d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>Comprehensive governance audit</span>
                                </li>
                                <li class="mb-2 d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>Director skills matrix analysis</span>
                                </li>
                                <li class="d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>Stakeholder interviews</span>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="advisory-phase">
                            <h3 class="h4 mb-3">Recommendation Phase</h3>
                            <ul class="list-unstyled small">
                                <li class="mb-2 d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>Tailored improvement roadmap</span>
                                </li>
                                <li class="mb-2 d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>Benchmarked best practices</span>
                                </li>
                                <li class="d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>Prioritized action plan</span>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="advisory-phase">
                            <h3 class="h4 mb-3">Implementation Phase</h3>
                            <ul class="list-unstyled small">
                                <li class="mb-2 d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>Change management support</span>
                                </li>
                                <li class="mb-2 d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>Director recruitment assistance</span>
                                </li>
                                <li class="d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>Ongoing advisory support</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CASE STUDIES ===== -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Board Advisory Impact</h2>
                <p class="lead text-muted mx-auto" style="max-width: 700px;">Representative examples of our board advisory work</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <span class="badge board-badge mb-3">Financial Services</span>
                            <h3 class="h5 card-title">Fortune 500 Governance Overhaul</h3>
                            <p class="card-text small text-muted">$25B market cap banking institution</p>
                            
                            <div class="mt-3">
                                <h4 class="h6 text-primary">Challenge</h4>
                                <p class="small">Board needed modernization to address digital transformation and regulatory scrutiny</p>
                                
                                <h4 class="h6 text-primary mt-3">Our Approach</h4>
                                <ul class="small ps-3">
                                    <li>Comprehensive skills gap analysis</li>
                                    <li>Recruited 3 tech-savvy directors</li>
                                    <li>Redesigned committee structure</li>
                                </ul>
                                
                                <h4 class="h6 text-primary mt-3">Result</h4>
                                <p class="small mb-0">95% shareholder approval, reduced regulatory findings by 60%</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <span class="badge board-badge mb-3">Healthcare</span>
                            <h3 class="h5 card-title">Hospital System Governance</h3>
                            <p class="card-text small text-muted">Nonprofit health system with 15 facilities</p>
                            
                            <div class="mt-3">
                                <h4 class="h6 text-primary">Challenge</h4>
                                <p class="small">Board needed to transition from operational to strategic governance</p>
                                
                                <h4 class="h6 text-primary mt-3">Our Approach</h4>
                                <ul class="small ps-3">
                                    <li>Governance training for all directors</li>
                                    <li>Redesigned board information packages</li>
                                    <li>Implemented dashboard reporting</li>
                                </ul>
                                
                                <h4 class="h6 text-primary mt-3">Result</h4>
                                <p class="small mb-0">Strategic initiatives accelerated by 40%, improved bond ratings</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <span class="badge board-badge mb-3">Technology</span>
                            <h3 class="h5 card-title">Unicorn Startup Board Development</h3>
                            <p class="card-text small text-muted">$3B valuation SaaS company</p>
                            
                            <div class="mt-3">
                                <h4 class="h6 text-primary">Challenge</h4>
                                <p class="small">Founder-led board needed independent directors for IPO preparation</p>
                                
                                <h4 class="h6 text-primary mt-3">Our Approach</h4>
                                <ul class="small ps-3">
                                    <li>IPO-readiness assessment</li>
                                    <li>Recruited 2 independent directors</li>
                                    <li>Implemented governance framework</li>
                                </ul>
                                
                                <h4 class="h6 text-primary mt-3">Result</h4>
                                <p class="small mb-0">Successful NASDAQ listing at $5B valuation</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== ADVISORS ===== -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Our Board Advisors</h2>
                <p class="lead text-muted mx-auto" style="max-width: 700px;">Seasoned governance experts with real-world board experience</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" 
                             class="card-img-top" 
                             alt="Advisor 1"
                             style="height: 250px; object-fit: cover;">
                        <div class="card-body">
                            <h3 class="h5 card-title">Sarah Chen</h3>
                            <p class="card-text small text-muted">Former Fortune 500 Corporate Secretary</p>
                            <ul class="list-unstyled small">
                                <li class="mb-1 d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>20+ years governance experience</span>
                                </li>
                                <li class="mb-1 d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>Served on 12 public company boards</span>
                                </li>
                                <li class="d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>NACD Governance Fellow</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="https://images.unsplash.com/photo-1557862921-37829c790f19?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" 
                             class="card-img-top" 
                             alt="Advisor 2"
                             style="height: 250px; object-fit: cover;">
                        <div class="card-body">
                            <h3 class="h5 card-title">James Wilson</h3>
                            <p class="card-text small text-muted">Former Big 4 Governance Practice Lead</p>
                            <ul class="list-unstyled small">
                                <li class="mb-1 d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>Specializes in financial services</span>
                                </li>
                                <li class="mb-1 d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>Regulatory compliance expert</span>
                                </li>
                                <li class="d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>PhD in Corporate Governance</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" 
                             class="card-img-top" 
                             alt="Advisor 3"
                             style="height: 250px; object-fit: cover;">
                        <div class="card-body">
                            <h3 class="h5 card-title">Priya Kapoor</h3>
                            <p class="card-text small text-muted">Tech Board Specialist</p>
                            <ul class="list-unstyled small">
                                <li class="mb-1 d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>5 unicorn board appointments</span>
                                </li>
                                <li class="mb-1 d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>Digital transformation focus</span>
                                </li>
                                <li class="d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>Stanford Corporate Governance Program</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CTA ===== -->
    <section class="py-5 bg-primary text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="display-5 fw-bold mb-3">Transform Your Board's Effectiveness</h2>
                    <p class="lead mb-0">Contact our governance advisors for a confidential consultation</p>
                </div>
                <div class="col-lg-4 mt-4 mt-lg-0 text-lg-end">
                    <button class="btn btn-light btn-lg px-4 me-3">
                        <i class="fas fa-phone me-2"></i> Call Advisors
                    </button>
                    <button class="btn btn-outline-light btn-lg px-4">
                        <i class="fas fa-envelope me-2"></i> Email Us
                    </button>
                </div>
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