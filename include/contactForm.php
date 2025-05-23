 
<!-- Contact Section -->
      <section class="contact" id="contact">
        <div class="section-title">
            <h2 id="he" data-aos="fade-up">Connect With Our Executive Team</h2>
            <p data-aos="fade-up" data-aos-delay="100">Schedule a confidential consultation about your leadership needs
            </p>
        </div>
        <div class="contact-container">
            <div class="contact-info">
                <div class="contact-card" data-aos="fade-right">
                    <h3>Our Offices</h3>
                    <div class="contact-details">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h4>Corporate Headquarters</h4>
                                <p>916, Astralis Tower, Supernova<br>Sector 94, Noida, India</p>
                                <p><a href="tel:+919211610707">+91 92116 10707</a></p>
                                <div class="map-link">
                                    <a href="https://maps.app.goo.gl/npsJKyqJ1aDGZeHe9" target="_blank">View on Map <i
                                            class="fas fa-external-link-alt"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h4>New Delhi Office</h4>
                                <p>A-83, Okhla Phase II<br>New Delhi - 110020</p>
                                <p><a href="tel:+919871916980">+91 98719 16980</a></p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h4>Hyderabad Branch</h4>
                                <p>eSeva Ln, K P H B Phase 3<br>Kukatpally, Hyderabad<br>Telangana 500072</p>
                                <p><a href="tel:+918328206115">+91 83282 06115</a></p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h4>Pune Branch</h4>
                                <p>2nd Floor, River side Business Bay<br>Plot no. 84, Wellesley Road<br>Near RTO (Sangam Bridge)<br>Pune, Maharashtra 411001</p>
                                <p><a href="tel:+918788956738">+91 87889 56738</a></p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="contact-text">
                                <h4>Direct Line</h4>
                                <p><a href="tel:+919211610707">+919211610707</a></p>
                                <div class="whatsapp-link">
                                    <a href="https://wa.me/919211610707" target="_blank">Chat on WhatsApp <i
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
                                <p><a href="mailto:info@cxohire.com">info@cxohire.com</a></p>
                                <div class="email-link">
                                    <a href="mailto:info@cxohire.com">Send Email <i
                                            class="fas fa-paper-plane"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-hours">
                        <h4>Office Hours</h4>
                        <p>Monday - Friday: 9:00 AM - 6:00 PM<br>
                            </p>
                    </div>
                </div>
            </div>
            <div class="contact-form" data-aos="fade-left">
                <h3>Request a Consultation</h3>
                <form action="contact_process.php" method="POST">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Full Name*</label>
                            <input type="text" id="name" name="full_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="company">Company Name</label>
                            <input type="text" id="company" name="company" class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">Email Address*</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number*</label>
                            <input type="tel" id="phone" name="phone" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="position">Looking to hire </label>
                        <select id="position" name="position" class="form-control">
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
                        <textarea id="message" name="challenges" class="form-control" required></textarea>
                    </div>
                    
                    <!-- Canvas CAPTCHA Section -->
                    <div class="form-group captcha-container">
                        <label for="captchaInput">Security Verification*</label>
                        <div class="captcha-box">
                            <canvas id="captchaCanvas" width="180" height="50"></canvas>
                            <button type="button" class="refresh-captcha" onclick="generateCaptcha()"><i class="fas fa-sync-alt"></i></button>
                        </div>
                        <input type="text" id="captchaInput" name="captcha" class="form-control" placeholder="Enter the code shown above" required>
                        <div id="captcha-error" class="captcha-error d-none">Incorrect code. Please try again.</div>
                        <small class="captcha-note">Please enter the characters shown above to verify you're human</small>
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
        
        /* Canvas CAPTCHA Styles */
        .captcha-container {
            margin-top: 20px;
        }

        .captcha-box {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        #captchaCanvas {
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .refresh-captcha {
            background: #e2e8f0;
            border: none;
            border-radius: 8px;
            padding: 12px;
            margin-left: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 50px;
            width: 50px;
        }

        .refresh-captcha:hover {
            background: #cbd5e1;
            transform: rotate(15deg);
        }

        .refresh-captcha i {
            font-size: 1.2rem;
            color: #475569;
        }

        .captcha-note {
            display: block;
            margin-top: 8px;
            color: #64748b;
            font-size: 0.8rem;
        }
        
        .captcha-error {
            color: #ef4444;
            font-size: 0.9rem;
            margin-top: 5px;
            font-weight: 500;
        }
        
        .d-none {
            display: none;
        }
        
        .shake {
            animation: shake 0.5s cubic-bezier(.36,.07,.19,.97) both;
        }
        
        @keyframes shake {
            10%, 90% { transform: translate3d(-1px, 0, 0); }
            20%, 80% { transform: translate3d(2px, 0, 0); }
            30%, 50%, 70% { transform: translate3d(-3px, 0, 0); }
            40%, 60% { transform: translate3d(3px, 0, 0); }
        }
    </style>

    <!-- Canvas CAPTCHA Script -->
    <script>
    let captchaText = '';

    function generateCaptcha() {
        const canvas = document.getElementById('captchaCanvas');
        const ctx = canvas.getContext('2d');
        const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        captchaText = '';

        // Generate random 6-character string
        for (let i = 0; i < 6; i++) {
            captchaText += characters.charAt(Math.floor(Math.random() * characters.length));
        }

        // Clear canvas
        ctx.clearRect(0, 0, canvas.width, canvas.height);

        // Background
        ctx.fillStyle = '#f8f9fa';
        ctx.fillRect(0, 0, canvas.width, canvas.height);

        // Text
        ctx.font = '24px Arial';
        ctx.fillStyle = '#343a40';
        ctx.textAlign = 'center';
        ctx.textBaseline = 'middle';

        // Add distortion
        for (let i = 0; i < captchaText.length; i++) {
            ctx.save();
            ctx.translate(20 + i * 20, 25);
            ctx.rotate((Math.random() - 0.5) * 0.3);
            ctx.fillText(captchaText[i], 0, 0);
            ctx.restore();
        }

        // Minimal noise for performance
        for (let i = 0; i < 20; i++) {
            ctx.beginPath();
            ctx.arc(
                Math.random() * canvas.width,
                Math.random() * canvas.height,
                Math.random(),
                0,
                2 * Math.PI
            );
            ctx.fillStyle = `rgba(0,0,0,${Math.random() * 0.2})`;
            ctx.fill();
        }

        // Clear input and reset error
        document.getElementById('captchaInput').value = '';
        document.getElementById('captcha-error').classList.add('d-none');
    }

    document.addEventListener('DOMContentLoaded', function() {
        // Generate CAPTCHA on load
        generateCaptcha();
        
        // Form submission validation
        const form = document.querySelector('.contact-form form');
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Validate CAPTCHA
            const captchaInput = document.getElementById('captchaInput').value;
            const captchaError = document.getElementById('captcha-error');
            
            if (captchaInput.toLowerCase() !== captchaText.toLowerCase()) {
                captchaError.classList.remove('d-none');
                captchaError.classList.add('shake');
                setTimeout(() => captchaError.classList.remove('shake'), 500);
                return;
            }
            
            // If CAPTCHA is valid, submit the form
            form.submit();
        });
    });
    </script>