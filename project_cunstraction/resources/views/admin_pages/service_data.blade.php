@extends('layouts.admin_header')
@section('title', 'Dashboard')
@section('content')
  <!-- ======= Sidebar ======= -->
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Services Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#"></a></li>
          <li class="breadcrumb-item"></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div>

    <section class="section">
      <div class="">
        <div >
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Datatables</h5>
    
              <!-- Table with stripped rows -->
              <div class="table-responsive">
              <table class="table table-bordered table-striped datatable">
                <thead>
                 <tr>
                    <th scope="col">So/n.</th>
                    <th scope="col">Title</th>
                    <th scope="col">Contact No.</th>
                    <th scope="col">Date</th>
                    <th scope="col">image</th>
                    <th scope="col">description</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php
                     $a = 1;
                    ?>
                   @foreach($data as $data)
                    <th scope="row">{{$a++;}}</th>
                    <td>{{$data['title']}}</td>
                    <td>{{$data['number']}}</td>
                    <td>{{$data['date']}}</td>
z                    <td>
                      <a class="project-overlay" href="#">
                         <img class="rounded-circle" height="200" width="200" src="{{asset('assets1/saveimage/'.$data['service_image'])}}"  alt="service_image"/>
                     </a></td>
                    <td class="col-md-4">{{$data['sort_description']}}</td>
                    <td><a href="{{('delate3/'.$data['id'])}}">Delete</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
              <!-- End Table with stripped rows -->
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

@endsection
