@extends('layouts.main')

@section('main-container')
    {{-- ================= BLOG HERO =================== --}}
    <section id="blog-hero" class="blog-hero section-padding bg-light">
        <div class="container text-center">
            <h1>My <strong>Blog</strong></h1>
            <p>Sharing my thoughts, tutorials, and latest updates in web development & design.</p>
        </div>
    </section>

    {{-- ================= BLOG GRID =================== --}}
    <section id="blog-posts" class="blog-posts section-padding">
        <div class="container">
            <div class="row">
                {{-- Blog Posts --}}
                <div class="col-lg-8">
                    @php
                        $blogs = [
                            [
                                'title' => 'Responsive Web Design Tips',
                                'excerpt' =>
                                    'Learn how to make your website look great on all devices using modern responsive techniques.',
                                'image' => 'assets/images/blog1.jpg',
                                'date' => 'Dec 1, 2025',
                                'author' => 'Tejas Makwana',
                            ],
                            [
                                'title' => 'Top 5 JavaScript Libraries',
                                'excerpt' =>
                                    'A guide to the most popular and useful JavaScript libraries for web development.',
                                'image' => 'assets/images/blog2.jpg',
                                'date' => 'Nov 15, 2025',
                                'author' => 'Tejas Makwana',
                            ],
                            [
                                'title' => 'SEO Tips for Modern Websites',
                                'excerpt' =>
                                    'Improve your website ranking on search engines with these effective SEO strategies.',
                                'image' => 'assets/images/blog3.jpg',
                                'date' => 'Oct 20, 2025',
                                'author' => 'Tejas Makwana',
                            ],
                        ];
                    @endphp

                    @foreach ($blogs as $blog)
                        <div class="blog-card mb-5" data-aos="fade-up">
                            <div class="blog-img">
                                <img src="{{ asset($blog['image']) }}" alt="{{ $blog['title'] }}" class="img-fluid">
                            </div>
                            <div class="blog-content p-4">
                                <h3>{{ $blog['title'] }}</h3>
                                <p class="blog-excerpt">{{ $blog['excerpt'] }}</p>
                                <div class="blog-meta">
                                    <span><i class="fa-solid fa-user"></i> {{ $blog['author'] }}</span>
                                    <span><i class="fa-solid fa-calendar"></i> {{ $blog['date'] }}</span>
                                </div>
                                <a href="#" class="btn btn-outline-primary mt-3">Read More</a>
                            </div>
                        </div>
                    @endforeach

                    {{-- Pagination --}}
                    <nav aria-label="Blog Pagination" class="mt-4">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>

                {{-- Sidebar --}}
                <div class="col-lg-4">
                    <div class="sidebar">
                        {{-- Search --}}
                        <div class="sidebar-widget mb-4" data-aos="fade-left">
                            <h4>Search</h4>
                            <form action="#" class="search-form">
                                <input type="text" placeholder="Search posts..." class="form-control">
                                <button type="submit" class="btn btn-primary"><i class="fa-solid fa-search"></i></button>
                            </form>
                        </div>

                        {{-- Categories --}}
                        <div class="sidebar-widget mb-4" data-aos="fade-left" data-aos-delay="100">
                            <h4>Categories</h4>
                            <ul class="list-unstyled categories">
                                <li><a href="#">Web Design</a></li>
                                <li><a href="#">Development</a></li>
                                <li><a href="#">JavaScript</a></li>
                                <li><a href="#">SEO</a></li>
                                <li><a href="#">Tips & Tricks</a></li>
                            </ul>
                        </div>

                        {{-- Recent Posts --}}
                        <div class="sidebar-widget mb-4" data-aos="fade-left" data-aos-delay="200">
                            <h4>Recent Posts</h4>
                            <ul class="list-unstyled recent-posts">
                                @foreach ($blogs as $blog)
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset($blog['image']) }}" alt="{{ $blog['title'] }}">
                                            <div class="recent-post-info">
                                                <h6>{{ $blog['title'] }}</h6>
                                                <span>{{ $blog['date'] }}</span>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        {{-- Tags --}}
                        <div class="sidebar-widget mb-4" data-aos="fade-left" data-aos-delay="300">
                            <h4>Tags</h4>
                            <div class="tags">
                                <a href="#">HTML</a>
                                <a href="#">CSS</a>
                                <a href="#">JavaScript</a>
                                <a href="#">Bootstrap</a>
                                <a href="#">Web Design</a>
                                <a href="#">SEO</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <style>
        /* Blog Hero */
        .blog-hero {
            padding: 80px 0;
            background: #f8f9fa;
        }

        .blog-hero h1 {
            font-size: 48px;
            margin-bottom: 10px;
        }

        .blog-hero p {
            font-size: 18px;
        }

        /* Blog Card */
        .blog-card {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s;
            background: #fff;
        }

        .blog-card:hover {
            transform: translateY(-10px);
        }

        .blog-card .blog-img img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .blog-card .blog-content h3 {
            margin-top: 15px;
            font-size: 24px;
        }

        .blog-card .blog-excerpt {
            margin: 15px 0;
            font-size: 15px;
            color: #555;
        }

        .blog-meta {
            font-size: 14px;
            color: #888;
        }

        .blog-meta span {
            margin-right: 15px;
        }

        /* Sidebar */
        .sidebar-widget h4 {
            font-size: 20px;
            margin-bottom: 15px;
            position: relative;
        }

        .sidebar-widget h4::after {
            content: '';
            width: 50px;
            height: 2px;
            background: #04b962;
            display: block;
            margin-top: 5px;
        }

        .search-form input {
            width: calc(100% - 50px);
            display: inline-block;
        }

        .search-form button {
            display: inline-block;
            width: 40px;
        }

        .categories li a {
            display: block;
            padding: 5px 0;
            color: #555;
            transition: color 0.3s;
        }

        .categories li a:hover {
            color: #04b962;
        }

        .recent-posts li {
            display: flex;
            margin-bottom: 15px;
        }

        .recent-posts li img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 5px;
            margin-right: 10px;
        }

        .tags a {
            display: inline-block;
            margin: 5px 5px 0 0;
            padding: 5px 12px;
            background: #f1f1f1;
            color: #555;
            border-radius: 5px;
            transition: all 0.3s;
        }

        .tags a:hover {
            background: #04b962;
            color: #fff;
        }

        /* Pagination */
        .pagination .page-item .page-link {
            color: #555;
            border-radius: 5px;
            margin: 0 3px;
        }

        .pagination .page-item.active .page-link {
            background: #04b962;
            border-color: #04b962;
            color: #fff;
        }
    </style>
@endsection
