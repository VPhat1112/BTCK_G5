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
                <p class="login-title">Quên Mật Khẩu</p>
                @if (session()->has('error'))
                    <div class="alert alert-danger"> {{ session('error') }} </div>
                @endif

                @if (session()->has('success'))
                    <div class="alert alert-success"> {{ session('success') }} </div>
                @endif

                
                <form action="{{route('forgot.password.post')}}" method="POST">
                    @csrf
                    <div style="width: 400px;" class="flex-start">
                        <div style="width: 100%;"> 
                            <p class="label-form">Email *</p>
                            <input type="email" id="login-email" name="email" style="width: 100%;" />
                        </div>
                
                    </div>
                    <button type="submit" class="btn-login"><span class="text-btn">Lấy lại mật khẩu</span></button>
                </form>

                <p class="text-black">Bạn đã có tài khoản <span class="text-red"><a href="{{ URL::to('login') }}"  class="no-underline">Đăng ký tại đây</span></a></p>
            </div>
        </div>
    </div>




{{--  --}}
    
@endsection