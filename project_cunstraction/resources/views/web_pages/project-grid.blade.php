@extends('layouts.header')
@section('content')
    <!-- Breadcrumb Section Projectt -->
    <div class="section" style="background-color:#E4B64B;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cr-breadcrumb-area">
                        <h1 class="title">Projects</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="#">Home</a></li>
                            <li><span>Projects</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->
    <!-- Project Masonry Section End -->
     <section class="property-section-three alternate">
        <div class="container">
            <h1 class="mt-4 text-dark bg-light text-center">Properties</h1>
                  <div class="row mbt-3">
                    @foreach($data as $project)
                        <div class="property-block-two d-inline col-lg-4">
                            <div class="inner-box mt-3">
                              <div class="image-box">
                               <a class="project-overlay" href="{{ url('project-details/'.$project['id']) }}">
                                 <img src="{{asset('assets1/saveimage/'.$project['project_image'])}}" width="300" height="300" alt="Project Image" />
                               </a>
                                    <span class="for">{{$project['client_name'] }}</span>
                            
                                <div class="project-content project-content-dark">
                                    <h4 class="title">
                                        <a href="{{url('project-details/'.$project['id']) }}">{{ $project['client_name'] }}</a>
                                    </h4>
                                    <a class="btn btn-outline-matterhorn btn-hover-primary btn-sm" href="{{ url('project-details/'.$project['id']) }}">Read more</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                 </div>
        </div>
    </section>

  @endsection   