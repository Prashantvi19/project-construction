@extends('layouts.admin_header')
@section('title', 'company Information')
@section('content')
  <main id="main" class="main">
    <div class="pagetitle p-2">
      <h1>ADD Service</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item">Components</li>
          <li class="breadcrumb-item active">Company Information</li>
        </ol>
      </nav>
    </div>
    <!-- End Page Title -->
      <div class="card py-3">
    <div class="card-body">
     <form class="container py-3" action="{{url('service_form')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <h2><code>Service ADD</code></h2>
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
           </div>
          @endif
          <div class="row mb-3">
            <div class="col-lg-6">
              <div class="form-outline">
                <label class="form-label">Titel</label>
                <input type="text" name="title"  class="form-control"  required />
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-outline">
                <label class="form-label">Contact No.</label>
                <input type="number" name="number"  class="form-control" required/>
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-lg-6">
              <div class="form-outline mb-1">
                <label class="form-label">Service Image</label>
                <input type="file" name="service_image"  class="form-control" required/>
              </div>
             </div>  
            <div class="col-lg-6">
              <div class="form-outline">
                <label class="form-label">Date</label>
                <input type="date" name="date"  class="form-control" required/>
              </div>
            </div>
          </div>
          <!-- Text input -->
          <div class="row mb-3">
            <div class="col-lg-6">
              <div class="form-outline mb-1">
                <label class="form-label">Sort Description</label>
                <textarea type="text" name="sort_description"  class="form-control" required></textarea>
              </div>
             </div>
          </div> 
          </div>
          <div class="form-outline m-auto">
             <input class="form-label btn btn-primary" type="submit"  value="Submit" name="save">
           </div>

        </form>

        </div>
    </div>
    </main>
@endsection