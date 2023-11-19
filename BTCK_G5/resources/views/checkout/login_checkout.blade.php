@extends('layout.frontend')
@section('content')
<section id="form"><!--form-->
    <div class="row">
        <div class="col-sm-4 col-sm-offset-1">
            <div class="login-form"><!--login form-->
                <h2>Đăng nhập</h2>
                <form action="{{URL::to('/login')}}" method="POST">
                    <span><?php 
                        $message = Session::get('message');
                        if($message) {
                            echo $message;
                            Session::put('message',NULL);
                        }
                    ?></span>
                    {{ csrf_field() }}
                    <input type="email" placeholder="Địa chỉ email" name="email_account"/>
                    <input type="password" placeholder="Mật khẩu" name="password_account" />
                    <span>
                        <input type="checkbox" class="checkbox"> 
                        Ghi nhớ đăng nhập
                    </span>
                    <button type="submit" class="btn btn-default">Đăng nhập</button>
                </form>
            </div><!--/login form-->
        </div>
        
    </div>
</section><!--/form-->
@endsection