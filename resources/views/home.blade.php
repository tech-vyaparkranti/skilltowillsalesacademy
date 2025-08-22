<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEEV FMCG Career Foundation Webinar - Just ₹49!</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            line-height: 1.6;
            color: #fff;
            background: #0a0e27;
            overflow-x: hidden;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Modal Styles */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            z-index: 10000;
            display: none;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .modal-overlay.show {
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 1;
        }

        .modal-content {
            background: linear-gradient(135deg, #1a1f3a 0%, #2a2f5a 100%);
            border-radius: 20px;
            padding: 2rem;
            max-width: 500px;
            width: 90%;
            max-height: 90vh;
            overflow-y: auto;
            position: relative;
            transform: scale(0.7);
            transition: transform 0.3s ease;
            border: 2px solid #ffa500;
            box-shadow: 0 20px 60px rgba(255, 165, 0, 0.3);
        }

        .modal-overlay.show .modal-content {
            transform: scale(1);
        }

        .modal-close {
            position: absolute;
            top: 15px;
            right: 20px;
            background: none;
            border: none;
            color: #fff;
            font-size: 2rem;
            cursor: pointer;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            transition: all 0.3s ease;
        }

        .modal-close:hover {
            background: rgba(255, 107, 107, 0.2);
            color: #ff6b6b;
            transform: rotate(90deg);
        }

        .modal-title {
            font-size: 1.8rem;
            font-weight: 800;
            color: #ffa500;
            margin-bottom: 1rem;
            text-align: center;
        }

        .modal-subtitle {
            font-size: 1rem;
            opacity: 0.9;
            margin-bottom: 2rem;
            text-align: center;
            line-height: 1.5;
        }

        /* Registration Form Styles */
        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            color: #ffa500;
            font-weight: 600;
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
        }

        .form-input {
            width: 100%;
            padding: 1rem;
            border: 2px solid #2a2f5a;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            font-size: 1rem;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .form-input:focus {
            outline: none;
            border-color: #ffa500;
            background: rgba(255, 165, 0, 0.1);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 165, 0, 0.2);
        }

        .form-input::placeholder {
            color: rgba(255, 255, 255, 0.6);
        }

        .register-btn {
            width: 100%;
            background: linear-gradient(135deg, #ffa500, #ff6b6b);
            color: white;
            padding: 1rem;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-top: 1rem;
            box-shadow: 0 10px 30px rgba(255, 165, 0, 0.3);
        }

        .register-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(255, 165, 0, 0.4);
        }

        .register-btn:active {
            transform: translateY(0);
        }

        /* Policy Buttons Container */
        .policy-buttons {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 999;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        /* Privacy Policy & Refund Policy Buttons */
        .privacy-policy-btn {
            background: linear-gradient(135deg, #2a2f5a, #1a1f3a);
            color: #ffa500;
            padding: 10px 15px;
            border: 2px solid #ffa500;
            border-radius: 25px;
            cursor: pointer;
            font-size: 0.9rem;
            font-weight: 600;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            white-space: nowrap;
        }

        .privacy-policy-btn:hover {
            background: linear-gradient(135deg, #ffa500, #ff6b6b);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255, 165, 0, 0.4);
        }

        /* Privacy Policy Content */
        .privacy-content {
            max-height: 400px;
            overflow-y: auto;
            padding-right: 10px;
        }

        .privacy-content::-webkit-scrollbar {
            width: 6px;
        }

        .privacy-content::-webkit-scrollbar-track {
            background: #1a1f3a;
            border-radius: 3px;
        }

        .privacy-content::-webkit-scrollbar-thumb {
            background: #ffa500;
            border-radius: 3px;
        }

        .privacy-content::-webkit-scrollbar-thumb:hover {
            background: #ff6b6b;
        }

        .privacy-content h3 {
            color: #ffa500;
            margin: 1rem 0 0.5rem 0;
            font-size: 1.1rem;
        }

        .privacy-content p {
            margin-bottom: 0.8rem;
            line-height: 1.5;
            opacity: 0.9;
        }

        .privacy-content ul {
            margin: 0.5rem 0 1rem 1.5rem;
        }

        .privacy-content li {
            margin-bottom: 0.3rem;
            opacity: 0.9;
        }

        /* Success Message */
        .success-message {
            background: linear-gradient(135deg, #4CAF50, #45a049);
            color: white;
            padding: 1rem;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 1rem;
            display: none;
        }

        .success-message.show {
            display: block;
            animation: fadeInUp 0.5s ease;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Section 1 - Hero Content */
        .hero-section {
            background: linear-gradient(135deg, #0a0e27 0%, #1a1f3a 50%, #2a2f5a 100%);
            padding: 2rem 0 3rem 0;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="dots" width="20" height="20" patternUnits="userSpaceOnUse"><circle cx="10" cy="10" r="1" fill="white" opacity="0.05"/></pattern></defs><rect width="100" height="100" fill="url(%23dots)"/></svg>');
        }

        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            padding: 2rem 0;
        }

        .workshop-badge {
            background: linear-gradient(135deg, #ff6b6b, #ffa500);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 25px;
            font-size: 0.9rem;
            font-weight: 600;
            display: inline-block;
            margin-bottom: 1.5rem;
            animation: pulse 2s infinite;
        }

        .hero-title {
            font-size: clamp(1.8rem, 4vw, 2.5rem);
            font-weight: 800;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }

        .hero-subtitle {
            font-size: clamp(2.2rem, 5vw, 3.5rem);
            font-weight: 900;
            background: linear-gradient(135deg, #ffa500, #ff6b6b);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1rem;
            line-height: 1.1;
        }

        .hero-description {
            font-size: 1rem;
            opacity: 0.9;
            margin-bottom: 2rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.6;
        }

        .cta-button {
            background: linear-gradient(135deg, #ffa500, #ff6b6b);
            color: white;
            padding: 1rem 2.5rem;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            box-shadow: 0 10px 30px rgba(255, 165, 0, 0.3);
            animation: shake 3s infinite;
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(255, 165, 0, 0.4);
            animation: none;
        }

        @keyframes shake {
            0%, 90%, 100% { transform: translateX(0); }
            92%, 96% { transform: translateX(-2px); }
            94%, 98% { transform: translateX(2px); }
        }

        /* Combined Video & Details Section */
        .video-details-section {
            background: #0f1429;
            padding: 3rem 0;
            position: relative;
        }

        .video-details-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: start;
        }

        .video-container {
            background: #1a1f3a;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            position: relative;
        }

        .video-placeholder {
            aspect-ratio: 16/9;
            background: linear-gradient(135deg, #2a2f5a, #1a1f3a);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            background-image: url('https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center;
        }

        .video-placeholder::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.6);
        }

        .play-button {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #ffa500, #ff6b6b);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: transform 0.3s ease;
            box-shadow: 0 10px 30px rgba(255, 165, 0, 0.3);
            z-index: 2;
            position: relative;
        }

        .play-button:hover {
            transform: scale(1.1);
        }

        .play-button::before {
            content: '▶';
            color: white;
            font-size: 2rem;
            margin-left: 5px;
        }

        .video-title {
            position: absolute;
            bottom: 15px;
            left: 15px;
            right: 15px;
            background: rgba(0, 0, 0, 0.8);
            padding: 0.8rem;
            border-radius: 10px;
            font-weight: 600;
            font-size: 0.9rem;
            z-index: 2;
        }

        .webinar-details {
            background: #2a2f5a;
            border-radius: 20px;
            padding: 2rem;
            height: fit-content;
        }

        .webinar-details h3 {
            color: #ffa500;
            font-size: 1.3rem;
            margin-bottom: 1rem;
            text-align: center;
        }

        .details-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0.8rem;
            margin: 1rem 0;
        }

        .detail-item {
            background: rgba(255,165,0,0.1);
            padding: 0.8rem;
            border-radius: 8px;
            text-align: center;
            font-size: 0.9rem;
        }

        .detail-item strong {
            color: #ffa500;
            display: block;
            margin-bottom: 0.3rem;
            font-size: 0.8rem;
        }

        .timer-section {
            background: linear-gradient(135deg, #ff6b6b, #ffa500);
            border-radius: 15px;
            padding: 1rem;
            margin: 1rem 0;
            text-align: center;
        }

        .timer-title {
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
            color: white;
        }

        .timer-display {
            font-size: 1.8rem;
            font-weight: 900;
            color: white;
            font-family: monospace;
        }

        /* Section 3 - What You'll Learn */
        .learn-section {
            background: #1a1f3a;
            padding: 4rem 0;
        }

        .section-title {
            text-align: center;
            font-size: clamp(1.8rem, 4vw, 2.5rem);
            font-weight: 800;
            margin-bottom: 2rem;
            color: #ffa500;
        }

        .learn-content {
            background: #2a2f5a;
            border-radius: 20px;
            padding: 2rem;
            margin: 2rem 0;
        }

        .learn-description {
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .learn-item {
            background: rgba(255, 165, 0, 0.1);
            border-left: 4px solid #ffa500;
            padding: 1.5rem;
            margin: 1rem 0;
            border-radius: 10px;
        }

        .learn-item h4 {
            color: #ffa500;
            font-weight: 700;
            margin-bottom: 0.5rem;
            font-size: 1.1rem;
        }

        .learn-item p {
            opacity: 0.9;
            line-height: 1.5;
        }

        .price-section {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
            margin: 1.5rem 0;
        }

        .free-price {
            font-size: 2rem;
            font-weight: 900;
            color: #fff;
        }

        .striked-price {
            font-size: 1.2rem;
            color: #ff6b6b;
            text-decoration: line-through;
            font-weight: 600;
        }

        .worth-text {
            font-size: 0.9rem;
            color: #ffa500;
            margin-left: 0.5rem;
        }

        /* Section 4 - Coach Section */
        .coach-section {
            background: linear-gradient(135deg, #0a0e27, #1a1f3a);
            padding: 4rem 0;
            text-align: center;
        }

        .coach-badge {
            font-size: 1.2rem;
            margin-bottom: 1rem;
            color: #ffa500;
            font-weight: 600;
        }

        .coach-title {
            font-size: clamp(1.5rem, 3vw, 2rem);
            font-weight: 800;
            margin-bottom: 0.5rem;
        }

        .coach-subtitle {
            font-size: clamp(1.2rem, 2.5vw, 1.5rem);
            color: #ff6b6b;
            font-weight: 700;
            margin-bottom: 2rem;
        }

        .coach-card {
            background: #2a2f5a;
            border-radius: 20px;
            padding: 2rem;
            margin: 2rem 0;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);
        }

        .coach-image {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: linear-gradient(135deg, #ffa500, #ff6b6b);
            margin: 0 auto 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
    background-image: url('/images/sandeepray.jpg'); /* relative to public folder */
            background-size: cover;
            background-position: center;
        }

        .coach-name {
            font-size: 1.5rem;
            font-weight: 800;
            color: #ffa500;
            margin-bottom: 0.5rem;
        }

        .coach-role {
            font-size: 1rem;
            opacity: 0.8;
            margin-bottom: 1rem;
        }

        /* Section 5 - Success Gallery */
        .gallery-section {
            background: #1a1f3a;
            padding: 4rem 0;
        }

        .gallery-title {
            text-align: center;
            font-size: clamp(1.8rem, 4vw, 2.5rem);
            font-weight: 800;
            margin-bottom: 1rem;
            color: #ffa500;
        }

        .gallery-subtitle {
            text-align: center;
            font-size: 1.1rem;
            opacity: 0.8;
            margin-bottom: 3rem;
        }

        .success-image {
            width: 100%;
            max-width: 500px;
            margin: 0 auto 2rem;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
        }

        .success-image img {
            width: 100%;
            height: auto;
            display: block;
        }

        /* FAQ Section */
        .faq-section {
            background: #0f1429;
            padding: 4rem 0;
        }

        .faq-title {
            text-align: center;
            font-size: clamp(1.8rem, 4vw, 2.5rem);
            font-weight: 800;
            margin-bottom: 2rem;
            color: #ffa500;
        }

        .faq-item {
            background: #2a2f5a;
            border-radius: 15px;
            margin: 1rem 0;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .faq-question {
            padding: 1.5rem;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 600;
            user-select: none;
        }

        .faq-question:hover {
            background: rgba(255, 165, 0, 0.1);
        }

        .faq-icon {
            font-size: 1.2rem;
            color: #ffa500;
            transition: transform 0.3s ease;
        }

        .faq-item.active .faq-icon {
            transform: rotate(180deg);
        }

        .faq-answer {
            padding: 0 1.5rem;
            max-height: 0;
            overflow: hidden;
            transition: all 0.3s ease;
            opacity: 0.8;
        }

        .faq-item.active .faq-answer {
            padding: 0 1.5rem 1.5rem 1.5rem;
            max-height: 200px;
        }

        /* Sticky Bottom Banner */
        .sticky-banner {
            position: fixed;
            bottom: -150px;
            left: 0;
            right: 0;
            background: linear-gradient(135deg, #0a0e27 0%, #1a1f3a 100%);
            color: white;
            padding: 15px 20px;
            box-shadow: 0 -10px 30px rgba(0, 0, 0, 0.5);
            z-index: 1000;
            transition: bottom 0.5s ease-in-out;
            border-top: 3px solid #ffa500;
        }

        .sticky-banner.show {
            bottom: 0;
        }

        .banner-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .banner-left {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .banner-price {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .banner-free {
            font-size: 1.8rem;
            font-weight: 900;
            color: white;
        }

        .banner-striked {
            font-size: 1rem;
            color: #ff6b6b;
            text-decoration: line-through;
            font-weight: 600;
        }

        .banner-timer {
            font-size: 0.9rem;
            color: #ffa500;
            font-weight: 600;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 5px;
        }

        .banner-cta {
            background: linear-gradient(135deg, #ffa500, #ff6b6b);
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 25px;
            font-size: 1rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            animation: shake 3s infinite;
        }

        .banner-cta:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255, 165, 0, 0.4);
            animation: none;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                padding: 0 15px;
            }

            .hero-section {
                padding: 1.5rem 0 2rem 0;
            }

            .video-details-section, .learn-section, .coach-section, .gallery-section, .faq-section {
                padding: 2.5rem 0;
            }

            .video-details-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .details-grid {
                grid-template-columns: 1fr;
            }

            .banner-content {
                flex-direction: column;
                gap: 10px;
                text-align: center;
            }

            .banner-left {
                flex-direction: column;
                gap: 8px;
                text-align: center;
            }

            .banner-cta {
                width: 100%;
                max-width: 250px;
            }

            .modal-content {
                width: 95%;
                margin: 1rem;
            }

            .privacy-policy-btn {
                bottom: 15px;
                right: 15px;
                padding: 8px 12px;
                font-size: 0.8rem;
            }

            .policy-buttons {
                bottom: 15px;
                right: 15px;
                gap: 8px;
            }
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
    </style>
</head>
<body>
    <!-- Registration Modal -->
    <div class="modal-overlay" id="registrationModal">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal('registrationModal')">&times;</button>
            <div class="success-message" id="successMessage">
                <h4>🎉 Registration Successful!</h4>
                <p>Thank you for registering! You'll receive joining details on your email shortly.</p>
            </div>
            <h2 class="modal-title">🎯 Register for NEEV Webinar</h2>
            <p class="modal-subtitle">Secure your seat for just ₹49! Join thousands of students who are building successful FMCG careers.</p>
            
            <form id="registrationForm">
                <div class="form-group">
                    <label class="form-label">Full Name *</label>
                    <input type="text" class="form-input" name="name" placeholder="Enter your full name" required>
                </div>
                
                <div class="form-group">
                    <label class="form-label">Email Address *</label>
                    <input type="email" class="form-input" name="email" placeholder="Enter your email address" required>
                </div>
                
                <div class="form-group">
                    <label class="form-label">Phone Number *</label>
                    <input type="tel" class="form-input" name="phone" placeholder="Enter your phone number" required>
                </div>
                
                <button type="submit" class="register-btn">🎫 Register for ₹49</button>
            </form>
        </div>
    </div>

    <!-- Privacy Policy Modal -->
    <div class="modal-overlay" id="privacyModal">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal('privacyModal')">&times;</button>
            <h2 class="modal-title">🔒 Privacy Policy</h2>
            <div class="privacy-content">
                <h3>1. Introduction</h3>
                <p>Welcome to <strong>Skill to Will</strong>, a website and platform offering FMCG sales training, mentoring, consultancy, and online courses under SR Capability Solutions Pvt. Ltd. This Privacy Policy outlines how we collect, use, share, and protect your personal information across our website, online courses, and related services.</p>

                <h3>2. Information We Collect</h3>
                
                <h4>2.1. Personal Information You Provide</h4>
                <ul>
                    <li><strong>Account & Contact Info:</strong> Name, email, phone number, company details when you register for courses, newsletters, or contact us.</li>
                    <li><strong>Course Participation:</strong> Enrollment data, submitted assignments, feedback, and training progress when you use our online learning platform.</li>
                    <li><strong>Communications:</strong> Any messages, requests, or feedback you share with us.</li>
                </ul>

                <h4>2.2. Automatically Collected Information</h4>
                <ul>
                    <li><strong>Device & Technical Data:</strong> IP address, device type, browser, pages visited, access times, and usage patterns via logging and analytics.</li>
                </ul>

                <h4>2.3. Location Information</h4>
                <ul>
                    <li>For our mobile app (as listed on Google Play), your general location may be collected if permitted—data is encrypted in transit and not shared with third parties.</li>
                </ul>

                <h3>3. How We Use Your Information</h3>
                <p>We may use your data to:</p>
                <ul>
                    <li>Deliver and personalize services—training sessions, mentoring, course access.</li>
                    <li>Communicate updates, respond to inquiries, and provide support.</li>
                    <li>Improve our website and content via analytics.</li>
                    <li>Send marketing materials (with your permission where required).</li>
                    <li>Comply with legal obligations and enforce our terms of use.</li>
                </ul>

                <h3>4. Data Sharing and Disclosure</h3>
                <p>We <strong>do not sell or share your data with third parties</strong>. You may choose to share information with third-party platforms (e.g., payment gateways), and we will disclose your data only as necessary for compliance with laws or protection of our rights.</p>

                <h3>5. Cookies and Tracking Technologies</h3>
                <p>We use cookies and similar tools to enhance your experience, collect technical data, and aid with analytics. You may adjust your browser settings to manage cookies.</p>

                <h3>6. Security</h3>
                <p>Your data is protected with appropriate security measures—including encryption in transit—and access is limited to authorized personnel.</p>

                <h3>7. Retention of Data</h3>
                <p>We retain your information only as long as needed to provide services, meet legal obligations, or as outlined in this policy.</p>

                <h3>8. Your Rights</h3>
                <p>Depending on your jurisdiction, you may have rights including:</p>
                <ul>
                    <li>Access to your personal data.</li>
                    <li>Correction or deletion of inaccurate data.</li>
                    <li>Restricting or objecting to processing.</li>
                    <li>Withdrawing consent (where applicable).</li>
                </ul>
                <p>Please contact us for any such requests.</p>

                <h3>9. Children's Privacy</h3>
                <p>Our services are not directed to children under 18. We do not knowingly collect personal data from minors—if you believe we have, please contact us and we'll remove it.</p>

                <h3>10. Third-Party Links</h3>
                <p>We may link to external sites (like Amazon for the FMCG Sales Toolkit or our YouTube channel). We are not responsible for their privacy practices.</p>

                <h3>11. Changes to This Policy</h3>
                <p>We may update this privacy policy occasionally. Substantial changes will be highlighted on our website.</p>

                <h3>12. Contact Us</h3>
                <p>If you have questions or wish to exercise your rights, contact us at:</p>
                <ul>
                    <li><strong>Email:</strong> sandeep@skilltowill.com</li>
                    <li><strong>Phone:</strong> +91 98189 01783</li>
                    <li><strong>Address:</strong> A4/901, Tulip White Apartment, Badshahpur, Sector-69, Gurugram, Haryana 122101, India</li>
                </ul>

                <p><em>By registering for our webinar, you acknowledge that you have read and understood this Privacy Policy and agree to the collection and use of your information as described herein.</em></p>
            </div>
        </div>
    </div>

    <!-- Refund Policy Modal -->
    <div class="modal-overlay" id="refundModal">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal('refundModal')">&times;</button>
            <h2 class="modal-title">💰 Refund Policy</h2>
            <div class="privacy-content">
                <h3>1. Effective Date</h3>
                <p>This Refund Policy is effective as of <strong>August 21, 2025</strong>, and applies to all purchases made through the SkillToWill website, online courses, trainings, mentoring, and consulting services.</p>

                <h3>2. No-Refund Policy</h3>
                <p>All sales are <strong>final</strong>. Due to the nature of our services (e.g., digital content, online or in-person training, mentoring, consulting), we <strong>do not offer refunds</strong>, under any circumstances.</p>

                <h3>3. What You Are Paying For</h3>
                <p>Our pricing covers:</p>
                <ul>
                    <li>Access to digital courses and materials</li>
                    <li>Participation in live or recorded training sessions</li>
                    <li>Ongoing mentoring support</li>
                    <li>Consultation services tailored to your business or career needs</li>
                </ul>

                <h3>4. Why We Don't Offer Refunds</h3>
                <ul>
                    <li><strong>Immediate Delivery:</strong> Once access to content or services is granted, the material cannot be returned or revoked.</li>
                    <li><strong>Resource Allocation:</strong> Significant planning, customization, and allocation of expert time and resources go into preparing each program.</li>
                    <li><strong>Value Realized:</strong> We strive to ensure all users receive value from our programs; expecting partial value with a full refund is not feasible.</li>
                </ul>

                <h3>5. Quality Assurance & Support</h3>
                <p>Although refunds are not available, your satisfaction is a priority. We offer:</p>
                <ul>
                    <li><strong>Pre-purchase assistance:</strong> Feel free to reach out if you'd like to understand a course or service before enrolling.</li>
                    <li><strong>Post-enrollment support:</strong> You can contact our team if you face any technical issues or difficulties accessing content—our team will assist you promptly.</li>
                </ul>

                <h3>6. Exceptions</h3>
                <p>Refund requests due to technical issues (e.g., inability to access courses or content) will be reviewed on a case-by-case basis. We cannot guarantee a refund but will do our best to resolve the issue fairly—such requests must be submitted within <strong>7 calendar days</strong> of purchase, with clear evidence of the issue.</p>

                <h3>7. How to Reach Us</h3>
                <p>For any questions, assistance, or clarification either before or after purchase, please contact us at:</p>
                <ul>
                    <li><strong>Email:</strong> sandeep@skilltowill.com</li>
                    <li><strong>Phone:</strong> +91 98189 01783</li>
                    <li><strong>Address:</strong> A4/901, Tulip White Apartment, Badshahpur, Sector-69, Gurugram, Haryana 122101, India</li>
                </ul>

                <h3>8. Changes to This Policy</h3>
                <p>SkillToWill reserves the right to modify this Refund Policy at any time. Any changes will take effect immediately upon posting, with the "Effective Date" updated accordingly. Your continued use of our services after changes implies your acceptance of the new terms.</p>

                <p><em>By registering for our webinar, you acknowledge that you have read, understood, and agree to this Refund Policy.</em></p>
            </div>
        </div>
    </div>

    <!-- Policy Buttons -->
    <div class="policy-buttons">
        <button class="privacy-policy-btn" onclick="openModal('privacyModal')">
            🔒 Privacy Policy
        </button>
        <button class="privacy-policy-btn" onclick="openModal('refundModal')" style="bottom: 70px;">
            💰 Refund Policy
        </button>
    </div>

    <!-- Section 1: Hero Content -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <div class="workshop-badge">40-Min LIVE Webinar - Just ₹49!</div>
                <h1 class="hero-title">🚀 Confused About Your Career After 12th or Graduation?</h1>
                <h2 class="hero-subtitle">Start Earning in India's BOOMING FMCG Industry</h2>
                <h3 class="hero-title">for Just ₹49! 🚀</h3>
                <p class="hero-description">You've finished school or college… But what's next? Are you sitting at home, unsure about "what to do in life"? Wondering how to make money and build a rewarding career? You're NOT alone!</p>
                <button class="cta-button" onclick="openModal('registrationModal')">Register for Just ₹49</button>
            </div>
        </div>
    </section>

    <!-- Section 2: Video & Webinar Details Combined -->
    <section class="video-details-section">
        <div class="container">
            <div class="video-details-grid">
                <div class="video-container">
                    <div class="video-placeholder">
                        <div class="play-button" onclick="playVideo()"></div>
                        <div class="video-title">🎯 The "NEEV" FMCG Career Foundation Webinar by Sandeep Ray</div>
                    </div>
                </div>
                
                <div class="webinar-details">
                    <h3>📆 Webinar Details</h3>
                    <div class="details-grid">
                        <div class="detail-item">
                            <strong>📆 DATE:</strong>
                            Aug 31, 2025
                        </div>
                        <div class="detail-item">
                            <strong>🕚 TIME:</strong>
                           11:00 Am IST
                        </div>
                        <div class="detail-item">
                            <strong>⏳ DURATION:</strong>
                            40 Minutes
                        </div>
                        <div class="detail-item">
                            <strong>💻 WHERE:</strong>
                            Online
                        </div>
                        <div class="detail-item">
                            <strong>👤 LANGUAGE:</strong>
                            Hindi
                        </div>
                        <div class="detail-item">
                            <strong>🎓 TRAINER:</strong>
                            Sandeep Ray
                        </div>
                    </div> 
 
                </div>
            </div>
        </div>
    </section>

    <!-- Section 3: What You'll Learn -->
    <section class="learn-section">
        <div class="container">
            <h2 class="section-title">WHAT YOU WILL LEARN IN THIS 40-MIN LIVE WEBINAR:</h2>
            <div class="learn-content">
                <p class="learn-description">Just like that guy who wanted a pizza but didn't know the address—most students are lost on where to start their career journey. Learn exactly how YOU can launch an exciting, fast-growth career in India's evergreen FMCG sector—no prior experience needed!</p>
                
                <div class="learn-item">
                    <h4>✅ FMCG Sector Understanding</h4>
                    <p>Why it's India's MOST STABLE and fastest-growing field for jobs</p>
                </div>

                <div class="learn-item">
                    <h4>✅ Getting Started as a Fresher</h4>
                    <p>How to get started—even as a fresher after 12th OR graduation</p>
                </div>

                <div class="learn-item">
                    <h4>✅ Real Sales Skills</h4>
                    <p>Real sales skills that bring actual placements (not textbook theory)</p>
                </div>

                <div class="learn-item">
                    <h4>✅ Success Secrets</h4>
                    <p>Secrets successful sales champions use to win awards, grow fast, and earn big</p>
                </div>

                <div class="learn-item">
                    <h4>✅ Placement Assistance</h4>
                    <p>Placement assistance & what recruiters look for</p>
                </div>

                <div class="learn-item">
                    <h4>✅ Mindset Trainings</h4>
                    <p>Motivational tips for a confident, "Will Do" attitude</p>
                </div>

                <div class="learn-item">
                    <h4>✅ Live Q&A Session</h4>
                    <p>Q&A session – Ask your career questions live!</p>
                </div>
            </div>
            
            <div style="text-align: center;">
                <button class="cta-button" onclick="openModal('registrationModal')">🎫 Secure Your Seat Now!</button>
            </div>
        </div>
    </section>

    <!-- Section 4: Coach & Why FMCG Section -->
    <section class="coach-section">
        <div class="container">
            <div class="coach-badge">Meet Your Trainer</div>
            <h2 class="coach-title">Sandeep Ray</h2>
            <h3 class="coach-subtitle">Sales Consultant | Corporate Trainer | Author | Motivational Speaker</h3>
            
            <div class="coach-card">
                <div class="coach-image"></div>
                <div class="coach-name">Sandeep Ray</div>
                <div class="coach-role">Renowned FMCG Sales Pro and Mentor</div>
            </div>

            <div style="background: #2a2f5a; border-radius: 20px; padding: 2rem; margin: 2rem 0;">
                <h3 style="color: #ffa500; font-size: 1.8rem; margin-bottom: 1.5rem; text-align: center;">WHY FMCG?</h3>
                
                <div class="learn-item">
                    <h4>📈 Recession-proof</h4>
                    <p>Always high demand, always jobs</p>
                </div>

                <div class="learn-item">
                    <h4>🔎 Growth Opportunities</h4>
                    <p>Spot growth opportunities even as a newcomer</p>
                </div>

                <div class="learn-item">
                    <h4>🏆 Learn from Experts</h4>
                    <p>Learn from industry experts with 100+ years of experience</p>
                </div>

                <div class="learn-item">
                    <h4>🚀 Skill-based Growth</h4>
                    <p>You don't need top grades, just the RIGHT TRAININGS!</p>
                </div>
            </div>

            <div style="background: rgba(255,165,0,0.1); border-radius: 15px; padding: 1.5rem; margin: 2rem 0; text-align: center;">
                <h4 style="color: #ffa500; margin-bottom: 1rem;">💡 This webinar is for you if you are:</h4>
                <p style="margin-bottom: 0.5rem;">✅ A 12th pass student or recent graduate feeling LOST</p>
                <p style="margin-bottom: 0.5rem;">✅ Sitting at home, searching for a breakthrough, but unsure where to start</p>
                <p>✅ Dreaming of financial independence and a career with real future growth</p>
                <p style="color: #ffa500; font-weight: 600; margin-top: 1rem;">Your journey from "Confusion" to "Confidence" starts HERE.</p>
            </div>
                
            <div class="price-section">
                <span class="free-price" style="color: #ffa500;">₹49</span>
                <span class="striked-price">₹1999</span>
                <span class="worth-text">(Worth ₹1999)</span>
            </div>
            <button class="cta-button" onclick="openModal('registrationModal')">Register Now</button>
        </div>
    </section>

    <!-- Section 5: Success Stories -->
    <section class="gallery-section">
        <div class="container">
            <h2 class="gallery-title">REAL STORIES, REAL SUCCESS</h2>
            <p class="gallery-subtitle">Students who transformed their careers with our trainings</p>
            
            <div class="success-image">
                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Success Stories" />
            </div>
            
            <div style="background: #2a2f5a; border-radius: 20px; padding: 2rem; margin: 2rem 0; text-align: center;">
                <div style="font-size: 3rem; margin-bottom: 1rem;">💬</div>
                <p style="font-size: 1.2rem; font-style: italic; color: #ffa500; margin-bottom: 1rem;">
                    "We are very happy with the training provided by Mr. Sandeep and I am sure this will help our team to improve the efficiency and the execution standard. It’s a very impactful training. Thank You so much Sandeep."
                </p>
                <p style="opacity: 0.8;">— Shashi Ranjan Zonal Head - West, Godrej Consumer Products Ltd.</p>
            </div>

            <div style="background: linear-gradient(135deg, #ff6b6b, #ffa500); border-radius: 20px; padding: 2.5rem; margin: 2rem 0; text-align: center;">
                <h3 style="font-size: 2rem; margin-bottom: 1rem; color: white;">STOP WAITING. TAKE CONTROL OF YOUR FUTURE — NOW!</h3>
                <p style="font-size: 1.2rem; margin-bottom: 1.5rem; color: white;">Don't miss this one-time opportunity to build your career foundation in the industry that powers India forward.</p>
                <p style="font-size: 1.1rem; color: white; margin-bottom: 1rem;">Your pizza will only arrive if you know your address. And your career will only begin if you take the first step.</p>
            </div>

            <div style="background: rgba(255,165,0,0.2); border: 2px solid #ffa500; border-radius: 15px; padding: 1.5rem; text-align: center; margin: 2rem 0;">
                <p style="color: #ff6b6b; font-weight: 700; font-size: 1.1rem; margin-bottom: 0.5rem;">🚨 LIMITED SEATS AVAILABLE 🚨</p>
                <p style="color: #ffa500; font-weight: 600;">Only <span id="seatsLeft">18</span> seats left!</p>
            </div>
            
            <div style="text-align: center; margin-top: 2rem;">
                <button class="cta-button" onclick="openModal('registrationModal')">👉 Join the NEEV Webinar Now!</button>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <h2 class="faq-title">Frequently Asked Questions</h2>
            
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <span>Do I need experience to join?</span>
                    <span class="faq-icon">▼</span>
                </div>
                <div class="faq-answer">
                    <p>No! This webinar is specifically designed for beginners, 12th pass students, and fresh graduates. No prior experience in FMCG or sales is needed. We'll teach you everything from basics to advanced strategies.</p>
                </div>
            </div>
            
            {{-- <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <span>Will I get placement assistance after the webinar?</span>
                    <span class="faq-icon">▼</span>
                </div>
                <div class="faq-answer">
                    <p>Absolutely! Our team has strong connections with leading FMCG companies. We provide dedicated placement assistance, resume building support, and interview preparation to help you land your dream job in the FMCG sector.</p>
                </div>
            </div> --}}
            
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <span>What language will the session be conducted in?</span>
                    <span class="faq-icon">▼</span>
                </div>
                <div class="faq-answer">
                    <p>The webinar will be conducted in Hindi to ensure maximum understanding.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <span>Who is Sandeep Ray and why should I learn from him?</span>
                    <span class="faq-icon">▼</span>
                </div>
                <div class="faq-answer">
                    <p>Sandeep Ray is a FMCG Sales Trainer and trained thousand of sales professional across top FMCG Companies in India and abroad. His YouTube Channel - Skill To Will is the No.1 channel for the FMCG Industry. His Book - FMCG Sales Toolkit is an Amazon Best Seller. He helps people start and become successful in sales career.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <span>Is this webinar really worth ₹49? What's the catch?</span>
                    <span class="faq-icon">▼</span>
                </div>
                <div class="faq-answer">
                    <p>Yes! This webinar normally costs ₹1999, but we're offering it at ₹49 as an introductory offer to help more students access quality career guidance. There's no catch - just genuine value and actionable insights that can transform your career trajectory.</p>
                </div>
            </div>

            {{-- <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <span>What if I miss the live session?</span>
                    <span class="faq-icon">▼</span>
                </div>
                <div class="faq-answer">
                    <p>While we highly recommend attending live for the interactive Q&A session, registered participants will receive a recording link. However, the live experience with real-time doubt clearing is much more valuable.</p>
                </div>
            </div> --}}
        </div>
    </section>

    <!-- Sticky Bottom Banner -->
    <div class="sticky-banner" id="stickyBanner">
        <div class="banner-content">
            <div class="banner-left">
                <div class="banner-price">
                    <span class="banner-free">₹49</span>
                    <span class="banner-striked">₹1999</span>
                </div>
                <div class="banner-timer">
                    <span>⏰ Offer Ends In:</span>
                    <div class="timer-display" id="countdown">10:00</div>
                </div>
                <div style="font-size: 0.9rem; color: #ffa500; font-weight: 600;" id="bannerTimer">Only <span id="bannerSeats">18</span> seats left!</div>
            </div>
            <button class="banner-cta" onclick="openModal('registrationModal')">REGISTER FOR JUST ₹49</button>
        </div>
    </div>

    <script>
        // Modal functionality
        function openModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.classList.add('show');
            document.body.style.overflow = 'hidden';
        }

        function closeModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.classList.remove('show');
            document.body.style.overflow = 'auto';
            
            // Reset form and hide success message if closing registration modal
            if (modalId === 'registrationModal') {
                document.getElementById('registrationForm').reset();
                document.getElementById('successMessage').classList.remove('show');
            }
        }

        // Close modal when clicking outside
        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('modal-overlay')) {
                const modalId = e.target.id;
                closeModal(modalId);
            }
        });

        // Registration form submission
        document.getElementById('registrationForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this);
            const name = formData.get('name');
            const email = formData.get('email');
            const phone = formData.get('phone');
            
            // Simulate registration process
            setTimeout(() => {
                // Show success message
                document.getElementById('successMessage').classList.add('show');
                
                // Hide form temporarily
                this.style.display = 'none';
                
                // Reset form after 3 seconds
                setTimeout(() => {
                    this.style.display = 'block';
                    this.reset();
                    
                    // Close modal after successful registration
                    setTimeout(() => {
                        closeModal('registrationModal');
                        
                        // Show additional confirmation
                        alert('🎉 Welcome to NEEV FMCG Career Foundation!\n\n✅ Registration Confirmed\n📧 Email: Joining link sent\n📱 WhatsApp: Updates will follow\n🎯 Webinar: Jan 15, 2025 at 7:00 PM\n\nSee you in the webinar!');
                    }, 2000);
                }, 3000);
            }, 1000);
        });

        // Timer functionality
        let minutes = 9;
        let seconds = 59;
        
        function updateTimer() {
            const timerDisplay = document.getElementById('countdown');
            const timeString = `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
            timerDisplay.textContent = timeString;
            
            if (seconds === 0) {
                if (minutes === 0) {
                    // Reset timer when it reaches 00:00
                    minutes = 9;
                    seconds = 59;
                } else {
                    minutes--;
                    seconds = 59;
                }
            } else {
                seconds--;
            }
        }
        
        // Update timer every second
        setInterval(updateTimer, 1000);
        updateTimer(); // Initial call

        // Seats left functionality
        let seatsLeft = 18;
        
        function updateSeats() {
            document.getElementById('seatsLeft').textContent = seatsLeft;
            document.getElementById('bannerSeats').textContent = seatsLeft;
        }
        
        // Simulate seat booking (decrease every 45 seconds)
        setInterval(function() {
            if (seatsLeft > 8) {
                seatsLeft--;
                updateSeats();
            }
        }, 45000);

        // Sticky banner functionality
        const stickyBanner = document.getElementById('stickyBanner');
        
        window.addEventListener('scroll', function() {
            if (window.scrollY > 400) {
                stickyBanner.classList.add('show');
            } else {
                stickyBanner.classList.remove('show');
            }
        });

        // FAQ functionality
        function toggleFaq(element) {
            const faqItem = element.parentNode;
            const isActive = faqItem.classList.contains('active');
            
            // Close all FAQ items
            document.querySelectorAll('.faq-item').forEach(item => {
                item.classList.remove('active');
            });
            
            // Open clicked item if it wasn't active
            if (!isActive) {
                faqItem.classList.add('active');
            }
        }

        // Video play functionality
        function playVideo() {
            alert('🎬 NEEV FMCG Career Foundation Webinar Preview\n\n🎯 Get a sneak peek of what you\'ll learn!\n📱 WhatsApp: +91-XXXXXXXXXX for instant support\n🎫 Only ' + seatsLeft + ' seats remaining!\n\nRedirecting to video player...');
        }

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add some dynamic effects
        window.addEventListener('load', function() {
            // Animate elements on scroll
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            // Observe all sections
            document.querySelectorAll('.learn-item, .faq-item, .coach-card').forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(20px)';
                el.style.transition = 'all 0.6s ease';
                observer.observe(el);
            });
        });

        // Escape key to close modals
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                const openModal = document.querySelector('.modal-overlay.show');
                if (openModal) {
                    closeModal(openModal.id);
                }
            }
        });
    </script>
</body>
</html>