<!-- Footer Section -->
<footer>
    <!-- Contact Us Floating Button -->
    <div class="contact-us-btn-wrapper">
        <button class="contact-us-btn">
            <span>Contact Us</span>
            <i class="fas fa-plus contact-iconn"></i>
        </button>
        <div class="contact-us-details">
            <button class="contact-us-close">×</button>
            <h2>Contact Us</h2>
            <div class="contact-section">
                <h3>Corporates</h3>
                <p>Would you like us to assist in your search for premium talent?</p>
                <p><strong>Phone:</strong> +919211610707</p>
                <p><strong>E-mail:</strong> <a href="mailto:info@cxohire.com">info@cxohire.com</a></p>
            </div>
            <div class="contact-section">
                <h3>Candidates</h3>
                <p>Are you looking for the right career opportunity?</p>
                <p><a href="mailto:info@cxohire.com" class="cv-submit-link">Send Your CV</a></p>
                <p class="fraud-warning"><strong>Beware:</strong> Fraudulent Recruitment Activity</p>
            </div>
        </div>
    </div>

    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/919211460101?text=Hi" class="whatsapp-btn" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>
    <div class="footer-container">
        <div class="footer-about">
            <div class="footer-logo">CXO Hire</div>
            <p>Premier executive search firm specializing in C-suite and board-level placements across industries worldwide.</p>
        </div>
        <div class="footer-links">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="process.php">Our Process</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
        <div class="footer-links">
            <h3>Services</h3>
            <ul>
                <li><a href="full-scale-search.php">Full-Scale Executive Search</a></li>
                <li><a href="confidential-executive-search.php">Confidential Search</a></li>
                <li><a href="board-advisory-service.php">Board Services</a></li>
                <li><a href="leader-transition-service.php">Leadership Transition</a></li>
                <li><a href="diversity-search.php">Diversity Hiring</a></li>
                <li><a href="interim-solutions.php">Interim Solutions</a></li>
            </ul>
        </div>
        <div class="footer-newsletter">
            <h3>Newsletter</h3>
            <p>Subscribe to our newsletter for the latest insights on executive leadership and talent trends.</p>
            <form class="newsletter-form" action="process_newsletter.php" method="POST">
                <input type="email" name="email" placeholder="Your Email" class="newsletter-input" required>
                <button type="submit" class="newsletter-btn"><i class="fas fa-paper-plane"></i></button>
            </form>
        </div>
    </div>
    <div class="footer-bottom">
        <p>© 2025 CXO Hiring. All Rights Reserved. | <a href="#" style="color: white;">Privacy Policy</a> | <a href="#" style="color: white;">Terms of Service</a></p>
    </div>
</footer>

<!-- JavaScript Bundle (includes Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

<!-- Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
    /* WhatsApp Button Styles */
    .whatsapp-btn {
        position: fixed;
        bottom: 20px;
        left: 20px;
        width: 60px;
        height: 60px;
        background-color: #25D366;
        color: white;
        border-radius: 50%;
        text-align: center;
        font-size: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        z-index: 1000;
        transition: all 0.3s;
        text-decoration: none;
    }
    
    .whatsapp-btn:hover {
        background-color: #128C7E;
        color: white;
        transform: scale(1.1);
    }
    
    .whatsapp-btn i {
        margin-top: 2px;
    }
    
    @keyframes pulse {
        0% {
            box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7);
        }
        70% {
            box-shadow: 0 0 0 15px rgba(37, 211, 102, 0);
        }
        100% {
            box-shadow: 0 0 0 0 rgba(37, 211, 102, 0);
        }
    }
    
    .whatsapp-btn {
        animation: pulse 2s infinite;
    }

    /* Contact Us Button Styles */
    .contact-us-btn-wrapper {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 1000;
    }

    .contact-us-btn {
        background-color: #2e2e2e;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 20px;
        font-size: 16px;
        font-weight: 500;
        cursor: pointer;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
        display: flex;
        align-items: center;
        gap: 8px;
        transition: all 0.3s ease;
    }

    .contact-us-btn:hover {
        background-color: #444;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
    }

    .contact-us-btn.active .contact-iconn {
        transform: rotate(45deg);
    }

    .contact-iconn {
        font-size: 12px;
        transition: transform 0.3s ease;
    }

    .contact-us-details {
        display: none;
        position: absolute;
        bottom: 60px;
        right: 0;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        padding: 20px;
        width: 300px;
        opacity: 0;
        transform: translateY(5px);
        transition: opacity 0.3s ease, transform 0.3s ease;
    }

    .contact-us-details.active {
        display: block;
        opacity: 1;
        transform: translateY(0);
    }

    .contact-us-close {
        position: absolute;
        top: 5px;
        right: 5px;
        background: none;
        border: none;
        font-size: 18px;
        color: #666;
        cursor: pointer;
    }

    .contact-us-details h2 {
        font-size: 18px;
        margin-bottom: 15px;
        color: #333;
        font-weight: 600;
    }

    .contact-section {
        margin-bottom: 20px;
    }

    .contact-section h3 {
        font-size: 16px;
        margin-bottom: 10px;
        color: #333;
        font-weight: 500;
    }

    .contact-section p {
        font-size: 14px;
        color: #666;
        margin: 5px 0;
        line-height: 1.5;
    }

    .contact-section a {
        color: #007bff;
        text-decoration: none;
        font-weight: 500;
    }

    .contact-section a:hover {
        text-decoration: underline;
    }

    .cv-submit-link {
        display: inline-block;
        color: #007bff;
        text-decoration: none;
        font-weight: 500;
    }

    .cv-submit-link:hover {
        text-decoration: underline;
    }

    .fraud-warning {
        color: #d9534f;
        font-size: 12px;
        margin-top: 5px;
    }
</style>

<script>
    // Contact Us Toggle
    const contactUsBtn = document.querySelector('.contact-us-btn');
    const contactUsDetails = document.querySelector('.contact-us-details');
    const contactUsClose = document.querySelector('.contact-us-close');

    contactUsBtn.addEventListener('click', () => {
        contactUsDetails.classList.toggle('active');
        contactUsBtn.classList.toggle('active');
    });

    contactUsClose.addEventListener('click', () => {
        contactUsDetails.classList.remove('active');
        contactUsBtn.classList.remove('active');
    });

    // Mobile Menu Toggle
    const hamburger = document.getElementById('hamburger');
    const navMenu = document.getElementById('nav-menu');

    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('active');
        navMenu.classList.toggle('active');
    });

    document.querySelectorAll('#nav-menu a').forEach(link => {
        link.addEventListener('click', () => {
            hamburger.classList.remove('active');
            navMenu.classList.remove('active');
        });
    });

    // Header scroll effect
    const header = document.getElementById('header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 80,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Simple testimonial slider
    let currentTestimonial = 0;
    const testimonials = document.querySelectorAll('.testimonial-item');
    
    function showTestimonial(index) {
        testimonials.forEach((testimonial, i) => {
            testimonial.style.display = i === index ? 'block' : 'none';
        });
    }
    
    function nextTestimonial() {
        currentTestimonial = (currentTestimonial + 1) % testimonials.length;
        showTestimonial(currentTestimonial);
    }
    
    showTestimonial(0);
    setInterval(nextTestimonial, 5000);
</script>
</body>
</html>