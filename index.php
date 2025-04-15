<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CXO Hiring - Premier Executive Hiring Solutions</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Modern Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Variables */
        :root {
            --primary: #2563eb;
            --primary-dark: #1d4ed8;
            --secondary: #1e293b;
            --accent: #f59e0b;
            --light: #f8fafc;
            --dark: #0f172a;
            --gray: #64748b;
            --success: #10b981;
        }

        /* Body Styling */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--light);
            color: var(--dark);
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* Header Styling */
        header {
            background-color: rgba(255, 255, 255, 0.95);
            color: var(--secondary);
            padding: 20px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        header.scrolled {
            padding: 15px 5%;
            background-color: rgba(255, 255, 255, 0.98);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
        }

        .logo {
            font-size: 28px;
            font-weight: 700;
            letter-spacing: 1px;
            color: var(--primary);
            display: flex;
            align-items: center;
        }

        .logo i {
            margin-right: 10px;
            color: var(--accent);
        }

        nav ul {
            list-style-type: none;
            display: flex;
        }

        nav ul li {
            margin-left: 30px;
            position: relative;
        }

        nav ul li a {
            text-decoration: none;
            color: var(--secondary);
            font-size: 16px;
            font-weight: 500;
            transition: color 0.3s ease;
            position: relative;
        }

        nav ul li a:hover {
            color: var(--primary);
        }

        nav ul li a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: var(--primary);
            transition: width 0.3s ease;
        }

        nav ul li a:hover::after {
            width: 100%;
        }

        .cta-nav {
            background-color: var(--primary);
            color: white;
            padding: 10px 20px;
            border-radius: 30px;
            transition: all 0.3s ease;
        }

        .cta-nav:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.3);
        }

        .cta-nav::after {
            display: none;
        }

        .hamburger {
            display: none;
            flex-direction: column;
            justify-content: space-between;
            width: 30px;
            height: 21px;
            cursor: pointer;
            z-index: 1001;
        }

        .hamburger div {
            background-color: var(--secondary);
            height: 3px;
            width: 100%;
            border-radius: 3px;
            transition: all 0.3s ease;
        }

        .hamburger.active div:nth-child(1) {
            transform: translateY(9px) rotate(45deg);
        }

        .hamburger.active div:nth-child(2) {
            opacity: 0;
        }

        .hamburger.active div:nth-child(3) {
            transform: translateY(-9px) rotate(-45deg);
        }

        @media (max-width: 992px) {
            nav ul {
                position: fixed;
                top: 0;
                right: -100%;
                width: 300px;
                height: 100vh;
                background-color: white;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                box-shadow: -5px 0 15px rgba(0, 0, 0, 0.1);
                transition: right 0.4s ease;
                z-index: 1000;
            }

            nav ul.active {
                right: 0;
            }

            nav ul li {
                margin: 15px 0;
            }

            .hamburger {
                display: flex;
            }
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            padding: 120px 5% 100px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80') no-repeat center center/cover;
            opacity: 0.15;
            z-index: 0;
        }

        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 900px;
            margin: 0 auto;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            line-height: 1.2;
            font-weight: 700;
        }

        .hero p {
            font-size: 1.25rem;
            margin-bottom: 40px;
            opacity: 0.9;
        }

        .hero-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }

        .cta-button {
            background-color: var(--accent);
            color: var(--dark);
            padding: 15px 35px;
            border: none;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 15px rgba(245, 158, 11, 0.3);
        }

        .cta-button:hover {
            background-color: #e69009;
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(245, 158, 11, 0.4);
        }

        .cta-button.secondary {
            background-color: transparent;
            color: white;
            border: 2px solid white;
            box-shadow: none;
        }

        .cta-button.secondary:hover {
            background-color: rgba(255, 255, 255, 0.1);
            transform: translateY(-3px);
        }

        .cta-button i {
            margin-left: 8px;
        }

        /* Stats Section */
        .stats {
            background-color: white;
            padding: 80px 5%;
            text-align: center;
            position: relative;
            z-index: 2;
            margin-top: -50px;
            border-radius: 15px 15px 0 0;
            box-shadow: 0 -10px 30px rgba(0, 0, 0, 0.05);
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
        }

        .stats-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 30px;
        }

        .stat-item {
            flex: 1;
            min-width: 200px;
            padding: 30px;
            background-color: var(--light);
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }

        .stat-item:hover {
            transform: translateY(-10px);
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 10px;
        }

        .stat-label {
            font-size: 1.1rem;
            color: var(--gray);
            font-weight: 500;
        }

        /* About Section */
        .about {
            padding: 100px 5%;
            background-color: var(--light);
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title h2 {
            font-size: 2.5rem;
            color: var(--secondary);
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            width: 60px;
            height: 4px;
            background-color: var(--accent);
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 2px;
        }

        .section-title p {
            color: var(--gray);
            max-width: 700px;
            margin: 0 auto;
            font-size: 1.1rem;
        }

        .about-content {
            display: flex;
            align-items: center;
            gap: 50px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .about-text {
            flex: 1;
        }

        .about-text h3 {
            font-size: 1.8rem;
            color: var(--secondary);
            margin-bottom: 20px;
            line-height: 1.3;
        }

        .about-text p {
            margin-bottom: 20px;
            color: var(--gray);
        }

        .about-features {
            margin-top: 30px;
        }

        .feature-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
        }

        .feature-icon {
            background-color: var(--primary);
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            flex-shrink: 0;
        }

        .feature-text h4 {
            font-size: 1.2rem;
            color: var(--secondary);
            margin-bottom: 5px;
        }

        .feature-text p {
            color: var(--gray);
            font-size: 0.95rem;
        }

        .about-image {
            flex: 1;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .about-image img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.5s ease;
        }

        .about-image:hover img {
            transform: scale(1.05);
        }

        /* Services Section */
        .services {
            padding: 100px 5%;
            background-color: white;
        }

        .services-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .service-card {
            background-color: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }

        .service-image {
            height: 200px;
            overflow: hidden;
        }

        .service-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .service-card:hover .service-image img {
            transform: scale(1.1);
        }

        .service-content {
            padding: 30px;
        }

        .service-content h3 {
            font-size: 1.5rem;
            color: var(--secondary);
            margin-bottom: 15px;
        }

        .service-content p {
            color: var(--gray);
            margin-bottom: 20px;
        }

        .service-link {
            display: inline-flex;
            align-items: center;
            color: var(--primary);
            font-weight: 600;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .service-link:hover {
            color: var(--primary-dark);
        }

        .service-link i {
            margin-left: 8px;
            transition: transform 0.3s ease;
        }

        .service-link:hover i {
            transform: translateX(5px);
        }

        /* Process Section */
        .process {
            padding: 100px 5%;
            background-color: var(--light);
        }

        .process-steps {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            max-width: 1200px;
            margin: 60px auto 0;
            position: relative;
        }

        .process-steps::before {
            content: '';
            position: absolute;
            top: 40px;
            left: 0;
            width: 100%;
            height: 3px;
            background-color: var(--primary);
            z-index: 1;
        }

        .step {
            flex: 1;
            min-width: 200px;
            text-align: center;
            position: relative;
            z-index: 2;
            padding: 0 15px;
            margin-bottom: 30px;
        }

        .step-number {
            width: 80px;
            height: 80px;
            background-color: var(--primary);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            font-weight: 700;
            margin: 0 auto 20px;
            border: 5px solid var(--light);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .step h4 {
            font-size: 1.3rem;
            color: var(--secondary);
            margin-bottom: 15px;
        }

        .step p {
            color: var(--gray);
        }

        /* Industries Section */
        .industries {
            padding: 100px 5%;
            background-color: white;
        }

        .industries-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 25px;
            max-width: 1200px;
            margin: 60px auto 0;
        }

        .industry-card {
            background-color: var(--light);
            border-radius: 10px;
            padding: 30px;
            text-align: center;
            transition: all 0.3s ease;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        .industry-card:hover {
            background-color: var(--primary);
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(37, 99, 235, 0.2);
        }

        .industry-card:hover * {
            color: white;
        }

        .industry-icon {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 20px;
            transition: color 0.3s ease;
        }

        .industry-card h4 {
            font-size: 1.3rem;
            margin-bottom: 10px;
            transition: color 0.3s ease;
        }

        .industry-card p {
            color: var(--gray);
            transition: color 0.3s ease;
        }

        /* Testimonials Section */
        .testimonials {
            padding: 100px 5%;
            background-color: var(--light);
            position: relative;
        }

        .testimonials::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1521791055366-0d553872125f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80') no-repeat center center/cover;
            opacity: 0.05;
            z-index: 0;
        }

        .testimonials-container {
            position: relative;
            z-index: 1;
            max-width: 1200px;
            margin: 0 auto;
        }

        .testimonial-slider {
            margin-top: 60px;
        }

        .testimonial-item {
            background-color: white;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            margin: 0 15px;
        }

        .testimonial-content {
            font-size: 1.1rem;
            color: var(--gray);
            font-style: italic;
            margin-bottom: 25px;
            position: relative;
        }

        .testimonial-content::before {
            content: '"';
            font-size: 4rem;
            color: var(--primary);
            opacity: 0.2;
            position: absolute;
            top: -20px;
            left: -15px;
            font-family: serif;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
        }

        .author-image {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 15px;
        }

        .author-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .author-info h5 {
            font-size: 1.2rem;
            color: var(--secondary);
            margin-bottom: 5px;
        }

        .author-info p {
            color: var(--gray);
            font-size: 0.9rem;
        }

        /* Team Section */
        .team {
            padding: 100px 5%;
            background-color: white;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 60px auto 0;
        }

        .team-member {
            background-color: var(--light);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            text-align: center;
        }

        .team-member:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }

        .member-image {
            height: 300px;
            overflow: hidden;
        }

        .member-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .team-member:hover .member-image img {
            transform: scale(1.05);
        }

        .member-info {
            padding: 25px;
        }

        .member-info h4 {
            font-size: 1.3rem;
            color: var(--secondary);
            margin-bottom: 5px;
        }

        .member-info p {
            color: var(--primary);
            font-weight: 500;
            margin-bottom: 15px;
        }

        .member-social {
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .member-social a {
            color: var(--gray);
            font-size: 1.1rem;
            transition: color 0.3s ease;
        }

        .member-social a:hover {
            color: var(--primary);
        }

        /* CTA Section */
        .cta-section {
            padding: 100px 5%;
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            text-align: center;
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
            background: url('https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80') no-repeat center center/cover;
            opacity: 0.1;
            z-index: 0;
        }

        .cta-content {
            position: relative;
            z-index: 1;
            max-width: 800px;
            margin: 0 auto;
        }

        .cta-content h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .cta-content p {
            font-size: 1.1rem;
            margin-bottom: 40px;
            opacity: 0.9;
        }

        /* Contact Section */
        .contact {
            padding: 100px 5%;
            background-color: var(--light);
        }

        .contact-container {
            display: flex;
            gap: 50px;
            max-width: 1200px;
            margin: 60px auto 0;
        }

        .contact-info {
            flex: 1;
        }

        .contact-card {
            background-color: white;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
        }

        .contact-card h3 {
            font-size: 1.5rem;
            color: var(--secondary);
            margin-bottom: 20px;
        }

        .contact-details {
            margin-bottom: 30px;
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
        }

        .contact-icon {
            background-color: var(--primary);
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            flex-shrink: 0;
        }

        .contact-text h4 {
            font-size: 1.1rem;
            color: var(--secondary);
            margin-bottom: 5px;
        }

        .contact-text p, .contact-text a {
            color: var(--gray);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .contact-text a:hover {
            color: var(--primary);
        }

        .contact-social {
            display: flex;
            gap: 15px;
        }

        .contact-social a {
            color: var(--primary);
            font-size: 1.3rem;
            transition: color 0.3s ease;
        }

        .contact-social a:hover {
            color: var(--primary-dark);
        }

        .contact-form {
            flex: 1;
            background-color: white;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            font-size: 1rem;
            color: var(--secondary);
            margin-bottom: 8px;
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary);
        }

        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }

        .submit-btn {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 50px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .submit-btn:hover {
            background-color: var(--primary-dark);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(37, 99, 235, 0.3);
        }

        .submit-btn i {
            margin-left: 8px;
        }

        /* Footer Section */
        footer {
            background-color: var(--secondary);
            color: white;
            padding: 80px 5% 30px;
        }

        .footer-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-logo {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 20px;
            display: inline-block;
        }

        .footer-about p {
            opacity: 0.8;
            margin-bottom: 20px;
            font-size: 0.95rem;
        }

        .footer-social {
            display: flex;
            gap: 15px;
        }

        .footer-social a {
            color: white;
            font-size: 1.2rem;
            transition: color 0.3s ease;
        }

        .footer-social a:hover {
            color: var(--accent);
        }

        .footer-links h3 {
            font-size: 1.3rem;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-links h3::after {
            content: '';
            position: absolute;
            width: 40px;
            height: 3px;
            background-color: var(--accent);
            bottom: 0;
            left: 0;
        }

        .footer-links ul {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: color 0.3s ease;
            font-size: 0.95rem;
        }

        .footer-links a:hover {
            color: var(--accent);
        }

        .footer-newsletter p {
            opacity: 0.8;
            margin-bottom: 20px;
            font-size: 0.95rem;
        }

        .newsletter-form {
            display: flex;
        }

        .newsletter-input {
            flex: 1;
            padding: 12px 15px;
            border: none;
            border-radius: 5px 0 0 5px;
            font-size: 0.95rem;
        }

        .newsletter-input:focus {
            outline: none;
        }

        .newsletter-btn {
            background-color: var(--accent);
            color: var(--dark);
            border: none;
            padding: 0 20px;
            border-radius: 0 5px 5px 0;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .newsletter-btn:hover {
            background-color: #e69009;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 50px;
            margin-top: 50px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .footer-bottom p {
            opacity: 0.7;
            font-size: 0.9rem;
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes fadeInUp {
            from { 
                opacity: 0;
                transform: translateY(30px);
            }
            to { 
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInLeft {
            from { 
                transform: translateX(-100px);
                opacity: 0;
            }
            to { 
                transform: translateX(0);
                opacity: 1;
            }
        }

        /* Utility Classes */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .text-center {
            text-align: center;
        }

        .mt-30 {
            margin-top: 30px;
        }

        .mb-30 {
            margin-bottom: 30px;
        }

        /* Responsive Adjustments */
        @media (max-width: 1200px) {
            .hero h1 {
                font-size: 3rem;
            }
        }

        @media (max-width: 992px) {
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .about-content {
                flex-direction: column;
            }
            
            .contact-container {
                flex-direction: column;
            }
            
            .process-steps {
                flex-direction: column;
            }
            
            .process-steps::before {
                display: none;
            }
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.2rem;
            }
            
            .hero p {
                font-size: 1.1rem;
            }
            
            .hero-buttons {
                flex-direction: column;
                gap: 15px;
            }
            
            .cta-button {
                width: 100%;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
        }

        @media (max-width: 576px) {
            .hero {
                padding: 100px 5% 80px;
            }
            
            .hero h1 {
                font-size: 1.8rem;
            }
            
            .stats-container {
                flex-direction: column;
            }
            
            .service-cards {
                flex-direction: column;
                align-items: center;
            }
            
            .service-card {
                width: 100%;
            }
        }
    </style>
</head>
<body>

<!-- Header Section -->
<header id="header">
    <div class="logo">
        <!-- <i class="fas fa-user-tie"></i> CXO Hiring -->
         <img src="logo.png" style="height: 60px;" alt="">
    </div>
    <nav>
        <ul id="nav-menu">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#process">Process</a></li>
            <li><a href="#industries">Industries</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#contact" class="cta-nav">Get Started</a></li>
        </ul>
        <div class="hamburger" id="hamburger">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </nav>
</header>

<!-- Hero Section -->
<section class="hero" id="home">
    <div class="hero-content">
        <h1>Transform Your Leadership Team With World-Class CXO Talent</h1>
        <p>We connect visionary companies with exceptional C-level executives to drive growth, innovation, and lasting success.</p>
        <div class="hero-buttons">
            <a href="#contact" class="cta-button">Hire a CXO <i class="fas fa-arrow-right"></i></a>
            <a href="#services" class="cta-button secondary">Our Services <i class="fas fa-search"></i></a>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats">
    <div class="stats-container">
        <div class="stat-item">
            <div class="stat-number">200+</div>
            <div class="stat-label">Successful Placements</div>
        </div>
        <div class="stat-item">
            <div class="stat-number">95%</div>
            <div class="stat-label">Retention Rate</div>
        </div>
        <div class="stat-item">
            <div class="stat-number">15+</div>
            <div class="stat-label">Years Experience</div>
        </div>
        <div class="stat-item">
            <div class="stat-number">50+</div>
            <div class="stat-label">Industries Served</div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="about" id="about">
    <div class="section-title">
        <h2>About CXO Hiring</h2>
        <p>We are a premier executive search firm specializing in C-suite and board-level placements across industries.</p>
    </div>
    <div class="about-content">
        <div class="about-text">
            <h3>Your Trusted Partner for Executive Talent Acquisition</h3>
            <p>Founded in 2010, CXO Hiring has established itself as a leader in executive search, known for our rigorous methodology, extensive network, and deep understanding of leadership requirements across diverse sectors.</p>
            <p>We go beyond traditional recruitment by focusing on cultural fit, leadership style, and strategic alignment to ensure long-term success for both our clients and candidates.</p>
            <div class="about-features">
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <div class="feature-text">
                        <h4>Precision Matching</h4>
                        <p>Our proprietary assessment tools ensure perfect alignment between candidate capabilities and organizational needs.</p>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <div class="feature-text">
                        <h4>Global Reach</h4>
                        <p>Access to an extensive network of C-level talent across North America, Europe, and Asia-Pacific.</p>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="feature-text">
                        <h4>Discretion Assured</h4>
                        <p>Complete confidentiality for sensitive searches and leadership transitions.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-image">
            <img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80" alt="Executive team meeting">
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services" id="services">
    <div class="section-title">
        <h2>Our Executive Search Services</h2>
        <p>Comprehensive solutions tailored to your leadership hiring needs</p>
    </div>
    <div class="services-container">
        <div class="service-card">
            <div class="service-image">
                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Executive Search">
            </div>
            <div class="service-content">
                <h3>Full-Scale Executive Search</h3>
                <p>End-to-end recruitment process for C-suite positions including CEO, CFO, CTO, and other senior leadership roles.</p>
                <a href="#" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
        <div class="service-card">
            <div class="service-image">
                <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80" alt="Confidential Recruitment">
            </div>
            <div class="service-content">
                <h3>Confidential Executive Search</h3>
                <p>Discreet recruitment services for sensitive leadership changes, succession planning, and confidential replacements.</p>
                <a href="#" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
        <div class="service-card">
            <div class="service-image">
                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80" alt="Leadership Transition">
            </div>
            <div class="service-content">
                <h3>Leadership Transition Services</h3>
                <p>Comprehensive support during executive onboarding, integration, and transition periods to ensure success.</p>
                <a href="#" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
        <div class="service-card">
            <div class="service-image">
                <img src="https://images.unsplash.com/photo-1573164713988-8665fc963095?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80" alt="Board Services">
            </div>
            <div class="service-content">
                <h3>Board Advisory Services</h3>
                <p>Specialized recruitment for board directors, advisory board members, and governance professionals.</p>
                <a href="#" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
        <div class="service-card">
            <div class="service-image">
                <img src="https://images.unsplash.com/photo-1521791055366-0d553872125f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80" alt="Diversity Hiring">
            </div>
            <div class="service-content">
                <h3>Diversity Executive Search</h3>
                <p>Focused on identifying and placing diverse leadership talent to strengthen organizational performance.</p>
                <a href="#" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
        <div class="service-card">
            <div class="service-image">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Interim Executive">
            </div>
            <div class="service-content">
                <h3>Interim Executive Solutions</h3>
                <p>Providing experienced interim leaders to bridge gaps during transitions or special projects.</p>
                <a href="#" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="process" id="process">
    <div class="section-title">
        <h2>Our Proven Executive Search Process</h2>
        <p>A rigorous methodology that delivers exceptional results</p>
    </div>
    <div class="process-steps">
        <div class="step">
            <div class="step-number">1</div>
            <h4>Needs Assessment</h4>
            <p>Deep dive into your organizational needs, culture, and strategic objectives.</p>
        </div>
        <div class="step">
            <div class="step-number">2</div>
            <h4>Market Mapping</h4>
            <p>Comprehensive identification and evaluation of potential candidates.</p>
        </div>
        <div class="step">
            <div class="step-number">3</div>
            <h4>Candidate Engagement</h4>
            <p>Discreet outreach and in-depth assessment of qualified executives.</p>
        </div>
        <div class="step">
            <div class="step-number">4</div>
            <h4>Presentation & Selection</h4>
            <p>Carefully vetted shortlist of candidates for your consideration.</p>
        </div>
        <div class="step">
            <div class="step-number">5</div>
            <h4>Onboarding Support</h4>
            <p>Ensuring smooth transition and successful integration.</p>
        </div>
    </div>
</section>

<!-- Industries Section -->
<section class="industries" id="industries">
    <div class="section-title">
        <h2>Industries We Serve</h2>
        <p>Specialized expertise across key sectors</p>
    </div>
    <div class="industries-grid">
        <div class="industry-card">
            <div class="industry-icon">
                <i class="fas fa-laptop-code"></i>
            </div>
            <h4>Technology</h4>
            <p>Software, Hardware, AI, Cloud, Cybersecurity</p>
        </div>
        <div class="industry-card">
            <div class="industry-icon">
                <i class="fas fa-dollar-sign"></i>
            </div>
            <h4>Financial Services</h4>
            <p>Banking, Insurance, FinTech, Asset Management</p>
        </div>
        <div class="industry-card">
            <div class="industry-icon">
                <i class="fas fa-flask"></i>
            </div>
            <h4>Life Sciences</h4>
            <p>Pharma, Biotech, Medical Devices, Healthcare</p>
        </div>
        <div class="industry-card">
            <div class="industry-icon">
                <i class="fas fa-industry"></i>
            </div>
            <h4>Industrial</h4>
            <p>Manufacturing, Engineering, Construction</p>
        </div>
        <div class="industry-card">
            <div class="industry-icon">
                <i class="fas fa-shopping-bag"></i>
            </div>
            <h4>Consumer & Retail</h4>
            <p>E-commerce, FMCG, Luxury, Hospitality</p>
        </div>
        <div class="industry-card">
            <div class="industry-icon">
                <i class="fas fa-bolt"></i>
            </div>
            <h4>Energy & Utilities</h4>
            <p>Renewables, Oil & Gas, Power, Infrastructure</p>
        </div>
        <div class="industry-card">
            <div class="industry-icon">
                <i class="fas fa-chart-line"></i>
            </div>
            <h4>Professional Services</h4>
            <p>Consulting, Legal, Accounting, Advisory</p>
        </div>
        <div class="industry-card">
            <div class="industry-icon">
                <i class="fas fa-heartbeat"></i>
            </div>
            <h4>Healthcare Services</h4>
            <p>Hospitals, Providers, Payers, Digital Health</p>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<!-- <section class="testimonials">
    <div class="testimonials-container">
        <div class="section-title">
            <h2>Trusted by Leading Organizations</h2>
            <p>What our clients say about our executive search services</p>
        </div>
        <div class="testimonial-slider">
            <div class="testimonial-item">
                <div class="testimonial-content">
                    CXO Hiring delivered exceptional candidates for our CEO search. Their understanding of our culture and strategic needs was impressive. The candidate they recommended has transformed our company's trajectory.
                </div>
                <div class="testimonial-author">
                    <div class="author-image">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="David Chen">
                    </div>
                    <div class="author-info">
                        <h5>David Chen</h5>
                        <p>Chairman, TechGlobal Inc.</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-content">
                    We engaged CXO Hiring for a confidential CFO search. Their discretion, professionalism, and ability to identify outstanding talent exceeded our expectations. The process was seamless from start to finish.
                </div>
                <div class="testimonial-author">
                    <div class="author-image">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Sarah Johnson">
                    </div>
                    <div class="author-info">
                        <h5>Sarah Johnson</h5>
                        <p>Board Member, Finova Capital</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-content">
                    The quality of candidates presented by CXO Hiring was remarkable. They took the time to truly understand our needs and delivered executives who were not just qualified but perfectly aligned with our values.
                </div>
                <div class="testimonial-author">
                    <div class="author-image">
                        <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Michael Rodriguez">
                    </div>
                    <div class="author-info">
                        <h5>Michael Rodriguez</h5>
                        <p>CEO, HealthVantage Systems</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- Methodology Section -->
<section class="methodology" id="methodology">
    <div class="section-title">
        <h2 data-aos="fade-up">Our CXO Selection Methodology</h2>
        <p data-aos="fade-up" data-aos-delay="100">Proven framework for identifying transformational leadership talent</p>
    </div>
    <div class="methodology-container">
        <div class="methodology-card" data-aos="fade-right" data-aos-delay="200">
            <div class="methodology-icon">
                <i class="fas fa-chess-king"></i>
            </div>
            <div class="methodology-content">
                <h3>Strategic Leadership Assessment</h3>
                <p>We evaluate 12 core executive competencies through rigorous interviews, case studies, and psychometric evaluations.</p>
                <div class="methodology-badge">Phase 1</div>
            </div>
        </div>
        <div class="methodology-card" data-aos="fade-right" data-aos-delay="300">
            <div class="methodology-icon">
                <i class="fas fa-sitemap"></i>
            </div>
            <div class="methodology-content">
                <h3>Organizational Fit Analysis</h3>
                <p>Deep dive into your company's stage, culture, and strategic objectives to ensure perfect alignment.</p>
                <div class="methodology-badge">Phase 2</div>
            </div>
        </div>
        <div class="methodology-card" data-aos="fade-right" data-aos-delay="400">
            <div class="methodology-icon">
                <i class="fas fa-handshake"></i>
            </div>
            <div class="methodology-content">
                <h3>Structured Onboarding</h3>
                <p>90-day integration program with milestones, mentorship, and performance tracking for new executives.</p>
                <div class="methodology-badge">Phase 3</div>
            </div>
        </div>
        <div class="methodology-card" data-aos="fade-right" data-aos-delay="500">
            <div class="methodology-icon">
                <i class="fas fa-chart-line"></i>
            </div>
            <div class="methodology-content">
                <h3>Continuous Performance Review</h3>
                <p>Quarterly check-ins for the first year to ensure leadership success and organizational impact.</p>
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
        background: linear-gradient(135deg, rgba(37,99,235,0.03) 0%, rgba(255,255,255,0) 100%);
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
        top: 20px;
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
        <h2>Ready to Transform Your Leadership Team?</h2>
        <p>Partner with CXO Hiring to find the exceptional executive talent your organization needs to thrive.</p>
        <div class="hero-buttons">
            <a href="#contact" class="cta-button">Get Started <i class="fas fa-arrow-right"></i></a>
            <a href="tel:+11234567890" class="cta-button secondary"><i class="fas fa-phone"></i> Call Us Now</a>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact" id="contact">
    <div class="section-title">
        <h2 data-aos="fade-up">Connect With Our Executive Team</h2>
        <p data-aos="fade-up" data-aos-delay="100">Schedule a confidential consultation about your leadership needs</p>
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
                                <a href="https://maps.google.com" target="_blank">View on Map <i class="fas fa-external-link-alt"></i></a>
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
                                <a href="https://wa.me/919871916980" target="_blank">Chat on WhatsApp <i class="fab fa-whatsapp"></i></a>
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
                                <a href="mailto:info@cxohiring.com">Send Email <i class="fas fa-paper-plane"></i></a>
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
                    <button type="submit" class="submit-btn">Submit Request <i class="fas fa-chevron-right"></i></button>
                    <p class="disclaimer">We respect your privacy. All information is kept strictly confidential.</p>
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