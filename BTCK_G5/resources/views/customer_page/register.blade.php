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
                <p class="login-title">Đăng Ký</p>
                <p class="login-text">Nếu bạn có một tài khoản, xin vui lòng đăng nhập</p>
                @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert"></button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                
                <form action="{{ URL::to('/register_save') }}" method="POST">
                    @csrf
                    <div style="width: 400px;" class="flex-start">
                        <div style="width: 100%;"> 
                            <p class="label-form">Email *</p>
                            <input type="email" id="login-email" name="email" style="width: 100%;" />
                        </div>
                        <div style="width: 100%;"> 
                            <p class="label-form">Name *</p>
                            <input type="text" id="login-email" name="name" style="width: 100%;" />
                        </div>
                        <div style="width: 100%;"> 
                            <p class="label-form">Password *</p>
                            <input type="password" id="login-email" name="password" style="width: 100%;" />
                        </div>
                        <div>
                            <p class="label-form">Comfirm Password *</p>
                            <input type="password" id="login-password" name="password" style="width: 100%;"/>
                        </div>
                
                    </div>
                    <button type="submit" class="btn-login"><span class="text-btn">Đăng Ký</span></button>
                </form>

                <p class="text-black">Bạn đã có tài khoản <span class="text-red"><a href="{{ URL::to('login') }}"  class="no-underline">Đăng ký tại đây</span></a></p>


            </div>
            
        </div>
    </div>
@endsection