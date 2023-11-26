@extends('customer_page.index')

@section('main')
    <main class="main">
        <div class="container login-container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="heading mb-1">
                                <h2 class="title">Forgot Password</h2>
                            </div>

                            @if (session()->has('error'))
                                <div class="alert alert-danger"> {{ session('error') }} </div>
                            @endif

                            @if (session()->has('success'))
                                <div class="alert alert-success"> {{ session('success') }} </div>
                            @endif
                            
                            <form action="{{route('forgot.password.post')}}" method="POST">
                                @csrf
                                <label for="email">
                                    Email address
                                    <span class="required">*</span>
                                </label>
                                <input type="email" class="form-input form-wide" name="email" required />

                                <div class="form-footer">
                                    <button type="submit" class="btn btn-dark btn-md w-100 mb-1">
                                        Submit
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