@extends('layouts.main')
@section('main-container')
    {{-- Hero Section --}}
    <section class="portfolio-hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto text-center" data-aos="fade-up">
                    <span class="hero-badge">Our Work</span>
                    <h1 class="hero-title">Our Creative <span class="gradient-text">Portfolio</span></h1>
                    <p class="hero-description">
                        Explore our latest projects and see how we've helped businesses achieve their digital
                        goals with stunning websites, innovative designs, and powerful applications.
                    </p>
                </div>
            </div>

            {{-- Stats --}}
            <div class="row mt-5">
                <div class="col-lg-10 mx-auto">
                    <div class="portfolio-stats" data-aos="fade-up" data-aos-delay="100">
                        <div class="stat-item">
                            <h3>100+</h3>
                            <p>Projects Completed</p>
                        </div>
                        <div class="stat-item">
                            <h3>32+</h3>
                            <p>Happy Clients</p>
                        </div>
                        <div class="stat-item">
                            <h3>15+</h3>
                            <p>Industries Served</p>
                        </div>
                        <div class="stat-item">
                            <h3>98%</h3>
                            <p>Success Rate</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-shape"></div>
    </section>

    {{-- Filter Menu --}}
    <section class="portfolio-filter">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="filter-menu" data-aos="fade-up">
                        <button class="filter-btn active" data-filter="all">
                            <i class="fa-solid fa-grid"></i> All Projects
                        </button>
                        <button class="filter-btn" data-filter="web">
                            <i class="fa-solid fa-laptop-code"></i> Web Design
                        </button>
                        <button class="filter-btn" data-filter="ecommerce">
                            <i class="fa-solid fa-cart-shopping"></i> E-Commerce
                        </button>
                        <button class="filter-btn" data-filter="wordpress">
                            <i class="fa-brands fa-wordpress"></i> WordPress
                        </button>
                        <button class="filter-btn" data-filter="ui-ux">
                            <i class="fa-solid fa-pencil-ruler"></i> UI/UX Design
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Portfolio Grid --}}
    <section class="portfolio-grid">
        <div class="container">
            <div class="row g-4" id="portfolioContainer">
                @php
                    $projects = [
                        [
                            'title' => 'Modern E-Commerce Platform',
                            'category' => 'E-Commerce',
                            'filter' => 'ecommerce',
                            'image' => 'project1.jpg',
                            'description' =>
                                'Complete online shopping solution with secure payment gateway integration and inventory management system.',
                            'tech' => ['Laravel', 'Bootstrap', 'MySQL', 'Stripe'],
                            'client' => 'Fashion Store',
                            'year' => '2024',
                            'link' => '#',
                            'delay' => '0',
                        ],
                        [
                            'title' => 'Corporate Website Redesign',
                            'category' => 'Web Design',
                            'filter' => 'web',
                            'image' => 'project2.jpg',
                            'description' =>
                                'Modern responsive website for a financial services company with advanced animations and interactive features.',
                            'tech' => ['HTML5', 'CSS3', 'JavaScript', 'GSAP'],
                            'client' => 'Finance Corp',
                            'year' => '2024',
                            'link' => '#',
                            'delay' => '100',
                        ],
                        [
                            'title' => 'Restaurant Management System',
                            'category' => 'Web App',
                            'filter' => 'web',
                            'image' => 'project3.jpg',
                            'description' =>
                                'Complete POS and inventory management solution with real-time order tracking and analytics dashboard.',
                            'tech' => ['PHP', 'jQuery', 'Bootstrap', 'Chart.js'],
                            'client' => 'Food Paradise',
                            'year' => '2023',
                            'link' => '#',
                            'delay' => '200',
                        ],
                        [
                            'title' => 'Fashion Brand Website',
                            'category' => 'WordPress',
                            'filter' => 'wordpress',
                            'image' => 'project4.jpg',
                            'description' =>
                                'Custom WordPress theme with WooCommerce integration, blog system, and advanced product filtering.',
                            'tech' => ['WordPress', 'WooCommerce', 'CSS3', 'PHP'],
                            'client' => 'Style Hub',
                            'year' => '2024',
                            'link' => '#',
                            'delay' => '0',
                        ],
                        [
                            'title' => 'Healthcare Portal UI/UX',
                            'category' => 'UI/UX Design',
                            'filter' => 'ui-ux',
                            'image' => 'project5.jpg',
                            'description' =>
                                'Patient management system with intuitive interface, appointment booking, and medical records management.',
                            'tech' => ['Figma', 'Bootstrap', 'React', 'Node.js'],
                            'client' => 'HealthCare Plus',
                            'year' => '2024',
                            'link' => '#',
                            'delay' => '100',
                        ],
                        [
                            'title' => 'Real Estate Marketplace',
                            'category' => 'E-Commerce',
                            'filter' => 'ecommerce',
                            'image' => 'project6.jpg',
                            'description' =>
                                'Property listing platform with advanced search filters, virtual tours, and agent management system.',
                            'tech' => ['Laravel', 'Vue.js', 'Tailwind', 'MySQL'],
                            'client' => 'PropFinder',
                            'year' => '2023',
                            'link' => '#',
                            'delay' => '200',
                        ],
                        [
                            'title' => 'Blog & Magazine Theme',
                            'category' => 'WordPress',
                            'filter' => 'wordpress',
                            'image' => 'project7.jpg',
                            'description' =>
                                'Custom WordPress theme for content publishers with advanced typography and social media integration.',
                            'tech' => ['WordPress', 'PHP', 'JavaScript', 'CSS3'],
                            'client' => 'Daily News',
                            'year' => '2023',
                            'link' => '#',
                            'delay' => '0',
                        ],
                        [
                            'title' => 'Fitness App Dashboard',
                            'category' => 'UI/UX Design',
                            'filter' => 'ui-ux',
                            'image' => 'project8.jpg',
                            'description' =>
                                'Modern dashboard for fitness tracking application with workout plans, progress tracking, and nutrition guide.',
                            'tech' => ['Figma', 'Bootstrap', 'Chart.js', 'React'],
                            'client' => 'FitLife Pro',
                            'year' => '2024',
                            'link' => '#',
                            'delay' => '100',
                        ],
                        [
                            'title' => 'Digital Marketing Agency',
                            'category' => 'Web Design',
                            'filter' => 'web',
                            'image' => 'project9.jpg',
                            'description' =>
                                'Creative portfolio website with smooth animations, case studies section, and client testimonials.',
                            'tech' => ['HTML5', 'GSAP', 'CSS3', 'JavaScript'],
                            'client' => 'AdVenture',
                            'year' => '2024',
                            'link' => '#',
                            'delay' => '200',
                        ],
                        [
                            'title' => 'Online Learning Platform',
                            'category' => 'Web App',
                            'filter' => 'web',
                            'image' => 'project10.jpg',
                            'description' =>
                                'E-learning platform with course management, video streaming, quizzes, and student progress tracking.',
                            'tech' => ['Laravel', 'Vue.js', 'MySQL', 'AWS'],
                            'client' => 'EduTech',
                            'year' => '2023',
                            'link' => '#',
                            'delay' => '0',
                        ],
                        [
                            'title' => 'Travel Booking Website',
                            'category' => 'E-Commerce',
                            'filter' => 'ecommerce',
                            'image' => 'project11.jpg',
                            'description' =>
                                'Complete travel booking solution with flight, hotel, and tour package booking system.',
                            'tech' => ['PHP', 'Bootstrap', 'MySQL', 'PayPal'],
                            'client' => 'WanderWay',
                            'year' => '2023',
                            'link' => '#',
                            'delay' => '100',
                        ],
                        [
                            'title' => 'Business Portfolio Theme',
                            'category' => 'WordPress',
                            'filter' => 'wordpress',
                            'image' => 'project12.jpg',
                            'description' =>
                                'Professional WordPress theme for business consultants with service showcase and contact forms.',
                            'tech' => ['WordPress', 'Elementor', 'CSS3', 'PHP'],
                            'client' => 'BizConsult',
                            'year' => '2024',
                            'link' => '#',
                            'delay' => '200',
                        ],
                    ];
                @endphp

                @foreach ($projects as $index => $project)
                    <div class="col-lg-4 col-md-6 portfolio-item {{ $project['filter'] }}"
                        data-category="{{ $project['filter'] }}" data-aos="fade-up"
                        data-aos-delay="{{ $project['delay'] }}">
                        <div class="portfolio-card">
                            <div class="portfolio-image">
                                <img src="{{ asset('assets/images/portfolio/' . $project['image']) }}"
                                    alt="{{ $project['title'] }}">
                                <div class="portfolio-overlay">
                                    <div class="overlay-content">
                                        <h3>{{ $project['title'] }}</h3>
                                        <p>{{ $project['category'] }}</p>
                                    </div>
                                    <div class="portfolio-links">
                                        <a href="#" class="view-btn" data-bs-toggle="modal"
                                            data-bs-target="#projectModal{{ $index }}">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                        <a href="{{ $project['link'] }}" class="link-btn" target="_blank">
                                            <i class="fa-solid fa-link"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-content">
                                <span class="portfolio-category">{{ $project['category'] }}</span>
                                <h3>{{ $project['title'] }}</h3>
                                <p>{{ Str::limit($project['description'], 80) }}</p>
                                <div class="portfolio-tech">
                                    @foreach ($project['tech'] as $tech)
                                        <span class="tech-badge">{{ $tech }}</span>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Load More Button --}}
            <div class="row mt-5">
                <div class="col-12 text-center" data-aos="fade-up">
                    <button class="load-more-btn" id="loadMoreBtn">
                        <span>Load More Projects</span>
                        <i class="fa-solid fa-arrow-down"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    {{-- Client Testimonials --}}
    <section class="portfolio-testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <span class="section-subtitle">Client Reviews</span>
                    <h2 class="section-title">What Our <span class="gradient-text">Clients Say</span></h2>
                    <p class="section-description">
                        Don't just take our word for it - hear from our satisfied clients
                    </p>
                </div>
            </div>

            <div class="row g-4 mt-5">
                @php
                    $testimonials = [
                        [
                            'name' => 'Rajesh Patel',
                            'position' => 'CEO, TechVision Solutions',
                            'image' => 'client1.jpg',
                            'rating' => 5,
                            'text' =>
                                'Outstanding work! The team delivered a beautiful website that exceeded our expectations. Professional, responsive, and delivered on time. Highly recommended for anyone looking for quality web development.',
                            'project' => 'Corporate Website',
                        ],
                        [
                            'name' => 'Priya Sharma',
                            'position' => 'Owner, Fashion Hub',
                            'image' => 'client2.jpg',
                            'rating' => 5,
                            'text' =>
                                'Amazing experience working with this team. They understood our vision perfectly and created a stunning e-commerce platform. Sales increased by 150% in just 3 months! Absolutely brilliant work.',
                            'project' => 'E-Commerce Store',
                        ],
                        [
                            'name' => 'Amit Kumar',
                            'position' => 'Manager, Digital Solutions Inc',
                            'image' => 'client3.jpg',
                            'rating' => 5,
                            'text' =>
                                'Top-notch quality and excellent communication throughout the project. The attention to detail and creative approach was impressive. Will definitely work with them again on future projects.',
                            'project' => 'Web Application',
                        ],
                    ];
                @endphp

                @foreach ($testimonials as $index => $testimonial)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                        <div class="testimonial-card">
                            <div class="quote-icon">
                                <i class="fa-solid fa-quote-left"></i>
                            </div>
                            <div class="rating">
                                @for ($i = 0; $i < $testimonial['rating']; $i++)
                                    <i class="fa-solid fa-star"></i>
                                @endfor
                            </div>
                            <p class="testimonial-text">"{{ $testimonial['text'] }}"</p>
                            <div class="client-info">
                                <img src="{{ asset('assets/images/clients/' . $testimonial['image']) }}"
                                    alt="{{ $testimonial['name'] }}">
                                <div class="client-details">
                                    <h4>{{ $testimonial['name'] }}</h4>
                                    <p>{{ $testimonial['position'] }}</p>
                                    <span class="project-tag">{{ $testimonial['project'] }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="portfolio-cta">
        <div class="container">
            <div class="cta-box" data-aos="zoom-in">
                <div class="cta-icon">
                    <i class="fa-solid fa-lightbulb"></i>
                </div>
                <h2>Have a Project in Mind?</h2>
                <p>Let's create something amazing together. Get in touch and let's discuss your ideas!</p>
                <div class="cta-buttons">
                    <a href="#contact" class="cta-btn primary">
                        <i class="fa-solid fa-paper-plane"></i> Start Your Project
                    </a>
                    <a href="{{ asset('files/resume.pdf') }}" class="cta-btn secondary" target="_blank">
                        <i class="fa-solid fa-folder-open"></i> View All Work
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Modals for Project Details --}}
    @foreach ($projects as $index => $project)
        <div class="modal fade" id="projectModal{{ $index }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">{{ $project['title'] }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="{{ asset('assets/images/portfolio/' . $project['image']) }}"
                            alt="{{ $project['title'] }}" class="img-fluid mb-4 modal-image">

                        <div class="project-meta">
                            <div class="meta-item">
                                <i class="fa-solid fa-user"></i>
                                <div>
                                    <span class="meta-label">Client</span>
                                    <strong>{{ $project['client'] }}</strong>
                                </div>
                            </div>
                            <div class="meta-item">
                                <i class="fa-solid fa-calendar"></i>
                                <div>
                                    <span class="meta-label">Year</span>
                                    <strong>{{ $project['year'] }}</strong>
                                </div>
                            </div>
                            <div class="meta-item">
                                <i class="fa-solid fa-tag"></i>
                                <div>
                                    <span class="meta-label">Category</span>
                                    <strong>{{ $project['category'] }}</strong>
                                </div>
                            </div>
                        </div>

                        <h6 class="project-section-title">Project Overview</h6>
                        <p class="project-description">{{ $project['description'] }}</p>

                        <h6 class="project-section-title">Technologies Used</h6>
                        <div class="portfolio-tech">
                            @foreach ($project['tech'] as $tech)
                                <span class="tech-badge large">{{ $tech }}</span>
                            @endforeach
                        </div>

                        <div class="modal-actions">
                            <a href="{{ $project['link'] }}" class="modal-btn" target="_blank">
                                <i class="fa-solid fa-external-link-alt"></i> View Live Project
                            </a>
                            <a href="#contact" class="modal-btn secondary" data-bs-dismiss="modal">
                                <i class="fa-solid fa-envelope"></i> Get Similar Project
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            /* ================================
           PORTFOLIO PAGE - PREMIUM CSS
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
            .portfolio-hero {
                padding: 150px 0 100px;
                background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
                position: relative;
                overflow: hidden;
            }

            .portfolio-hero::before {
                content: '';
                position: absolute;
                top: -50%;
                right: -10%;
                width: 600px;
                height: 600px;
                background: radial-gradient(circle, rgba(4, 185, 98, 0.08) 0%, transparent 70%);
                border-radius: 50%;
            }

            .hero-shape {
                position: absolute;
                bottom: -2px;
                left: 0;
                width: 100%;
                height: 100px;
                background: #fff;
                clip-path: polygon(0 50%, 100% 0, 100% 100%, 0 100%);
            }

            /* Portfolio Stats */
            .portfolio-stats {
                display: flex;
                justify-content: space-between;
                gap: 30px;
                background: #fff;
                padding: 40px 50px;
                border-radius: 25px;
                box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
                position: relative;
                z-index: 2;
            }

            .stat-item {
                text-align: center;
                flex: 1;
            }

            .stat-item h3 {
                font-size: 48px;
                font-weight: 800;
                background: var(--primary-gradient);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                margin-bottom: 10px;
                line-height: 1;
            }

            .stat-item p {
                font-size: 15px;
                color: var(--light-text);
                font-weight: 500;
                margin: 0;
            }

            /* ================================
           FILTER MENU
           ================================ */
            .portfolio-filter {
                padding: 80px 0 60px;
                background: #fff;
            }

            .filter-menu {
                display: flex;
                justify-content: center;
                gap: 15px;
                flex-wrap: wrap;
            }

            .filter-btn {
                padding: 14px 32px;
                background: #fff;
                border: 2px solid var(--border-color);
                border-radius: 50px;
                font-size: 15px;
                font-weight: 600;
                color: var(--dark-text);
                cursor: pointer;
                transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
                display: inline-flex;
                align-items: center;
                gap: 10px;
            }

            .filter-btn i {
                font-size: 16px;
            }

            .filter-btn:hover {
                background: linear-gradient(135deg, rgba(4, 185, 98, 0.1) 0%, rgba(61, 213, 176, 0.1) 100%);
                border-color: var(--primary-color);
                transform: translateY(-3px);
            }

            .filter-btn.active {
                background: var(--primary-gradient);
                color: #fff;
                border-color: transparent;
                transform: translateY(-3px);
                box-shadow: 0 10px 30px rgba(4, 185, 98, 0.3);
            }

            /* ================================
           PORTFOLIO GRID
           ================================ */
            .portfolio-grid {
                padding: 60px 0 100px;
                background: #fff;
            }

            .portfolio-item {
                transition: opacity 0.3s ease, transform 0.3s ease;
            }

            .portfolio-card {
                background: #fff;
                border-radius: 25px;
                overflow: hidden;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
                transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
                height: 100%;
                display: flex;
                flex-direction: column;
            }

            .portfolio-card:hover {
                transform: translateY(-15px);
                box-shadow: 0 25px 60px rgba(0, 0, 0, 0.15);
            }

            /* Portfolio Image */
            .portfolio-image {
                position: relative;
                overflow: hidden;
                height: 320px;
            }

            .portfolio-image img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
            }

            .portfolio-card:hover .portfolio-image img {
                transform: scale(1.15);
            }

            .portfolio-overlay {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: linear-gradient(135deg, rgba(4, 185, 98, 0.95) 0%, rgba(61, 213, 176, 0.95) 100%);
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                opacity: 0;
                transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            }

            .portfolio-card:hover .portfolio-overlay {
                opacity: 1;
            }

            .overlay-content {
                text-align: center;
                margin-bottom: 25px;
                transform: translateY(20px);
                transition: transform 0.4s ease 0.1s;
            }

            .portfolio-card:hover .overlay-content {
                transform: translateY(0);
            }

            .overlay-content h3 {
                font-size: 24px;
                font-weight: 700;
                color: #fff;
                margin-bottom: 8px;
            }

            .overlay-content p {
                font-size: 15px;
                color: rgba(255, 255, 255, 0.9);
                margin: 0;
            }

            .portfolio-links {
                display: flex;
                gap: 15px;
                transform: translateY(20px);
                transition: transform 0.4s ease 0.2s;
            }

            .portfolio-card:hover .portfolio-links {
                transform: translateY(0);
            }

            .view-btn,
            .link-btn {
                width: 55px;
                height: 55px;
                background: #fff;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                color: var(--primary-color);
                font-size: 20px;
                transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                text-decoration: none;
                cursor: pointer;
            }

            .view-btn:hover,
            .link-btn:hover {
                transform: scale(1.2) rotate(360deg);
                background: var(--primary-color);
                color: #fff;
            }

            /* Portfolio Content */
            .portfolio-content {
                padding: 35px;
                flex: 1;
                display: flex;
                flex-direction: column;
            }

            .portfolio-category {
                display: inline-block;
                background: linear-gradient(135deg, rgba(4, 185, 98, 0.1) 0%, rgba(61, 213, 176, 0.1) 100%);
                color: var(--primary-color);
                padding: 7px 18px;
                border-radius: 20px;
                font-size: 13px;
                font-weight: 600;
                margin-bottom: 18px;
                width: fit-content;
            }

            .portfolio-content h3 {
                font-size: 22px;
                font-weight: 700;
                margin-bottom: 12px;
                color: var(--dark-text);
                line-height: 1.4;
            }

            .portfolio-content p {
                font-size: 15px;
                line-height: 1.7;
                color: var(--light-text);
                margin-bottom: 20px;
                flex: 1;
            }

            .portfolio-tech {
                display: flex;
                flex-wrap: wrap;
                gap: 8px;
                margin-top: auto;
            }

            .tech-badge {
                background: #f8f9fa;
                color: #555;
                padding: 6px 14px;
                border-radius: 15px;
                font-size: 12px;
                font-weight: 500;
                transition: all 0.3s ease;
            }

            .tech-badge:hover {
                background: var(--primary-color);
                color: #fff;
                transform: translateY(-2px);
            }

            .tech-badge.large {
                padding: 8px 18px;
                font-size: 14px;
            }

            /* Load More Button */
            .load-more-btn {
                padding: 16px 45px;
                background: var(--primary-gradient);
                color: #fff;
                border: none;
                border-radius: 50px;
                font-weight: 600;
                font-size: 16px;
                cursor: pointer;
                transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
                display: inline-flex;
                align-items: center;
                gap: 12px;
                position: relative;
                overflow: hidden;
            }

            .load-more-btn::before {
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

            .load-more-btn:hover::before {
                width: 300px;
                height: 300px;
            }

            .load-more-btn:hover {
                transform: translateY(-5px);
                box-shadow: 0 15px 40px rgba(4, 185, 98, 0.35);
            }

            .load-more-btn i {
                transition: transform 0.3s ease;
            }

            .load-more-btn:hover i {
                transform: translateY(5px);
            }

            /* ================================
           TESTIMONIALS SECTION
           ================================ */
            .portfolio-testimonials {
                padding: 100px 0;
                background: linear-gradient(180deg, #f8f9fa 0%, #ffffff 100%);
            }

            .testimonial-card {
                background: #fff;
                padding: 45px 35px;
                border-radius: 25px;
                box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
                height: 100%;
                transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
                position: relative;
                border: 2px solid var(--border-color);
            }

            .testimonial-card:hover {
                transform: translateY(-10px);
                box-shadow: 0 20px 60px rgba(0, 0, 0, 0.12);
                border-color: var(--primary-color);
            }

            .quote-icon {
                width: 60px;
                height: 60px;
                background: var(--primary-gradient);
                border-radius: 15px;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-bottom: 25px;
            }

            .quote-icon i {
                font-size: 28px;
                color: #fff;
            }

            .rating {
                margin-bottom: 22px;
            }

            .rating i {
                color: #ffd93d;
                font-size: 18px;
                margin-right: 3px;
            }

            .testimonial-text {
                font-size: 16px;
                line-height: 1.8;
                color: #555;
                font-style: italic;
                margin-bottom: 30px;
            }

            .client-info {
                display: flex;
                align-items: center;
                gap: 18px;
                padding-top: 25px;
                border-top: 2px solid #f5f5f5;
            }

            .client-info img {
                width: 70px;
                height: 70px;
                border-radius: 50%;
                object-fit: cover;
                border: 3px solid var(--primary-color);
            }

            .client-details h4 {
                font-size: 18px;
                font-weight: 700;
                margin-bottom: 5px;
                color: var(--dark-text);
            }

            .client-details p {
                font-size: 14px;
                color: var(--light-text);
                margin-bottom: 8px;
            }

            .project-tag {
                display: inline-block;
                background: linear-gradient(135deg, rgba(4, 185, 98, 0.1) 0%, rgba(61, 213, 176, 0.1) 100%);
                color: var(--primary-color);
                padding: 4px 12px;
                border-radius: 12px;
                font-size: 12px;
                font-weight: 600;
            }

            /* ================================
           CTA SECTION
           ================================ */
            .portfolio-cta {
                padding: 100px 0;
                background: #fff;
            }

            .cta-box {
                background: var(--primary-gradient);
                padding: 80px 60px;
                border-radius: 30px;
                text-align: center;
                box-shadow: 0 35px 70px rgba(4, 185, 98, 0.3);
                position: relative;
                overflow: hidden;
            }

            .cta-box::before {
                content: '';
                position: absolute;
                top: -50%;
                right: -20%;
                width: 500px;
                height: 500px;
                background: rgba(255, 255, 255, 0.1);
                border-radius: 50%;
            }

            .cta-box::after {
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

            @keyframes pulse {

                0%,
                100% {
                    transform: scale(1);
                    box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.4);
                }

                50% {
                    transform: scale(1.05);
                    box-shadow: 0 0 0 20px rgba(255, 255, 255, 0);
                }
            }

            .cta-icon i {
                font-size: 40px;
                color: #fff;
            }

            .cta-box h2 {
                font-size: 44px;
                font-weight: 700;
                color: #fff;
                margin-bottom: 18px;
                position: relative;
                z-index: 1;
            }

            .cta-box p {
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
                color: var(--primary-color);
                transform: translateY(-5px);
            }

            /* ================================
           MODAL STYLES
           ================================ */
            .modal-content {
                border-radius: 25px;
                border: none;
                overflow: hidden;
            }

            .modal-header {
                background: var(--primary-gradient);
                color: #fff;
                padding: 25px 30px;
                border: none;
            }

            .modal-title {
                font-size: 24px;
                font-weight: 700;
            }

            .btn-close {
                filter: brightness(0) invert(1);
            }

            .modal-body {
                padding: 40px;
            }

            .modal-image {
                border-radius: 15px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            }

            .project-meta {
                display: flex;
                gap: 30px;
                flex-wrap: wrap;
                padding: 30px;
                background: #f8f9fa;
                border-radius: 15px;
                margin-bottom: 30px;
            }

            .meta-item {
                display: flex;
                align-items: center;
                gap: 15px;
            }

            .meta-item i {
                font-size: 24px;
                color: var(--primary-color);
            }

            .meta-label {
                display: block;
                font-size: 12px;
                color: var(--light-text);
                margin-bottom: 3px;
            }

            .meta-item strong {
                display: block;
                font-size: 15px;
                color: var(--dark-text);
            }

            .project-section-title {
                font-size: 18px;
                font-weight: 700;
                color: var(--dark-text);
                margin-bottom: 15px;
                position: relative;
                padding-left: 15px;
            }

            .project-section-title::before {
                content: '';
                position: absolute;
                left: 0;
                top: 50%;
                transform: translateY(-50%);
                width: 4px;
                height: 20px;
                background: var(--primary-gradient);
                border-radius: 2px;
            }

            .project-description {
                font-size: 15px;
                line-height: 1.8;
                color: var(--light-text);
                margin-bottom: 30px;
            }

            .modal-actions {
                display: flex;
                gap: 15px;
                flex-wrap: wrap;
                margin-top: 30px;
            }

            .modal-btn {
                padding: 14px 30px;
                background: var(--primary-gradient);
                color: #fff;
                border-radius: 50px;
                font-weight: 600;
                font-size: 15px;
                text-decoration: none;
                transition: all 0.3s ease;
                display: inline-flex;
                align-items: center;
                gap: 10px;
            }

            .modal-btn:hover {
                transform: translateY(-3px);
                box-shadow: 0 10px 30px rgba(4, 185, 98, 0.3);
                color: #fff;
            }

            .modal-btn.secondary {
                background: #f8f9fa;
                color: var(--dark-text);
            }

            .modal-btn.secondary:hover {
                background: var(--dark-text);
                color: #fff;
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
                .portfolio-hero {
                    padding: 120px 0 80px;
                }

                .hero-title {
                    font-size: 44px;
                }

                .section-title {
                    font-size: 34px;
                }

                .portfolio-stats {
                    flex-wrap: wrap;
                    padding: 35px 30px;
                }

                .stat-item {
                    flex-basis: calc(50% - 15px);
                }

                .portfolio-filter,
                .portfolio-grid,
                .portfolio-testimonials,
                .portfolio-cta {
                    padding: 60px 0;
                }

                .cta-box {
                    padding: 60px 40px;
                }
            }

            @media (max-width: 767px) {
                .portfolio-hero {
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

                .portfolio-stats {
                    gap: 20px;
                    padding: 30px 20px;
                }

                .stat-item h3 {
                    font-size: 38px;
                }

                .filter-menu {
                    gap: 10px;
                }

                .filter-btn {
                    padding: 12px 24px;
                    font-size: 14px;
                }

                .filter-btn i {
                    display: none;
                }

                .portfolio-image {
                    height: 250px;
                }

                .portfolio-content {
                    padding: 28px;
                }

                .portfolio-content h3 {
                    font-size: 20px;
                }

                .testimonial-card {
                    padding: 35px 25px;
                }

                .client-info {
                    flex-direction: column;
                    text-align: center;
                }

                .cta-box {
                    padding: 50px 25px;
                }

                .cta-box h2 {
                    font-size: 32px;
                }

                .cta-box p {
                    font-size: 16px;
                }

                .cta-buttons {
                    flex-direction: column;
                    width: 100%;
                }

                .cta-btn {
                    width: 100%;
                    justify-content: center;
                }

                .modal-body {
                    padding: 25px;
                }

                .project-meta {
                    padding: 20px;
                    gap: 20px;
                }

                .modal-actions {
                    flex-direction: column;
                }

                .modal-btn {
                    width: 100%;
                    justify-content: center;
                }
            }

            @media (max-width: 575px) {
                .hero-title {
                    font-size: 30px;
                }

                .section-title {
                    font-size: 24px;
                }

                .portfolio-stats {
                    flex-direction: column;
                }

                .stat-item {
                    flex-basis: 100%;
                    padding: 15px 0;
                    border-bottom: 1px solid #f0f0f0;
                }

                .stat-item:last-child {
                    border-bottom: none;
                }
            }

            /* ================================
           SMOOTH SCROLLING & CUSTOM SCROLLBAR
           ================================ */
            html {
                scroll-behavior: smooth;
            }

            ::-webkit-scrollbar {
                width: 12px;
            }

            ::-webkit-scrollbar-track {
                background: #f1f1f1;
            }

            ::-webkit-scrollbar-thumb {
                background: var(--primary-gradient);
                border-radius: 6px;
            }

            ::-webkit-scrollbar-thumb:hover {
                background: var(--primary-color);
            }

            /* ================================
           SELECTION STYLING
           ================================ */
            ::selection {
                background: var(--primary-color);
                color: #fff;
            }

            ::-moz-selection {
                background: var(--primary-color);
                color: #fff;
            }
        </style>
    @endforeach

    {{-- Portfolio Filter JavaScript --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterBtns = document.querySelectorAll('.filter-btn');
            const portfolioItems = document.querySelectorAll('.portfolio-item');

            filterBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterBtns.forEach(b => b.classList.remove('active'));
                    // Add active class to clicked button
                    this.classList.add('active');

                    const filter = this.getAttribute('data-filter');

                    portfolioItems.forEach(item => {
                        if (filter === 'all' || item.getAttribute('data-category') ===
                            filter) {
                            item.style.display = 'block';
                            setTimeout(() => {
                                item.style.opacity = '1';
                                item.style.transform = 'scale(1)';
                            }, 10);
                        } else {
                            item.style.opacity = '0';
                            item.style.transform = 'scale(0.8)';
                            setTimeout(() => {
                                item.style.display = 'none';
                            }, 300);
                        }
                    });
                });
            });

            // Load More Button (Optional functionality)
            const loadMoreBtn = document.getElementById('loadMoreBtn');
            if (loadMoreBtn) {
                loadMoreBtn.addEventListener('click', function() {
                    // Add your load more logic here
                    console.log('Load more clicked');
                });
            }
        });
    </script>
@endsection
