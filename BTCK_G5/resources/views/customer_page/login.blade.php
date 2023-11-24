@extends('customer_page.index') 
@section('main')
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body> --}}
    <main class="main">
        <div class="page-header">
            <div class="container d-flex flex-column align-items-center">
                <nav aria-label="breadcrumb" class="breadcrumb-nav">
                    <div class="container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="demo4.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="category.html">Shop</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                My Account
                            </li>
                        </ol>
                    </div>
                </nav>
    
                <h1>My Account</h1>
            </div>
        </div>
    
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
                                <input type="email" class="form-input form-wide" id="login-email" name="name"/>
    
                                <label for="login-password">
                                    Password
                                    <span class="required">*</span>
                                </label>
                                <input type="password" class="form-input form-wide" id="login-password" name="password" />
    
                                <div class="form-footer">
                                    <div class="custom-control custom-checkbox mb-0">
                                        <input type="checkbox" class="custom-control-input" id="lost-password" />
                                        <label class="custom-control-label mb-0" for="lost-password">Remember
                                            me</label>
                                    </div>
    
                                    <a href="forgot-password.html"
                                        class="forget-password text-dark form-footer-right">Forgot
                                        Password?</a>
                                </div>
                                <button type="submit" class="btn btn-dark btn-md w-100 mb-3">
                                    LOGIN
                                </button>
                                <a href="{{route('register')}}" class="btn btn-primary btn-md w-100">
                                    Register
                                </a>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- End .main -->
{{-- </body>
</html> --}}

@endsection