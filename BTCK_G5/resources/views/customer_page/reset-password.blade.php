@extends('customer_page.index')

@section('main')
<main class="main">
    <style>
        .no-underline {
            text-decoration: none;
        }
    </style>
    <div class="row login">
        <div class="col login">
            <div class="container-form">
                <p class="login-title">Đổi Mật Khẩu</p>

                        @if (session()->has('error'))
                            <div class="alert alert-danger"> {{ session('error') }} </div>
                        @endif

                        @if (session()->has('success'))
                            <div class="alert alert-success"> {{ session('success') }} </div>
                        @endif

                        <form action="{{ route('reset.password.post', ['token' => $token]) }}" method="POST">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">

                            <div style="width: 400px;" class="flex-start">
                                <div style="width: 100%;"> 
                                    <p class="label-form">Email *</p>
                                    <input type="email" id="login-email" name="email" style="width: 100%;" />
                                </div>
                        
                            </div>
                            
                            <div style="width: 400px;" class="flex-start">
                                <div style="width: 100%;"> 
                                    <p class="label-form">Password *</p>
                                    <input type="password" id="login-email" name="password" style="width: 100%;" />
                                </div>
                            </div>
                            <div style="width: 400px;" class="flex-start">
                                <div style="width: 100%;"> 
                                    <p class="label-form">Confirm Password *</p>
                                    <input type="password" id="login-email" name="password_confirmation" style="width: 100%;" />
                                </div>
                            </div>
                            <button type="submit" class="btn-login"><span class="text-btn">Reset Password</span></button>
                        </form>
                    </div>
                </div>
            </div>
@endsection