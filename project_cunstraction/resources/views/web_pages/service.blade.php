@extends('layouts.header')
@section('content')

    <!-- Breadcrumb Section Projectt -->
    <div class="section" style="background-color: #E4B64B;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cr-breadcrumb-area">
                        <h1 class="title">Services</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="#">Home</a></li>
                            <li><span>Service</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->
 <!-- Blog Section Projectt -->
 <h1 class="m-10 text-dark bg-light text-center">Rental Services</h1>
 <section class="property-section-three alternate">
        <div class="container">
                  <div class="row mbt-3">
                    @foreach($data as $service)
                        <div class="property-block-two d-inline col-lg-4">
                            <div class="inner-box mt-3">
                              <div class="image-box">
                               <a class="project-overlay" href="#">
                                 <img src="{{asset('assets1/saveimage/'.$service['service_image'])}}" width="300" height="300" alt="service Image" />
                               </a>
                             <div class="blog-content">
                            <div class="post-meta">
                                <span>By : <a href="#">Admin</a></span>
                                <span>{{$service['date']}}</span>
                            </div>
                            <h3 class="title"><a href="{{url('contact')}}">{{$service['title']}}</a></h3>
                            <p>{{$service['sort_description']}}</p>
                            <a class="link" href="{{url('contact')}}">Contact Us services</a>
                        </div>
                    </div>
                            </div>
                        </div>
                    @endforeach
                 </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Service Section Projectt -->
    <div class="section section-padding">
        <div class="container">
            <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 mb-n10" >
                <div class="col mb-10" data-aos="fade-up" data-aos-delay="300">

                    <!-- Feature Box Wrapper Projectt -->
                    <div class="feature-box-wrapper feature-box-column" >
                        <div class="feature-box-icon mb-3">
                            <img src="assets/images/icon/about-icon-1.png" alt="About Icon">
                        </div>
                        <div class="feature-content">
                            <h4 class="title">New construction</h4>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat quaerat dicta debitis incidunt illo ipsa veniam labore error odio nisi tempora sed, maiores fuga molestiae animi dolores? Unde, amet ipsum..</p>
                        </div>
                    </div>
                    <!-- Feature Box Wrapper End -->

                </div>

                <div class="col mb-10" data-aos="fade-up" data-aos-delay="400">

                    <!-- Feature Box Wrapper Projectt -->
                    <div class="feature-box-wrapper feature-box-column">
                        <div class="feature-box-icon mb-3">
                            <img src="assets/images/icon/about-icon-2.png" alt="About Icon">
                        </div>
                        <div class="feature-content">
                            <h4 class="title">Renovation and Remodeling</h4>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat quaerat dicta debitis incidunt illo ipsa veniam labore error odio nisi tempora sed, maiores fuga molestiae animi dolores? Unde, amet ipsum..
                            </p>
                        </div>
                    </div>
                    <!-- Feature Box Wrapper End -->

                </div>

                <div class="col mb-10" data-aos="fade-up" data-aos-delay="500">

                    <!-- Feature Box Wrapper Projectt -->
                    <div class="feature-box-wrapper feature-box-column">
                        <div class="feature-box-icon mb-3">
                            <img src="assets/images/icon/about-icon-3.png" alt="About Icon">
                        </div>
                        <div class="feature-content">
                            <h4 class="title">General construction</h4>
                            <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat quaerat dicta debitis incidunt illo ipsa veniam labore error odio nisi tempora sed, maiores fuga molestiae animi dolores? Unde, amet ipsum..</p>
                        </div>
                    </div>
                    <!-- Feature Box Wrapper End -->

                </div>

                <div class="col mb-10" data-aos="fade-up" data-aos-delay="300">

                    <!-- Feature Box Wrapper Projectt -->
                    <div class="feature-box-wrapper feature-box-column">
                        <div class="feature-box-icon mb-3">
                            <img src="assets/images/icon/about-icon-4.png" alt="About Icon">
                        </div>
                        <div class="feature-content">
                            <h4 class="title">Structural work</h4>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat quaerat dicta debitis incidunt illo ipsa veniam labore error odio nisi tempora sed, maiores fuga molestiae animi dolores? Unde, amet ipsum..</p>
                        </div>
                    </div>
                    <!-- Feature Box Wrapper End -->

                </div>

                <div class="col mb-10" data-aos="fade-up" data-aos-delay="400">

                    <!-- Feature Box Wrapper Projectt -->
                    <div class="feature-box-wrapper feature-box-column">
                        <div class="feature-box-icon mb-3">
                            <img src="assets/images/icon/about-icon-5.png" alt="About Icon">
                        </div>
                        <div class="feature-content">
                            <h4 class="title">Road work</h4>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat quaerat dicta debitis incidunt illo ipsa veniam labore error odio nisi tempora sed, maiores fuga molestiae animi dolores? Unde, amet ipsum.. </p>
                        </div>
                    </div>
                    <!-- Feature Box Wrapper End -->

                </div>

                <div class="col mb-10" data-aos="fade-up" data-aos-delay="500">

                    <!-- Feature Box Wrapper Projectt -->
                    <div class="feature-box-wrapper feature-box-column">
                        <div class="feature-box-icon mb-3">
                            <img src="assets/images/icon/about-icon-6.png" alt="About Icon">
                        </div>
                        <div class="feature-content">
                            <h4 class="title">Rental machinery and equipment</h4>
                            <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat quaerat dicta debitis incidunt illo ipsa veniam labore error odio nisi tempora sed, maiores fuga molestiae animi dolores? Unde, amet ipsum..</p>
                        </div>
                    </div>
                    <!-- Feature Box Wrapper End -->

                </div>
                <div class="col mb-10" data-aos="fade-up" data-aos-delay="500">

                    <!-- Feature Box Wrapper Projectt -->
                    <div class="feature-box-wrapper feature-box-column">
                        <div class="feature-box-icon mb-3">
                            <img src="assets/images/icon/about-icon-6.png" alt="About Icon">
                        </div>
                        <div class="feature-content">
                            <h4 class="title">Interior and Exterior Finishes</h4>
                            <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat quaerat dicta debitis incidunt illo ipsa veniam labore error odio nisi tempora sed, maiores fuga molestiae animi dolores? Unde, amet ipsum..</p>
                        </div>
                    </div>
                    <!-- Feature Box Wrapper End -->

                </div>
                <div class="col mb-10" data-aos="fade-up" data-aos-delay="400">

                    <!-- Feature Box Wrapper Projectt -->
                    <div class="feature-box-wrapper feature-box-column">
                        <div class="feature-box-icon mb-3">
                            <img src="assets/images/icon/about-icon-5.png" alt="About Icon">
                        </div>
                        <div class="feature-content">
                            <h4 class="title">Skilled Workers</h4>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat quaerat dicta debitis incidunt illo ipsa veniam labore error odio nisi tempora sed, maiores fuga molestiae animi dolores? Unde, amet ipsum..</p>
                        </div>
                    </div>
                    <!-- Feature Box Wrapper End -->

                </div>
            </div>
        </div>
    </div>
    <!-- Service Section End -->

    @endsection