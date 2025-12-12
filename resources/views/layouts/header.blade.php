<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />
    <title>Tejas Makwana | Personal Portfolio Website</title>
    <meta name="description" content="Add your business website description here" />
    <meta name="keywords" content="Add your business website keywords here" />

    <link rel="shortcut icon" href="{{ asset('assets/images/fav.png') }}" type="image/x-icon">

    <!-- Core Framework -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />

    <!-- Component Libraries -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/lightbox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}" />

    <!-- Utility / Effects -->
    <link rel="stylesheet" href="{{ asset('assets/css/parallax.css') }}" type="text/css" />

    <!-- Main and Responsive Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" type="text/css" />

    <!-- External Fonts / Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <header id="header" class="header fixed-top headerbg-darkcolor nav-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <nav class="navbar navbar-expand-lg navbar-light mgsb4navbar">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation" onclick="mgsChangeMenubar(this)">
                            <span class="menubar1"></span> 
                            <span class="menubar2"></span>
                            <span class="menubar3"></span>
                        </button>
                        <a class="navbar-brand d-md-block d-lg-none" href="/">
                            <img class="logo logo-white" src="{{ asset('assets/images/logo.png') }}" alt="logo" />
                            <img class="logo logo-color" src="{{ asset('assets/images/logo-color.png') }}"
                                alt="logo" />
                        </a>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <a class="navbar-brand d-none d-sm-none d-md-none d-lg-block" href="/">
                                <img class="logo logo-white" src="{{ asset('assets/images/logo.png') }}"
                                    alt="logo" />
                                <img class="logo logo-color" src="{{ asset('assets/images/logo-color.png') }}"
                                    alt="logo" />
                            </a>
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('about') ? 'active' : '' }}"
                                        href="/about">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('services') ? 'active' : '' }}"
                                        href="/services">Service</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('portfolio') ? 'active' : '' }}"
                                        href="/portfolio">Portfolio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('blog') ? 'active' : '' }}"
                                        href="/blog">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}"
                                        href="/contact">Contact</a>
                                </li>
                            </ul>

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
