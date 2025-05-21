<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "include/assets.php"; ?>
    <title>Confidential Executive Search | CXOHire.com</title>
    <style>
        /* ========== CONFIDENTIAL SEARCH PAGE STYLES ========== */
        :root {
            --confidential-blue: #1e3a8a;
            --confidential-dark: #0f172a;
            --confidential-accent: #9333ea;
            --confidential-light: #f8fafc;
            --confidential-gray: #64748b;
        }
        
        .confidential-hero {
            background: linear-gradient(135deg, var(--confidential-blue) 0%, var(--confidential-dark) 100%);
            padding: 6rem 0 4rem;
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .confidential-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80') center/cover;
            opacity: 0.15;
        }
        
        .confidential-card {
            border: none;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.1);
            height: 100%;
            border-top: 4px solid var(--confidential-accent);
        }
        
        .confidential-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        }
        
        .confidential-badge {
            background: var(--confidential-accent);
            color: white;
        }
        
        .discreet-process {
            position: relative;
            padding-left: 3rem;
            margin-bottom: 2.5rem;
        }
        
        .discreet-process::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: var(--confidential-accent);
        }
        
        .discreet-process::after {
            content: '';
            position: absolute;
            left: 15px;
            top: 30px;
            width: 2px;
            height: calc(100% - 30px);
            background: #e2e8f0;
        }
        
        .discreet-process:last-child::after {
            display: none;
        }
        
        .scenario-card {
            border-left: 4px solid var(--confidential-accent);
            transition: all 0.3s ease;
        }
        
        .scenario-card:hover {
            transform: translateX(5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        @media (max-width: 768px) {
            .confidential-hero {
                padding: 4rem 0 2rem;
            }
        }
    </style>
</head>
<body>
    <?php include "include/header.php"; ?>

    <!-- ===== CONFIDENTIAL HERO ===== -->
    <section class="confidential-hero">
        <div class="container position-relative">
            <!-- <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb breadcrumb-nav">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/services">Services</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Confidential Executive Search</li>
                </ol>
            </nav> -->
            
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">Confidential Executive Search</h1>
                    <p class="lead mb-4">Discreet leadership recruitment for sensitive transitions and succession planning</p>
                    <p>When discretion is paramount, our confidential search process ensures complete privacy while identifying top-tier talent for sensitive leadership needs.</p>
                    
                    <div class="d-flex gap-3 mt-4">
                        <a href="#contact" class="btn btn-warning btn-lg px-4 fw-bold">Begin Confidential Search</a>
                        <a href="#process" class="btn btn-outline-light btn-lg px-4">Our Process</a>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <img src="https://images.unsplash.com/photo-1521791055366-0d553872125f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80" 
                         alt="Confidential meeting" 
                         class="img-fluid rounded-3 shadow-lg" 
                         loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- ===== WHY CONFIDENTIAL ===== -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80" 
                         alt="Discreet executive search" 
                         class="img-fluid rounded-3 shadow" 
                         loading="lazy">
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <h2 class="display-5 fw-bold mb-4">When Confidential Search is Essential</h2>
                    <p>Certain leadership transitions require absolute discretion to protect organizational stability and market perception.</p>
                    
                    <div class="discreet-process">
                        <h3 class="h4 mb-3">Succession Planning</h3>
                        <p>Preparing for planned leadership transitions without alerting current executives or competitors.</p>
                    </div>
                    
                    <div class="discreet-process">
                        <h3 class="h4 mb-3">Performance Replacements</h3>
                        <p>Identifying replacements for underperforming executives before making internal changes.</p>
                    </div>
                    
                    <div class="discreet-process">
                        <h3 class="h4 mb-3">Competitor Talent Mapping</h3>
                        <p>Assessing executive talent at competing organizations without revealing your interest.</p>
                    </div>
                    
                    <div class="discreet-process">
                        <h3 class="h4 mb-3">Sensitive Industry Moves</h3>
                        <p>Recruiting in industries where executive moves could impact stock prices or regulatory approvals.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== OUR APPROACH ===== -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Our Confidential Search Approach</h2>
                <p class="lead text-muted mx-auto" style="max-width: 700px;">Designed for absolute discretion without compromising on quality</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="confidential-card h-100">
                        <div class="card-body p-4 text-center">
                            <div class="bg-purple-100 rounded-circle p-3 d-inline-flex mb-4">
                                <i class="fas fa-user-secret fa-2x text-purple-600"></i>
                            </div>
                            <h3 class="h5 mb-3">Blind Searches</h3>
                            <p class="small">Candidate identities protected until final stages using coded references</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="confidential-card h-100">
                        <div class="card-body p-4 text-center">
                            <div class="bg-purple-100 rounded-circle p-3 d-inline-flex mb-4">
                                <i class="fas fa-lock fa-2x text-purple-600"></i>
                            </div>
                            <h3 class="h5 mb-3">Secure Systems</h3>
                            <p class="small">Encrypted communication channels and document storage</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="confidential-card h-100">
                        <div class="card-body p-4 text-center">
                            <div class="bg-purple-100 rounded-circle p-3 d-inline-flex mb-4">
                                <i class="fas fa-mask fa-2x text-purple-600"></i>
                            </div>
                            <h3 class="h5 mb-3">Discreet Outreach</h3>
                            <p class="small">Third-party intermediaries for initial candidate contact</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="confidential-card h-100">
                        <div class="card-body p-4 text-center">
                            <div class="bg-purple-100 rounded-circle p-3 d-inline-flex mb-4">
                                <i class="fas fa-file-contract fa-2x text-purple-600"></i>
                            </div>
                            <h3 class="h5 mb-3">NDA Protection</h3>
                            <p class="small">Comprehensive non-disclosure agreements at all stages</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CONFIDENTIAL PROCESS ===== -->
    <section id="process" class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="display-5 fw-bold mb-4">Discreet Search Process</h2>
                    <p class="lead">A carefully structured approach that protects all parties while delivering exceptional candidates</p>
                    <p>Our confidential methodology has been refined over 12 years of sensitive executive searches across global markets.</p>
                    
                    <div class="mt-5">
                        <button class="btn btn-primary btn-lg px-4 me-3"><a href="assets/CXO_Process.pdf" target="_blank" style="color: #f8fafc; text-decoration: none;">
                            <i class="fas fa-file-alt me-2"></i> Download Process
                            </a>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <div class="bg-white p-4 rounded-3 shadow-sm h-100">
                        <div class="discreet-process">
                            <h3 class="h4 mb-3">Initial Consultation</h3>
                            <ul class="list-unstyled small">
                                <li class="mb-2 d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>Secure video conference with decision-makers only</span>
                                </li>
                                <li class="mb-2 d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>Encrypted documentation sharing</span>
                                </li>
                                <li class="d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>Non-disclosure agreements executed</span>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="discreet-process">
                            <h3 class="h4 mb-3">Talent Identification</h3>
                            <ul class="list-unstyled small">
                                <li class="mb-2 d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>Blind profile reviews (redacted identities)</span>
                                </li>
                                <li class="mb-2 d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>Discreet third-party reference checks</span>
                                </li>
                                <li class="d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>Competitor mapping through indirect channels</span>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="discreet-process">
                            <h3 class="h4 mb-3">Candidate Engagement</h3>
                            <ul class="list-unstyled small">
                                <li class="mb-2 d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>Initial contact through trusted intermediaries</span>
                                </li>
                                <li class="mb-2 d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>Secure virtual interview platforms</span>
                                </li>
                                <li class="d-flex">
                                    <span class="me-2 text-primary">•</span>
                                    <span>Controlled information release</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== COMMON SCENARIOS ===== -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Common Confidential Search Scenarios</h2>
                <p class="lead text-muted mx-auto" style="max-width: 700px;">We've successfully managed sensitive searches across these situations</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="scenario-card bg-light p-4 rounded-3 h-100">
                        <div class="d-flex align-items-start">
                            <div class="bg-purple-100 rounded-circle p-3 me-4 flex-shrink-0">
                                <i class="fas fa-chess-king fa-lg text-purple-600"></i>
                            </div>
                            <div>
                                <h3 class="h4 mb-3">CEO Succession Planning</h3>
                                <p>Preparing for leadership transition without alerting current executives, board members, or markets. Our process includes:</p>
                                <ul class="list-unstyled small">
                                    <li class="mb-2 d-flex">
                                        <span class="me-2 text-primary">•</span>
                                        <span>Discreet competency benchmarking</span>
                                    </li>
                                    <li class="mb-2 d-flex">
                                        <span class="me-2 text-primary">•</span>
                                        <span>External talent mapping</span>
                                    </li>
                                    <li class="d-flex">
                                        <span class="me-2 text-primary">•</span>
                                        <span>Internal candidate assessment</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="scenario-card bg-light p-4 rounded-3 h-100">
                        <div class="d-flex align-items-start">
                            <div class="bg-purple-100 rounded-circle p-3 me-4 flex-shrink-0">
                                <i class="fas fa-exchange-alt fa-lg text-purple-600"></i>
                            </div>
                            <div>
                                <h3 class="h4 mb-3">Competitor Executive Recruitment</h3>
                                <p>Identifying and approaching top performers at competing organizations without revealing your interest. Our methods include:</p>
                                <ul class="list-unstyled small">
                                    <li class="mb-2 d-flex">
                                        <span class="me-2 text-primary">•</span>
                                        <span>Third-party initial outreach</span>
                                    </li>
                                    <li class="mb-2 d-flex">
                                        <span class="me-2 text-primary">•</span>
                                        <span>Plausible deniability protocols</span>
                                    </li>
                                    <li class="d-flex">
                                        <span class="me-2 text-primary">•</span>
                                        <span>Non-traceable communication channels</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="scenario-card bg-light p-4 rounded-3 h-100">
                        <div class="d-flex align-items-start">
                            <div class="bg-purple-100 rounded-circle p-3 me-4 flex-shrink-0">
                                <i class="fas fa-user-slash fa-lg text-purple-600"></i>
                            </div>
                            <div>
                                <h3 class="h4 mb-3">Performance Replacement</h3>
                                <p>Identifying potential replacements for underperforming executives before making internal changes. Our approach includes:</p>
                                <ul class="list-unstyled small">
                                    <li class="mb-2 d-flex">
                                        <span class="me-2 text-primary">•</span>
                                        <span>Parallel candidate evaluation</span>
                                    </li>
                                    <li class="mb-2 d-flex">
                                        <span class="me-2 text-primary">•</span>
                                        <span>Transition timeline planning</span>
                                    </li>
                                    <li class="d-flex">
                                        <span class="me-2 text-primary">•</span>
                                        <span>Internal messaging strategy</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="scenario-card bg-light p-4 rounded-3 h-100">
                        <div class="d-flex align-items-start">
                            <div class="bg-purple-100 rounded-circle p-3 me-4 flex-shrink-0">
                                <i class="fas fa-balance-scale fa-lg text-purple-600"></i>
                            </div>
                            <div>
                                <h3 class="h4 mb-3">Regulated Industry Moves</h3>
                                <p>Managing executive transitions in industries where moves could impact regulatory approvals or stock prices. Our solutions include:</p>
                                <ul class="list-unstyled small">
                                    <li class="mb-2 d-flex">
                                        <span class="me-2 text-primary">•</span>
                                        <span>Legal review of transition plans</span>
                                    </li>
                                    <li class="mb-2 d-flex">
                                        <span class="me-2 text-primary">•</span>
                                        <span>Regulatory compliance checks</span>
                                    </li>
                                    <li class="d-flex">
                                        <span class="me-2 text-primary">•</span>
                                        <span>Market signaling analysis</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CONFIDENTIAL CASE STUDIES ===== -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Confidential Search Success Stories</h2>
                <p class="lead text-muted mx-auto" style="max-width: 700px;">Representative examples (details modified to protect client identities)</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <span class="badge confidential-badge mb-3">Financial Services</span>
                            <h3 class="h5 card-title">Fortune 500 CEO Transition</h3>
                            <p class="card-text small text-muted">$15B market cap financial institution</p>
                            
                            <div class="mt-3">
                                <h4 class="h6 text-primary">Situation</h4>
                                <p class="small">Needed to identify successor 18 months before planned retirement without alerting markets</p>
                                
                                <h4 class="h6 text-primary mt-3">Our Approach</h4>
                                <ul class="small ps-3">
                                    <li>Conducted under "strategic planning" cover</li>
                                    <li>Evaluated 32 external candidates discreetly</li>
                                    <li>Assessed 4 internal candidates confidentially</li>
                                </ul>
                                
                                <h4 class="h6 text-primary mt-3">Outcome</h4>
                                <p class="small mb-0">Successful transition with no market disruption, stock price increased 12% post-announcement</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <span class="badge confidential-badge mb-3">Technology</span>
                            <h3 class="h5 card-title">Unicorn CTO Replacement</h3>
                            <p class="card-text small text-muted">$3B valuation AI startup</p>
                            
                            <div class="mt-3">
                                <h4 class="h6 text-primary">Situation</h4>
                                <p class="small">Needed to replace founding CTO lacking scaling experience without developer morale impact</p>
                                
                                <h4 class="h6 text-primary mt-3">Our Approach</h4>
                                <ul class="small ps-3">
                                    <li>Positioned as "technical advisory" engagement</li>
                                    <li>Assessed 19 candidates from FAANG companies</li>
                                    <li>Staged transition over 6 months</li>
                                </ul>
                                
                                <h4 class="h6 text-primary mt-3">Outcome</h4>
                                <p class="small mb-0">Zero attrition in engineering team, platform stability improved to 99.99% uptime</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <span class="badge confidential-badge mb-3">Healthcare</span>
                            <h3 class="h5 card-title">Hospital System Turnaround</h3>
                            <p class="card-text small text-muted">Regional network with 12 facilities</p>
                            
                            <div class="mt-3">
                                <h4 class="h6 text-primary">Situation</h4>
                                <p class="small">Required complete leadership change without alarming staff or patients</p>
                                
                                <h4 class="h6 text-primary mt-3">Our Approach</h4>
                                <ul class="small ps-3">
                                    <li>Conducted under "operational review" premise</li>
                                    <li>Identified 7 executives with turnaround experience</li>
                                    <li>Staggered transitions across 9 months</li>
                                </ul>
                                
                                <h4 class="h6 text-primary mt-3">Outcome</h4>
                                <p class="small mb-0">35% improvement in patient satisfaction, $18M cost savings in first year</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== GET STARTED ===== -->
    <!-- <section class="py-5 bg-primary text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="display-5 fw-bold mb-3">Begin Your Confidential Search</h2>
                    <p class="lead mb-0">Contact us through secure channels to discuss your sensitive leadership needs</p>
                </div>
                <div class="col-lg-4 mt-4 mt-lg-0 text-lg-end">
                    <button class="btn btn-light btn-lg px-4 me-3">
                        <i class="fas fa-phone me-2"></i> Secure Call
                    </button>
                    <button class="btn btn-outline-light btn-lg px-4">
                        <i class="fas fa-envelope me-2"></i> Encrypted Email
                    </button>
                </div>
            </div>
        </div>
    </section> -->

<?php include "include/contactForm.php"?>


    <?php include "include/footer.php"; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/your-code.js" crossorigin="anonymous"></script>
</body>
</html>