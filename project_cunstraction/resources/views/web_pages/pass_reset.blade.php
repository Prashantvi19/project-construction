@extends('layouts.header')
@section('content')
<main>
  <div class="container">
    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">
            <div class="d-flex justify-content-center py-4 logo d-flex align-items-center w-auto">
              <img src="assets/img/logo.png" alt="">
              <h2 class="d-none d-lg-block">ADMIN PASSWORD RESET</h2>
            </div><!-- End Logo -->

            <div class="card mb-3">
              <div class="card-body">
                <div class="pt-4 pb-2">
                  <h5 class="card-title text-center pb-0 fs-4">{{ __('PASSWORD RESET') }}</h5>
                  <p class="text-center small"></p>
                </div>
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
                <form class="row g-3 needs-validation" method="POST" action="{{ url('email_request') }}" novalidate>
                  @csrf
                  <div class="col-12">
                    <label for="email" class="form-label">{{ __('Email Address') }}</label>
                    <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend">@</span>
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                      @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                  </div>

                  <div class="col-12">
                    <label for="password" class="form-label">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                  </div>
                  <div class="col-12">
                    <label for="renewPassword" class="form-label">Confirm Password</label>
                    <input id="renewPassword" type="Password" class="form-control @error('renewPassword') is-invalid @enderror" name="renewPassword" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <input type="checkbox" onclick="myFunction()"> <span>Show Password</span>
                    <script>
                      function myFunction() {
                        var x = document.getElementById("password");
                        var y = document.getElementById("renewPassword");
                        if (x.type === "password" && y.type === "password") {
                          x.type = "text";
                          y.type = "text";
                        } else {
                          x.type = "password";
                          y.type = "password";
                        }
                      }
                    </script>
                  </div>
              </div>
              <div class="container">
                <button class="btn btn-primary w-100" type="submit">Update</button>
              </div>
              @if(!(Auth::user()))
              <div class="col-sm-12">

                <p class="small mb-0 text-center">
                  @if (Route::has('login'))
                  <a class="btn btn-link" href="{{ Route('login') }}">
                    {{ __('LogIn?') }}
                  </a>
                  @endif <a class="btn btn-link" href="/register">Create an account</a>

                </p>
              </div>
              @endif
            </div>
            </form>

          </div>
        </div>
      </div>
  </div>
  </div>

  </section>

  </div>
</main>

@endsection