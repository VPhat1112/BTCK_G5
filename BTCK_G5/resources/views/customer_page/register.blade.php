@extends('customer_page.index')
@section('main')
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
                            <h2 class="title">Register</h2>
                        </div>
                        @if ($message = Session::get('error'))
                                    <div class="alert alert-danger alert-block">
                                        <button type="button" class="close" data-dismiss="alert"></button>
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @endif

                        <form action="{{ URL::to('/register_save') }}" method="POST">
                            @csrf
                            <div class="alert alert-success alert-block">
                                <p>Yêu cầu email phải tồn tại nếu không sẽ không lấy lại được mật khẩu khi quên mật khẩu trong trường hợp khẩn cấp!!! </p>
                            </div>
                            <label for="login-email">
                                Email address
                                <span class="required">*</span>
                            </label>
                            <input type="email" class="form-input form-wide" id="login-email" name="email" required />

                            <label for="login-email">
                                Full Name
                                <span class="required">*</span>
                            </label>
                            <input type="text" class="form-input form-wide" id="login-email" name="name" required />

                            <label for="login-password">
                                Password
                                <span class="required">*</span>
                            </label>
                            <input type="password" class="form-input form-wide" id="login-password" name="password" required />
                            
                            <label for="login-password">
                                Comfirm Password
                                <span class="required">*</span>
                            </label>
                            <input type="password" class="form-input form-wide" id="login-password" required />

                            <div class="form-footer">
                                <a href="{{ URL::to('login') }}"
                                    class="forget-password text-dark form-footer-right">Đã có tài khoản</a>
                            </div>
                            <button type="submit" class="btn btn-dark btn-md w-100 mb-3">
                                Register
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main><!-- End .main -->
@endsection