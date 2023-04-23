
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('dashboard/assets/images/logo-3.png')}}" type="image/x-icon">
    <title>Admin Login | prologis</title>
    
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/assets/css/font-awesome.css')}}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/assets/css/vendors/icofont.css')}}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/assets/css/vendors/themify.css')}}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/assets/css/vendors/flag-icon.css')}}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/assets/css/vendors/feather-icon.css')}}">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/assets/css/vendors/bootstrap.css')}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/assets/css/style.css')}}">
    <link id="color" rel="stylesheet" href="{{asset('dashboard/assets/css/color-1.css')}}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/assets/css/responsive.css')}}">
  </head>
  <body>
    <!-- login page start-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-12 p-0">
          <div class="login-card">
            <div>
              <div><a class="logo text-center" href="{{url('/')}}"><img class="img-fluid for-light" width="200px" height="100px"  src="{{asset('dashboard/assets/images/logo/logo-2.png')}}" alt="looginpage"><img class="img-fluid for-dark" src="{{asset('dashboard/assets/images/logo/logo.png')}}" alt="logo"></a></div>
              <div class="login-main"> 
                <form class="theme-form" action="{{url('admin/login')}}" method="POST">
                @csrf
                  <h4>Sign in to account</h4>
                  <p>Enter your email & password to login</p>
                  @if(session('status'))
                  <p class="alert alert-success text-light">{{session('status')}}</p>
                  @endif

                  {{-- Error Alert --}}
                  @if(session('error'))
                  <p class="alert alert-danger text-light">{{session('error')}}</p>
                  @endif
                  <div class="form-group">
                    <label class="col-form-label">Email Address</label>
                    <input class="form-control" type="email" name="email" required placeholder="Test@gmail.com">
                  </div>
                  @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                  @endif
                  <div class="form-group">
                    <label class="col-form-label">Password</label>
                    <div class="form-input position-relative">
                      <input class="form-control" type="password" name="password" required placeholder="*********">
                      <div class="show-hide"><span class="show text-success"></span></div>
                    </div>
                  </div>
                  <div class="form-group mb-0">
                    <div class="checkbox p-0">
                      <input id="checkbox1" type="checkbox">
                      <label class="text-muted" for="checkbox1">Remember password</label>
                    </div>
                    <div class="text-end mt-3">
                      <button class="btn btn-success btn-block w-100" type="submit">Sign in</button>
                    </div>
                  </div>
                  
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- latest jquery-->
      <script src="{{asset('dashboard/assets/js/jquery-3.5.1.min.js')}}"></script>
      <!-- Bootstrap js-->
      <script src="{{asset('dashboard/assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
      <!-- feather icon js-->
      <script src="{{asset('dashboard/assets/js/icons/feather-icon/feather.min.js')}}"></script>
      <script src="{{asset('dashboard/assets/js/icons/feather-icon/feather-icon.js')}}"></script>
      <!-- scrollbar js-->
      <!-- Sidebar jquery-->
      <script src="{{asset('dashboard/assets/js/config.js')}}"></script>
      <!-- Plugins JS start-->
      <!-- Plugins JS Ends-->
      <!-- Theme js-->
      <script src="{{asset('dashboard/assets/js/script.js')}}"></script>
      <!-- login js-->
      <!-- Plugin used-->
    </div>
  </body>
</html>