<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Welcome to Project Construction</title>
    <meta name="keywords" content="Construction Services, General Construction, Structural Work, Road Construction, Renovation and Remodeling, Interior and Exterior Finishes, Rental Machinery and Equipment, Skilled Workers for Construction, Why Choose Project Construction for Your Construction Needs?," />
    <meta name="description" content="At Project Construction, we take pride in being a leading player in the construction industry, offering a diverse range of services to meet the evolving needs of our clients. As part of our commitment to providing valuable information and enhancing online visibility, we are keen to highlight our core competencies through strategic SEO optimization." />

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('assets/images/logo/logo.png')}}">

    <!-- Vendor CSS (Icon Font) -->

    <link rel="stylesheet" href="{{asset('assets/css/vendor/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/pe-icon-7-stroke.min.css')}}">

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/splitting.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/nice-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/aos.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/odometer-theme-default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    <!-- logo cdn   -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css"/>
</head>

<body>
    <!-- Header Section Projectt -->
    <div class="header section">
        <!-- Header Top Projectt -->
        <div class="header-top bg-secondary">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Header Top Link/Search Projectt -->
                    <div class="col-lg-8 col-md-12">
                        <ul class="header-top-links">
                            <li><i class="fa fa-phone"></i><a href="#">+9100******00</a></li>
                            <li><i class="fa fa-envelope-o"></i><a href="#"> projectcons*******@gmail.com</a></li>
                            <li><a href="#" target="_blank"><i class="fa  fa-linkedin"></i>
                                <span class="ms-4"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></span>
                            </a>
                         
                              <a href="#" class="ms-4" target="_blank"><i class="fa fa-instagram"></i>
                                <span class="ms-4"> <a href="#" target="_blank"><i class="fa fa-youtube"></i></a></span>
                            </a></li>

                             
                        </ul>
                    </div>
                    <!-- Header Top Link/Search End -->
                    <!-- Header Top Action Bar Projectt -->
                    <div class="col-lg-4 col-md-12 text-md-end">
                        <form class="header-top-action" action="#">
                            <input class="action-search" type="text" placeholder="Search">
                            <button class="action-btn" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <!-- Header Top Action Bar End -->
                </div>
            </div>
        </div>
        <!-- Header Top End -->

        <!-- Header Bottom Projectt -->
        <div class="header-bottom section header-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Header Logo Projectt -->
                    <div class="col-lg-3 col-6">
                        <div class="header-logo">
                            <a href="{{url('/')}}"><img src="{{asset('assets/images/logo/logo.png')}}" style= "border-Radius:40rem" alt="Logo" height="60px" /></a>
                        </div>
                    </div>
                    <!-- Header Logo End -->

                    <!-- Header Menu Projectt -->
                    <div class="col-lg-9 col-6">
                        <!-- Main Menu Projectt -->

                        @if(!Auth::user())
                        <div class="main-menu d-none d-lg-flex">
                            <ul>
                                <li>
                                    <a href="{{url('/')}}">Home</a>
                                </li>
                                <li>
                                    <a href="{{url('about')}}">About Us</a>
                                </li>
                                <li>
                                    <a href="{{url('project-grid')}}">Project</a>
                                </li>
                                <li>
                                    <a href="{{url('service')}}">Service</a>
                                </li>
                                
                                <li><a href="{{url('contact')}}">Contact</a></li>
                                
                                <li><a href="{{url('login')}}">Login</a></li>

                            </ul>
                        </div>
                        @endif
                        @if(Auth::user())
                        <div class="main-menu d-none d-lg-flex">
                            <ul>
                                <li>
                                    <a href="{{url('/index1')}}">Deshboard</a>
                                </li>                                
                            </ul>
                        </div>
                        @endif
                        <!-- Main Menu End -->

                        <!-- Main Menu Right Side Projectt -->
                        <div class="main-menu-right-side d-flex d-lg-none">

                            <!-- Header Search Projectt -->
                            <div class="header-search me-4">
                                <a class="header-search-icon" href="#"><i class="fa fa-search"></i></a>
                            </div>
                            <!-- Header Search End -->

                            <!-- Mobile Menu Bar Projectt -->
                            <div class="mobile-menu-bar-wrapper">
                                <a href="#" class="mobile-menu-bar"><i class="fa fa-bars"></i></a>
                            </div>
                            <!-- Mobile Menu Bar End -->

                        </div>
                        <!-- Main Menu Right Side End -->

                    </div>
                    <!-- Header Menu End -->
                </div>
            </div>
        </div>
        <!-- Header Bottom End -->

        <!-- Mobile Menu Projectt -->
        <div class="mobile-menu-wrapper">
            <div class="body-overlay"></div>
            <!-- Mobile Menu Inner Projectt -->
            <div class="mobile-menu-inner">

                <!-- Button Close Projectt -->
                <div class="btn-close-bar">
                    <i class="pe-7s-close"></i>
                </div>
                <!-- Button Close End -->

                <!-- mobile menu Projectt -->
                <div class="mobile-navigation">
                    <nav>
                        <ul class="mobile-menu">
                            <li>
                                <a href="{{url('/')}}">Home</a>
                            </li>
                            <li>
                                <a href="{{url('about')}}">About Us</a>
                            </li>
                            <li>
                                <a href="{{url('project-grid')}}">Project</a>
                            </li>
                            <li>
                                <a href="{{url('service')}}">Service</a>
                            </li>
                            
                            <li><a href="{{url('contact')}}">Contact</a></li>
                            
                            <li><a href="{{url('login')}}">Login</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- mobile menu end -->

                <!-- Contact Links/Social Links Projectt -->
                <div class="mt-auto">
                    <!-- Contact Link Projectt -->
                    <ul class="contact-links">
                        <li><i class="fa fa-phone"></i><a href="#"> +9100*******00</a></li>
                        <li><i class="fa fa-envelope-o"></i><a href="#">projectconst********r@gmail.com</a></li>
                    </ul>
                    <!-- Contact Link End -->

                    <!-- Social Widget Projectt -->
                    <div class="widget-social">
                        <a title="Facebook" href="#" target="_blank"><i class="fa fa-facebook-f"></i></a>
                        <a title="instagram" href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                        <a title="Linkedin" href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                    </div>
                    <!-- Social Widget End -->
                </div>
                <!-- Contact Links/Social Links End -->

            </div>
            <!-- Mobile Menu Inner End -->
        </div>
        <!-- Mobile Menu End -->

        <!-- Offcanvas Search Projectt -->
        <div class="offcanvas-search">
            <!-- Offcanvas Search Inner Projectt -->
            <div class="offcanvas-search-inner">
                <!-- Button Close Projectt -->
                <div class="btn-close-bar">
                    <i class="pe-7s-close"></i>
                </div>
                <!-- Button Close End -->

                <!-- Offcanvas Search Form Projectt -->
                <form class="offcanvas-search-form" action="#">
                    <input type="text" placeholder="Search Products...">
                </form>
                <!-- Offcanvas Search Form End -->

            </div>
            <!-- Offcanvas Search Inner End -->

        </div>
        <!-- Offcanvas Search End -->

    </div>
    <!-- Header Section End -->
    
     @yield('content')

    <footer class="section footer-section bg-secondary mt-5">
        <!-- Footer Top Projectt -->
        <div class="footer-top">
            <div class="container">
                <div class="row mb-n10">
                    <div class="col-12 col-sm-6 col-lg-3 col-xl-3 mb-10">
                        <div class="single-footer-widget">
                            <div class="footer-logo">
                                <a  href="{{url('/')}}">
                                    <img  src="{{asset('assets/images/logo/logo.png')}}" style= "border-Radius:40rem" alt="Logo Image" height="60px">
                                </a>
                            </div>
                            <p class="desc-content pt-5 pb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo fugiat rem quam odio nemo, inventore assumenda magnam eum maxime adipisci numquam nam dolor eveniet! Quas doloremque ullam non? Veniam, enim.</p>
                            <!-- Contact Address Projectt -->
                            <!-- Contact Address End -->
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 col-xl-3 mb-10">
                        <div class="single-footer-widget">
                            <h2 class="widget-title">Our Service</h2>
                            <ul class="widget-list pt-6">
                                <li><a href="{{url('service')}}">&#8594; &nbsp; New construction </a></li>
                                <li><a href="{{url('service')}}">&#8594; &nbsp; Renovation & Remodeling</a></li>
                                <li><a General href="{{url('service')}}">&#8594; &nbsp; General construction</a></li>
                                <li><a href="{{url('service')}}">&#8594; &nbsp; Structural work</a></li>
                                <li><a href="{{url('service')}}">&#8594; &nbsp; Road work</a></li>
                                <li><a href="{{url('service')}}">&#8594; &nbsp; Rental Services</a></li>
                                <li><a href="{{url('service')}}">&#8594; &nbsp; All types of building structures design and daitails Interior & exterior</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-2 col-xl-3 mb-10">
                        <div class="single-footer-widget aos-init aos-animate">
                            <h2 class="widget-title">Quick link</h2>
                            <ul class="widget-list pt-6">
                                <li><a href="{{url('/')}}">&#8594; &nbsp; Home</a></li>
                                <li><a href="{{url('about')}}">&#8594; &nbsp; About</a></li>
                                <li><a href="{{url('blog')}}">&#8594; &nbsp; Blogs</a></li>
                                <li><a href="{{url('contact')}}">&#8594; &nbsp; Help Center</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-10">
                        <div class="single-footer-widget">
                            <h2 class="widget-title">Get in Touch</h2>
                            <div class="widget-body pt-5">
                                <p class="desc-content mb-0">Enter your email and receive the latest news from us.</p>

                                <!-- Newsletter Form Projectt -->
                                <div class="newsletter-form-wrap pt-4">
                                    <form id="mc-form" class="mc-form">
                                        <input type="email" id="mc-email" class="form-control email-box" placeholder="email@example.com" name="EMAIL">
                                        <button id="mc-submit" class="newsletter-btn" type="submit"><i class="fa fa-envelope"></i></button>
                                    </form>
                                    <!-- mailchimp-alerts Projectt -->
                                    <div class="mailchimp-alerts text-centre">
                                        <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                        <div class="mailchimp-success text-success"></div><!-- mailchimp-success end -->
                                        <div class="mailchimp-error text-danger"></div><!-- mailchimp-error end -->
                                    </div>
                                    <!-- mailchimp-alerts end -->
                                </div>
                                <!-- Newsletter Form End -->

                                <!-- Soclial Link Projectt -->
                                <div class="widget-social justify-content-Projectt mt-6">
                                    <a title="Facebook" href="#"><i class="fa fa-facebook-f"></i></a>
                                    <a title="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                    <a title="Linkedin" href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                                </div>
                                <!-- Social Link End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Top End -->

        <!-- Footer Bottom Projectt -->
        <div class="container">
            <div class="row align-items-center footer-bottom">
                <div class="col-12 text-center">
                    <div class="copyright-content">
                        <p class="mb-0">© 2024 <strong>Project Construction </strong> </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </footer>


    <!-- Scroll Top Projectt -->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="arrow-top fa fa-long-arrow-up"></i>
        <i class="arrow-bottom fa fa-long-arrow-up"></i>
    </a>
    <!-- Scroll Top End -->

    <!-- Scripts -->
    <!-- Global Vendor, plugins JS -->

    <!-- Vendors JS -->


    <script src="{{asset('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery-migrate-3.3.2.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/modernizr-3.11.2.min.js')}}"></script>


    <!-- Plugins JS -->

    <script src="{{asset('assets/js/plugins/splitting.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/aos.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/nice-select.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery-ui.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/masonry.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/odometer.min.js')}}"></script>


   
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>