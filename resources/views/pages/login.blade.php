<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>MOLEC PODI</title>
  <!-- Favicon -->
  <link rel="icon" href="{{ asset('assets/img/brand/favicon.png') }}" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/argon.css?v=1.1.0') }}" type="text/css">
  {{-- google recaptcha v2 --}}
  <script src='https://www.google.com/recaptcha/api.js'></script>
  {{-- google font --}}
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Lexend+Deca&display=swap" rel="stylesheet">
  <style>
    body{
      font-family: 'Lexend Deca', sans-serif !important;
    }
    .bg-image{
      background-image: url("{{ asset('img/bg-splash.jpg') }}");
      /* background-size: 100% 100%; */
      background-size: contain;
    }
    
    .login-card {
      /* background-color: rgba(255, 0, 0, 0.2); */
    }
  </style>
</head>

<body class="bg-secondary bg-image">
  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <!-- <div class="header py-6">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
            {{-- <h1 class="text-white">Welcome!</h1> --}}
            </div>
          </div>
        </div>
        <div class="separator separator-bottom separator-skew zindex-100">
          <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <polygon class="fill-secondary" points="2560 0 2560 100 0 100"></polygon>
          </svg>
        </div>
      </div>
    </div> -->
    
    <!-- Page content -->
    <div class="container-fluid">
      <div class="row justify-content-end" style="flex-wrap: wrap;flex-direction: column;align-items: center;">
        <div class="col p-5 rounded " style="margin-top:5rem;background-color:rgba(255, 255, 255, 0.5);width:fit-content;margin-right: 3rem;margin-left: 3rem">
          <div class="login-card">
                    <div>
                        <div class="login-main">
                        <form role="form" method="post" action="">
                          {{ csrf_field() }}
                                <div class="logo text-center">
                                    <img src="{{ asset('img/Logo_login_podi.png')}}" width="15%">
                                    <div style="font-size: 1.5rem">Collector</div></div> 
                                <hr>
                                <h4>Sign in to account</h4>
                                <p>Enter your username & password to login</p>
                                @if(session('error'))
                                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{session('error')}}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  @endif
                                  @error('login_failed')
                                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <span class="alert-inner--text"><strong>Warning!</strong> {{ $message }}</span>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  @enderror
                                <div class="form-group">
                                    <label class="col-form-label">Username</label>
                                    <input class="form-control" name="username" placeholder="Username" type="text">
                                    @if($errors->has('username'))
                                      <span class="text-danger text-sm">{{ $errors->first('username') }}</span>
                                      @endif
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Password</label>
                                    <div class="form-input position-relative">
                                    <input class="form-control" name="password" placeholder="Password" type="password">
                                    @if($errors->has('password'))
                                      <span class="text-danger text-sm">{{ $errors->first('password') }}</span>
                                      @endif
                                        </div>
                                    </div>
                                </div>
                                    <button class="btn btn-block w-100" type="submit" style="background: #252524; color: aliceblue" id="btn-submit">Log in</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  {{-- <footer class="py-5" id="footer-main">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
        <div class="copyright text-center text-lg-left text-muted">
          &copy; {{ date('Y') }} <a href="#" class="font-weight-bold ml-1" target="_blank"> Ari Ardiansyah</a>
        </div>
        </div>
        <div class="col-xl-6">
          <div class="copyright text-center text-lg-right text-muted">
            Template by Creative Tim
          </div>
        </div>
      </div>
    </div>
  </footer> --}}
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
  <!-- Argon JS -->
  <script src="{{ asset('assets/js/argon.js?v=1.1.0') }}"></script>
  <!-- Demo JS - remove this in your project -->
  {{-- <script src="{{ asset('assets/js/demo.min.js') }}"></script> --}}
</body>

</html>