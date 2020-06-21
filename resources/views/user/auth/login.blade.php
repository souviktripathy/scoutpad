<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Scoutpads | Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ URL::asset('public/admin/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ URL::asset('public/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ URL::asset('public/admin/dist/css/adminlte.min.css') }}">
  
  <link rel="stylesheet" href="{{ URL::asset('public/admin/dist/css/custom.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href=""><b>Scoutpads</b>Admin</a>
  </div>
    
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>
      @if (Session::has('error-message'))
                        <div class="alert alert-danger">
                          {{ Session::get('error-message') }}
                        </div>
                      @endif

     <form class="admin-login-form" id="admin-login-form" action="{{ route('admin-login-submit') }}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="email" name="login_username" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password"name="login_password"  class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

     

      <p class="mb-1">
        <a href="">I forgot my password</a>
      </p>
     
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ URL::asset('public/admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ URL::asset('public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->

<script src="{{ URL::asset('public/common/jquery.validate.min.js') }}"></script>
<script>
 $(document).ready(function() {
    $('#admin-login-form').validate({
        errorClass: "validity-error",
        validClass: "validity-success",
        highlight: function (element) {
            $(element).closest('.form-group').removeClass('success').addClass('error');
        },
        unhighlight: function (element) {
            $(element).closest('.form-group').removeClass('error').addClass('success');
        },
        errorPlacement: function (error, element) {
            if (element.parent('.input-group').length || element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
            $('#is_active-error').css({
                display: 'inline-block',
                fontWeight: 'bolder'
            });
        },
        rules: {
            login_username: {
                required: true
            },
            login_password: {
                required: true
            }
        },
        messages: {
            login_username: {
                required: "Please enter your username.",
                
            },
            login_password: {
                required: "Please enter your password."
            }       
        }
    });
   
    
    
    
  });
</script>
</body>
</html>
