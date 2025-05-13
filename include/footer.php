
<!-- Footer Section -->
<footer>
    <div class="footer-container">
        <div class="footer-about">
            <div class="footer-logo">CXO Hire</div>
            <p>Premier executive search firm specializing in C-suite and board-level placements across industries worldwide.</p>
            <div class="footer-social">
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="footer-links">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <!-- <li><a href="#services">Services</a></li> -->
                <li><a href="process.php">Our Process</a></li>
                <!-- <li><a href="#industries">Industries</a></li> -->
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
            <form class="newsletter-form">
                <input type="email" placeholder="Your Email" class="newsletter-input" required>
                <button type="submit" class="newsletter-btn"><i class="fas fa-paper-plane"></i></button>
            </form>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2025 CXO Hiring. All Rights Reserved. | <a href="#" style="color: white;">Privacy Policy</a> | <a href="#" style="color: white;">Terms of Service</a></p>
    </div>

</footer>

<!-- JavaScript Bundle (includes Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
<script>

    // Mobile Menu Toggle
    const hamburger = document.getElementById('hamburger');
    const navMenu = document.getElementById('nav-menu');

    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('active');
        navMenu.classList.toggle('active');
    });

    // Close mobile menu when clicking a link
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
    
    // Initialize
    showTestimonial(0);
    setInterval(nextTestimonial, 5000);
</script>

</body>
</html>