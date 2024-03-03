@extends('layouts.header')
@section('content')
    <!-- Breadcrumb Section Projectt -->
    <div class="section " style="background-color: #E4B64B;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cr-breadcrumb-area">
                        <h1 class="title">About Us</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="#">Home</a></li>
                            <li><span>About Us</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- About Section Projectt -->
    <div class="section section-padding">
        <div class="container">
            <!-- About Image/Content Projectt -->
            <div class="about-image-content-area">
                <div class="row align-items-center mb-n6">
                <div class="col-lg-6 align-self-center order-lg-1 order-2 mb-6" data-aos="fade-up" data-aos-delay="300">
                        <!-- About Content Projectt -->
                        <div class="about-content-area">
                            <h2 class="title">Project Construction: Your Premier Construction Solution</h2>
                            <p class="mb-5 mt-4"> Welcome to Project Construction, Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad aliquid nihil inventore eaque, labore quibusdam exercitationem tempora in nam, vel facilis, quos quia temporibus autem? Architecto nulla a autem quis. !</p>
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
            <!-- About Timeline Projectt -->
            <div class="about-timeline-spacing-top border-top">
                <div class="row row-cols-lg-3 row-cols-1 mb-n6">
                    <div class="col mb-6" data-aos="fade-up" data-aos-delay="300">

                        <!-- Feature Box Wrapper Projectt -->
                        <div class="feature-box-wrapper">
                            <div class="feature-box-icon">
                                <img src="assets/images/icon/about-icon-1.png" alt="About Icon">
                            </div>
                            <div class="feature-content">
                                <h4 class="title">Structural work</h4>
                                <p>Project Construction excels in Structural Work, showcasing mastery in the art of building resilience. From foundation to framework, our skilled team ensures robust structures that stand the test of time.</p>
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
                                <h4 class="title">Road work</h4>
                                <p> Project Construction is a leader in Road Work, shaping connectivity and infrastructure. Our dedicated team specializes in road construction, offering expertise in planning, execution, and maintenance.</p>
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
                                <h4 class="title">Skilled Workers</h4>
                                <p>Project Construction simplifies your staffing needs with skilled workers available at your fingertips. With a click, access a comprehensive pool of trained professionals for all construction tasks.</p>
                            </div>
                        </div>
                        <!-- Feature Box Wrapper End -->
                    </div>
                </div>
            </div>
            <!-- About Timeline End -->
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
                            <img src="assets/images/team/2.jpg" alt="Team Member">
                        </div>
                        <!-- Team Member Images End -->

                        <!-- Team Member Name/Social Identity Projectt -->
                        <div class="team-member-content">
                            <h2 class="name">Er. Project</h2>
                            <span class="person-title">Director/Founder</span>
                            
                        </div>
                        <!-- Team Member Name/Social Identity End -->
                    </div>
                    <!-- Single Team member End -->
                </div>

                <div class="col mb-6">
                    <!-- Single Team member Projectt -->
                    <div class="single-team-member" data-aos="fade-up" data-aos-delay="400">
                        <!-- Team Member Images Projectt -->
                        <div class="team-member-image">
                            <img src="assets/images/team/2.jpg" alt="Team Member">
                        </div>
                        <!-- Team Member Images End -->

                        <!-- Team Member Name/Social Identity Projectt -->
                        <div class="team-member-content">
                            <h2 class="name">Er. Project</h2>
                            <span class="person-title">Codirector</span>
                            <!-- <ul class="social-widgets">
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-vimeo"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul> -->
                        </div>
                        <!-- Team Member Name/Social Identity End -->
                    </div>
                    <!-- Single Team member End -->
                </div>

                <div class="col mb-6">
                    <!-- Single Team member Projectt -->
                    <div class="single-team-member" data-aos="fade-up" data-aos-delay="500">
                        <!-- Team Member Images Projectt -->
                        <div class="team-member-image">
                            <img src="assets/images/team/3.jpg" alt="Team Member">
                        </div>
                        <!-- Team Member Images End -->

                        <!-- Team Member Name/Social Identity Projectt -->
                        <div class="team-member-content">
                            <h2 class="name"> Project </h2>
                            <span class="person-title">Site Supervisor</span>
                            
                        </div>
                        <!-- Team Member Name/Social Identity End -->
                    </div>
                    <!-- Single Team member End -->
                </div>

                <div class="col mb-6">
                    <!-- Single Team member Projectt -->
                    <div class="single-team-member" data-aos="fade-up" data-aos-delay="600">
                        <!-- Team Member Images Projectt -->
                        <div class="team-member-image">
                            <img src="assets/images/team/4.jpg" alt="Team Member">
                        </div>
                        <!-- Team Member Images End -->

                        <!-- Team Member Name/Social Identity Projectt -->
                        <div class="team-member-content">
                            <h2 class="name">Project</h2>
                            <span class="person-title"> Site Supervisor Electrical</span>
                            
                        </div>
                        <!-- Team Member Name/Social Identity End -->
                    </div>
                    <!-- Single Team member End -->
                </div>
                <!-- Team Members Area End -->
            </div>
        </div>
    </div>
    

    <!-- Testimonial Section Projectt -->
    <div class="section section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Projectt -->
                <div class="col-12 section-title" data-aos="fade-up" data-aos-delay="300">
                    <h2 class="title">Testimonials</h2>
                    <span></span>
                    <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
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

   @endsection