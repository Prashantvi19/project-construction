@extends('layouts.header')
@section('content')
    <!-- Hero/Intro Slider Projectt -->
    <div class="section">
        <div class="hero-slider swiper-container">
            <div class="swiper-wrapper">
                <div class="hero-slide-item swiper-slide">
                    <div class="hero-slide-bg">
                        <img src="assets/images/slider/slider.avif" alt="slider_img" />
                    </div>
                    <div class="container">
                        <div class="hero-slide-content text-center">
                            <span class="sub-title " style="font-size:30px; font-weight: 400;">Project Construction</span>
                            <h2 class="title mb-5"> Build Your <br /> Dream Home </h2>
                            <a href="{{url('contact')}}" class="btn btn-hover-light btn-primary">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="hero-slide-item swiper-slide">
                    <div class="hero-slide-bg">
                        <img src="assets/images/slider/slider1.avif" alt="" />
                    </div>
                    <div class="container">
                        <div class="hero-slide-content text-center">
                            <span class="sub-title" style="font-size:30px; font-weight: 400;">Best Construction Company</span>
                            <h2 class="title mb-5"> Construction at <br/> Your Best </h2>
                            <a href="{{url('contact')}}" class="btn btn-primary btn-hover-secondary">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-pagination"></div>

            <div class="home-slider-prev swiper-button-prev main-slider-nav"><i class="fa fa-angle-left"></i></div>
            <div class="home-slider-next swiper-button-next main-slider-nav"><i class="fa fa-angle-right"></i></div>
        </div>
    </div>
    <!-- Hero/Intro Slider End -->

    <!-- About Section Projectt -->
    <div class="section section-padding">
        <div class="container">
            <!-- Section Title Projectt -->
            <div class="section-title" data-aos="fade-up" data-aos-delay="200">
                <h2 class="title">What We Do</h2>
                <span></span>
                <p class="sub-title">We provide typically Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad aliquid nihil inventore eaque, labore quibusdam exercitationem tempora in nam, vel facilis, quos quia temporibus autem? Architecto nulla a autem quis. ! </p>
            </div>
            <!-- Section Title End -->

            <!-- About Timeline Projectt -->
            <div class="about-timeline-spacing-bottom border-bottom">
                <div class="row row-cols-lg-3 row-cols-1 mb-n6">
                    <div class="col mb-6" data-aos="fade-up" data-aos-delay="300">
                        <!-- Feature Box Wrapper Projectt -->
                        <div class="feature-box-wrapper">
                            <div class="feature-box-icon">
                                <img src="assets/images/icon/about-icon-1.png" alt="About Icon">
                            </div>
                            <div class="feature-content">
                                <h4 class="title">New construction </h4>
                                <p>We handle the entire process of Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad aliquid nihil inventore eaque, labore quibusdam exercitationem tempora in nam, vel facilis, quos quia temporibus autem? Architecto nulla a autem quis. !</p>
                            </div>
                        </div>
                        <!-- Feature Box Wrapper End -->
                    </div>

                    <div class="col mb-6" data-aos="fade-up" data-aos-delay="400">
                        <!-- Feature Box Wrapper Projectt -->
                        <div class="feature-box-wrapper">
                            <div class="feature-box-icon">
                                <img src="assets/images/icon/about-icon-2.png" alt="About Icon">
                            </div>
                            <div class="feature-content">
                                <h4 class="title">Renovation and Remodeling</h4>
                                <p>Project Construction excels in Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad aliquid nihil inventore eaque, labore quibusdam exercitationem tempora in nam, vel facilis, quos quia temporibus autem? Architecto nulla a autem quis. !</p>
                            </div>
                        </div>
                        <!-- Feature Box Wrapper End -->
                    </div>

                    <div class="col mb-6" data-aos="fade-up" data-aos-delay="500">
                        <!-- Feature Box Wrapper Projectt -->
                        <div class="feature-box-wrapper">
                            <div class="feature-box-icon">
                                <img src="assets/images/icon/about-icon-3.png" alt="About Icon">
                            </div>
                            <div class="feature-content">
                                <h4 class="title">General Construction</h4>
                                <p>Project Construction is Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad aliquid nihil inventore eaque, labore quibusdam exercitationem tempora in nam, vel facilis, quos quia temporibus autem? Architecto nulla a autem quis. !</p>
                            </div>
                        </div>
                        <!-- Feature Box Wrapper End -->
                    </div>
                </div>
            </div>
            <!-- About Timeline End -->
            <!-- About Image/Content Projectt -->
            <div class="about-image-content-area">
                <div class="row mb-n6">
                    <div class="col-lg-6 align-self-center order-lg-1 order-2 mb-6" data-aos="fade-up" data-aos-delay="300">
                        <!-- About Content Projectt -->
                        <div class="about-content-area">
                            <h2 class="title">Project Construction: Your Premier Construction Solution</h2>
                            <p class="mb-5 mt-4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, dignissimos soluta magnam cum molestias excepturi laboriosam. Provident consectetur exercitationem cumque non sapiente ducimus assumenda ipsa quibusdam, numquam omnis repellendus sed. !</p>
                            <a href="{{url('about')}}" class="btn btn-hover-secondary btn-primary">About Us</a>
                        </div>
                        <!-- About Content End -->
                    </div>
                    <div class="col-lg-6 order-lg-2 order-1 mb-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="about-image">
                            <img src="assets/images/logo/logo.png"  alt="About_Image">
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Image/Content End -->
        </div>
    </div>
    <!-- About Section End -->


    <!-- Team Section Projectt -->
    <div class="section section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Projectt -->
                <div class="col-12 section-title" data-aos="fade-up" data-aos-delay="300">
                    <h2 class="title">Meet Our Teams</h2>
                    <span></span>
                    <!-- <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                </div>
                <!-- Section Title End -->
            </div>
            <div class="row row-cols-sm-2 row-cols-lg-4 row-cols-1 mb-n6">
                <!-- Team Members Area Projectt -->
                <div class="col mb-6">
                    <!-- Single Team member Projectt -->
                    <div class="single-team-member" data-aos="fade-up" data-aos-delay="300">
                        <!-- Team Member Images Projectt -->
                        <div class="team-member-image">
                            <img src="assets/images/team/4.jpg" width="700" alt="Team Member">
                        </div>
                        <!-- Team Member Images End -->

                        <!-- Team Member Name/Social Identity Projectt -->
                        <div class="team-member-content">
                            <h2 class="name">Er.Project</h2>
                            <span class="person-title">Director&Founder</span>
                        </div>
                        <!-- Team Member Name/Social Identity End -->
                    </div>
                    <!-- Single Team member End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Team Section End -->

    <!-- FunFact Section Projectt -->
    <div class="section funfact-bg">
        <div class="container">
            <div class="row row-cols-sm-2 row-cols-lg-4 row-cols-1 mb-n10">
                <!-- FunFact Area Projectt -->
                <div class="col mb-10">
                    <!-- Single FunFact Projectt -->
                    <div class="funfact-wrap" data-aos="fade-up" data-aos-delay="300">
                        <div class="funfact-icon">
                            <img src="assets/images/icon/funfact-icon-1.png" alt="Funfact Icon">
                        </div>
                        <span class="odometer" data-count-to="7"></span>
                        <h6 class="title">Projects Complete</h6>
                    </div>
                    <!-- Single FunFact End -->
                </div>
                <div class="col mb-10">
                    <!-- Single FunFact Projectt -->
                    <div class="funfact-wrap" data-aos="fade-up" data-aos-delay="400">
                        <div class="funfact-icon">
                            <img src="assets/images/icon/funfact-icon-2.png" alt="Funfact Icon">
                        </div>
                        <span class="odometer" data-count-to="7"></span>
                        <h6 class="title">Happy Clients</h6>
                    </div>
                    <!-- Single FunFact End -->
                </div>
                <div class="col mb-10">
                    <!-- Single FunFact Projectt -->
                    <div class="funfact-wrap" data-aos="fade-up" data-aos-delay="500">
                        <div class="funfact-icon">
                            <img src="assets/images/icon/funfact-icon-3.png" alt="Funfact Icon">
                        </div>
                        <span class="odometer" data-count-to="80"></span>
                        <h6 class="title">Cups of Coffee</h6>
                    </div>
                    <!-- Single FunFact End -->
                </div>
                <div class="col mb-10">
                    <!-- Single FunFact Projectt -->
                    <div class="funfact-wrap" data-aos="fade-up" data-aos-delay="600">
                        <div class="funfact-icon">
                            <img src="assets/images/icon/funfact-icon-4.png" alt="Funfact Icon">
                        </div>
                        <span class="odometer" data-count-to="3"></span>
                        <h6 class="title">Built House</h6>
                    </div>
                    <!-- Single FunFact End -->
                </div>
                <!-- FunFact Area End -->
            </div>
        </div>
    </div>
    <!-- FunFact Section End -->

    <!-- Testimonial Section Projectt -->
    <div class="section section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Projectt -->
                <div class="col-12 section-title" data-aos="fade-up" data-aos-delay="300">
                    <h2 class="title">Testimonials</h2>
                    <span></span>
                    <!-- <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                </div>
                <!-- Section Title End -->
            </div>
            <div class="row">
                <div class="col">
                    <div class="testimonial-carousel">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">

                                <!-- Single Testimonial Projectt -->
                                <div class="swiper-slide">
                                    <div class="testimonial" data-aos="fade-up" data-aos-delay="300">
                                        <div class="text">
                                            <p>"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos voluptates dolore sequi atque ipsa soluta! Repellendus molestiae sequi nam in consequatur voluptates laboriosam aliquam? Animi illum eius officiis fuga libero."</p>
                                        </div>
                                        <div class="thumb">
                                            <img src="assets/images/testimonial/testimonial-author-image-1.png" alt="Testimonial Image">
                                            <div class="name">
                                                <h2 class="title">A</h2>
                                                <h4 class="sub-title">Creative Director</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Testimonial End -->

                                <!-- Single Testimonial Projectt -->
                                <div class="swiper-slide">
                                    <div class="testimonial" data-aos="fade-up" data-aos-delay="400">
                                        <div class="text">
                                            <p>"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos voluptates dolore sequi atque ipsa soluta! Repellendus molestiae sequi nam in consequatur voluptates laboriosam aliquam? Animi illum eius officiis fuga libero."</p>
                                        </div>
                                        <div class="thumb">
                                            <img src="assets/images/testimonial/testimonial-author-image-2.png" alt="Testimonial Image">
                                            <div class="name">
                                                <h2 class="title">B</h2>
                                                <h4 class="sub-title">Project CEO</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Testimonial End -->

                                <!-- Single Testimonial Projectt -->
                                <div class="swiper-slide">
                                    <div class="testimonial" data-aos="fade-up" data-aos-delay="500">
                                        <div class="text">
                                            <p>"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos voluptates dolore sequi atque ipsa soluta! Repellendus molestiae sequi nam in consequatur voluptates laboriosam aliquam? Animi illum eius officiis fuga libero."</p>
                                        </div>
                                        <div class="thumb">
                                            <img src="assets/images/testimonial/testimonial-author-image-3.png" alt="Testimonial Image">
                                            <div class="name">
                                                <h2 class="title">C</h2>
                                                <h4 class="sub-title">Creative Director</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Testimonial End -->

                            </div>

                            <!-- pagination -->
                            <div class="swiper-pagination"></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Section End -->
    <!-- Brand Logo Section Projectt -->
    <div class="section  brand-logo-bg">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="brand-logo-carousel text-center">
                        <div class="swiper-container">
                            <div class="swiper-wrapper align-items-center">

                                <!-- Single Brand Logo Projectt -->
                                <div class="swiper-slide">
                                    <div class="brand-logo" data-aos="fade-up" data-aos-delay="100">
                                        <img src="assets/images/logo/logo.png" width="80px" height="70px" alt="Brand Logo">
                                    </div>
                                </div>
                                <!-- Single Brand Logo End -->

                                <!-- Single Brand Logo Projectt -->
                                <div class="swiper-slide">
                                    <div class="brand-logo" data-aos="fade-up" data-aos-delay="200">
                                        <img src="assets/images/logo/logo.png" width="80px" height="70px" alt="Brand Logo">
                                    </div>
                                </div>
                                <!-- Single Brand Logo End -->

                                <!-- Single Brand Logo Projectt -->
                                <div class="swiper-slide">
                                    <div class="brand-logo" data-aos="fade-up" data-aos-delay="300">
                                        <img src="assets/images/logo/logo.png"  width="80px" height="70px" alt="Brand Logo">
                                    </div>
                                </div>
                                <!-- Single Brand Logo End -->

                                <!-- Single Brand Logo Projectt -->
                                <div class="swiper-slide">
                                    <div class="brand-logo" data-aos="fade-up" data-aos-delay="400">
                                        <img src="assets/images/logo/logo.png"width="80px" height="70px" alt="Brand Logo">
                                    </div>
                                </div>
                                <!-- Single Brand Logo End -->

                                <!-- Single Brand Logo Projectt -->
                                <div class="swiper-slide">
                                    <div class="brand-logo" data-aos="fade-up" data-aos-delay="500">
                                        <img src="assets/images/logo/logo.png" width="80px" height="70px" alt="Brand Logo">
                                    </div>
                                </div>
                                <!-- Single Brand Logo End -->

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand Logo Section End -->
    @endsection

 