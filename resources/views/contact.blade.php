@extends('layouts.main')
@section('main-container')
    {{-- Hero Section --}}
    <section class="contact-hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto text-center" data-aos="fade-up">
                    <span class="hero-badge">Get In Touch</span>
                    <h1 class="hero-title">Let's Create Something <span class="gradient-text">Amazing</span></h1>
                    <p class="hero-description">
                        Have a project in mind? We'd love to hear from you. Send us a message
                        and we'll respond as soon as possible to discuss your ideas.
                    </p>
                </div>
            </div>
        </div>
        <div class="hero-wave"></div>
    </section>

    {{-- Contact Info Cards --}}
    <section class="contact-info-section">
        <div class="container">
            <div class="row g-4">
                @php
                    $contactInfo = [
                        [
                            'icon' => 'fa-location-dot',
                            'title' => 'Visit Us',
                            'line1' => 'Ahmedabad, Gujarat',
                            'line2' => 'India - 380001',
                            'link' => 'https://maps.google.com',
                            'color' => '#04b962',
                            'delay' => '0',
                        ],
                        [
                            'icon' => 'fa-phone',
                            'title' => 'Call Us',
                            'line1' => '+91 94264 28317',
                            'line2' => 'Mon-Sat: 9AM - 6PM',
                            'link' => 'tel:+919426428317',
                            'color' => '#ff6b6b',
                            'delay' => '100',
                        ],
                        [
                            'icon' => 'fa-envelope',
                            'title' => 'Email Us',
                            'line1' => 'info@tejasmakwana.com',
                            'line2' => 'We reply within 24 hours',
                            'link' => 'mailto:info@tejasmakwana.com',
                            'color' => '#4ecdc4',
                            'delay' => '200',
                        ],
                    ];
                @endphp

                @foreach ($contactInfo as $info)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $info['delay'] }}">
                        <a href="{{ $info['link'] }}" class="contact-info-card" style="--card-color: {{ $info['color'] }}">
                            <div class="info-icon">
                                <i class="fa-solid {{ $info['icon'] }}"></i>
                            </div>
                            <h3>{{ $info['title'] }}</h3>
                            <p class="info-primary">{{ $info['line1'] }}</p>
                            <p class="info-secondary">{{ $info['line2'] }}</p>
                            <div class="card-arrow">
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Contact Form & Map Section --}}
    <section class="contact-form-section">
        <div class="container">
            <div class="row g-5">
                {{-- Contact Form --}}
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="contact-form-wrapper">
                        <div class="form-header">
                            <span class="section-subtitle">Send Message</span>
                            <h2>Get In <span class="gradient-text">Touch</span></h2>
                            <p class="form-subtitle">Fill out the form below and we'll get back to you shortly</p>
                        </div>

                        <form id="contactForm" method="POST" action="{{ route('contact.store') }}"
                            class="modern-contact-form">
                            @csrf

                            <div class="form-group">
                                <label for="fname">Full Name *</label>
                                <div class="input-wrapper">
                                    <i class="fa-solid fa-user"></i>
                                    <input type="text" id="fname" name="fname" placeholder="John Doe" required
                                        value="{{ old('fname') }}">
                                </div>
                                @error('fname')
                                    <span class="error-message">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email Address *</label>
                                        <div class="input-wrapper">
                                            <i class="fa-solid fa-envelope"></i>
                                            <input type="email" id="email" name="email"
                                                placeholder="john@example.com" required value="{{ old('email') }}">
                                        </div>
                                        @error('email')
                                            <span class="error-message">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Phone Number *</label>
                                        <div class="input-wrapper">
                                            <i class="fa-solid fa-phone"></i>
                                            <input type="tel" id="phone" name="phone"
                                                placeholder="+91 98765 43210" required value="{{ old('phone') }}"
                                                maxlength="15">
                                        </div>
                                        @error('phone')
                                            <span class="error-message">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <div class="input-wrapper">
                                    <i class="fa-solid fa-tag"></i>
                                    <select id="subject" name="subject" class="form-select">
                                        <option value="">Select a subject</option>
                                        <option value="web-design">Web Design</option>
                                        <option value="web-development">Web Development</option>
                                        <option value="ecommerce">E-Commerce</option>
                                        <option value="wordpress">WordPress</option>
                                        <option value="ui-ux">UI/UX Design</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="message">Your Message *</label>
                                <div class="input-wrapper">
                                    <i class="fa-solid fa-message"></i>
                                    <textarea id="message" name="message" rows="5" placeholder="Tell us about your project..." required>{{ old('message') }}</textarea>
                                </div>
                                @error('message')
                                    <span class="error-message">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="submit-btn">
                                <span>Send Message</span>
                                <i class="fa-solid fa-paper-plane"></i>
                            </button>

                            <p class="form-note">* Required fields</p>
                        </form>
                    </div>
                </div>

                {{-- Map & Additional Info --}}
                <div class="col-lg-6" data-aos="fade-left">
                    {{-- Map --}}
                    <div class="map-wrapper">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235013.74843068025!2d72.41492976804483!3d23.020474100578312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1740998482130!5m2!1sen!2sin"
                            style="border:0;" allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>

                    {{-- Business Hours --}}
                    <div class="business-hours">
                        <h3><i class="fa-solid fa-clock"></i> Business Hours</h3>
                        <div class="hours-list">
                            <div class="hour-item">
                                <span class="day">Monday - Friday</span>
                                <span class="time">9:00 AM - 6:00 PM</span>
                            </div>
                            <div class="hour-item">
                                <span class="day">Saturday</span>
                                <span class="time">10:00 AM - 4:00 PM</span>
                            </div>
                            <div class="hour-item">
                                <span class="day">Sunday</span>
                                <span class="time">Closed</span>
                            </div>
                        </div>
                    </div>

                    {{-- Social Connect --}}
                    <div class="social-connect">
                        <h3><i class="fa-solid fa-share-nodes"></i> Connect With Us</h3>
                        <p>Follow us on social media for updates and insights</p>
                        <div class="social-links">
                            <a href="https://www.facebook.com/profile.php?id=100082030190206" target="_blank"
                                class="social-link facebook" title="Facebook">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/tejas-makwana-396b97222" target="_blank"
                                class="social-link linkedin" title="LinkedIn">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                            <a href="https://www.instagram.com/tejas_makwana_007/" target="_blank"
                                class="social-link instagram" title="Instagram">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="https://api.whatsapp.com/send?phone=919426428317&text=Hello, Tejas" target="_blank"
                                class="social-link whatsapp" title="WhatsApp">
                                <i class="fa-brands fa-whatsapp"></i>
                            </a>
                            <a href="#" target="_blank" class="social-link twitter" title="Twitter">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                            <a href="#" target="_blank" class="social-link youtube" title="YouTube">
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ Section --}}
    <section class="faq-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <span class="section-subtitle">FAQ</span>
                    <h2 class="section-title">Frequently Asked <span class="gradient-text">Questions</span></h2>
                    <p class="section-description">
                        Find answers to common questions about our services and process
                    </p>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-10 mx-auto">
                    <div class="accordion" id="faqAccordion">
                        @php
                            $faqs = [
                                [
                                    'question' => 'What is your typical project timeline?',
                                    'answer' =>
                                        'Project timelines vary based on complexity and requirements. A simple website typically takes 2-3 weeks, while complex applications may take 2-3 months. We provide a detailed timeline during the project planning phase and keep you updated throughout the development process.',
                                ],
                                [
                                    'question' => 'Do you offer ongoing support after project completion?',
                                    'answer' =>
                                        'Yes! All our packages include post-launch support ranging from 1 to 6 months depending on the plan you choose. We also offer extended support and maintenance packages for long-term partnerships. Our team is always available to help with updates, bug fixes, and improvements.',
                                ],
                                [
                                    'question' => 'Can you help with website redesign or improvements?',
                                    'answer' =>
                                        'Absolutely! We specialize in redesigning existing websites to improve user experience, modernize design, and enhance performance. We analyze your current site, identify areas for improvement, and create a comprehensive redesign strategy that aligns with your goals.',
                                ],
                                [
                                    'question' => 'What information do you need to start a project?',
                                    'answer' =>
                                        'To get started, we need details about your business goals, target audience, design preferences, content requirements, and any specific features you want. We\'ll guide you through our discovery process with a detailed questionnaire and consultation to ensure we understand your vision completely.',
                                ],
                                [
                                    'question' => 'Do you provide hosting and domain services?',
                                    'answer' =>
                                        'While we don\'t provide hosting services directly, we can recommend reliable hosting providers based on your needs and assist with the complete setup process. We also help with domain registration and DNS configuration to ensure your website goes live smoothly.',
                                ],
                                [
                                    'question' => 'What are your payment terms?',
                                    'answer' =>
                                        'We typically work with a milestone-based payment structure: 50% upfront to begin the project, 30% upon design approval, and 20% upon final delivery. For larger projects, we can create a customized payment schedule that works for both parties.',
                                ],
                            ];
                        @endphp

                        @foreach ($faqs as $index => $faq)
                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="{{ $index * 50 }}">
                                <h2 class="accordion-header">
                                    <button class="accordion-button {{ $index === 0 ? '' : 'collapsed' }}" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq{{ $index }}">
                                        <span class="faq-number">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                                        {{ $faq['question'] }}
                                    </button>
                                </h2>
                                <div id="faq{{ $index }}"
                                    class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        {{ $faq['answer'] }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- CTA Section --}}
    <section class="contact-cta">
        <div class="container">
            <div class="cta-card" data-aos="zoom-in">
                <div class="cta-icon">
                    <i class="fa-solid fa-rocket"></i>
                </div>
                <h2>Ready to Get Started?</h2>
                <p>Let's discuss your project and bring your ideas to life with our expertise</p>
                <div class="cta-buttons">
                    <a href="tel:+919426428317" class="cta-btn primary">
                        <i class="fa-solid fa-phone"></i> Call Now
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=919426428317&text=Hello, Tejas" class="cta-btn secondary"
                        target="_blank">
                        <i class="fa-brands fa-whatsapp"></i> WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* ================================
               CONTACT US PAGE - PREMIUM CSS
               ================================ */

        :root {
            --primary-gradient: linear-gradient(135deg, #04b962 0%, #3dd5b0 100%);
            --primary-color: #04b962;
            --secondary-color: #3dd5b0;
            --dark-text: #1a1a1a;
            --light-text: #666;
            --border-color: #e9ecef;
        }

        /* ================================
               COMMON STYLES
               ================================ */
        .gradient-text {
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-badge {
            display: inline-block;
            background: var(--primary-gradient);
            color: #fff;
            padding: 10px 28px;
            border-radius: 30px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            margin-bottom: 25px;
            box-shadow: 0 8px 20px rgba(4, 185, 98, 0.25);
        }

        .hero-title {
            font-size: 58px;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 25px;
            color: var(--dark-text);
        }

        .hero-description {
            font-size: 19px;
            line-height: 1.8;
            color: var(--light-text);
            max-width: 750px;
            margin: 0 auto;
        }

        .section-subtitle {
            display: inline-block;
            color: var(--primary-color);
            font-size: 14px;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 15px;
            position: relative;
            padding-left: 40px;
        }

        .section-subtitle::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 30px;
            height: 2px;
            background: var(--primary-gradient);
        }

        .section-title {
            font-size: 44px;
            font-weight: 700;
            margin-bottom: 20px;
            line-height: 1.3;
            color: var(--dark-text);
        }

        .section-description {
            font-size: 18px;
            color: var(--light-text);
            line-height: 1.8;
            max-width: 700px;
            margin: 0 auto;
        }

        /* ================================
               HERO SECTION
               ================================ */
        .contact-hero {
            padding: 150px 0 100px;
            background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
            position: relative;
            overflow: hidden;
        }

        .contact-hero::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(4, 185, 98, 0.08) 0%, transparent 70%);
            border-radius: 50%;
            animation: float 8s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0) rotate(0deg);
            }

            50% {
                transform: translateY(-30px) rotate(180deg);
            }
        }

        .hero-wave {
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 100%;
            height: 100px;
            background: #fff;
            clip-path: polygon(0 50%, 100% 0, 100% 100%, 0 100%);
        }

        /* ================================
               CONTACT INFO CARDS
               ================================ */
        .contact-info-section {
            padding: 80px 0;
            background: #fff;
            margin-top: -50px;
            position: relative;
            z-index: 2;
        }

        .contact-info-card {
            background: #fff;
            padding: 45px 35px;
            border-radius: 25px;
            text-align: center;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.1);
            height: 100%;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border-top: 5px solid var(--card-color);
            position: relative;
            overflow: hidden;
            text-decoration: none;
            display: block;
        }

        .contact-info-card::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 0;
            background: var(--card-color);
            opacity: 0.05;
            transition: height 0.4s ease;
        }

        .contact-info-card:hover::before {
            height: 100%;
        }

        .contact-info-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 25px 70px rgba(0, 0, 0, 0.15);
        }

        .info-icon {
            width: 85px;
            height: 85px;
            background: var(--card-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 30px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
        }

        .info-icon::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: var(--card-color);
            border-radius: 50%;
            opacity: 0.2;
            animation: pulse 2s ease-in-out infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                transform: scale(1);
                opacity: 0.2;
            }

            50% {
                transform: scale(1.3);
                opacity: 0;
            }
        }

        .contact-info-card:hover .info-icon {
            transform: scale(1.15) rotate(360deg);
        }

        .info-icon i {
            font-size: 36px;
            color: #fff;
            z-index: 1;
        }

        .contact-info-card h3 {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 18px;
            color: var(--dark-text);
        }

        .info-primary {
            font-size: 17px;
            color: var(--dark-text);
            margin-bottom: 8px;
            font-weight: 600;
        }

        .info-secondary {
            font-size: 15px;
            color: var(--light-text);
            margin-bottom: 0;
        }

        .card-arrow {
            width: 45px;
            height: 45px;
            background: var(--card-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 25px auto 0;
            transition: all 0.3s ease;
        }

        .card-arrow i {
            color: #fff;
            font-size: 18px;
            transition: transform 0.3s ease;
        }

        .contact-info-card:hover .card-arrow {
            transform: scale(1.1);
        }

        .contact-info-card:hover .card-arrow i {
            transform: translateX(5px);
        }

        /* ================================
               CONTACT FORM SECTION
               ================================ */
        .contact-form-section {
            padding: 100px 0;
            background: linear-gradient(180deg, #ffffff 0%, #f8f9fa 100%);
        }

        .contact-form-wrapper {
            background: #fff;
            padding: 55px 45px;
            border-radius: 25px;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.08);
            border: 2px solid var(--border-color);
        }

        .form-header {
            margin-bottom: 40px;
        }

        .form-header h2 {
            font-size: 38px;
            font-weight: 700;
            margin-bottom: 12px;
            color: var(--dark-text);
        }

        .form-subtitle {
            font-size: 16px;
            color: var(--light-text);
            margin: 0;
        }

        /* Form Styles */
        .modern-contact-form .form-group {
            margin-bottom: 28px;
        }

        .modern-contact-form label {
            display: block;
            font-size: 15px;
            font-weight: 600;
            color: var(--dark-text);
            margin-bottom: 12px;
        }

        .input-wrapper {
            position: relative;
        }

        .input-wrapper i {
            position: absolute;
            left: 22px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--primary-color);
            font-size: 18px;
            z-index: 1;
        }

        .input-wrapper input,
        .input-wrapper textarea,
        .input-wrapper select {
            width: 100%;
            padding: 18px 22px 18px 58px;
            border: 2px solid var(--border-color);
            border-radius: 15px;
            font-size: 15px;
            color: var(--dark-text);
            transition: all 0.3s ease;
            background: #fff;
        }

        .input-wrapper textarea {
            resize: vertical;
            padding-top: 18px;
        }

        .input-wrapper input:focus,
        .input-wrapper textarea:focus,
        .input-wrapper select:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 4px rgba(4, 185, 98, 0.1);
        }

        .input-wrapper select {
            cursor: pointer;
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%2304b962' d='M6 9L1 4h10z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 20px center;
        }

        .error-message {
            display: block;
            color: #ff6b6b;
            font-size: 13px;
            margin-top: 8px;
            font-weight: 500;
        }

        .submit-btn {
            width: 100%;
            padding: 18px;
            background: var(--primary-gradient);
            color: #fff;
            border: none;
            border-radius: 50px;
            font-size: 17px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            margin-top: 15px;
            position: relative;
            overflow: hidden;
        }

        .submit-btn::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: width 0.6s ease, height 0.6s ease;
        }

        .submit-btn:hover::before {
            width: 400px;
            height: 400px;
        }

        .submit-btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(4, 185, 98, 0.35);
        }

        .form-note {
            font-size: 13px;
            color: var(--light-text);
            margin-top: 18px;
            text-align: center;
        }

        /* ================================
               MAP & INFO SECTION
               ================================ */
        .map-wrapper {
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.1);
            height: 400px;
            margin-bottom: 30px;
            border: 2px solid var(--border-color);
        }

        .map-wrapper iframe {
            width: 100%;
            height: 100%;
            filter: grayscale(20%);
            transition: filter 0.3s ease;
        }

        .map-wrapper:hover iframe {
            filter: grayscale(0%);
        }

        /* Business Hours */
        .business-hours {
            background: #fff;
            padding: 40px 35px;
            border-radius: 25px;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.08);
            margin-bottom: 30px;
            border: 2px solid var(--border-color);
        }

        .business-hours h3 {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 28px;
            color: var(--dark-text);
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .business-hours h3 i {
            color: var(--primary-color);
        }

        .hours-list {
            display: flex;
            flex-direction: column;
            gap: 0;
        }

        .hour-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 18px 0;
            border-bottom: 2px solid #f5f5f5;
            transition: all 0.3s ease;
        }

        .hour-item:last-child {
            border-bottom: none;
        }

        .hour-item:hover {
            padding-left: 10px;
            background: linear-gradient(90deg, rgba(4, 185, 98, 0.05) 0%, transparent 100%);
        }

        .day {
            font-size: 15px;
            font-weight: 600;
            color: var(--dark-text);
        }

        .time {
            font-size: 15px;
            color: var(--light-text);
            font-weight: 500;
        }

        /* Social Connect */
        .social-connect {
            background: #fff;
            padding: 40px 35px;
            border-radius: 25px;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.08);
            border: 2px solid var(--border-color);
        }

        .social-connect h3 {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 12px;
            color: var(--dark-text);
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .social-connect h3 i {
            color: var(--primary-color);
        }

        .social-connect p {
            font-size: 15px;
            color: var(--light-text);
            margin-bottom: 25px;
        }

        .social-links {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .social-link {
            width: 55px;
            height: 55px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 22px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            text-decoration: none;
            position: relative;
            overflow: hidden;
        }

        .social-link::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: width 0.4s ease, height 0.4s ease;
        }

        .social-link:hover::before {
            width: 100px;
            height: 100px;
        }

        .social-link:hover {
            transform: translateY(-8px) rotate(5deg);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.3);
        }

        .social-link.facebook {
            background: #1877f2;
        }

        .social-link.linkedin {
            background: #0077b5;
        }

        .social-link.instagram {
            background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
        }

        .social-link.whatsapp {
            background: #25d366;
        }

        .social-link.twitter {
            background: #1da1f2;
        }

        .social-link.youtube {
            background: #ff0000;
        }

        /* ================================
               FAQ SECTION
               ================================ */
        .faq-section {
            padding: 100px 0;
            background: #fff;
        }

        .accordion-item {
            background: #fff;
            border: 2px solid var(--border-color);
            border-radius: 20px;
            margin-bottom: 18px;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .accordion-item:hover {
            border-color: var(--primary-color);
            box-shadow: 0 8px 25px rgba(4, 185, 98, 0.1);
        }

        .accordion-header {
            margin-bottom: 0;
        }

        .accordion-button {
            background: #fff;
            padding: 25px 30px;
            font-size: 17px;
            font-weight: 600;
            color: var(--dark-text);
            border: none;
            width: 100%;
            text-align: left;
            position: relative;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 18px;
        }

        .faq-number {
            width: 40px;
            height: 40px;
            background: var(--primary-gradient);
            color: #fff;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            font-weight: 700;
            flex-shrink: 0;
        }

        .accordion-button:not(.collapsed) {
            background: linear-gradient(90deg, rgba(4, 185, 98, 0.05) 0%, rgba(61, 213, 176, 0.05) 100%);
            color: var(--primary-color);
        }

        .accordion-button::after {
            content: '\f078';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            right: 30px;
            font-size: 18px;
            color: var(--primary-color);
            transition: transform 0.3s ease;
        }

        .accordion-button:not(.collapsed)::after {
            transform: rotate(180deg);
        }

        .accordion-button:focus {
            box-shadow: none;
        }

        .accordion-body {
            padding: 0 30px 30px 88px;
            font-size: 15px;
            line-height: 1.9;
            color: var(--light-text);
        }

        

        /* ================================
               CTA SECTION
               ================================ */
        .contact-cta {
            padding: 100px 0;
            background: #fff;
        }

        .cta-card {
            background: var(--primary-gradient);
            padding: 70px 50px;
            border-radius: 30px;
            text-align: center;
            box-shadow: 0 35px 70px rgba(4, 185, 98, 0.3);
            position: relative;
            overflow: hidden;
        }

        .cta-card::after {
            content: '';
            position: absolute;
            bottom: -50%;
            left: -20%;
            width: 400px;
            height: 400px;
            background: rgba(255, 255, 255, 0.08);
            border-radius: 50%;
        }

        .cta-icon {
            width: 90px;
            height: 90px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 30px;
            position: relative;
            z-index: 1;
            animation: pulse 2s ease-in-out infinite;
        }

        .cta-icon i {
            font-size: 40px;
            color: #fff;
        }

        .cta-card h2 {
            font-size: 42px;
            font-weight: 700;
            color: #fff;
            margin-bottom: 18px;
            position: relative;
            z-index: 1;
        }

        .cta-card p {
            font-size: 19px;
            color: rgba(255, 255, 255, 0.95);
            margin-bottom: 40px;
            max-width: 650px;
            margin-left: auto;
            margin-right: auto;
            position: relative;
            z-index: 1;
        }

        .cta-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            position: relative;
            z-index: 1;
        }

        .cta-btn {
            padding: 18px 40px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 16px;
            text-decoration: none;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            display: inline-flex;
            align-items: center;
            gap: 12px;
        }

        .cta-btn.primary {
            background: #fff;
            color: var(--primary-color);
        }

        .cta-btn.primary:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 45px rgba(0, 0, 0, 0.25);
            color: var(--primary-color);
        }

        .cta-btn.secondary {
            background: transparent;
            color: #fff;
            border: 2px solid #fff;
        }

        .cta-btn.secondary:hover {
            background: #fff;
            color: #25d366;
            transform: translateY(-5px);
        }

        /* ================================
               RESPONSIVE STYLES
               ================================ */
        @media (max-width: 1199px) {
            .hero-title {
                font-size: 52px;
            }

            .section-title {
                font-size: 38px;
            }
        }

        @media (max-width: 991px) {
            .contact-hero {
                padding: 120px 0 80px;
            }

            .hero-title {
                font-size: 44px;
            }

            .section-title {
                font-size: 34px;
            }

            .contact-info-section,
            .contact-form-section,
            .faq-section,
            .newsletter-section,
            .contact-cta {
                padding: 60px 0;
            }

            .contact-form-wrapper {
                margin-bottom: 40px;
            }

            .newsletter-content {
                margin-bottom: 30px;
                text-align: center;
            }
        }

        @media (max-width: 767px) {
            .contact-hero {
                padding: 100px 0 60px;
            }

            .hero-badge {
                font-size: 12px;
                padding: 8px 22px;
            }

            .hero-title {
                font-size: 36px;
            }

            .hero-description {
                font-size: 16px;
            }

            .section-title {
                font-size: 28px;
            }

            .section-description {
                font-size: 16px;
            }

            .contact-info-card {
                padding: 35px 25px;
            }

            .contact-form-wrapper {
                padding: 40px 25px;
            }

            .form-header h2 {
                font-size: 30px;
            }

            .map-wrapper {
                height: 300px;
            }

            .business-hours,
            .social-connect {
                padding: 30px 25px;
            }

            .accordion-button {
                padding: 20px;
                font-size: 15px;
            }

            .faq-number {
                width: 35px;
                height: 35px;
                font-size: 14px;
            }

            .accordion-body {
                padding: 0 20px 25px 73px;
            }

            .newsletter-box {
                padding: 45px 30px;
            }

            .newsletter-content h2 {
                font-size: 28px;
            }

            .newsletter-input-group {
                flex-direction: column;
                padding: 20px;
                gap: 15px;
            }

            .newsletter-input-group input {
                width: 100%;
                padding: 15px;
                border: 2px solid var(--border-color);
                border-radius: 12px;
            }

            .newsletter-input-group button {
                width: 100%;
                justify-content: center;
            }

            .cta-card {
                padding: 50px 25px;
            }

            .cta-card h2 {
                font-size: 32px;
            }
        }
    </style>
@endsection
