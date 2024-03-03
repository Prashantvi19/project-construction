@extends('layouts.header')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- Breadcrumb Section Projectt -->
    <div class="section" style="background-color: #E4B64B;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cr-breadcrumb-area">
                        <h1 class="title">Contact Us</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="#">Home</a></li>
                            <li><span>Contact Us</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Contact Details Section Projectt -->
    <div class="section section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Projectt -->
                <div class="col-12 section-title" data-aos="fade-up" data-aos-delay="300">
                    <h2 class="title">Get In Touch</h2>
                    <span></span>
                    <!-- <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                </div>
                <!-- Section Title End -->
            </div>
            <div class="row row-cols-sm-2 row-cols-lg-4 row-cols-1 mb-n6">

                <div class="col mb-6" data-aos="fade-up" data-aos-delay="300">

                    <!-- Single Contact Address Projectt -->
                    <div class="single-contact-address">
                        <div class="contact-address-icon">
                            <i class="pe-7s-map-marker"></i>
                        </div>
                        <h4 class="title">Address Street</h4>
                        <p>Address: <span>Project City </span></p>
                        <p><span>New Vijya Nagar Indore (M.P) 452010</span></p>
                    </div>
                    <!-- Single Contact Address End -->
                </div>
                <div class="col mb-6" data-aos="fade-up" data-aos-delay="400">

                    <!-- Single Contact Address Projectt -->
                    <div class="single-contact-address">
                        <div class="contact-address-icon">
                            <i class="pe-7s-call"></i>
                        </div>
                        <h4 class="title">Phone Number</h4>
                        <p>Phone 1: <a href="#">(+91)00******00</a></p>
                        <p>Phone 2: <a href="#">(+91)00******00</a></p>
                    </div>
                    <!-- Single Contact Address End -->

                </div>

                <div class="col mb-6" data-aos="fade-up" data-aos-delay="500">

                   <!-- Single Contact Address Projectt -->
                    <div class="single-contact-address">
                        <div class="contact-address-icon">
                            <i class="pe-7s-print"></i>
                        </div>
                        <h4 class="title">Social Media</h4>
                        <p> <span>  <a title="Facebook" href="#"><i class="fa fa-facebook-f"></i></a></span>
                           <span style="padding-left: 20px;"> <a title="instagram" href="#"><i class="fa fa-instagram"></i></a></span>
                           <span style="padding-left: 20px;"> <a title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a></span>
                           <span style="padding-left: 20px;"> <a title="Youtube" href="#"><i class="fa fa-youtube"></i></a></span>    </p>
                    </div> 
                    
                    </div>
                <div class="col mb-6" data-aos="fade-up" data-aos-delay="600">

                    <!-- Single Contact Address Projectt -->
                    <div class="single-contact-address">
                        <div class="contact-address-icon">
                            <i class="pe-7s-mail"></i>
                        </div>
                        <h4 class="title">Address Email</h4>
                        <p><a href="#">Projectcons*********@gmail.com</a></p>
                        <!-- <p><a href="#">info@example.com</a></p> -->
                    </div>
                    <!-- Single Contact Address End -->

                </div>

            </div>
        </div>
    </div>

    <!-- Contact Details Section End -->

    <!-- Contact Form Projectt -->
   <div class="section bg-gray section-padding" data-aos="fade-up" data-aos-delay="100">
        <div class="container">
            <div class="row">
                <div class="offset-lg-2 col-lg-8">
                    <div class="contact-form">
                          @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                  {{ session('success') }}
                            </div>
                            @endif
                             @if($errors->any())
                                <div class="alert alert-danger">
                                   
                               @foreach ($errors->all() as $error)
                               <ol>
                                 <li class="error">{{ $error }}</li>
                               </ol>
                           @endforeach
                           @endif
                        <form action="{{url('contactfrom')}}"  method="post">
                            @csrf
                            <div class="row">

                                <div class="col-md-6 col-12 mb-6" >
                                    <input class="input-item" type="text" placeholder="Your Name *" name="name" required>
                                </div>

                                <div class="col-md-6 col-12 mb-6" >
                                    <input class="input-item" type="email" placeholder="Email *" name="email" required>
                                </div>

                                <div class="col-12 mb-6" >
                                    <input class="input-item" type="text" placeholder="Subject *" name="subject" required>
                                </div>

                                <div class="col-12 mb-6">
                                    <textarea class="textarea-item" name="message" placeholder="Message" required></textarea>
                                </div>

                                <div class="col-12">
                                    <input type="submit" name="submit" class="btn btn-primary" value="Send Message" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Form End -->

     <!-- Contact Map Projectt -->
     <div class="section section-padding pt-5" data-aos="fade-up" data-aos-delay="300">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!--Google Map Area Projectt-->
                    <div class="google-map-area w-100">
                        <span>Google Map<span>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3681.1413989393277!2d75.87015442602971!3d22.685779578811196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3962fce9643647dd%3A0xc1ffcef90e9b429d!2sCrystal%20IT%20Park!5e0!3m2!1sen!2sin!4v1709385499055!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!--Google Map Area Projectt-->
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Map End -->

   @endsection