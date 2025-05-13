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
                    <p class="lead mb-4">Strategic guidance for enhanced board effectiveness</p>
                    <p>We provide comprehensive board advisory services to help organizations optimize their governance structure, enhance board performance, and navigate complex business challenges.</p>
                    
                    <div class="d-flex gap-3 mt-4">
                        <a href="#contact" class="btn btn-warning btn-lg px-4 fw-bold">Get Started</a>
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

    <!-- ===== KEY SERVICES ===== -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Our Board Advisory Solutions</h2>
                <p class="lead text-muted">Comprehensive services to enhance board effectiveness</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="board-card">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-4">
                                <i class="fas fa-users-cog fa-2x text-primary me-3"></i>
                                <h3 class="h5 mb-0">Board Composition & Structure</h3>
                            </div>
                            <p>Optimize your board's composition with our expert guidance:</p>
                            <ul class="list-unstyled">
                                <li class="mb-2">✓ Skills matrix assessment</li>
                                <li class="mb-2">✓ Diversity analysis</li>
                                <li class="mb-2">✓ Committee structure review</li>
                                <li>✓ Succession planning</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="board-card">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-4">
                                <i class="fas fa-chart-line fa-2x text-primary me-3"></i>
                                <h3 class="h5 mb-0">Performance Evaluation</h3>
                            </div>
                            <p>Enhance board effectiveness through comprehensive evaluation:</p>
                            <ul class="list-unstyled">
                                <li class="mb-2">✓ Individual director assessment</li>
                                <li class="mb-2">✓ Board dynamics analysis</li>
                                <li class="mb-2">✓ Committee effectiveness</li>
                                <li>✓ Governance benchmarking</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="board-card">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-4">
                                <i class="fas fa-shield-alt fa-2x text-primary me-3"></i>
                                <h3 class="h5 mb-0">Risk & Compliance</h3>
                            </div>
                            <p>Strengthen your risk oversight capabilities:</p>
                            <ul class="list-unstyled">
                                <li class="mb-2">✓ Risk framework development</li>
                                <li class="mb-2">✓ Compliance monitoring</li>
                                <li class="mb-2">✓ ESG integration</li>
                                <li>✓ Crisis preparedness</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== WHY CHOOSE US ===== -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="display-5 fw-bold mb-4">Why Choose Our Advisory Services?</h2>
                    <div class="mb-4">
                        <h3 class="h5 mb-3">Expert Consultants</h3>
                        <p>Our team comprises seasoned board advisors with extensive experience across industries and governance structures.</p>
                    </div>
                    <div class="mb-4">
                        <h3 class="h5 mb-3">Customized Solutions</h3>
                        <p>We develop tailored solutions that address your specific board challenges and organizational context.</p>
                    </div>
                    <div class="mb-4">
                        <h3 class="h5 mb-3">Global Best Practices</h3>
                        <p>Stay ahead with insights from our global network and access to leading governance practices.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80" 
                         alt="Board advisory meeting" 
                         class="img-fluid rounded-3 shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CONTACT SECTION ===== -->
    <section id="contact" class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="display-5 fw-bold mb-4">Ready to Enhance Your Board's Effectiveness?</h2>
                    <p class="lead mb-5">Contact us today to discuss how we can help strengthen your board's governance and performance.</p>
                    <a href="contact.php" class="btn btn-primary btn-lg px-5">Get in Touch</a>
                </div>
            </div>
        </div>
    </section>

    <?php include "include/footer.php"; ?>
</body>
</html>