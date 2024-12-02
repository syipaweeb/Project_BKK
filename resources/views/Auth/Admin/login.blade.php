<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>LOGIN ADMIN</title>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>
<body class="fixed-left">
    <div class=""></div>
    <div class="wrapper-page">
        <div class="card">
            <div class="card-body">
                <div class="text-center m-b-15">
                    <a href="index.html" class="logo logo-admin">
                        <img src="{{ asset('assets/images/Logo BKK.png') }}" height="100" alt="logo">
                    </a>
                </div>
                <div class="p-3">
                    <form action="{{ route('login-form') }}" class="form-horizontal m-t-20" method="POST">
                        @csrf
                        <div class="form-group row">
                            <div class="col-12">
                                <input class="form-control" type="text" required="" placeholder="Username" name="username">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <input class="form-control" type="password" required="" placeholder="Password" name="password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="remember">
                                    <label class="custom-control-label" for="customCheck1">Remember me</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center row m-t-20">
                            <div class="col-12">
                                <button class="btn btn-danger btn-block waves-effect waves-light" type="submit">Log In</button>
                            </div>
                        </div>
                        <div class="form-group m-t-10 mb-0 row">
                            <div class="col-sm-7 m-t-20">
                                <a href="pages-recoverpw.html" class="text-muted">
                                    <i class="mdi mdi-lock"></i> <small>Forgot your password ?</small>
                                </a>
                            </div>
                            <div class="col-sm-5 m-t-20">
                                <a href="pages-register.html" class="text-muted">
                                    <i class="mdi mdi-account-circle"></i> <small>Create an account ?</small>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>
</html>
