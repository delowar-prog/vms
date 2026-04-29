@extends('frontend.layouts.app')
{{-- @extends('customer_dashboard.layouts.app') --}}


@section('title')
    <title>@lang('frontend.Reset_Password') | {{ Hyvikk::get('app_name') }}</title>
@endsection


@section('content')
    @if (Route::currentRouteName() == 'new_password')
        <section class="reset-wrapper d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center align-items-center min-vh-100">

                    <!-- LEFT FORM -->
                    <div class="col-lg-5 col-md-8">
                        <div class="card shadow-lg border-0 rounded-4 p-4">

                            <h3 class="fw-bold mb-3 text-center">Reset Password</h3>

                            <div class="msg-forget-email custom-alerts mb-2"></div>

                            <form method="post" id="reset-password-email">
                                @csrf
                                <input type="hidden" name="token" value="{{ $token }}">

                                <!-- EMAIL -->
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control form-control-lg"
                                        value="{{ request()->email }}" placeholder="Enter your email">
                                    <span class="text-danger error-reset-email"></span>
                                </div>

                                <!-- PASSWORD -->
                                <div class="mb-3">
                                    <label class="form-label">New Password</label>
                                    <input type="password" name="password" class="form-control form-control-lg"
                                        placeholder="Enter new password">
                                    <span class="text-danger error-reset-password"></span>
                                </div>

                                <!-- CONFIRM PASSWORD -->
                                <div class="mb-3">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password" name="password_confirmation" class="form-control form-control-lg"
                                        placeholder="Confirm password">
                                </div>

                                <button type="button" class="btn btn-primary w-100 py-2 fw-bold reset-password-email">
                                    Reset Password
                                </button>
                            </form>
                        </div>
                    </div>

                    <!-- RIGHT IMAGE -->
                    <div class="col-lg-6 d-none d-lg-block">
                        <div class="image-side rounded-4"></div>
                    </div>

                </div>
            </div>
        </section>
    @else
        <section class="reset-wrapper d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center align-items-center min-vh-100">

                    <!-- LEFT FORM -->
                    <div class="col-lg-5 col-md-8">
                        <div class="card shadow-lg border-0 rounded-4 p-4">

                            <h3 class="fw-bold mb-2 text-center">Forgot Password</h3>
                            <p class="text-muted text-center small">
                                 Email us and we will give you a reset link
                            </p>

                            <div class="msg-forget-email custom-alerts mb-2"></div>

                            <form method="post" id="forget-password-email">
                                @csrf

                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control form-control-lg"
                                        placeholder="Enter your email">
                                    <span class="text-danger error-forget-email"></span>
                                </div>

                                <button type="button" class="btn btn-dark w-100 py-2 fw-bold forget-password-email">
                                    Send Reset Link
                                </button>
                            </form>
                        </div>
                    </div>

                    <!-- RIGHT IMAGE -->
                    <div class="col-lg-6 d-none d-lg-block">
                        <div class="image-side rounded-4"></div>
                    </div>

                </div>
            </div>
        </section>
    @endif
@endsection
<style>
    .reset-wrapper {
        background: linear-gradient(135deg, #eef2ff, #f8fafc);
        min-height: 100vh;
    }

    .card {
        backdrop-filter: blur(10px);
    }

    .image-side {
        height: 500px;
        background: url('/assets/assets/customer_dashboard/assets/img/svg/pexels-taras-makarenko 1.jpg') no-repeat center;
        background-size: cover;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    /* Mobile Fix */
    @media (max-width: 768px) {
        .image-side {
            display: none;
        }
    }
</style>
