 
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
                            Saturday: 10:00 AM - 4:00 PM</p>
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
                        <label for="position">Position Seeking</label>
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