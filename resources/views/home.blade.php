@extends('layouts.main')
@section('main-container')
    {{-- Hero Section --}}
    <section id="home" class="home-hero" data-vide-bg="{{ asset('assets/images/animation') }}"
        data-vide-options="position: 50% 50%, muted: true, autoplay: true, loop: true">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-8 mx-auto text-center">
                    <div class="hero-content" data-aos="fade-up">
                        <span class="hero-badge">Welcome to My Portfolio</span>
                        <h3 class="hero-subtitle">Hello, I'm</h3>
                        <h1 class="hero-title type-animate">
                            <a href="#" class="typewrite" data-period="2000"
                                data-type='["Tejas Makwana", "Web Designer & Developer"]'>
                                <span class="wrap"></span>
                            </a>
                        </h1>
                        <p class="hero-description">
                            Transforming ideas into stunning digital experiences with modern web design
                            and development. Let's create something amazing together!
                        </p>

                        <div class="hero-buttons">
                            <a href="#about" class="btn-hero primary">
                                <span>Explore My Work</span>
                                <i class="fa-solid fa-arrow-down"></i>
                            </a>
                            <a href="#contact" class="btn-hero secondary">
                                <span>Get In Touch</span>
                                <i class="fa-solid fa-paper-plane"></i>
                            </a>
                        </div>

                        <div class="social-links-hero">
                            <a href="https://www.facebook.com/profile.php?id=100082030190206" class="social-link facebook"
                                target="_blank" title="Facebook">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/tejas-makwana-396b97222" class="social-link linkedin"
                                target="_blank" title="LinkedIn">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                            <a href="https://www.instagram.com/tejas_makwana_007/" class="social-link instagram"
                                target="_blank" title="Instagram">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="https://api.whatsapp.com/send?phone=919426428317&text=Hello, Tejas"
                                class="social-link whatsapp" target="_blank" title="WhatsApp">
                                <i class="fa-brands fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Scroll Down Indicator --}}
        <div class="scroll-indicator">
            <div class="mouse"></div>
            <span>Scroll Down</span>
        </div>
    </section>

    {{-- About Section --}}
    <section id="about" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-up">
                    <span class="section-subtitle">About Me</span>
                    <h2 class="section-title">Who <span class="gradient-text">I Am</span></h2>
                </div>
            </div>

            <div class="row align-items-center mt-5">
                <div class="col-lg-5" data-aos="fade-right">
                    <div class="profile-image-wrapper">
                        <img src="{{ asset('assets/images/client.png') }}" alt="Tejas Makwana" class="profile-image" />
                        <div class="profile-badge">
                            <i class="fa-solid fa-code"></i>
                            <span>Web Developer</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7" data-aos="fade-left">
                    <div class="about-content">
                        <h3>Creative Web Designer & Developer</h3>
                        <p class="about-text">
                            Hi! I'm a passionate Web Designer with over 3 years of experience creating modern,
                            responsive, and user-friendly websites. I specialize in transforming creative ideas
                            into functional digital solutions that help businesses grow online.
                        </p>

                        <div class="about-features">
                            <div class="feature-box">
                                <i class="fa-solid fa-check-circle"></i>
                                <span>Responsive Design</span>
                            </div>
                            <div class="feature-box">
                                <i class="fa-solid fa-check-circle"></i>
                                <span>Clean Code</span>
                            </div>
                            <div class="feature-box">
                                <i class="fa-solid fa-check-circle"></i>
                                <span>SEO Optimized</span>
                            </div>
                            <div class="feature-box">
                                <i class="fa-solid fa-check-circle"></i>
                                <span>Fast Loading</span>
                            </div>
                        </div>

                        <div class="about-stats">
                            <div class="stat-item">
                                <h3>3+</h3>
                                <p>Years Experience</p>
                            </div>
                            <div class="stat-item">
                                <h3>100+</h3>
                                <p>Projects Done</p>
                            </div>
                            <div class="stat-item">
                                <h3>32+</h3>
                                <p>Happy Clients</p>
                            </div>
                        </div>

                        <div class="about-buttons">
                            <a class="btn-about primary" target="_blank" href="{{ asset('files/resume.pdf') }}">
                                <i class="fa-solid fa-download"></i> Download Resume
                            </a>
                            <a class="btn-about secondary" href="#contact">
                                <i class="fa-solid fa-envelope"></i> Hire Me
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Experience, Education & Skills Tabs --}}
            <div class="row mt-5">
                <div class="col-12">
                    <div class="info-tabs" data-aos="fade-up">
                        <ul class="nav nav-tabs" id="infoTab" role="tablist">
                            <li class="nav-item">
                                <button class="nav-link active" id="experience-tab" data-bs-toggle="tab"
                                    data-bs-target="#experience" type="button">
                                    <i class="fa-solid fa-briefcase"></i>
                                    <span>Experience</span>
                                </button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="education-tab" data-bs-toggle="tab"
                                    data-bs-target="#education" type="button">
                                    <i class="fa-solid fa-graduation-cap"></i>
                                    <span>Education</span>
                                </button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="skills-tab" data-bs-toggle="tab" data-bs-target="#skills"
                                    type="button">
                                    <i class="fa-solid fa-star"></i>
                                    <span>Skills</span>
                                </button>
                            </li>
                        </ul>

                        <div class="tab-content" id="infoTabContent">
                            {{-- Experience Tab --}}
                            <div class="tab-pane fade show active" id="experience">
                                <div class="timeline">
                                    <div class="timeline-item" data-aos="fade-up" data-aos-delay="0">
                                        <div class="timeline-dot"></div>
                                        <div class="timeline-content">
                                            <span class="timeline-date">April 2025 - Current</span>
                                            <h4>Web Designer</h4>
                                            <h5>Zero Creation</h5>
                                            <p>Working on modern UI/UX design and developing fast, responsive websites for
                                                various clients.</p>
                                        </div>
                                    </div>

                                    <div class="timeline-item" data-aos="fade-up" data-aos-delay="100">
                                        <div class="timeline-dot"></div>
                                        <div class="timeline-content">
                                            <span class="timeline-date">March 2024 - March 2025</span>
                                            <h4>Jr. Web Designer</h4>
                                            <h5>Elite Cloud Books PVT LTD</h5>
                                            <p>Designed responsive financial platforms, dashboards, and data-driven
                                                websites.</p>
                                        </div>
                                    </div>

                                    <div class="timeline-item" data-aos="fade-up" data-aos-delay="200">
                                        <div class="timeline-dot"></div>
                                        <div class="timeline-content">
                                            <span class="timeline-date">July 2023 - February 2024</span>
                                            <h4>Web Designer - Internship</h4>
                                            <h5>Initfusion PVT LTD</h5>
                                            <p>Worked on HR systems, admin dashboards, and various web applications.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Education Tab --}}
                            <div class="tab-pane fade" id="education">
                                <div class="timeline">
                                    <div class="timeline-item" data-aos="fade-up" data-aos-delay="0">
                                        <div class="timeline-dot"></div>
                                        <div class="timeline-content">
                                            <span class="timeline-date">2023</span>
                                            <h4>Bachelor's Degree</h4>
                                            <h5>G.K & C.K College, Jetpur</h5>
                                            <p>Completed graduation with focus on computer science and web technologies.</p>
                                        </div>
                                    </div>

                                    <div class="timeline-item" data-aos="fade-up" data-aos-delay="100">
                                        <div class="timeline-dot"></div>
                                        <div class="timeline-content">
                                            <span class="timeline-date">2020</span>
                                            <h4>Higher Secondary Certificate (H.S.C)</h4>
                                            <h5>Swaminarayan Gurukul, Visavadar</h5>
                                            <p>Completed higher secondary education with science stream.</p>
                                        </div>
                                    </div>

                                    <div class="timeline-item" data-aos="fade-up" data-aos-delay="200">
                                        <div class="timeline-dot"></div>
                                        <div class="timeline-content">
                                            <span class="timeline-date">2018</span>
                                            <h4>Secondary School Certificate (S.S.C)</h4>
                                            <h5>Swaminarayan Gurukul, Visavadar</h5>
                                            <p>Completed secondary school education with excellent grades.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Skills Tab --}}
                            <div class="tab-pane fade" id="skills">
                                <div class="skills-grid">
                                    @php
                                        $skills = [
                                            ['HTML5', 90, 'fa-html5', '#e34c26'],
                                            ['CSS3', 90, 'fa-css3-alt', '#264de4'],
                                            ['JavaScript', 70, 'fa-js', '#f0db4f'],
                                            ['Bootstrap', 80, 'fa-bootstrap', '#563d7c'],
                                            ['jQuery', 70, 'fa-js', '#0769ad'],
                                            ['PHP', 60, 'fa-php', '#777bb4'],
                                            ['WordPress', 70, 'fa-wordpress', '#21759b'],
                                            ['Laravel', 65, 'fa-laravel', '#ff2d20'],
                                        ];
                                    @endphp

                                    @foreach ($skills as $index => $skill)
                                        <div class="skill-card" data-aos="zoom-in" data-aos-delay="{{ $index * 50 }}">
                                            <div class="skill-icon" style="background: {{ $skill[3] }}">
                                                <i class="fa-brands {{ $skill[2] }}"></i>
                                            </div>
                                            <h4>{{ $skill[0] }}</h4>
                                            <div class="skill-progress">
                                                <div class="skill-progress-bar"
                                                    style="width: {{ $skill[1] }}%; background: {{ $skill[3] }}">
                                                </div>
                                            </div>
                                            <span class="skill-percentage">{{ $skill[1] }}%</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Services Section --}}
    <section id="service" class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-up">
                    <span class="section-subtitle">What I Offer</span>
                    <h2 class="section-title">My <span class="gradient-text">Services</span></h2>
                    <p class="section-description">
                        Comprehensive web solutions tailored to your business needs
                    </p>
                </div>
            </div>

            <div class="row g-4 mt-4">
                @php
                    $services = [
                        [
                            'Web Development',
                            'fa-code',
                            'Building custom websites with clean code and modern technologies',
                            '#04b962',
                        ],
                        [
                            'Web Design',
                            'fa-palette',
                            'Creating beautiful, intuitive designs that engage users',
                            '#ff6b6b',
                        ],
                        [
                            'Responsive Design',
                            'fa-mobile-screen-button',
                            'Ensuring your site looks perfect on all devices',
                            '#4ecdc4',
                        ],
                        ['WordPress', 'fa-wordpress', 'Custom WordPress themes and plugin development', '#21759b'],
                        [
                            'SEO Optimization',
                            'fa-search',
                            'Improving your search rankings and online visibility',
                            '#ffd93d',
                        ],
                        [
                            'E-Commerce',
                            'fa-shopping-cart',
                            'Complete online store solutions with payment integration',
                            '#e76f51',
                        ],
                    ];
                @endphp

                @foreach ($services as $index => $service)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                        <div class="service-card" style="--service-color: {{ $service[3] }}">
                            <div class="service-icon">
                                <i class="fa-solid {{ $service[1] }}"></i>
                            </div>
                            <h3>{{ $service[0] }}</h3>
                            <p>{{ $service[2] }}</p>
                            <a href="#contact" class="service-link">Learn More <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Portfolio Section --}}
    <section id="portfolio" class="portfolio-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-up">
                    <span class="section-subtitle">My Work</span>
                    <h2 class="section-title">Recent <span class="gradient-text">Projects</span></h2>
                    <p class="section-description">
                        Check out some of my latest work and creative projects
                    </p>
                </div>
            </div>

            <div class="row g-4 mt-4">
                @php
                    $projects = [
                        ['E-Commerce Platform', 'Web Development', 'project1.jpg'],
                        ['Corporate Website', 'Web Design', 'project2.jpg'],
                        ['Restaurant App', 'UI/UX Design', 'project3.jpg'],
                        ['Fashion Brand', 'WordPress', 'project4.jpg'],
                        ['Healthcare Portal', 'Web App', 'project5.jpg'],
                        ['Real Estate Site', 'E-Commerce', 'project6.jpg'],
                    ];
                @endphp

                @foreach ($projects as $index => $project)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                        <div class="portfolio-card">
                            <div class="portfolio-image">
                                <img src="{{ asset('assets/images/portfolio/' . $project[2]) }}"
                                    alt="{{ $project[0] }}">
                                <div class="portfolio-overlay">
                                    <h4>{{ $project[0] }}</h4>
                                    <p>{{ $project[1] }}</p>
                                    <a href="#" class="portfolio-btn"><i class="fa-solid fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row mt-5">
                <div class="col-12 text-center" data-aos="fade-up">
                    <a href="{{ url('portfolio') }}" class="btn-view-all">
                        View All Projects <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Contact Section --}}
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-up">
                    <span class="section-subtitle">Get In Touch</span>
                    <h2 class="section-title">Contact <span class="gradient-text">Me</span></h2>
                    <p class="section-description">
                        Let's discuss your project and bring your ideas to life
                    </p>
                </div>
            </div>

            <div class="row g-5 mt-4">
                {{-- Contact Info --}}
                <div class="col-lg-4" data-aos="fade-right">
                    <div class="contact-info-box">
                        <div class="contact-info-item">
                            <div class="info-icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div>
                                <h4>Location</h4>
                                <p>Ahmedabad, Gujarat, India</p>
                            </div>
                        </div>

                        <div class="contact-info-item">
                            <div class="info-icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div>
                                <h4>Phone</h4>
                                <p>+91 94264 28317</p>
                            </div>
                        </div>

                        <div class="contact-info-item">
                            <div class="info-icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div>
                                <h4>Email</h4>
                                <p>info@tejasmakwana.com</p>
                            </div>
                        </div>

                        <div class="social-links-contact">
                            <a href="https://www.facebook.com/profile.php?id=100082030190206" target="_blank"><i
                                    class="fa-brands fa-facebook-f"></i></a>
                            <a href="https://www.linkedin.com/in/tejas-makwana-396b97222" target="_blank"><i
                                    class="fa-brands fa-linkedin-in"></i></a>
                            <a href="https://www.instagram.com/tejas_makwana_007/" target="_blank"><i
                                    class="fa-brands fa-instagram"></i></a>
                            <a href="https://api.whatsapp.com/send?phone=919426428317&text=Hello, Tejas"
                                target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>

                {{-- Contact Form --}}
                <div class="col-lg-8" data-aos="fade-left">
                    <form id="contactForm" method="POST" action="{{ route('contact.store') }}" class="contact-form">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="fname" id="fname" placeholder="Your Name*" type="text"
                                        required value="{{ old('fname') }}" />
                                    @error('fname')
                                        <span class="error-text">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="email" id="email" placeholder="Your Email*" type="email"
                                        required value="{{ old('email') }}" />
                                    @error('email')
                                        <span class="error-text">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="phone" id="phone" placeholder="Phone Number*" type="tel"
                                        required value="{{ old('phone') }}" maxlength="15" />
                                    @error('phone')
                                        <span class="error-text">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="subject" id="subject" placeholder="Subject" type="text"
                                        value="{{ old('subject') }}" />
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <textarea rows="5" name="message" id="message" placeholder="Your Message*" required>{{ old('message') }}</textarea>
                                    @error('message')
                                        <span class="error-text">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn-submit">
                                    <span>Send Message</span>
                                    <i class="fa-solid fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    {{-- Floating Card Button --}}
    <a href="{{ url('card/') }}" class="floating-card-btn" title="View Card">
        <i class="fa-regular fa-id-badge"></i>
    </a>
    <style>
        /* ================================
           INDEX/HOME PAGE - PREMIUM CSS
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
            margin: 0 auto 40px;
        }

        /* ================================
           HERO SECTION
           ================================ */
        .home-hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            background: linear-gradient(135deg, #0a1128 0%, #1a2332 100%);
            overflow: hidden;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(4, 185, 98, 0.1) 0%, rgba(10, 17, 40, 0.8) 100%);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            padding: 40px 0;
        }

        .hero-badge {
            display: inline-block;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            color: #fff;
            padding: 10px 28px;
            border-radius: 30px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            margin-bottom: 25px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            animation: fadeInDown 1s ease;
        }

        .hero-subtitle {
            font-size: 24px;
            font-weight: 400;
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 15px;
            animation: fadeInUp 1s ease 0.2s both;
        }

        .hero-title {
            font-size: 72px;
            font-weight: 800;
            color: #fff;
            margin-bottom: 30px;
            line-height: 1.2;
            animation: fadeInUp 1s ease 0.4s both;
        }

        .hero-title .typewrite {
            color: #fff;
            text-decoration: none;
        }

        .hero-description {
            font-size: 19px;
            line-height: 1.8;
            color: rgba(255, 255, 255, 0.7);
            max-width: 650px;
            margin: 0 auto 40px;
            animation: fadeInUp 1s ease 0.6s both;
        }

        .hero-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 50px;
            animation: fadeInUp 1s ease 0.8s both;
        }

        .btn-hero {
            padding: 18px 40px;
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

        .btn-hero::before {
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

        .btn-hero:hover::before {
            width: 400px;
            height: 400px;
        }

        .btn-hero.primary {
            background: var(--primary-gradient);
            color: #fff;
        }

        .btn-hero.primary:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(4, 185, 98, 0.4);
            color: #fff;
        }

        .btn-hero.secondary {
            background: transparent;
            color: #fff;
            border: 2px solid rgba(255, 255, 255, 0.3);
        }

        .btn-hero.secondary:hover {
            border-color: var(--primary-color);
            background: rgba(4, 185, 98, 0.1);
            transform: translateY(-5px);
            color: #fff;
        }

        .social-links-hero {
            display: flex;
            gap: 20px;
            justify-content: center;
            animation: fadeInUp 1s ease 1s both;
        }

        .social-link {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: #fff;
            font-size: 20px;
            transition: all 0.4s ease;
            text-decoration: none;
        }

        .social-link:hover {
            transform: translateY(-8px) rotate(360deg);
            background: var(--primary-gradient);
            border-color: transparent;
            box-shadow: 0 12px 30px rgba(4, 185, 98, 0.4);
            color: #fff;
        }

        /* Scroll Indicator */
        .scroll-indicator {
            position: absolute;
            bottom: 40px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 2;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
            animation: fadeIn 1s ease 1.5s both;
        }

        .mouse {
            width: 30px;
            height: 50px;
            border: 2px solid rgba(255, 255, 255, 0.5);
            border-radius: 15px;
            position: relative;
        }

        .mouse::before {
            content: '';
            position: absolute;
            top: 10px;
            left: 50%;
            transform: translateX(-50%);
            width: 4px;
            height: 8px;
            background: var(--primary-color);
            border-radius: 2px;
            animation: scroll 2s infinite;
        }

        @keyframes scroll {

            0%,
            100% {
                opacity: 1;
                transform: translateX(-50%) translateY(0);
            }

            50% {
                opacity: 0;
                transform: translateX(-50%) translateY(15px);
            }
        }

        .scroll-indicator span {
            font-size: 12px;
            color: rgba(255, 255, 255, 0.7);
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        /* ================================
           ABOUT SECTION
           ================================ */
        .about-section {
            padding: 100px 0;
            background: #fff;
        }

        .profile-image-wrapper {
            position: relative;
            max-width: 450px;
            margin: 0 auto;
        }

        .profile-image {
            width: 100%;
            border-radius: 25px;
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.15);
            transition: transform 0.5s ease;
        }

        .profile-image-wrapper:hover .profile-image {
            transform: scale(1.05);
        }

        .profile-badge {
            position: absolute;
            bottom: 30px;
            left: 30px;
            background: var(--primary-gradient);
            color: #fff;
            padding: 15px 25px;
            border-radius: 50px;
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 600;
            box-shadow: 0 10px 30px rgba(4, 185, 98, 0.4);
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-15px);
            }
        }

        .about-content h3 {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 20px;
            color: var(--dark-text);
        }

        .about-text {
            font-size: 16px;
            line-height: 1.9;
            color: var(--light-text);
            margin-bottom: 30px;
        }

        .about-features {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            margin-bottom: 35px;
        }

        .feature-box {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 12px;
            transition: all 0.3s ease;
        }

        .feature-box:hover {
            background: linear-gradient(135deg, rgba(4, 185, 98, 0.1) 0%, rgba(61, 213, 176, 0.1) 100%);
            transform: translateX(10px);
        }

        .feature-box i {
            color: var(--primary-color);
            font-size: 20px;
        }

        .feature-box span {
            font-weight: 600;
            color: var(--dark-text);
            font-size: 15px;
        }

        .about-stats {
            display: flex;
            gap: 40px;
            margin-bottom: 35px;
            flex-wrap: wrap;
        }

        .stat-item {
            text-align: center;
        }

        .stat-item h3 {
            font-size: 42px;
            font-weight: 800;
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 8px;
            line-height: 1;
        }

        .stat-item p {
            font-size: 14px;
            color: var(--light-text);
            font-weight: 500;
            margin: 0;
        }

        .about-buttons {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .btn-about {
            padding: 16px 35px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 15px;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .btn-about.primary {
            background: var(--primary-gradient);
            color: #fff;
        }

        .btn-about.primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(4, 185, 98, 0.3);
            color: #fff;
        }

        .btn-about.secondary {
            background: transparent;
            color: var(--primary-color);
            border: 2px solid var(--primary-color);
        }

        .btn-about.secondary:hover {
            background: var(--primary-color);
            color: #fff;
            transform: translateY(-3px);
        }

        /* Info Tabs */
        .info-tabs {
            background: #fff;
            border-radius: 25px;
            padding: 40px;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.08);
            border: 2px solid var(--border-color);
        }

        .info-tabs .nav-tabs {
            border: none;
            display: flex;
            gap: 15px;
            margin-bottom: 40px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .info-tabs .nav-item {
            flex: 1;
            min-width: 200px;
        }

        .info-tabs .nav-link {
            background: #f8f9fa;
            border: 2px solid var(--border-color);
            border-radius: 15px;
            padding: 20px;
            font-weight: 600;
            color: var(--dark-text);
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            font-size: 16px;
            width: 100%;
        }

        .info-tabs .nav-link i {
            font-size: 20px;
        }

        .info-tabs .nav-link:hover {
            background: linear-gradient(135deg, rgba(4, 185, 98, 0.1) 0%, rgba(61, 213, 176, 0.1) 100%);
            border-color: var(--primary-color);
            transform: translateY(-3px);
        }

        .info-tabs .nav-link.active {
            background: var(--primary-gradient);
            color: #fff;
            border-color: transparent;
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(4, 185, 98, 0.3);
        }

        /* Timeline */
        .timeline {
            position: relative;
            padding: 30px 0;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 3px;
            background: var(--primary-gradient);
            transform: translateX(-50%);
        }

        .timeline-item {
            display: flex;
            align-items: center;
            margin-bottom: 40px;
            position: relative;
        }

        .timeline-item:nth-child(odd) {
            flex-direction: row-reverse;
        }

        .timeline-dot {
            width: 20px;
            height: 20px;
            background: var(--primary-gradient);
            border-radius: 50%;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            z-index: 2;
            box-shadow: 0 0 0 5px #fff, 0 0 0 8px var(--primary-color);
        }

        .timeline-content {
            width: calc(50% - 40px);
            background: #f8f9fa;
            padding: 30px;
            border-radius: 20px;
            border: 2px solid var(--border-color);
            transition: all 0.3s ease;
        }

        .timeline-item:nth-child(odd) .timeline-content {
            margin-right: auto;
        }

        .timeline-item:nth-child(even) .timeline-content {
            margin-left: auto;
        }

        .timeline-content:hover {
            background: #fff;
            border-color: var(--primary-color);
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(4, 185, 98, 0.15);
        }

        .timeline-date {
            display: inline-block;
            background: var(--primary-gradient);
            color: #fff;
            padding: 6px 18px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .timeline-content h4 {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 8px;
            color: var(--dark-text);
        }

        .timeline-content h5 {
            font-size: 16px;
            font-weight: 600;
            color: var(--primary-color);
            margin-bottom: 12px;
        }

        .timeline-content p {
            font-size: 15px;
            line-height: 1.7;
            color: var(--light-text);
            margin: 0;
        }

        /* Skills Grid */
        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 25px;
            padding: 30px 0;
        }

        .skill-card {
            background: #fff;
            padding: 30px;
            border-radius: 20px;
            text-align: center;
            border: 2px solid var(--border-color);
            transition: all 0.3s ease;
        }

        .skill-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
            border-color: var(--primary-color);
        }

        .skill-icon {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            transition: all 0.3s ease;
        }

        .skill-card:hover .skill-icon {
            transform: scale(1.1) rotate(360deg);
        }

        .skill-icon i {
            font-size: 32px;
            color: #fff;
        }

        .skill-card h4 {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 15px;
            color: var(--dark-text);
        }

        .skill-progress {
            width: 100%;
            height: 8px;
            background: #f0f0f0;
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 10px;
        }

        .skill-progress-bar {
            height: 100%;
            border-radius: 10px;
            transition: width 1s ease;
        }

        .skill-percentage {
            font-size: 14px;
            font-weight: 600;
            color: var(--light-text);
        }

        /* ================================
           SERVICES SECTION
           ================================ */
        .services-section {
            padding: 100px 0;
            background: linear-gradient(180deg, #f8f9fa 0%, #ffffff 100%);
        }

        .service-card {
            background: #fff;
            padding: 40px 30px;
            border-radius: 25px;
            border: 2px solid var(--border-color);
            text-align: center;
            height: 100%;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
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
            transform: translateY(-15px);
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.12);
            border-color: var(--service-color);
        }

        .service-icon {
            width: 80px;
            height: 80px;
            background: var(--service-color);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            transition: all 0.4s ease;
        }

        .service-card:hover .service-icon {
            transform: scale(1.1) rotate(5deg);
        }

        .service-icon i {
            font-size: 36px;
            color: #fff;
        }

        .service-card h3 {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 15px;
            color: var(--dark-text);
        }

        .service-card p {
            font-size: 15px;
            line-height: 1.7;
            color: var(--light-text);
            margin-bottom: 20px;
        }

        .service-link {
            color: var(--service-color);
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: gap 0.3s ease;
        }

        .service-link:hover {
            gap: 15px;
        }

        /* ================================
           PORTFOLIO SECTION
           ================================ */
        .portfolio-section {
            padding: 100px 0;
            background: #fff;
        }

        .portfolio-card {
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.4s ease;
        }

        .portfolio-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.15);
        }

        .portfolio-image {
            position: relative;
            overflow: hidden;
            height: 300px;
        }

        .portfolio-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
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
            transition: all 0.4s ease;
            padding: 30px;
        }

        .portfolio-card:hover .portfolio-overlay {
            opacity: 1;
        }

        .portfolio-overlay h4 {
            font-size: 24px;
            font-weight: 700;
            color: #fff;
            margin-bottom: 10px;
        }

        .portfolio-overlay p {
            font-size: 15px;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 20px;
        }

        .portfolio-btn {
            width: 50px;
            height: 50px;
            background: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-color);
            font-size: 20px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .portfolio-btn:hover {
            transform: scale(1.2) rotate(360deg);
        }

        .btn-view-all {
            padding: 16px 40px;
            background: var(--primary-gradient);
            color: #fff;
            border-radius: 50px;
            font-weight: 600;
            font-size: 16px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 12px;
            transition: all 0.3s ease;
        }

        .btn-view-all:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(4, 185, 98, 0.3);
            color: #fff;
        }

        /* ================================
           CONTACT SECTION
           ================================ */
        .contact-section {
            padding: 100px 0;
            background: linear-gradient(180deg, #f8f9fa 0%, #ffffff 100%);
        }

        .contact-info-box {
            background: #fff;
            padding: 40px 35px;
            border-radius: 25px;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.08);
            border: 2px solid var(--border-color);
            height: 100%;
        }

        .contact-info-item {
            display: flex;
            align-items: flex-start;
            gap: 20px;
            padding: 25px 0;
            border-bottom: 2px solid #f5f5f5;
        }

        .contact-info-item:last-child {
            border-bottom: none;
        }

        .contact-info-item .info-icon {
            width: 55px;
            height: 55px;
            background: var(--primary-gradient);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .contact-info-item .info-icon i {
            font-size: 24px;
            color: #fff;
        }

        .contact-info-item h4 {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 8px;
            color: var(--dark-text);
        }

        .contact-info-item p {
            font-size: 15px;
            color: var(--light-text);
            margin: 0;
        }

        .social-links-contact {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }

        .social-links-contact a {
            width: 50px;
            height: 50px;
            background: var(--primary-gradient);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 20px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-links-contact a:hover {
            transform: translateY(-5px) rotate(360deg);
            box-shadow: 0 10px 30px rgba(4, 185, 98, 0.3);
        }

        /* Contact Form */
        .contact-form {
            background: #fff;
            padding: 45px 40px;
            border-radius: 25px;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.08);
            border: 2px solid var(--border-color);
        }

        .contact-form .form-group {
            margin-bottom: 25px;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 18px 22px;
            border: 2px solid var(--border-color);
            border-radius: 15px;
            font-size: 15px;
            color: var(--dark-text);
            transition: all 0.3s ease;
        }

        .contact-form input:focus,
        .contact-form textarea:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 4px rgba(4, 185, 98, 0.1);
        }

        .contact-form textarea {
            resize: vertical;
        }

        .error-text {
            display: block;
            color: #ff6b6b;
            font-size: 13px;
            margin-top: 8px;
        }

        .btn-submit {
            width: 100%;
            padding: 18px;
            background: var(--primary-gradient);
            color: #fff;
            border: none;
            border-radius: 50px;
            font-size: 17px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
        }

        .btn-submit:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(4, 185, 98, 0.35);
        }

        /* ================================
           FLOATING CARD BUTTON
           ================================ */
        .floating-card-btn {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            background: var(--primary-gradient);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 26px;
            text-decoration: none;
            box-shadow: 0 10px 30px rgba(4, 185, 98, 0.4);
            z-index: 1000;
            transition: all 0.3s ease;
            animation: pulse 2s infinite;
        }

        .floating-card-btn:hover {
            transform: scale(1.15) rotate(360deg);
            box-shadow: 0 15px 40px rgba(4, 185, 98, 0.6);
            color: #fff;
        }

        /* ================================
           ANIMATIONS
           ================================ */
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
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

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        /* ================================
           RESPONSIVE STYLES
           ================================ */
        @media (max-width: 1199px) {
            .hero-title {
                font-size: 60px;
            }

            .section-title {
                font-size: 38px;
            }
        }

        @media (max-width: 991px) {
            .hero-title {
                font-size: 48px;
            }

            .section-title {
                font-size: 34px;
            }

            .about-section,
            .services-section,
            .portfolio-section,
            .contact-section {
                padding: 80px 0;
            }

            .timeline::before {
                left: 0;
                transform: none;
            }

            .timeline-item {
                flex-direction: row !important;
                padding-left: 40px;
            }

            .timeline-dot {
                left: 0;
                transform: none;
            }

            .timeline-content {
                width: 100%;
                margin: 0 !important;
            }

            .about-stats {
                justify-content: center;
            }
        }

        @media (max-width: 767px) {
            .hero-title {
                font-size: 40px;
            }

            .hero-subtitle {
                font-size: 20px;
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

            .hero-buttons {
                flex-direction: column;
            }

            .btn-hero {
                width: 100%;
                justify-content: center;
            }

            .about-features {
                grid-template-columns: 1fr;
            }

            .about-stats {
                gap: 25px;
            }

            .stat-item h3 {
                font-size: 36px;
            }

            .about-buttons {
                flex-direction: column;
            }

            .btn-about {
                width: 100%;
                justify-content: center;
            }

            .info-tabs {
                padding: 30px 20px;
            }

            .info-tabs .nav-tabs {
                flex-direction: column;
            }

            .info-tabs .nav-item {
                width: 100%;
            }

            .skills-grid {
                grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
                gap: 20px;
            }

            .portfolio-image {
                height: 250px;
            }

            .contact-info-box {
                margin-bottom: 30px;
            }

            .contact-form {
                padding: 35px 25px;
            }

            .floating-card-btn {
                bottom: 20px;
                right: 20px;
                width: 55px;
                height: 55px;
                font-size: 24px;
            }
        }

        @media (max-width: 575px) {
            .hero-title {
                font-size: 32px;
            }

            .section-title {
                font-size: 24px;
            }

            .hero-badge {
                font-size: 11px;
                padding: 8px 20px;
            }

            .social-links-hero {
                gap: 15px;
            }

            .social-link {
                width: 45px;
                height: 45px;
                font-size: 18px;
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
@endsection
