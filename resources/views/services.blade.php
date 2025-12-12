@extends('layouts.main')
@section('main-container')
    {{-- Hero Section --}}
    <section class="services-hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto text-center" data-aos="fade-up">
                    <span class="hero-badge">What We Offer</span>
                    <h1 class="hero-title">Comprehensive Web <span class="gradient-text">Solutions</span></h1>
                    <p class="hero-description">
                        From stunning designs to powerful development, we deliver complete digital solutions
                        that help your business thrive in the online world.
                    </p>
                </div>
            </div>

            {{-- Floating Elements --}}
            <div class="hero-decorations">
                <div class="decoration-circle circle-1"></div>
                <div class="decoration-circle circle-2"></div>
                <div class="decoration-circle circle-3"></div>
            </div>
        </div>
        <div class="hero-wave"></div>
    </section>

    {{-- Main Services Grid --}}
    <section class="main-services">
        <div class="container">
            <div class="row g-4">
                @php
                    $mainServices = [
                        [
                            'icon' => 'fa-code',
                            'title' => 'Web Development',
                            'description' =>
                                'Custom websites built with cutting-edge technologies, clean code, and best practices for optimal performance.',
                            'features' => [
                                'Custom CMS Development',
                                'E-commerce Solutions',
                                'API Integration',
                                'Database Design & Optimization',
                            ],
                            'color' => '#04b962',
                            'delay' => '0',
                        ],
                        [
                            'icon' => 'fa-palette',
                            'title' => 'UI/UX Design',
                            'description' =>
                                'Beautiful, intuitive interfaces that engage users and drive conversions with modern design principles.',
                            'features' => [
                                'Wireframing & Prototyping',
                                'User Research & Testing',
                                'Visual Design',
                                'Design Systems',
                            ],
                            'color' => '#ff6b6b',
                            'delay' => '100',
                        ],
                        [
                            'icon' => 'fa-mobile-screen-button',
                            'title' => 'Responsive Design',
                            'description' =>
                                'Pixel-perfect designs that work flawlessly across all devices, browsers, and screen sizes.',
                            'features' => [
                                'Mobile-First Approach',
                                'Cross-Browser Compatible',
                                'Touch Optimized',
                                'Retina Ready Graphics',
                            ],
                            'color' => '#4ecdc4',
                            'delay' => '200',
                        ],
                        [
                            'icon' => 'fa-wordpress',
                            'title' => 'WordPress Development',
                            'description' =>
                                'Custom WordPress themes and plugins tailored to your specific business needs and requirements.',
                            'features' => [
                                'Custom Theme Development',
                                'Plugin Development',
                                'Site Migration',
                                'Speed Optimization',
                            ],
                            'color' => '#21759b',
                            'delay' => '0',
                        ],
                        [
                            'icon' => 'fa-search',
                            'title' => 'SEO Optimization',
                            'description' =>
                                'Boost your search rankings and drive organic traffic with comprehensive SEO strategies.',
                            'features' => [
                                'On-Page SEO',
                                'Technical SEO Audit',
                                'Keyword Research',
                                'Performance Optimization',
                            ],
                            'color' => '#ffd93d',
                            'delay' => '100',
                        ],
                        [
                            'icon' => 'fa-shopping-cart',
                            'title' => 'E-Commerce Solutions',
                            'description' =>
                                'Complete online store solutions with secure payment integration and inventory management.',
                            'features' => [
                                'Shopping Cart Systems',
                                'Payment Gateway Integration',
                                'Inventory Management',
                                'Order Processing',
                            ],
                            'color' => '#e76f51',
                            'delay' => '200',
                        ],
                    ];
                @endphp

                @foreach ($mainServices as $service)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $service['delay'] }}">
                        <div class="service-card-main" style="--card-color: {{ $service['color'] }}">
                            <div class="service-icon-wrapper">
                                <div class="service-icon-main">
                                    <i class="fa-solid {{ $service['icon'] }}"></i>
                                </div>
                            </div>
                            <h3>{{ $service['title'] }}</h3>
                            <p class="service-description">{{ $service['description'] }}</p>
                            <ul class="service-features">
                                @foreach ($service['features'] as $feature)
                                    <li><i class="fa-solid fa-check"></i> {{ $feature }}</li>
                                @endforeach
                            </ul>
                            <a href="#contact" class="service-btn">Get Started <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Process Section --}}
    <section class="our-process">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <span class="section-subtitle">How We Work</span>
                    <h2 class="section-title">Our Development <span class="gradient-text">Process</span></h2>
                    <p class="section-description">
                        A streamlined, proven approach to deliver exceptional results every time
                    </p>
                </div>
            </div>

            <div class="row g-4 mt-5">
                @php
                    $process = [
                        [
                            'Discovery & Research',
                            'Understanding your goals, target audience, and project requirements through detailed consultation.',
                            'fa-lightbulb',
                            '01',
                        ],
                        [
                            'Planning & Strategy',
                            'Creating wireframes, choosing the right tech stack, and defining clear project milestones.',
                            'fa-tasks',
                            '02',
                        ],
                        [
                            'Design & Prototype',
                            'Crafting beautiful UI/UX that aligns with your brand identity and user expectations.',
                            'fa-pencil-ruler',
                            '03',
                        ],
                        [
                            'Development & Build',
                            'Building your project with clean, maintainable code following industry best practices.',
                            'fa-laptop-code',
                            '04',
                        ],
                        [
                            'Testing & QA',
                            'Rigorous quality assurance to ensure everything works perfectly across all platforms.',
                            'fa-vial',
                            '05',
                        ],
                        [
                            'Launch & Support',
                            'Deploying your project successfully and providing ongoing maintenance and support.',
                            'fa-rocket',
                            '06',
                        ],
                    ];
                @endphp

                @foreach ($process as $index => $step)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $index * 50 }}">
                        <div class="process-card">
                            <div class="process-number">{{ $step[3] }}</div>
                            <div class="process-icon">
                                <i class="fa-solid {{ $step[2] }}"></i>
                            </div>
                            <h3>{{ $step[0] }}</h3>
                            <p>{{ $step[1] }}</p>
                            @if ($index < 5)
                                <div class="process-arrow">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Technologies Section --}}
    <section class="technologies-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <span class="section-subtitle">Tech Stack</span>
                    <h2 class="section-title">Technologies We <span class="gradient-text">Master</span></h2>
                    <p class="section-description">
                        Working with the latest and most powerful technologies to build amazing digital experiences
                    </p>
                </div>
            </div>

            <div class="row g-4 mt-5">
                @php
                    $technologies = [
                        ['HTML5', 'fa-html5', '#e34c26'],
                        ['CSS3', 'fa-css3-alt', '#264de4'],
                        ['JavaScript', 'fa-js', '#f0db4f'],
                        ['Bootstrap', 'fa-bootstrap', '#563d7c'],
                        ['PHP', 'fa-php', '#777bb4'],
                        ['Laravel', 'fa-laravel', '#ff2d20'],
                        ['WordPress', 'fa-wordpress', '#21759b'],
                        ['React', 'fa-react', '#61dafb'],
                        ['Node.js', 'fa-node-js', '#339933'],
                        ['MySQL', 'fa-database', '#00758f'],
                        ['Git', 'fa-git-alt', '#f05032'],
                        ['Figma', 'fa-figma', '#f24e1e'],
                    ];
                @endphp

                @foreach ($technologies as $index => $tech)
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6" data-aos="zoom-in" data-aos-delay="{{ $index * 30 }}">
                        <div class="tech-card" style="--tech-color: {{ $tech[2] }}">
                            <i class="fa-brands {{ $tech[1] }}"></i>
                            <span>{{ $tech[0] }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Pricing Plans --}}
    <section class="pricing-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <span class="section-subtitle">Pricing Plans</span>
                    <h2 class="section-title">Choose Your <span class="gradient-text">Package</span></h2>
                    <p class="section-description">
                        Flexible pricing options designed to suit businesses of all sizes and budgets
                    </p>
                </div>
            </div>

            <div class="row g-4 mt-5 justify-content-center">
                @php
                    $plans = [
                        [
                            'name' => 'Starter',
                            'price' => '15,000',
                            'period' => 'per project',
                            'description' => 'Perfect for small businesses and startups',
                            'features' => [
                                '5 Page Website',
                                'Responsive Design',
                                'Basic SEO Setup',
                                'Contact Form',
                                '1 Month Free Support',
                                'SSL Certificate',
                            ],
                            'popular' => false,
                        ],
                        [
                            'name' => 'Professional',
                            'price' => '35,000',
                            'period' => 'per project',
                            'description' => 'Ideal for growing businesses',
                            'features' => [
                                '10 Page Website',
                                'Advanced UI/UX Design',
                                'Complete SEO Optimization',
                                'CMS Integration',
                                'Analytics Setup',
                                '3 Months Free Support',
                                'Social Media Integration',
                                'Blog System',
                            ],
                            'popular' => true,
                        ],
                        [
                            'name' => 'Enterprise',
                            'price' => '75,000',
                            'period' => 'per project',
                            'description' => 'For established businesses',
                            'features' => [
                                'Unlimited Pages',
                                'Custom Features & Functionality',
                                'Full SEO Package',
                                'E-commerce Ready',
                                'Advanced Analytics',
                                '6 Months Priority Support',
                                'Regular Backups',
                                'Performance Optimization',
                                'Custom API Integration',
                            ],
                            'popular' => false,
                        ],
                    ];
                @endphp

                @foreach ($plans as $index => $plan)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                        <div class="pricing-card {{ $plan['popular'] ? 'popular' : '' }}">
                            @if ($plan['popular'])
                                <div class="popular-badge">
                                    <i class="fa-solid fa-crown"></i> Most Popular
                                </div>
                            @endif
                            <div class="pricing-header">
                                <h3 class="plan-name">{{ $plan['name'] }}</h3>
                                <p class="plan-description">{{ $plan['description'] }}</p>
                            </div>
                            <div class="plan-price">
                                <span class="currency">₹</span>
                                <span class="price">{{ $plan['price'] }}</span>
                                <span class="period">{{ $plan['period'] }}</span>
                            </div>
                            <ul class="plan-features">
                                @foreach ($plan['features'] as $feature)
                                    <li><i class="fa-solid fa-check"></i> {{ $feature }}</li>
                                @endforeach
                            </ul>
                            <a href="#contact" class="plan-btn {{ $plan['popular'] ? 'popular-btn' : '' }}">
                                Choose Plan <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row mt-5">
                <div class="col-12 text-center" data-aos="fade-up">
                    <p class="pricing-note">
                        <i class="fa-solid fa-info-circle"></i>
                        Need a custom quote? <a href="#contact">Contact us</a> for a personalized solution.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Why Choose Us --}}
    <section class="why-choose-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="why-content">
                        <span class="section-subtitle">Why Choose Us</span>
                        <h2 class="section-title">Making Your Digital <span class="gradient-text">Dreams Reality</span>
                        </h2>
                        <p class="why-description">
                            We're not just developers and designers—we're your digital partners, committed to
                            bringing your vision to life with precision, passion, and expertise.
                        </p>

                        <div class="feature-list">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fa-solid fa-bolt"></i>
                                </div>
                                <div class="feature-text">
                                    <h4>Fast Delivery</h4>
                                    <p>Quick turnaround times without compromising on quality</p>
                                </div>
                            </div>

                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fa-solid fa-shield-halved"></i>
                                </div>
                                <div class="feature-text">
                                    <h4>Reliable & Secure</h4>
                                    <p>Built with security and stability as top priorities</p>
                                </div>
                            </div>

                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fa-solid fa-headset"></i>
                                </div>
                                <div class="feature-text">
                                    <h4>24/7 Support</h4>
                                    <p>Always here when you need assistance or guidance</p>
                                </div>
                            </div>

                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fa-solid fa-indian-rupee-sign"></i>
                                </div>
                                <div class="feature-text">
                                    <h4>Affordable Pricing</h4>
                                    <p>Premium quality at competitive and transparent rates</p>
                                </div>
                            </div>
                        </div>

                        <div class="stats-row">
                            <div class="stat-box">
                                <h3>100+</h3>
                                <p>Projects Completed</p>
                            </div>
                            <div class="stat-box">
                                <h3>32+</h3>
                                <p>Happy Clients</p>
                            </div>
                            <div class="stat-box">
                                <h3>3+</h3>
                                <p>Years Experience</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-left">
                    <div class="why-image">
                        <img src="{{ asset('assets/images/blog.jpg') }}" alt="Why Choose Us">
                        <div class="image-badge badge-1">
                            <i class="fa-solid fa-award"></i>
                            <div>
                                <strong>Quality</strong>
                                <span>Guaranteed</span>
                            </div>
                        </div>
                        <div class="image-badge badge-2">
                            <i class="fa-solid fa-clock"></i>
                            <div>
                                <strong>On-Time</strong>
                                <span>Delivery</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="services-cta">
        <div class="container">
            <div class="cta-wrapper" data-aos="zoom-in">
                <div class="cta-icon">
                    <i class="fa-solid fa-rocket"></i>
                </div>
                <h2>Ready to Start Your Project?</h2>
                <p>Let's discuss how we can help bring your vision to life with our expertise</p>
                <div class="cta-buttons">
                    <a href="#contact" class="btn-primary">
                        <i class="fa-solid fa-paper-plane"></i> Get a Free Quote
                    </a>
                    <a href="tel:+919426428317" class="btn-secondary">
                        <i class="fa-solid fa-phone"></i> Call Us Now
                    </a>
                </div>
            </div>
        </div>
    </section>
    <style>
        /* ================================
               SERVICES PAGE - PREMIUM CSS
               ================================ */

        :root {
            --primary-gradient: linear-gradient(135deg, #04b962 0%, #3dd5b0 100%);
            --primary-color: #04b962;
            --secondary-color: #3dd5b0;
            --dark-text: #1a1a1a;
            --light-text: #666;
            --border-color: #e9ecef;
            --shadow-sm: 0 5px 20px rgba(0, 0, 0, 0.08);
            --shadow-md: 0 10px 40px rgba(0, 0, 0, 0.1);
            --shadow-lg: 0 20px 60px rgba(0, 0, 0, 0.15);
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
            animation: badgePulse 2s ease-in-out infinite;
        }

        @keyframes badgePulse {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-5px);
            }
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
        .services-hero {
            padding: 150px 0 100px;
            background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
            position: relative;
            overflow: hidden;
        }

        .hero-decorations {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }

        .decoration-circle {
            position: absolute;
            border-radius: 50%;
            opacity: 0.1;
        }

        .circle-1 {
            width: 400px;
            height: 400px;
            background: var(--primary-gradient);
            top: -100px;
            right: -100px;
            animation: float 6s ease-in-out infinite;
        }

        .circle-2 {
            width: 300px;
            height: 300px;
            background: var(--primary-gradient);
            bottom: -80px;
            left: -80px;
            animation: float 8s ease-in-out infinite;
            animation-delay: 1s;
        }

        .circle-3 {
            width: 200px;
            height: 200px;
            background: var(--primary-gradient);
            top: 50%;
            left: 10%;
            animation: float 7s ease-in-out infinite;
            animation-delay: 2s;
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
            height: 120px;
            background: #fff;
            clip-path: polygon(0 40%, 25% 60%, 50% 40%, 75% 60%, 100% 40%, 100% 100%, 0 100%);
        }

        /* ================================
               MAIN SERVICES GRID
               ================================ */
        .main-services {
            padding: 100px 0;
            background: #fff;
        }

        .service-card-main {
            background: #fff;
            padding: 45px 35px;
            border-radius: 25px;
            border: 2px solid var(--border-color);
            height: 100%;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .service-card-main::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: var(--card-color);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.4s ease;
        }

        .service-card-main::after {
            content: '';
            position: absolute;
            bottom: 0;
            right: 0;
            width: 150px;
            height: 150px;
            background: var(--card-color);
            opacity: 0.05;
            border-radius: 50%;
            transform: translate(50%, 50%);
            transition: all 0.4s ease;
        }

        .service-card-main:hover {
            transform: translateY(-15px);
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.12);
            border-color: var(--card-color);
        }

        .service-card-main:hover::before {
            transform: scaleX(1);
        }

        .service-card-main:hover::after {
            transform: translate(50%, 50%) scale(1.5);
        }

        .service-icon-wrapper {
            margin-bottom: 30px;
        }

        .service-icon-main {
            width: 85px;
            height: 85px;
            background: var(--card-color);
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .service-icon-main::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: var(--card-color);
            border-radius: 18px;
            opacity: 0.2;
            transform: scale(1.2);
            transition: all 0.4s ease;
        }

        .service-card-main:hover .service-icon-main {
            transform: scale(1.1) rotate(5deg);
        }

        .service-card-main:hover .service-icon-main::before {
            transform: scale(1.4);
            opacity: 0.1;
        }

        .service-icon-main i {
            font-size: 38px;
            color: #fff;
            z-index: 1;
        }

        .service-card-main h3 {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 18px;
            color: var(--dark-text);
            transition: color 0.3s ease;
        }

        .service-card-main:hover h3 {
            color: var(--card-color);
        }

        .service-description {
            font-size: 15px;
            line-height: 1.8;
            color: var(--light-text);
            margin-bottom: 25px;
        }

        .service-features {
            list-style: none;
            padding: 0;
            margin: 0 0 30px 0;
        }

        .service-features li {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 10px 0;
            font-size: 14px;
            color: #555;
            font-weight: 500;
            border-bottom: 1px solid #f5f5f5;
            transition: all 0.3s ease;
        }

        .service-features li:last-child {
            border-bottom: none;
        }

        .service-features li:hover {
            padding-left: 10px;
            color: var(--dark-text);
        }

        .service-features li i {
            color: var(--primary-color);
            font-size: 16px;
            flex-shrink: 0;
        }

        .service-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            color: var(--card-color);
            font-weight: 600;
            font-size: 15px;
            text-decoration: none;
            transition: all 0.3s ease;
            position: relative;
        }

        .service-btn::after {
            content: '';
            position: absolute;
            bottom: -3px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--card-color);
            transition: width 0.3s ease;
        }

        .service-btn:hover {
            gap: 15px;
            color: var(--card-color);
        }

        .service-btn:hover::after {
            width: calc(100% - 25px);
        }

        /* ================================
               PROCESS SECTION
               ================================ */
        .our-process {
            padding: 100px 0;
            background: linear-gradient(180deg, #ffffff 0%, #f8f9fa 100%);
            position: relative;
        }

        .process-card {
            background: #fff;
            padding: 45px 35px;
            border-radius: 25px;
            text-align: center;
            height: 100%;
            position: relative;
            border: 2px solid var(--border-color);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            overflow: hidden;
        }

        .process-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--primary-gradient);
            opacity: 0;
            transition: opacity 0.4s ease;
            z-index: 0;
        }

        .process-card:hover::before {
            opacity: 0.03;
        }

        .process-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 25px 60px rgba(4, 185, 98, 0.18);
            border-color: var(--primary-color);
        }

        .process-number {
            position: absolute;
            top: 25px;
            right: 25px;
            font-size: 56px;
            font-weight: 800;
            color: #f0f0f0;
            line-height: 1;
            z-index: 1;
            transition: all 0.4s ease;
        }

        .process-card:hover .process-number {
            color: rgba(4, 185, 98, 0.15);
            transform: scale(1.2);
        }

        .process-icon {
            width: 80px;
            height: 80px;
            background: var(--primary-gradient);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 30px;
            position: relative;
            z-index: 2;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .process-icon::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: var(--primary-gradient);
            border-radius: 50%;
            opacity: 0.3;
            animation: pulse 2s ease-in-out infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                transform: scale(1);
                opacity: 0.3;
            }

            50% {
                transform: scale(1.2);
                opacity: 0;
            }
        }

        .process-card:hover .process-icon {
            transform: scale(1.15) rotate(360deg);
        }

        .process-icon i {
            font-size: 32px;
            color: #fff;
            z-index: 1;
        }

        .process-card h3 {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 18px;
            color: var(--dark-text);
            position: relative;
            z-index: 2;
        }

        .process-card p {
            font-size: 15px;
            line-height: 1.8;
            color: var(--light-text);
            margin: 0;
            position: relative;
            z-index: 2;
        }

        .process-arrow {
            position: absolute;
            right: -30px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 24px;
            color: var(--primary-color);
            opacity: 0.3;
            z-index: 3;
        }

        /* ================================
               TECHNOLOGIES SECTION
               ================================ */
        .technologies-section {
            padding: 100px 0;
            background: #fff;
        }

        .tech-card {
            background: #fff;
            padding: 35px 25px;
            border-radius: 20px;
            text-align: center;
            border: 2px solid var(--border-color);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            height: 100%;
            position: relative;
            overflow: hidden;
        }

        .tech-card::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 0;
            background: var(--tech-color);
            opacity: 0.08;
            transition: height 0.4s ease;
        }

        .tech-card:hover::before {
            height: 100%;
        }

        .tech-card:hover {
            transform: translateY(-10px);
            border-color: var(--tech-color);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.1);
        }

        .tech-card i {
            font-size: 52px;
            color: var(--tech-color);
            margin-bottom: 18px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            z-index: 1;
        }

        .tech-card:hover i {
            transform: scale(1.3) rotateY(360deg);
        }

        .tech-card span {
            display: block;
            font-size: 16px;
            font-weight: 600;
            color: var(--dark-text);
            position: relative;
            z-index: 1;
        }

        /* ================================
               PRICING SECTION
               ================================ */
        .pricing-section {
            padding: 100px 0;
            background: linear-gradient(180deg, #f8f9fa 0%, #ffffff 100%);
        }

        .pricing-card {
            background: #fff;
            padding: 50px 40px;
            border-radius: 25px;
            border: 2px solid var(--border-color);
            height: 100%;
            position: relative;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .pricing-card.popular {
            border-color: var(--primary-color);
            transform: scale(1.05);
            box-shadow: 0 25px 70px rgba(4, 185, 98, 0.25);
        }

        .pricing-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 25px 70px rgba(0, 0, 0, 0.12);
        }

        .pricing-card.popular:hover {
            transform: translateY(-15px) scale(1.05);
        }

        .popular-badge {
            position: absolute;
            top: -18px;
            left: 50%;
            transform: translateX(-50%);
            background: var(--primary-gradient);
            color: #fff;
            padding: 10px 28px;
            border-radius: 30px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 0.5px;
            box-shadow: 0 8px 20px rgba(4, 185, 98, 0.3);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .popular-badge i {
            font-size: 14px;
        }

        .pricing-header {
            margin-bottom: 30px;
            padding-bottom: 25px;
            border-bottom: 2px solid #f5f5f5;
        }

        .plan-name {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 12px;
            color: var(--dark-text);
        }

        .plan-description {
            font-size: 14px;
            color: var(--light-text);
            margin: 0;
        }

        .plan-price {
            margin-bottom: 35px;
            display: flex;
            align-items: flex-start;
            justify-content: center;
            gap: 5px;
        }

        .currency {
            font-size: 28px;
            font-weight: 700;
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-top: 8px;
        }

        .price {
            font-size: 56px;
            font-weight: 800;
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            line-height: 1;
        }

        .period {
            font-size: 15px;
            color: var(--light-text);
            align-self: flex-end;
            margin-bottom: 8px;
        }

        .plan-features {
            list-style: none;
            padding: 0;
            margin: 0 0 40px 0;
        }

        .plan-features li {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 14px 0;
            font-size: 15px;
            color: #555;
            border-bottom: 1px solid #f5f5f5;
            transition: all 0.3s ease;
        }

        .plan-features li:last-child {
            border-bottom: none;
        }

        .plan-features li:hover {
            padding-left: 10px;
            color: var(--dark-text);
        }

        .plan-features li i {
            color: var(--primary-color);
            font-size: 18px;
            flex-shrink: 0;
        }

        .plan-btn {
            display: block;
            width: 100%;
            background: var(--primary-gradient);
            color: #fff;
            padding: 18px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .plan-btn::before {
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

        .plan-btn:hover::before {
            width: 300px;
            height: 300px;
        }

        .plan-btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(4, 185, 98, 0.35);
            color: #fff;
        }

        .popular-btn {
            background: linear-gradient(135deg, #ff6b6b 0%, #ee5a6f 100%);
        }

        .popular-btn:hover {
            box-shadow: 0 15px 40px rgba(255, 107, 107, 0.35);
        }

        .pricing-note {
            font-size: 16px;
            color: var(--light-text);
            margin: 0;
        }

        .pricing-note i {
            color: var(--primary-color);
            margin-right: 8px;
        }

        .pricing-note a {
            color: var(--primary-color);
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .pricing-note a:hover {
            color: var(--secondary-color);
        }

        /* ================================
               WHY CHOOSE US SECTION
               ================================ */
        .why-choose-section {
            padding: 100px 0;
            background: #fff;
        }

        .why-content {
            padding-right: 40px;
        }

        .why-description {
            font-size: 17px;
            line-height: 1.8;
            color: var(--light-text);
            margin-bottom: 40px;
        }

        .feature-list {
            display: flex;
            flex-direction: column;
            gap: 25px;
            margin-bottom: 40px;
        }

        .feature-item {
            display: flex;
            align-items: flex-start;
            gap: 20px;
            padding: 28px;
            background: #fff;
            border-radius: 18px;
            border: 2px solid var(--border-color);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .feature-item:hover {
            transform: translateX(15px);
            box-shadow: 0 15px 45px rgba(0, 0, 0, 0.08);
            border-color: var(--primary-color);
        }

        .feature-icon {
            width: 65px;
            height: 65px;
            background: var(--primary-gradient);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            transition: all 0.4s ease;
        }

        .feature-item:hover .feature-icon {
            transform: scale(1.1) rotate(5deg);
        }

        .feature-icon i {
            font-size: 26px;
            color: #fff;
        }

        .feature-text h4 {
            font-size: 19px;
            font-weight: 700;
            margin-bottom: 8px;
            color: var(--dark-text);
        }

        .feature-text p {
            font-size: 14px;
            color: var(--light-text);
            margin: 0;
            line-height: 1.7;
        }

        .stats-row {
            display: flex;
            gap: 30px;
            flex-wrap: wrap;
        }

        .stat-box {
            flex: 1;
            min-width: 150px;
            text-align: center;
            padding: 25px;
            background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
            border-radius: 18px;
            border: 2px solid var(--border-color);
            transition: all 0.3s ease;
        }

        .stat-box:hover {
            transform: translateY(-5px);
            border-color: var(--primary-color);
            box-shadow: 0 10px 30px rgba(4, 185, 98, 0.15);
        }

        .stat-box h3 {
            font-size: 42px;
            font-weight: 800;
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 8px;
            line-height: 1;
        }

        .stat-box p {
            font-size: 14px;
            color: var(--light-text);
            margin: 0;
            font-weight: 500;
        }

        .why-image {
            position: relative;
            border-radius: 25px;
            overflow: hidden;
        }

        .why-image img {
            width: 100%;
            height: auto;
            display: block;
            border-radius: 25px;
            box-shadow: 0 30px 70px rgba(0, 0, 0, 0.18);
            transition: transform 0.6s ease;
        }

        .why-image:hover img {
            transform: scale(1.05);
        }

        .image-badge {
            position: absolute;
            background: #fff;
            padding: 20px 25px;
            border-radius: 18px;
            box-shadow: 0 15px 45px rgba(0, 0, 0, 0.15);
            display: flex;
            align-items: center;
            gap: 15px;
            animation: float1 3s ease-in-out infinite;
        }

        @keyframes float1 {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        .badge-1 {
            top: 30px;
            right: 30px;
            animation-delay: 0s;
        }

        .badge-2 {
            bottom: 30px;
            left: 30px;
            animation-delay: 1.5s;
        }

        .image-badge i {
            font-size: 28px;
            color: var(--primary-color);
        }

        .image-badge strong {
            display: block;
            font-size: 16px;
            font-weight: 700;
            color: var(--dark-text);
            margin-bottom: 2px;
        }

        .image-badge span {
            display: block;
            font-size: 13px;
            color: var(--light-text);
        }

        /* ================================
               CTA SECTION
               ================================ */
        .services-cta {
            padding: 100px 0;
            background: linear-gradient(180deg, #f8f9fa 0%, #ffffff 100%);
        }

        .cta-wrapper {
            background: var(--primary-gradient);
            padding: 80px 60px;
            border-radius: 30px;
            text-align: center;
            box-shadow: 0 35px 70px rgba(4, 185, 98, 0.3);
            position: relative;
            overflow: hidden;
        }

        .cta-wrapper::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 500px;
            height: 500px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }

        .cta-wrapper::after {
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

        .cta-wrapper h2 {
            font-size: 44px;
            font-weight: 700;
            color: #fff;
            margin-bottom: 18px;
            position: relative;
            z-index: 1;
        }

        .cta-wrapper p {
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

        .btn-primary,
        .btn-secondary {
            padding: 18px 45px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 16px;
            text-decoration: none;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            display: inline-flex;
            align-items: center;
            gap: 12px;
            position: relative;
            overflow: hidden;
        }

        .btn-primary {
            background: #fff;
            color: var(--primary-color);
        }

        .btn-primary::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: var(--primary-color);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: width 0.4s ease, height 0.4s ease;
        }

        .btn-primary:hover::before {
            width: 300px;
            height: 300px;
        }

        .btn-primary:hover {
            background: var(--primary-color);
            color: #fff;
        }

        .btn-secondary {
            background: transparent;
            border: 2px solid #fff;
            color: #fff;
        }

        .btn-secondary:hover {
            background: #fff;
            color: var(--primary-color);
        }

        /* ================================
               RESPONSIVE STYLES
               ================================ */
        @media (max-width: 768px) {
            .services-cta {
                padding: 80px 0;
            }

            .cta-wrapper {
                padding: 60px 40px;
            }

            .cta-wrapper h2 {
                font-size: 36px;
            }

            .cta-wrapper p {
                font-size: 18px;
            }
        }
    </style>
@endsection
