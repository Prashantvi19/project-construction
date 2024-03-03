@extends('layouts.admin_header')
@section('title', 'Dashboard')
@section('content')
  <!-- ======= Sidebar ======= -->
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Contact Tables</h1>
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
                    <th scope="col"> Name</th>
                    <th scope="col">Email ID</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Message</th>
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
                    <td>{{$data['name']}}</td>
                    <td>{{$data['email']}}</td>
                    <td>{{$data['subject']}}</td>
                    <td>{{$data['message']}}</td>
                    <td><a href="{{('Delate/'.$data['id'])}}">Delete</a></td>
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
