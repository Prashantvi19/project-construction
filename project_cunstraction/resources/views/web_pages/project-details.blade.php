@extends('layouts.header')

@section('content')
    <!-- Breadcrumb Section Projectt -->
    <div class="section " style="background-color: #FFB300;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cr-breadcrumb-area">
                        <h1 class="title">Project Details</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="#">Home</a></li>
                            <li><span>Project Details</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Project Section Projectt -->
    <div class="section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class=" mb-10">
                        <img src="{{asset('assets1/saveimage/'.$data['project_image'])}}" height="600" width="600" alt="Project Large Image">
                    </div>
                </div>
            </div>

            <div class="row mb-n9">
                <div class="col-md-5 col-lg-3 mb-8 col-sm-12">
                    <div class="project-info">
                        <h4 class="title mb-6">Project Information</h4>
                        <ul class="mb-n1">
                            <li><span>Client:</span>{{$data['client_name']}} </li>
                            <li><span>Location:</span>{{$data['location']}}</li>
                            <li><span>Area:</span>{{$data['area']}}</li>
                            <li><span>Date:</span>{{$data['date']}}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-7 col-lg-9 col-sm-12 mb-8">
                    <div class="project-desc">
                        <h4 class="title mb-6">Project Description</h4>
                        <p>{{$data['project_description']}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Project Masonry Section End -->

    @endsection