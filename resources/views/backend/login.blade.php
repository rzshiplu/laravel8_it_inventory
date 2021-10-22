<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IT Inventory | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('backend-theme/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('backend-theme/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('backend-theme/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="{{route('backend.home')}}" class="h1"><b>IT</b>Inventory</a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Sign in to start your session</p>

            @if(session()->has('error'))
                <div class="alert alert-default-danger alert-dismissible fade show" role="alert">
                    {{ session()->get('error') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <form action="{{route('backend.login')}}" method="post">
                @csrf
                <div class="mb-3">
                    <div class="input-group">
                        <input type="text" id="email" name="email" class="form-control" placeholder="Email" value="{{old('email')}}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    @error('email')<div class="text-danger">{{$message}}</div>@enderror
                </div>
                <div class="mb-3">
                    <div class="input-group">
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span id="login_password_eye" class="fas fa-eye-slash" onclick="make_visible('password', 'login_password_eye');"></span>
                            </div>
                        </div>
                    </div>
                    @error('password')<div class="text-danger">{{$message}}</div>@enderror
                </div>
                <div class="row">
                    <div class="col-8"></div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('backend-theme/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('backend-theme/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('backend-theme/dist/js/adminlte.min.js') }}"></script>

<script>
    $(document).ready(function () {
        $('#email').focus();
    });

    function make_visible(field, icon) {
        field = $('#' + field);
        icon = $('#' + icon);
        if(field.attr('type') === 'password') {
            field.attr('type', 'text');
            icon.removeClass('fa-eye-slash')
            icon.addClass('fa-eye');
        } else {
            field.attr('type', 'password');
            icon.removeClass('fa-eye')
            icon.addClass('fa-eye-slash');
        }
    }
</script>
</body>
</html>
