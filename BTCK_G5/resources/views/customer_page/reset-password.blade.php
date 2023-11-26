@extends('customer_page.index')

@section('main')
<main class="main">
    <div class="container login-container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="heading mb-1">
                            <h2 class="title">Reset Password</h2>
                        </div>

                        @if (session()->has('error'))
                            <div class="alert alert-danger"> {{ session('error') }} </div>
                        @endif

                        @if (session()->has('success'))
                            <div class="alert alert-success"> {{ session('success') }} </div>
                        @endif

                        <form action="{{ route('reset.password.post', ['token' => $token]) }}" method="POST">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">

                            <label for="email">
                                Email address
                                <span class="required">*</span>
                            </label>
                            <input type="email" class="form-input form-wide" name="email" required />

                            <label for="password">
                                Password
                                <span class="required">*</span>
                            </label>
                            <input type="password" class="form-input form-wide" name="password" required />

                            <label for="password_confirmation">
                                Confirm Password
                                <span class="required">*</span>
                            </label>
                            <input type="password" class="form-input form-wide" name="password_confirmation" required />

                            <div class="form-footer">
                                <button type="submit" class="btn btn-dark btn-md w-100 mb-1">
                                    Reset Password
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main><!-- End .main -->
@endsection