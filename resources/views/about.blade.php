@extends('layouts.main')
@section('main-container')
    {{-- Hero Section --}}
    <section class="about-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content" data-aos="fade-right">
                        <span class="subtitle">Who We Are</span>
                        <h1 class="hero-title">Crafting Digital <span class="gradient-text">Experiences</span></h1>
                        <p class="hero-description">
                            We're a passionate team of designers and developers dedicated to transforming ideas into
                            stunning digital realities. With creativity at our core and innovation as our compass.
                        </p>
                        <div class="hero-stats">
                            <div class="stat-item">
                                <h3>3+</h3>
                                <p>Years Experience</p>
                            </div>
                            <div class="stat-item">
                                <h3>100+</h3>
                                <p>Projects Delivered</p>
                            </div>
                            <div class="stat-item">
                                <h3>32+</h3>
                                <p>Happy Clients</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image" data-aos="fade-left">
                        <div class="image-wrapper">
                            <img src="{{ asset('assets/images/blog.jpg') }}" alt="About Us">
                            <div class="floating-card card-1">
                                <i class="fa-solid fa-code"></i>
                                <span>Clean Code</span>
                            </div>
                            <div class="floating-card card-2">
                                <i class="fa-solid fa-palette"></i>
                                <span>Creative Design</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Mission & Vision --}}
    <section class="mission-vision">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="mv-card mission-card">
                        <div class="icon-box">
                            <i class="fa-solid fa-bullseye"></i>
                        </div>
                        <h2>Our Mission</h2>
                        <p>
                            To empower businesses with innovative web solutions that drive growth and create lasting
                            impressions. We believe in the power of design and technology to transform how people connect
                            with brands online.
                        </p>
                        <ul class="mission-points">
                            <li><i class="fa-solid fa-check"></i> Deliver excellence in every project</li>
                            <li><i class="fa-solid fa-check"></i> Foster long-term partnerships</li>
                            <li><i class="fa-solid fa-check"></i> Stay ahead of industry trends</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="mv-card vision-card">
                        <div class="icon-box">
                            <i class="fa-solid fa-eye"></i>
                        </div>
                        <h2>Our Vision</h2>
                        <p>
                            To be the leading force in digital innovation, recognized for creating web experiences that not
                            only meet but exceed expectations. We envision a future where every business has access to
                            world-class digital solutions.
                        </p>
                        <ul class="mission-points">
                            <li><i class="fa-solid fa-check"></i> Pioneer cutting-edge technologies</li>
                            <li><i class="fa-solid fa-check"></i> Set new design standards</li>
                            <li><i class="fa-solid fa-check"></i> Build a global community</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- What We Do --}}
    <section class="what-we-do">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center" data-aos="fade-up">
                    <div class="title-wrap">
                        <div class="section-title-box">
                            <h2 class="section-title">What We <strong>Do Best</strong></h2>
                        </div>
                    </div>
                    <p class="section-description">
                        We combine creativity, strategy, and technology to deliver exceptional results
                    </p>
                </div>
            </div>

            <div class="row g-4 mt-4">
                @php
                    $services = [
                        [
                            'icon' => 'fa-laptop-code',
                            'title' => 'Web Development',
                            'description' => 'Building robust, scalable websites with clean code and modern frameworks',
                            'color' => '#04b962',
                        ],
                        [
                            'icon' => 'fa-paintbrush',
                            'title' => 'UI/UX Design',
                            'description' => 'Crafting intuitive interfaces that users love and remember',
                            'color' => '#ff6b6b',
                        ],
                        [
                            'icon' => 'fa-mobile-screen-button',
                            'title' => 'Responsive Design',
                            'description' => 'Creating seamless experiences across all devices and screen sizes',
                            'color' => '#4ecdc4',
                        ],
                        [
                            'icon' => 'fa-rocket',
                            'title' => 'Performance Optimization',
                            'description' => 'Ensuring lightning-fast load times and smooth interactions',
                            'color' => '#ffd93d',
                        ],
                        [
                            'icon' => 'fa-search',
                            'title' => 'SEO Optimization',
                            'description' => 'Boosting visibility and driving organic traffic to your site',
                            'color' => '#a8dadc',
                        ],
                        [
                            'icon' => 'fa-headset',
                            'title' => 'Support & Maintenance',
                            'description' => 'Providing ongoing support to keep your site running smoothly',
                            'color' => '#e76f51',
                        ],
                    ];
                @endphp

                @foreach ($services as $index => $service)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $index * 50 }}">
                        <div class="service-card" style="--service-color: {{ $service['color'] }}">
                            <div class="service-icon">
                                <i class="fa-solid {{ $service['icon'] }}"></i>
                            </div>
                            <h3>{{ $service['title'] }}</h3>
                            <p>{{ $service['description'] }}</p>
                            <div class="card-hover-effect"></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Our Values --}}
    <section class="our-values">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center" data-aos="fade-up">
                    <span class="section-subtitle">Core Principles</span>
                    <h2 class="section-title">Our <span class="gradient-text">Values</span></h2>
                </div>
            </div>

            <div class="row g-4 mt-4">
                @php
                    $values = [
                        ['Innovation', 'Constantly pushing boundaries and exploring new possibilities', 'fa-lightbulb'],
                        ['Quality', 'Never compromising on excellence in every line of code', 'fa-award'],
                        ['Integrity', 'Building trust through honest and transparent relationships', 'fa-handshake'],
                        ['Collaboration', 'Working together to achieve extraordinary results', 'fa-users'],
                    ];
                @endphp

                @foreach ($values as $index => $value)
                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="{{ $index * 50 }}">
                        <div class="value-card">
                            <div class="value-icon">
                                <i class="fa-solid {{ $value[2] }}"></i>
                            </div>
                            <h3>{{ $value[0] }}</h3>
                            <p>{{ $value[1] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Why Choose Us --}}
    <section class="why-choose-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="why-image">
                        <img src="{{ asset('assets/images/blog.jpg') }}" alt="Why Choose Us">
                        <div class="experience-badge">
                            <h3>3+</h3>
                            <p>Years of<br>Excellence</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="why-content">
                        <span class="section-subtitle">Why Choose Us</span>
                        <h2 class="section-title">Making Your Digital <span class="gradient-text">Dreams Reality</span></h2>
                        <p class="mb-4">
                            We're not just developers and designers—we're your digital partners, committed to bringing your
                            vision to life with precision and passion.
                        </p>

                        <div class="feature-list">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fa-solid fa-bolt"></i>
                                </div>
                                <div class="feature-text">
                                    <h4>Fast Delivery</h4>
                                    <p>Quick turnaround without compromising quality</p>
                                </div>
                            </div>

                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fa-solid fa-shield-halved"></i>
                                </div>
                                <div class="feature-text">
                                    <h4>Reliable & Secure</h4>
                                    <p>Built with security and stability as priorities</p>
                                </div>
                            </div>

                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fa-solid fa-comments"></i>
                                </div>
                                <div class="feature-text">
                                    <h4>24/7 Support</h4>
                                    <p>Always here when you need assistance</p>
                                </div>
                            </div>

                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fa-solid fa-dollar-sign"></i>
                                </div>
                                <div class="feature-text">
                                    <h4>Affordable Pricing</h4>
                                    <p>Premium quality at competitive rates</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="about-cta">
        <div class="container">
            <div class="cta-box" data-aos="zoom-in">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h2>Ready to Start Your Project?</h2>
                        <p>Let's collaborate and create something amazing together</p>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a href="#contact" class="btn btn-cta">Get In Touch</a>
                        <a href="{{ asset('files/resume.pdf') }}" class="btn btn-cta-outline" target="_blank">View
                            Portfolio</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        /* ================================
               ABOUT US PAGE - MODERN PREMIUM STYLES
               ================================ */

        /* Common Styles */
        .gradient-text {
            background: linear-gradient(135deg, #04b962 0%, #3dd5b0 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .section-subtitle {
            display: inline-block;
            color: #04b962;
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
            background: linear-gradient(90deg, #04b962, #3dd5b0);
        }

        .section-title {
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .section-description {
            font-size: 18px;
            color: #666;
            max-width: 700px;
            margin: 0 auto 40px;
        }

        /* ================================
               HERO SECTION
               ================================ */
        .about-hero {
            padding: 120px 0 80px;
            background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
            position: relative;
            overflow: hidden;
        }

        .about-hero::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(4, 185, 98, 0.08) 0%, transparent 70%);
            border-radius: 50%;
        }

        .hero-content .subtitle {
            display: inline-block;
            background: linear-gradient(135deg, #04b962 0%, #3dd5b0 100%);
            color: #fff;
            padding: 8px 20px;
            border-radius: 30px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 1px;
            margin-bottom: 20px;
        }

        .hero-title {
            font-size: 56px;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 25px;
            color: #1a1a1a;
        }

        .hero-description {
            font-size: 18px;
            line-height: 1.8;
            color: #555;
            margin-bottom: 40px;
            max-width: 550px;
        }

        .hero-stats {
            display: flex;
            gap: 40px;
            margin-top: 50px;
        }

        .stat-item {
            position: relative;
        }

        .stat-item h3 {
            font-size: 48px;
            font-weight: 800;
            background: linear-gradient(135deg, #04b962 0%, #3dd5b0 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 5px;
        }

        .stat-item p {
            font-size: 14px;
            color: #666;
            font-weight: 500;
        }

        .hero-image {
            position: relative;
        }

        .image-wrapper {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.15);
        }

        .image-wrapper img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.5s ease;
        }

        .image-wrapper:hover img {
            transform: scale(1.05);
        }

        .floating-card {
            position: absolute;
            background: #fff;
            padding: 20px 30px;
            border-radius: 15px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            gap: 15px;
            animation: float 3s ease-in-out infinite;
        }

        .floating-card i {
            font-size: 24px;
            color: #04b962;
        }

        .floating-card span {
            font-weight: 600;
            color: #333;
        }

        .card-1 {
            top: 10%;
            right: 30px;
            animation-delay: 0s;
        }

        .card-2 {
            bottom: 15%;
            left: 30px;
            animation-delay: 1.5s;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        /* ================================
               MISSION & VISION
               ================================ */
        .mission-vision {
            padding: 100px 0;
            background: #fff;
        }

        .mv-card {
            background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
            padding: 50px 40px;
            border-radius: 20px;
            height: 100%;
            position: relative;
            overflow: hidden;
            transition: all 0.4s ease;
            border: 1px solid #e9ecef;
        }

        .mv-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, #04b962 0%, #3dd5b0 100%);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.4s ease;
        }

        .mv-card:hover::before {
            transform: scaleX(1);
        }

        .mv-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(4, 185, 98, 0.15);
        }

        .icon-box {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #04b962 0%, #3dd5b0 100%);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 30px;
            position: relative;
        }

        .icon-box::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: inherit;
            border-radius: inherit;
            opacity: 0.3;
            transform: scale(1.2);
        }

        .icon-box i {
            font-size: 36px;
            color: #fff;
            z-index: 1;
        }

        .mv-card h2 {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 20px;
            color: #1a1a1a;
        }

        .mv-card p {
            font-size: 16px;
            line-height: 1.8;
            color: #555;
            margin-bottom: 25px;
        }

        .mission-points {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .mission-points li {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 12px 0;
            font-size: 15px;
            color: #444;
            font-weight: 500;
        }

        .mission-points li i {
            color: #04b962;
            font-size: 18px;
        }

        /* ================================
               WHAT WE DO
               ================================ */
        .what-we-do {
            padding: 100px 0;
            background: linear-gradient(180deg, #ffffff 0%, #f8f9fa 100%);
        }

        .service-card {
            background: #fff;
            padding: 40px 30px;
            border-radius: 20px;
            height: 100%;
            position: relative;
            overflow: hidden;
            transition: all 0.4s ease;
            border: 1px solid #e9ecef;
        }

        .service-card::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 0;
            background: var(--service-color);
            opacity: 0.05;
            transition: height 0.4s ease;
        }

        .service-card:hover::before {
            height: 100%;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.1);
            border-color: var(--service-color);
        }

        .service-icon {
            width: 70px;
            height: 70px;
            background: var(--service-color);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 25px;
            transition: all 0.4s ease;
        }

        .service-card:hover .service-icon {
            transform: rotateY(360deg);
        }

        .service-icon i {
            font-size: 30px;
            color: #fff;
        }

        .service-card h3 {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 15px;
            color: #1a1a1a;
        }

        .service-card p {
            font-size: 15px;
            line-height: 1.7;
            color: #666;
            margin: 0;
        }

        /* ================================
               OUR VALUES
               ================================ */
        .our-values {
            padding: 100px 0;
            background: #fff;
        }

        .value-card {
            background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
            padding: 40px 30px;
            border-radius: 20px;
            text-align: center;
            height: 100%;
            transition: all 0.4s ease;
            border: 1px solid #e9ecef;
            position: relative;
            overflow: hidden;
        }

        .value-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 4px;
            background: linear-gradient(90deg, #04b962 0%, #3dd5b0 100%);
            transition: width 0.4s ease;
        }

        .value-card:hover::before {
            width: 100%;
        }

        .value-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(4, 185, 98, 0.15);
        }

        .value-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #04b962 0%, #3dd5b0 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            transition: all 0.4s ease;
        }

        .value-card:hover .value-icon {
            transform: scale(1.1) rotate(360deg);
        }

        .value-icon i {
            font-size: 32px;
            color: #fff;
        }

        .value-card h3 {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 15px;
            color: #1a1a1a;
        }

        .value-card p {
            font-size: 15px;
            line-height: 1.7;
            color: #666;
            margin: 0;
        }

        /* ================================
               WHY CHOOSE US
               ================================ */
        .why-choose-us {
            padding: 100px 0;
            background: linear-gradient(180deg, #f8f9fa 0%, #ffffff 100%);
        }

        .why-image {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
        }

        .why-image img {
            width: 100%;
            height: auto;
            display: block;
            border-radius: 20px;
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.15);
        }

        .experience-badge {
            position: absolute;
            bottom: 30px;
            right: 30px;
            background: linear-gradient(135deg, #04b962 0%, #3dd5b0 100%);
            padding: 25px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 15px 40px rgba(4, 185, 98, 0.3);
        }

        .experience-badge h3 {
            font-size: 48px;
            font-weight: 800;
            color: #fff;
            margin: 0;
            line-height: 1;
        }

        .experience-badge p {
            font-size: 14px;
            color: #fff;
            margin: 10px 0 0;
            line-height: 1.4;
        }

        .why-content {
            padding-left: 30px;
        }

        .feature-list {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

        .feature-item {
            display: flex;
            align-items: flex-start;
            gap: 20px;
            padding: 25px;
            background: #fff;
            border-radius: 15px;
            transition: all 0.3s ease;
            border: 1px solid #e9ecef;
        }

        .feature-item:hover {
            transform: translateX(10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #04b962 0%, #3dd5b0 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .feature-icon i {
            font-size: 24px;
            color: #fff;
        }

        .feature-text h4 {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 8px;
            color: #1a1a1a;
        }

        .feature-text p {
            font-size: 14px;
            color: #666;
            margin: 0;
            line-height: 1.6;
        }

        /* ================================
               CTA SECTION
               ================================ */
        .about-cta {
            padding: 100px 0;
            background: #fff;
        }

        .cta-box {
            background: linear-gradient(135deg, #04b962 0%, #3dd5b0 100%);
            padding: 60px 50px;
            border-radius: 25px;
            box-shadow: 0 30px 60px rgba(4, 185, 98, 0.25);
            position: relative;
            overflow: hidden;
        }

        .cta-box::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 400px;
            height: 400px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }

        .cta-box h2 {
            font-size: 36px;
            font-weight: 700;
            color: #fff;
            margin-bottom: 10px;
        }

        .cta-box p {
            font-size: 18px;
            color: rgba(255, 255, 255, 0.9);
            margin: 0;
        }

        .btn-cta {
            background: #fff;
            color: #04b962;
            padding: 15px 35px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 16px;
            border: 2px solid #fff;
            transition: all 0.3s ease;
            display: inline-block;
            text-decoration: none;
            margin-right: 15px;
        }

        .btn-cta:hover {
            background: transparent;
            color: #fff;
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        .btn-cta-outline {
            background: transparent;
            color: #fff;
            padding: 15px 35px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 16px;
            border: 2px solid #fff;
            transition: all 0.3s ease;
            display: inline-block;
            text-decoration: none;
        }

        .btn-cta-outline:hover {
            background: #fff;
            color: #04b962;
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        /* ================================
               RESPONSIVE STYLES
               ================================ */
        @media (max-width: 991px) {
            .hero-title {
                font-size: 42px;
            }

            .section-title {
                font-size: 36px;
            }

            .why-content {
                padding-left: 0;
                margin-top: 40px;
            }

            .hero-stats {
                gap: 30px;
            }

            .stat-item h3 {
                font-size: 38px;
            }
        }

        @media (max-width: 767px) {
            .about-hero {
                padding: 80px 0 60px;
            }

            .hero-title {
                font-size: 34px;
            }

            .section-title {
                font-size: 28px;
            }

            .section-description {
                font-size: 16px;
            }

            .hero-stats {
                flex-wrap: wrap;
                gap: 20px;
            }

            .floating-card {
                padding: 15px 20px;
            }

            .card-1,
            .card-2 {
                position: static;
                margin: 15px 0;
                animation: none;
            }

            .mission-vision,
            .what-we-do,
            .our-values,
            .why-choose-us,
            .about-cta {
                padding: 60px 0;
            }

            .cta-box {
                padding: 40px 30px;
                text-align: center;
            }

            .cta-box h2 {
                font-size: 28px;
            }

            .btn-cta,
            .btn-cta-outline {
                display: block;
                margin: 10px 0;
            }

            .feature-item {
                padding: 20px;
            }
        }
    </style>
@endsection
