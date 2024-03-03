@extends('layouts.admin_header')
@section('title', 'Change Password')
@section('content')
<main id="main" class="main bg-neutral-500">
    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="{{asset('/assets1/img/profile-img.jpg')}}" alt="Profile" class="rounded-circle">
              <h2>Kevin Anderson</h2>
              <h3>Web Designer</h3>
              <div class="social-links mt-2">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
               <div class=" pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form action="{{('change_password')}}" method="POST">
                   @csrf
                 
                    @if(session('success'))
                      <div class="alert alert-success" role="alert">
                          {{ session('success') }}
                      </div>
                     @endif
                     @if(session('error'))
                      <div class="alert alert-danger" role="alert">
                          {{ session('error') }}
                      </div>
                     @endif
                      @if($errors->any())
                           <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        <ul>
                           <li class="error">{{ $error }}</li>
                        </ul>
                         @endforeach
                        </div>
                      @endif
                      <div class="row mb-3">
                      <label  class="col-md-4 col-lg-3 col-form-label">User Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email"  class="form-control">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label  class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="password" type="password"  class="form-control">
                      </div>
                    </div>


                    <div class="row mb-3">
                      <label  class="col-md-4 col-lg-3 col-form-label">New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="newpassword" type="password" class="form-control">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="renewPassword" type="password"  class="form-control">
                      </div>
                    </div>
                    <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label"></label>
                    <input type="checkbox" onclick="myFunction()"> <span>Show Password</span>
                     <script>
                        function myFunction() {
                          var elements = document.getElementsByClassName('form-control');
                          for (var i = 0; i < elements.length; i++) {
                           var element = elements[i];
                            if (element.type === "password") {
                               element.type = "text";
                             } else {
                                  element.type = "password";
                              }
                          }
                        }
                      </script>

                    <div class="text-center">
                      <button type="submit" name="change_password" class="btn btn-primary">Change Password</button>
                    </div>
                  </form><!-- End Change Password Form -->

                </div>
        </div>
    </div>
</div>
</div>
</section>
</main>
@endsection