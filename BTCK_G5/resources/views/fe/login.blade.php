@extends('fe.index')

@section('main')
<main class="main">
    

    <div class="container login-container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="heading mb-1">
                            <h2 class="title">Login</h2>
                            @if ($message = Session::get('error'))
                                <div class="alert alert-danger alert-block">
                                    <button type="button" class="close" data-dismiss="alert"></button>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @endif
                        </div>

                        <form action="" method="POST">
                            @csrf
                            <label for="login-email">
                                Email address
                                <span class="required">*</span>
                            </label>
                            <input type="email" class="form-input form-wide" id="login-email" name="email"/>

                            <label for="login-password">
                                Password
                                <span class="required">*</span>
                            </label>
                            <input type="password" class="form-input form-wide" id="login-password" name="password" />

                            <div class="form-footer">
                                <div class="custom-control custom-checkbox mb-0">
                                    <input type="checkbox" class="custom-control-input" id="lost-password" />
                                    <label class="custom-control-label mb-0" for="lost-password">Remember me</label>
                                </div>

                                <a href="forgot-password.html"
                                    class="forget-password text-dark form-footer-right">Forgot
                                    Password?</a>
                            </div>
                            <button type="submit" class="btn btn-dark btn-md w-100 mb-1">
                                LOGIN
                            </button>
                            <a href="{{route('register')}}" class="btn btn-primary btn-md w-100 mb-1">
                                Register
                            </a>
                            <a href="{{route('login')}}" class="btn btn-primary btn-md w-100">
                                Go to admin login
                            </a>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main><!-- End .main -->
@endsection