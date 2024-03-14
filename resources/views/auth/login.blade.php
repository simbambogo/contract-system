
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CMS</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition login-page" style="background-color:#10497E">
<div class="login-box">
  <!-- <div class="login-logo">
    <img class="image-size-10" src="dist/img/iaalogo.png" style="color:FFFFFF">
  </div> -->
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
  <div class="login-logo">
    <img class="image-size-10" src="dist/img/iaalogo.png" style="color:FFFFFF">
  </div>
    <div class="card-body login-card-body">
      <p class="login-box-msg" style="color:#007BFF">CONTRACT MANAGEMENT SYSTEM</p>

      <form method="POST" action="{{ route('login') }}">
        @csrf
        @method('post')
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="social-auth-links text-center mb-3">
        <button type="submit" class="btn btn-primary btn-block">Log In</button>
      </div>
      </form>
      <p class="mb-1">
        <a href="#">I forgot my password</a>
      </p>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
</body>
</html>
