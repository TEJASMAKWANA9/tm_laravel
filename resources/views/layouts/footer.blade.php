<footer id="footer" class="footer">
    <div class="container">
        <div class="footer-top clearfix">
            <div class="row">
                {{-- Subscribe --}}
                <div class="col-md-4">
                    <div class="columnbottom-margin subscribe-form-wrap">
                        <h4 class="widget-title">Subscribe <span>NewsLetter</span></h4>
                        <p>By subscribing to our mailing list you will always get latest news from us.</p>
                        <div class="mc-form-holder">
                            <form id="mc-form" method="POST" action="">
                                @csrf
                                <input id="mc-email" class="form-control" placeholder="email address" name="email" type="email" />
                                <button class="btn" type="submit">
                                    <i class="fa-solid fa-paper-plane"></i>
                                </button>
                                <label for="mc-email"></label>
                            </form>
                        </div>
                    </div>
                </div>
                {{-- Recent Work --}}
                <div class="col-md-4">
                    <div class="columnbottom-margin recent-work-wrap">
                        <h4 class="widget-title">Recent <span>Work</span></h4>
                        <div class="latest-pfolio">
                            <div class="row">
                                @foreach (['3.jpeg', '6.jpeg', '4.jpeg'] as $img)
                                    <div class="col-sm-4 no-space">
                                        <div class="portfolio-wrapper">
                                            <img src="{{ asset('assets/images/' . $img) }}" alt="Portfolio Title">
                                            <div class="portfolio-overlay">
                                                <div class="portfolio-overlay-inner">
                                                    <div class="portfolio-overlay-content">
                                                        <div class="portfolio-link">
                                                            <a title="Details" href="/">
                                                                <i class="fa-solid fa-link"></i>
                                                            </a>
                                                            <a data-lightbox="recentwork" data-title="Image Preview"
                                                                href="{{ asset('assets/images/' . $img) }}">
                                                                <i class="fa-solid fa-magnifying-glass"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                {{-- Contact Info --}}
                <div class="col-md-4">
                    <div class="columnbottom-margin contact-info-wrap">
                        <h4 class="widget-title">Contact <span>Details</span></h4>

                        <ul class="contact-info list-unstyled">
                            <li><i class="fa-solid fa-house"></i> Ahmedabad</li>
                            <li>
                                <i class="fa-solid fa-phone"></i>
                                <a href="tel:+919426428317">9426428317</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-envelope"></i>
                                <a href="mailto:tejasmakwana375@gmail.com">tejasmakwana375@gmail.com</a>
                            </li>
                        </ul>

                        <ul class="list-inline list-social clearfix">
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/profile.php?id=100082030190206"
                                    class="social-icon social-icon-facebook" target="_blank">
                                    <i class="fa-brands fa-facebook-f"></i>
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.linkedin.com/in/tejas-makwana-396b97222"
                                    class="social-icon social-icon-linkedin" target="_blank">
                                    <i class="fa-brands fa-linkedin"></i>
                                    <i class="fa-brands fa-linkedin"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.instagram.com/tejas_makwana_007/"
                                    class="social-icon social-icon-instagram" target="_blank">
                                    <i class="fa-brands fa-instagram"></i>
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://api.whatsapp.com/send?phone=919426428317&text=Hello, Tejas"
                                    class="social-icon social-icon-pinterest" target="_blank">
                                    <i class="fa-brands fa-whatsapp"></i>
                                    <i class="fa-brands fa-whatsapp"></i>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>

            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-sm-12 text-center">
                <a href="#" class="footer-logo-link">
                    <img class="footer-logo" src="{{ asset('assets/images/fav.png') }}" alt="Tejas">
                </a>

                <p class="copyright">
                    &copy; {{ date('Y') }} Tejas Makwana. All rights reserved.
                </p>
            </div>
        </div>
    </div>
</footer>

<!-- JavaScript Files -->
<script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

<!-- Plugins and Utilities -->
<script src="{{ asset('assets/js/jquery.vide.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/circle-progress.js') }}"></script>
<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>

<!-- Custom Scripts -->
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>

</body>

</html>
