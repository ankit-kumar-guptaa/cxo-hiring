<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - CXO Hire </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php include "include/assets.php"?>
</head>

<body>

    <?php include "include/header.php"?>

    <div class="creative-breadcrumb">
  <div class="breadcrumb-overlay"></div>
  <div class="breadcrumb-particles"></div>
  <nav aria-label="Breadcrumb" class="breadcrumb-nav">
    <ol class="breadcrumb-list">
      <li class="breadcrumb-item">
        <a href="/" class="breadcrumb-link">
          <span class="breadcrumb-icon">
            <svg viewBox="0 0 24 24" width="20" height="20">
              <path d="M12 2L2 12h3v8h5v-6h4v6h5v-8h3L12 2zm0 2.8L18 10v8h-3v-6H9v6H6v-8l6-5.2z" fill="currentColor"/>
            </svg>
          </span>
          <span class="breadcrumb-text">Home</span>
        </a>
        <span class="breadcrumb-separator">
          <svg viewBox="0 0 24 24" width="16" height="16">
            <path d="M8.59 16.58L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.42z" fill="currentColor"/>
          </svg>
        </span>
      </li>
      <li class="breadcrumb-item">
        <a href="/services" class="breadcrumb-link">
          <span class="breadcrumb-icon">
            <svg viewBox="0 0 24 24" width="20" height="20">
              <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14z" fill="currentColor"/>
              <path d="M7 12h2v5H7zm4-7h2v12h-2zm4 5h2v7h-2z" fill="currentColor"/>
            </svg>
          </span>
          <span class="breadcrumb-text">Services</span>
        </a>
        <span class="breadcrumb-separator">
          <svg viewBox="0 0 24 24" width="16" height="16">
            <path d="M8.59 16.58L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.42z" fill="currentColor"/>
          </svg>
        </span>
      </li>
      <li class="breadcrumb-item active">
        <span class="breadcrumb-current">
          <span class="breadcrumb-icon">
            <svg viewBox="0 0 24 24" width="20" height="20">
              <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z" fill="currentColor"/>
            </svg>
          </span>
          <span class="breadcrumb-text">Executive Hiring</span>
        </span>
      </li>
    </ol>
  </nav>
  <div class="breadcrumb-title">Executive Hiring Solutions</div>
</div>

<style>
  .creative-breadcrumb {
    position: relative;
    max-width: 100%;
    margin: 30px 0;
    padding: 50px 20px 60px;
    background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 50%, #3b82f6 100%);
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 20px 40px rgba(30, 58, 138, 0.3);
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
  }
  
  .breadcrumb-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><rect width="100" height="100" fill="none"/><path d="M30,10 Q50,5 70,10 T90,30 Q95,50 90,70 T70,90 Q50,95 30,90 T10,70 Q5,50 10,30 T30,10" fill="none" stroke="rgba(255,255,255,0.05)" stroke-width="1"/></svg>');
    opacity: 0.8;
    z-index: 0;
  }
  
  .breadcrumb-particles {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><circle cx="20" cy="20" r="1.5" fill="rgba(255,255,255,0.3)"/><circle cx="50" cy="30" r="1" fill="rgba(255,255,255,0.2)"/><circle cx="80" cy="20" r="1.2" fill="rgba(255,255,255,0.25)"/><circle cx="30" cy="70" r="1.3" fill="rgba(255,255,255,0.2)"/><circle cx="70" cy="80" r="1" fill="rgba(255,255,255,0.3)"/><circle cx="90" cy="60" r="1.5" fill="rgba(255,255,255,0.15)"/></svg>');
    z-index: 1;
  }
  
  .breadcrumb-nav {
    position: relative;
    z-index: 2;
    max-width: 1200px;
    margin: 0 auto 15px;
  }
  
  .breadcrumb-list {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    list-style: none;
    margin: 0;
    padding: 0;
    gap: 8px;
  }
  
  .breadcrumb-item {
    display: flex;
    align-items: center;
    position: relative;
  }
  
  .breadcrumb-link, .breadcrumb-current {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 12px 18px;
    border-radius: 10px;
    transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    text-decoration: none;
  }
  
  .breadcrumb-link {
    color: #e0e7ff;
    background-color: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(4px);
    -webkit-backdrop-filter: blur(4px);
    border: 1px solid rgba(255, 255, 255, 0.1);
  }
  
  .breadcrumb-link:hover {
    background-color: rgba(255, 255, 255, 0.2);
    color: white;
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
  }
  
  .breadcrumb-current {
    background-color: white;
    color: #1e3a8a;
    font-weight: 600;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    animation: pulse 2s infinite;
  }
  
  .breadcrumb-separator {
    color: rgba(255, 255, 255, 0.5);
    margin: 0 5px;
    display: flex;
    align-items: center;
  }
  
  .breadcrumb-icon svg {
    width: 18px;
    height: 18px;
  }
  
  .breadcrumb-current .breadcrumb-icon svg {
    fill: #1e40af;
  }
  
  .breadcrumb-link .breadcrumb-icon svg {
    fill: #e0e7ff;
  }
  
  .breadcrumb-text {
    font-size: 15px;
    font-weight: 500;
    letter-spacing: 0.3px;
  }
  
  .breadcrumb-title {
    position: relative;
    z-index: 2;
    max-width: 1200px;
    margin: 0 auto;
    color: white;
    font-size: 28px;
    font-weight: 700;
    padding-top: 15px;
    text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
  }
  
  @keyframes pulse {
    0% { box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.4); }
    70% { box-shadow: 0 0 0 10px rgba(255, 255, 255, 0); }
    100% { box-shadow: 0 0 0 0 rgba(255, 255, 255, 0); }
  }
  
  @media (max-width: 768px) {
    .creative-breadcrumb {
      padding: 30px 15px 40px;
      border-radius: 12px;
    }
    
    .breadcrumb-link, .breadcrumb-current {
      padding: 10px 14px;
    }
    
    .breadcrumb-text {
      font-size: 13px;
    }
    
    .breadcrumb-title {
      font-size: 22px;
    }
  }
  
  @media (max-width: 480px) {
    .breadcrumb-list {
      gap: 5px;
    }
    
    .breadcrumb-link, .breadcrumb-current {
      padding: 8px 12px;
      gap: 6px;
    }
    
    .breadcrumb-icon svg {
      width: 16px;
      height: 16px;
    }
    
    .breadcrumb-title {
      font-size: 18px;
    }
  }
</style>

      <!-- Contact Section -->
      <section class="contact" id="contact">
        <div class="section-title">
            <h2 data-aos="fade-up">Connect With Our Executive Team</h2>
            <p data-aos="fade-up" data-aos-delay="100">Schedule a confidential consultation about your leadership needs
            </p>
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
                                    <a href="https://maps.google.com" target="_blank">View on Map <i
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
                                <p><a href="tel:+919871916980">+91 98719 16980</a></p>
                                <div class="whatsapp-link">
                                    <a href="https://wa.me/919871916980" target="_blank">Chat on WhatsApp <i
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
                                <p><a href="mailto:info@cxohiring.com">info@cxohiring.com</a></p>
                                <div class="email-link">
                                    <a href="mailto:info@cxohiring.com">Send Email <i
                                            class="fas fa-paper-plane"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-hours">
                        <h4>Office Hours</h4>
                        <p>Monday - Friday: 9:00 AM - 6:00 PM<br>
                            Saturday: 10:00 AM - 4:00 PM</p>
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
                        <label for="position">Position Seeking</label>
                        <select id="position" class="form-control">
                            <option value="">Select position type</option>
                            <option value="ceo">CEO/MD</option>
                            <option value="cfo">CFO</option>
                            <option value="cto">CTO</option>
                            <option value="cmo">CMO</option>
                            <option value="other">Other C-Suite</option>
                            <option value="board">Board Member</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message">How Can We Assist You?*</label>
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




<?php include "include/footer.php"?>