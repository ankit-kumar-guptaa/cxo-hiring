<?php include "include/assets.php"?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Executive Search Process | CXO Hire</title>
    <meta name="description" content="Discover our proven 6-step executive search methodology that ensures we find the perfect leadership fit for your organization. Learn how our rigorous process delivers exceptional C-suite talent.">
    <meta name="keywords" content="executive search process, C-suite recruitment process, leadership hiring methodology, executive talent acquisition, senior leadership search, CEO search process, CXO recruitment steps">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="assets/css/services.css">
    <style>
        /* प्रोसेस पेज के लिए विशेष स्टाइल */
        .process-step {
            position: relative;
            padding: 30px;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
            height: 100%;
        }
        
        .process-step:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        
        .step-number {
            position: absolute;
            top: -20px;
            left: 30px;
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #0d6efd, #0a58ca);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            font-weight: bold;
            box-shadow: 0 5px 15px rgba(13, 110, 253, 0.3);
        }
        
        .process-icon {
            font-size: 40px;
            color: #0d6efd;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }
        
        .process-step:hover .process-icon {
            transform: scale(1.2);
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
            background: linear-gradient(to bottom, #0d6efd, #0a58ca);
            transform: translateX(-50%);
        }
        
        .timeline-item {
            position: relative;
            margin-bottom: 50px;
        }
        
        .timeline-content {
            position: relative;
            width: 45%;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .timeline-item:nth-child(odd) .timeline-content {
            margin-left: auto;
        }
        
        .timeline-item:nth-child(odd) .timeline-content::before {
            content: '';
            position: absolute;
            top: 20px;
            left: -15px;
            width: 0;
            height: 0;
            border-top: 15px solid transparent;
            border-bottom: 15px solid transparent;
            border-right: 15px solid #fff;
        }
        
        .timeline-item:nth-child(even) .timeline-content::before {
            content: '';
            position: absolute;
            top: 20px;
            right: -15px;
            width: 0;
            height: 0;
            border-top: 15px solid transparent;
            border-bottom: 15px solid transparent;
            border-left: 15px solid #fff;
        }
        
        .timeline-dot {
            position: absolute;
            top: 20px;
            left: 50%;
            width: 20px;
            height: 20px;
            background: #0d6efd;
            border-radius: 50%;
            transform: translateX(-50%);
            z-index: 1;
        }
        
        .timeline-date {
            display: inline-block;
            padding: 5px 15px;
            background: #0d6efd;
            color: white;
            border-radius: 20px;
            font-size: 14px;
            margin-bottom: 10px;
        }
        
        .faq-item {
            margin-bottom: 20px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .faq-question {
            padding: 20px;
            background: #f8f9fa;
            cursor: pointer;
            font-weight: 600;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: all 0.3s ease;
        }
        
        .faq-question:hover {
            background: #e9ecef;
        }
        
        .faq-answer {
            padding: 0 20px;
            max-height: 0;
            overflow: hidden;
            transition: all 0.3s ease;
            background: white;
        }
        
        .faq-item.active .faq-answer {
            padding: 20px;
            max-height: 1000px;
        }
        
        .faq-item.active .faq-toggle i {
            transform: rotate(180deg);
        }
        
        .faq-toggle i {
            transition: all 0.3s ease;
        }
        
        @media (max-width: 768px) {
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
                border-right: 15px solid #fff;
                border-left: 0;
            }
            
            .timeline-dot {
                left: 30px;
            }
        }
    </style>
</head>

<body>
    <?php include "include/header.php"; ?>

    <!-- ===== PROCESS HERO ===== -->
    <section class="service-hero">
        <div class="container position-relative">
            <!-- <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb breadcrumb-nav">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Our Process</li>
                </ol>
            </nav> -->
            
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">Our Executive Search Process</h1>
                    <p class="lead mb-4">A proven methodology that delivers exceptional leadership talent</p>
                    <p>Our rigorous 6-step process combines deep industry knowledge, proprietary assessment tools, and extensive networks to identify and secure transformative leaders for your organization.</p>
                    
                    <div class="d-flex gap-3 mt-4">
                        <a href="#contact" class="btn btn-warning btn-lg px-4 fw-bold">Start Your Search</a>
                        <a href="#process-steps" class="btn btn-outline-light btn-lg px-4">Explore Our Process</a>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80" 
                         alt="Executive search process and methodology" 
                         class="img-fluid rounded-3 shadow-lg" 
                         loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- ===== PROCESS OVERVIEW ===== -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Why Our Process Works</h2>
                <p class="lead">The CXO Hire difference that ensures exceptional results</p>
            </div>
            
            <div class="row text-center">
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="p-4 rounded-3 h-100 bg-white shadow-sm">
                        <div class="display-4 text-primary mb-3">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <h3 class="h4 fw-bold">Precision Targeting</h3>
                        <p class="mb-0">Our industry-specific research teams identify candidates with the exact experience and skills your organization needs.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="p-4 rounded-3 h-100 bg-white shadow-sm">
                        <div class="display-4 text-primary mb-3">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                        <h3 class="h4 fw-bold">Data-Driven Assessment</h3>
                        <p class="mb-0">Our proprietary evaluation methodology goes beyond resumes to measure leadership capabilities and cultural alignment.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 rounded-3 h-100 bg-white shadow-sm">
                        <div class="display-4 text-primary mb-3">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h3 class="h4 fw-bold">Partnership Approach</h3>
                        <p class="mb-0">We collaborate closely with your team throughout the process, ensuring alignment and transparency at every stage.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== PROCESS STEPS ===== -->
    <section id="process-steps" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Our 6-Step Process</h2>
                <p class="lead">A comprehensive methodology that delivers exceptional leadership talent</p>
            </div>
            
            <div class="row g-4">
                <!-- Step 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="process-step">
                        <div class="step-number">1</div>
                        <div class="process-icon">
                            <i class="fas fa-search"></i>
                        </div>
                        <h3 class="h4 fw-bold">Discovery & Needs Analysis</h3>
                        <p>We begin by deeply understanding your organization's strategic objectives, culture, and the specific leadership requirements for the role.</p>
                        <ul class="mt-3">
                            <li>Stakeholder interviews</li>
                            <li>Organizational assessment</li>
                            <li>Role specification development</li>
                            <li>Success metrics definition</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Step 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="process-step">
                        <div class="step-number">2</div>
                        <div class="process-icon">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <h3 class="h4 fw-bold">Research & Targeting</h3>
                        <p>Our industry-specialized research teams identify and map the market for exceptional candidates who match your specific requirements.</p>
                        <ul class="mt-3">
                            <li>Market mapping</li>
                            <li>Competitor analysis</li>
                            <li>Talent pool identification</li>
                            <li>Diversity candidate sourcing</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Step 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="process-step">
                        <div class="step-number">3</div>
                        <div class="process-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <h3 class="h4 fw-bold">Candidate Engagement</h3>
                        <p>We approach potential candidates with a compelling narrative about your organization and the opportunity, focusing on those who are the best strategic fit.</p>
                        <ul class="mt-3">
                            <li>Strategic outreach</li>
                            <li>Opportunity positioning</li>
                            <li>Initial qualification</li>
                            <li>Interest assessment</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Step 4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="process-step">
                        <div class="step-number">4</div>
                        <div class="process-icon">
                            <i class="fas fa-clipboard-check"></i>
                        </div>
                        <h3 class="h4 fw-bold">Rigorous Assessment</h3>
                        <p>Candidates undergo our comprehensive evaluation process, which assesses technical skills, leadership capabilities, and cultural alignment.</p>
                        <ul class="mt-3">
                            <li>In-depth interviews</li>
                            <li>Competency assessment</li>
                            <li>Leadership style evaluation</li>
                            <li>Cultural fit analysis</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Step 5 -->
                <div class="col-md-6 col-lg-4">
                    <div class="process-step">
                        <div class="step-number">5</div>
                        <div class="process-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3 class="h4 fw-bold">Client Presentation</h3>
                        <p>We present a shortlist of exceptional candidates, each with comprehensive profiles and our detailed assessment of their fit for the role.</p>
                        <ul class="mt-3">
                            <li>Candidate shortlisting</li>
                            <li>Detailed profiles</li>
                            <li>Comparative analysis</li>
                            <li>Interview coordination</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Step 6 -->
                <div class="col-md-6 col-lg-4">
                    <div class="process-step">
                        <div class="step-number">6</div>
                        <div class="process-icon">
                            <i class="fas fa-flag-checkered"></i>
                        </div>
                        <h3 class="h4 fw-bold">Selection & Onboarding</h3>
                        <p>We facilitate the final selection process and provide comprehensive support through offer negotiation and onboarding.</p>
                        <ul class="mt-3">
                            <li>Reference verification</li>
                            <li>Offer negotiation</li>
                            <li>Transition planning</li>
                            <li>Onboarding support</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== TIMELINE ===== -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Typical Search Timeline</h2>
                <p class="lead">Our efficient process delivers exceptional results within a predictable timeframe</p>
            </div>
            
            <div class="timeline">
                <!-- Week 1-2 -->
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-date">Week 1-2</div>
                        <h3 class="h5 fw-bold">Discovery & Research</h3>
                        <p>We conduct stakeholder interviews, develop the role specification, and begin market mapping to identify potential candidates.</p>
                    </div>
                </div>
                
                <!-- Week 3-4 -->
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-date">Week 3-4</div>
                        <h3 class="h5 fw-bold">Candidate Engagement</h3>
                        <p>Our team approaches and screens potential candidates, conducting initial assessments to identify those who best match your requirements.</p>
                    </div>
                </div>
                
                <!-- Week 5-6 -->
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-date">Week 5-6</div>
                        <h3 class="h5 fw-bold">In-Depth Assessment</h3>
                        <p>Promising candidates undergo comprehensive evaluation, including competency-based interviews and leadership assessments.</p>
                    </div>
                </div>
                
                <!-- Week 7-8 -->
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-date">Week 7-8</div>
                        <h3 class="h5 fw-bold">Client Interviews</h3>
                        <p>We present a shortlist of exceptional candidates and coordinate interviews with your team, providing detailed feedback and insights.</p>
                    </div>
                </div>
                
                <!-- Week 9-10 -->
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-date">Week 9-10</div>
                        <h3 class="h5 fw-bold">Selection & Offer</h3>
                        <p>Final candidate selection is made, references are verified, and we support the offer negotiation process to secure your preferred candidate.</p>
                    </div>
                </div>
                
                <!-- Week 11-12 -->
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-date">Week 11-12</div>
                        <h3 class="h5 fw-bold">Onboarding Support</h3>
                        <p>We provide transition planning and onboarding support to ensure a smooth integration of your new executive into your organization.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== TESTIMONIALS ===== -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Client Success Stories</h2>
                <p class="lead">How our process has delivered transformative leadership talent</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="p-4 rounded-3 bg-white shadow-sm h-100">
                        <div class="mb-3">
                            <i class="fas fa-quote-left text-primary fa-2x"></i>
                        </div>
                        <p class="mb-4">The CXO Hire team's process was exceptional from start to finish. They took the time to understand our unique culture and requirements, and delivered a shortlist of outstanding candidates within 6 weeks. Our new CEO has transformed our organization in just 12 months.</p>
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <!-- <img src="https://randomuser.me/api/portraits/men/41.jpg" alt="Client" class="rounded-circle" width="60"> -->
                            </div>
                            <div class="ms-3">
                                <h4 class="h6 mb-1">Rajiv Sharma</h4>
                                <p class="small mb-0">Board Chairman, Global Technology Company</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="p-4 rounded-3 bg-white shadow-sm h-100">
                        <div class="mb-3">
                            <i class="fas fa-quote-left text-primary fa-2x"></i>
                        </div>
                        <p class="mb-4">We had struggled to fill our CFO position for months before engaging CXO Hire. Their thorough process and industry expertise allowed them to identify candidates we hadn't considered. Our new CFO has already implemented changes that improved our financial performance by 22%.</p>
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <!-- <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Client" class="rounded-circle" width="60"> -->
                            </div>
                            <div class="ms-3">
                                <h4 class="h6 mb-1">Priya Patel</h4>
                                <p class="small mb-0">CEO, Manufacturing Enterprise</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== FAQ ===== -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Frequently Asked Questions</h2>
                <p class="lead">Common questions about our executive search process</p>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <!-- FAQ Item 1 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>How long does a typical executive search take?</span>
                            <span class="faq-toggle"><i class="fas fa-chevron-down"></i></span>
                        </div>
                        <div class="faq-answer">
                            <p>Our typical executive search process takes 8-12 weeks from initial engagement to offer acceptance. This timeline can vary based on the complexity of the role, the level of seniority, and market conditions. We provide a detailed timeline at the beginning of each search and keep you updated on progress throughout the process.</p>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 2 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>How do you ensure candidates are a good cultural fit?</span>
                            <span class="faq-toggle"><i class="fas fa-chevron-down"></i></span>
                        </div>
                        <div class="faq-answer">
                            <p>Cultural fit is a critical component of our assessment process. We begin by conducting a thorough analysis of your organization's culture through stakeholder interviews and organizational assessment. We then use our proprietary cultural alignment methodology to evaluate candidates against these criteria. This includes specific interview questions, behavioral assessments, and reference checks designed to verify cultural compatibility.</p>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 3 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>What happens if a placed candidate doesn't work out?</span>
                            <span class="faq-toggle"><i class="fas fa-chevron-down"></i></span>
                        </div>
                        <div class="faq-answer">
                            <p>We stand behind our placements with one of the industry's strongest guarantees. If a placed candidate leaves or is terminated within 12 months of their start date, we will conduct a replacement search at no additional professional fee. Our retention rate is over 90% at the two-year mark, significantly above industry average, due to our thorough assessment process.</p>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 4 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>How do you source diverse candidates?</span>
                            <span class="faq-toggle"><i class="fas fa-chevron-down"></i></span>
                        </div>
                        <div class="faq-answer">
                            <p>Diversity is integrated throughout our search process. We maintain extensive networks within diverse professional organizations, utilize specialized diversity-focused sourcing channels, and employ structured interview techniques that minimize unconscious bias. Our track record shows that 45% of our placements are diverse candidates, and we're committed to presenting balanced candidate slates for every search.</p>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 5 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>What information do you need to begin a search?</span>
                            <span class="faq-toggle"><i class="fas fa-chevron-down"></i></span>
                        </div>
                        <div class="faq-answer">
                            <p>To initiate an effective search, we need to understand your organization's strategic objectives, the specific role requirements, reporting relationships, compensation parameters, and key success metrics. Our discovery process will help gather this information through stakeholder interviews and organizational assessment. The more context we have about your organization and its needs, the more effective our search will be.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CONTACT SECTION ===== -->
    <section id="contact" class="py-5">
        <?php include "include/contactForm.php"; ?>
    </section>

    <?php include "include/footer.php"; ?>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- FAQ Functionality Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get all FAQ question elements
            const faqQuestions = document.querySelectorAll('.faq-question');
            
            // Add click event to each FAQ question
            faqQuestions.forEach(question => {
                question.addEventListener('click', function() {
                    // Toggle active class on parent item
                    this.parentElement.classList.toggle('active');
                });
            });
        });
    </script>
</body>
</html>