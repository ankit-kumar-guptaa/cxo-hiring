<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Specialized executive search services focused on diverse leadership talent acquisition. We help organizations build inclusive leadership teams that drive innovation and growth.">
    <meta name="keywords" content="diversity executive search, inclusive leadership, diverse talent acquisition, DEI executive recruitment, multicultural leadership, women executives, minority executives, inclusive workplace, leadership diversity">
    <title>Diversity Executive Search | Building Inclusive Leadership Teams | CXOHire.com</title>
    <?php include "include/assets.php"; ?>
    <style>
        /* ========== DIVERSITY SEARCH STYLES ========== */
        :root {
            --diversity-blue: #1e3a8a;
            --diversity-dark: #0f172a;
            --diversity-accent: #7c3aed;
            --diversity-light: #f8fafc;
            --diversity-gray: #64748b;
        }
        
        .diversity-hero {
            background: linear-gradient(135deg, var(--diversity-blue) 0%, var(--diversity-dark) 100%);
            padding: 6rem 0 4rem;
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .diversity-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1521791055366-0d553872125f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80') center/cover;
            opacity: 0.15;
        }
        
        .diversity-card {
            border: none;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.1);
            height: 100%;
            border-top: 4px solid var(--diversity-accent);
        }
        
        .diversity-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        }
    </style>
</head>
<body>
    <?php include "include/header.php"; ?>

    <!-- ===== DIVERSITY HERO ===== -->
    <section class="diversity-hero">
        <div class="container position-relative">
            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb breadcrumb-nav">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/services">Services</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Diversity Executive Search</li>
                </ol>
            </nav>
            
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">Diversity Executive Search</h1>
                    <p class="lead mb-4">Building inclusive leadership teams that drive innovation and success</p>
                    <p>We help organizations identify and attract diverse executive talent, fostering inclusive leadership teams that bring unique perspectives and drive better business outcomes.</p>
                    
                    <div class="d-flex gap-3 mt-4">
                        <a href="#contact" class="btn btn-warning btn-lg px-4 fw-bold">Start Your Search</a>
                        <a href="#approach" class="btn btn-outline-light btn-lg px-4">Our Approach</a>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80" 
                         alt="Diverse executive team" 
                         class="img-fluid rounded-3 shadow-lg" 
                         loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- ===== WHY DIVERSITY MATTERS ===== -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Why Diversity in Leadership Matters</h2>
                <p class="lead text-muted mx-auto" style="max-width: 700px;">Research consistently shows that diverse leadership teams outperform their peers</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="diversity-card">
                        <div class="card-body p-4 text-center">
                            <div class="bg-purple-100 rounded-circle p-3 d-inline-flex mb-4">
                                <i class="fas fa-chart-line fa-2x text-purple-600"></i>
                            </div>
                            <h3 class="h5 mb-3">Better Performance</h3>
                            <p class="small">Companies with diverse executive teams are 33% more likely to outperform on profitability</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="diversity-card">
                        <div class="card-body p-4 text-center">
                            <div class="bg-purple-100 rounded-circle p-3 d-inline-flex mb-4">
                                <i class="fas fa-lightbulb fa-2x text-purple-600"></i>
                            </div>
                            <h3 class="h5 mb-3">Enhanced Innovation</h3>
                            <p class="small">Diverse teams are 70% more likely to capture new markets through innovation</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="diversity-card">
                        <div class="card-body p-4 text-center">
                            <div class="bg-purple-100 rounded-circle p-3 d-inline-flex mb-4">
                                <i class="fas fa-users fa-2x text-purple-600"></i>
                            </div>
                            <h3 class="h5 mb-3">Better Decision Making</h3>
                            <p class="small">Inclusive teams make better decisions up to 87% of the time</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="diversity-card">
                        <div class="card-body p-4 text-center">
                            <div class="bg-purple-100 rounded-circle p-3 d-inline-flex mb-4">
                                <i class="fas fa-globe fa-2x text-purple-600"></i>
                            </div>
                            <h3 class="h5 mb-3">Global Perspective</h3>
                            <p class="small">Diverse leadership teams better understand and serve global markets</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== OUR APPROACH ===== -->
    <section id="approach" class="py-5 bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="display-5 fw-bold mb-4">Our Inclusive Search Approach</h2>
                    <p>We employ a comprehensive methodology to identify and attract diverse executive talent:</p>
                    
                    <div class="mt-4">
                        <div class="mb-4">
                            <h3 class="h5 mb-3">Expanded Talent Networks</h3>
                            <p>Access to diverse professional networks, organizations, and communities across industries</p>
                        </div>
                        <div class="mb-4">
                            <h3 class="h5 mb-3">Bias-Free Assessment</h3>
                            <p>Structured evaluation processes designed to eliminate unconscious bias</p>
                        </div>
                        <div class="mb-4">
                            <h3 class="h5 mb-3">Cultural Integration</h3>
                            <p>Support for successful onboarding and integration of diverse executives</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1521791055366-0d553872125f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80" 
                         alt="Diverse leadership meeting" 
                         class="img-fluid rounded-3 shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- ===== SUCCESS STORIES ===== -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Success Stories</h2>
                <p class="lead text-muted mx-auto" style="max-width: 700px;">Real impact through diverse leadership placement</p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="diversity-card">
                        <div class="card-body p-4">
                            <div class="mb-4">
                                <span class="badge bg-primary">Technology</span>
                            </div>
                            <h3 class="h5 mb-3">Global Tech Giant</h3>
                            <p>Placed a diverse leadership team that increased innovation output by 45% and expanded market reach across APAC region.</p>
                            <ul class="list-unstyled mt-3">
                                <li class="mb-2">✓ 40% women in leadership</li>
                                <li class="mb-2">✓ 35% multicultural representation</li>
                                <li>✓ 25% increase in patents filed</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="diversity-card">
                        <div class="card-body p-4">
                            <div class="mb-4">
                                <span class="badge bg-success">Healthcare</span>
                            </div>
                            <h3 class="h5 mb-3">Leading Hospital Chain</h3>
                            <p>Built an inclusive executive team that improved patient satisfaction scores by 30% through culturally sensitive care delivery.</p>
                            <ul class="list-unstyled mt-3">
                                <li class="mb-2">✓ 50% diverse leadership team</li>
                                <li class="mb-2">✓ 28% increase in patient trust</li>
                                <li>✓ 15% reduction in care disparities</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="diversity-card">
                        <div class="card-body p-4">
                            <div class="mb-4">
                                <span class="badge bg-info">Financial Services</span>
                            </div>
                            <h3 class="h5 mb-3">Global Banking Leader</h3>
                            <p>Transformed executive leadership resulting in expanded market share in underserved communities.</p>
                            <ul class="list-unstyled mt-3">
                                <li class="mb-2">✓ 45% diverse board composition</li>
                                <li class="mb-2">✓ 32% new market penetration</li>
                                <li>✓ 20% increase in customer base</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== OUR PROCESS ===== -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Our Inclusive Search Process</h2>
                <p class="lead text-muted mx-auto" style="max-width: 700px;">A structured approach to identifying diverse executive talent</p>
            </div>

            <div class="row g-4">
                <div class="col-md-3">
                    <div class="diversity-card text-center">
                        <div class="card-body p-4">
                            <div class="rounded-circle bg-primary text-white d-inline-flex p-3 mb-4">
                                <h3 class="h2 mb-0">1</h3>
                            </div>
                            <h4 class="h5 mb-3">Discovery & Strategy</h4>
                            <p class="small">Understanding your organization's diversity goals and leadership needs</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="diversity-card text-center">
                        <div class="card-body p-4">
                            <div class="rounded-circle bg-primary text-white d-inline-flex p-3 mb-4">
                                <h3 class="h2 mb-0">2</h3>
                            </div>
                            <h4 class="h5 mb-3">Targeted Search</h4>
                            <p class="small">Leveraging our diverse networks and partnerships to identify qualified candidates</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="diversity-card text-center">
                        <div class="card-body p-4">
                            <div class="rounded-circle bg-primary text-white d-inline-flex p-3 mb-4">
                                <h3 class="h2 mb-0">3</h3>
                            </div>
                            <h4 class="h5 mb-3">Inclusive Assessment</h4>
                            <p class="small">Comprehensive evaluation process designed to eliminate bias</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="diversity-card text-center">
                        <div class="card-body p-4">
                            <div class="rounded-circle bg-primary text-white d-inline-flex p-3 mb-4">
                                <h3 class="h2 mb-0">4</h3>
                            </div>
                            <h4 class="h5 mb-3">Integration Support</h4>
                            <p class="small">Ensuring successful onboarding and long-term success</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== DIVERSITY PARTNERSHIPS ===== -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Our Diversity Partnerships</h2>
                <p class="lead text-muted mx-auto" style="max-width: 700px;">Working with leading organizations to expand our diverse talent network</p>
            </div>

            <div class="row g-4 align-items-center justify-content-center">
                <div class="col-6 col-md-3 text-center">
                    <img src="assets/client/byjus.png" alt="Partner 1" class="img-fluid" style="max-height: 60px;">
                </div>
                <div class="col-6 col-md-3 text-center">
                    <img src="assets/client/fortis.png" alt="Partner 2" class="img-fluid" style="max-height: 60px;">
                </div>
                <div class="col-6 col-md-3 text-center">
                    <img src="assets/client/hcl.png" alt="Partner 3" class="img-fluid" style="max-height: 60px;">
                </div>
                <div class="col-6 col-md-3 text-center">
                    <img src="assets/client/icici.png" alt="Partner 4" class="img-fluid" style="max-height: 60px;">
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CONTACT SECTION ===== -->
    <section id="contact" class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="display-5 fw-bold mb-4">Build Your Inclusive Leadership Team</h2>
                    <p class="lead mb-5">Contact us to discuss how we can help you identify and attract diverse executive talent.</p>
                    <a href="contact.php" class="btn btn-primary btn-lg px-5">Get Started</a>
                </div>
            </div>
        </div>
    </section>

    <?php include "include/footer.php"; ?>
</body>
</html>