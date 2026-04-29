{{-- @extends('customer_dashboard.layouts.app') --}}
 @extends('frontend.layouts.app')

@section('title')
    <title>@lang('frontend.login') | {{ Hyvikk::get('app_name') }}</title>
@endsection

@section('content')

    <section class="position-relative login-wrapper">
        <div class="container py-5">

            <div class="msg-login custom-alerts"></div>

            <div class="row justify-content-center align-items-center">

                <!-- LEFT SIDE LOGIN CARD -->
                <div class="col-xl-4 col-lg-5 col-md-7 col-12">

                    <div class="card shadow-lg border-0 login-card">

                        <div class="card-header bg-transparent border-0 pt-4">
                            <h4 class="fw-bold login_title">
                                @lang('frontend.Welcome')
                            </h4>
                            <p class="text-muted mb-0">
                                @lang('frontend.Access_Customer')
                            </p>
                        </div>

                        <div class="card-body pt-3">

                            {{-- Success Message --}}
                            @if (session('success'))
                                <div id="successAlert" class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            {{-- Error Message --}}
                            @if (count($errors->login) > 0)
                                <div id="errorAlert" class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach ($errors->login->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form method="POST">
                                {!! csrf_field() !!}

                                <label class="form_label">@lang('frontend.Email_Id')</label>
                                <input type="email" class="form-control mb-3 user-email" name="email"
                                    value="{{ old('email') }}" placeholder="Enter your Email Address">

                                <label class="form_label">@lang('frontend.Password')</label>
                                <input type="password" class="form-control mb-2 user-pass" id="password" name="password"
                                    placeholder="Enter your Password">

                                <div class="text-end mb-2">
                                    <a href="{{ url('forgot-password') }}">
                                        @lang('frontend.Forgot_Password')
                                    </a>
                                </div>

                                <button type="button" class="btn btn-primary w-100 login-user">

                                    <span class="spinner-border text-light d-none"></span>
                                    <span>@lang('frontend.login')</span>

                                </button>
                            </form>

                            <p class="text-center mt-3">
                                @lang('frontend.do_have')
                                <a href="{{ route('sign_up') }}">
                                    @lang('frontend.sign_up')
                                </a>
                            </p>

                        </div>
                    </div>
                </div>

                <!-- RIGHT SIDE IMAGE -->
                <div class="col-lg-6 d-none d-lg-block">

                    <div class="login-image-wrapper">
                        <img src="{{ asset('assets/assets/customer_dashboard/assets/img/svg/pexels-taras-makarenko%201.jpg') }}"
                            class="img-fluid login-image" alt="login image">
                    </div>

                </div>

            </div>
        </div>
    </section>

@endsection

<style>
    .login-wrapper {
        min-height: 100vh;
        display: flex;
        align-items: center;
        background: #f8f9fa;
    }

    .login-card {
        border-radius: 15px;
    }

    .login_title {
        font-size: 22px;
        color: #333;
    }

    .login-image-wrapper {
        text-align: center;
    }

    .login-image {
        max-height: 500px;
        object-fit: cover;
        border-radius: 20px;
    }

    /* mobile spacing fix */
    @media (max-width: 991px) {
        .login-wrapper {
            padding: 20px 0;
        }
    }
</style>

{{-- @section('script')
    <script>
        function checkPasswordMatch() {
            let password = document.getElementById('password').value;
            let confirmPassword = document.getElementById('confirm_password').value;
            let errorBox = document.getElementById('password-match-error');

            if (confirmPassword.length > 0) {
                if (password !== confirmPassword) {
                    errorBox.innerText = "Please not same password";
                } else {
                    errorBox.innerText = "";
                }
            } else {
                errorBox.innerText = "";
            }
        }

        document.getElementById('password').addEventListener('input', checkPasswordMatch);
        document.getElementById('confirm_password').addEventListener('input', checkPasswordMatch);
    </script>
@endsection --}}
