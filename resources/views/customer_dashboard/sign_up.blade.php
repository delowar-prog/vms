{{-- @extends('customer_dashboard.layouts.app') --}}
@extends('frontend.layouts.app')
@section('title')
    <title>@lang('frontend.sign_up') | {{ Hyvikk::get('app_name') }}</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/assets/customer_dashboard/assets/main_css/sign_up.css') }}">
@endsection
@section('content')
    <div class="sign-up-content d-flex align-items-center justify-content-center"
        style="min-height:100vh; background:#f4f6f9;">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-12 col-md-10 col-lg-8 col-xl-7">

                    {{-- CARD START --}}
                    <div class="card border-0 shadow-lg rounded-4">

                        <div class="card-body p-4 p-md-5">

                            {{-- LOGIN LINK --}}
                            {{-- <div class="text-end d-none d-md-block mb-2">
                                <p class="mb-0">
                                    @lang('frontend.Already_have')
                                    <a href="{{ route('log_in') }}" class="text-primary fw-semibold">
                                        @lang('frontend.login')
                                    </a>
                                </p>
                            </div> --}}

                            {{-- TITLE --}}
                            <div class="text-center mb-4">
                                <h3 class="fw-bold">@lang('frontend.sign_up')</h3>
                                <p class="text-muted mb-0">@lang('frontend.Welcome')</p>
                                <small class="text-muted">@lang('frontend.join_us')</small>
                            </div>

                            <div class="register-msg custom-alerts mb-3"></div>

                            {{-- FORM START --}}
                            <form id="large-screen-form" method="POST">

                                <div class="row g-3">

                                    {{-- FIRST NAME --}}
                                    <div class="col-12 col-md-6">
                                        <label class="form-label">@lang('frontend.First_Name')</label>
                                        <input type="text" name="first_name" class="form-control"
                                            placeholder="Enter First Name" oninput="validateformat(this)">
                                        <span class="text-danger error-first_name"></span>
                                    </div>

                                    {{-- LAST NAME --}}
                                    <div class="col-12 col-md-6">
                                        <label class="form-label">@lang('frontend.Last_Name')</label>
                                        <input type="text" name="last_name" class="form-control"
                                            placeholder="Enter Last Name" oninput="validateformat(this)">
                                        <span class="text-danger error-last_name"></span>
                                    </div>

                                    {{-- GENDER --}}
                                    <div class="col-12">
                                        <label class="form-label">@lang('frontend.Select_Gender')</label>

                                        <div class="d-flex flex-wrap gap-3 mt-2">

                                            <div class="form-check">
                                                <input type="radio" name="gender" value="1" id="male"
                                                    class="form-check-input">
                                                <label for="male" class="form-check-label">@lang('frontend.male')</label>
                                            </div>

                                            <div class="form-check">
                                                <input type="radio" name="gender" value="0" id="female"
                                                    class="form-check-input" checked>
                                                <label for="female" class="form-check-label">@lang('frontend.female')</label>
                                            </div>

                                            <div class="form-check">
                                                <input type="radio" name="gender" value="2" id="other"
                                                    class="form-check-input">
                                                <label for="other" class="form-check-label">@lang('frontend.other')</label>
                                            </div>

                                        </div>

                                        <span class="text-danger error-gender"></span>
                                    </div>

                                    {{-- EMAIL --}}
                                    <div class="col-12 col-md-6">
                                        <label class="form-label">@lang('frontend.Email_Id')</label>
                                        <input type="email" name="email" class="form-control" placeholder="Enter Email">
                                        <span class="text-danger error-email"></span>
                                    </div>

                                    {{-- PHONE --}}
                                    <div class="col-12 col-md-6">
                                        <label class="form-label">@lang('frontend.Phone_Number')</label>
                                        <input type="text" name="phone" class="form-control" maxlength="15"
                                            placeholder="Enter Phone">
                                        <span class="text-danger error-phone"></span>
                                    </div>

                                    {{-- ADDRESS --}}
                                    <div class="col-12">
                                        <label class="form-label">@lang('frontend.Address_Optional')</label>
                                        <input type="text" name="address" class="form-control"
                                            placeholder="Enter Address">
                                    </div>

                                    {{-- PASSWORD --}}
                                    <div class="col-12 col-md-6">
                                        <label class="form-label">@lang('frontend.Password')</label>
                                        <input type="password" name="password" id="password" class="form-control"
                                            placeholder="Password">
                                        <span class="text-danger error-password"></span>
                                    </div>

                                    {{-- CONFIRM PASSWORD --}}
                                    <div class="col-12 col-md-6">
                                        <label class="form-label">@lang('frontend.Retype_Password')</label>
                                        <input type="password" name="confirm_password" id="confirm_password"
                                            class="form-control" placeholder="Confirm Password">
                                        <span class="text-danger error-confirm_password"></span>
                                        <span id="password-match-error" class="text-danger"></span>
                                    </div>

                                    {{-- TERMS --}}
                                    <div class="col-12">
                                        <div class="form-check mt-2">
                                            <input class="form-check-input" type="checkbox" id="agree"
                                                name="agree">
                                            <label class="form-check-label" for="agree">
                                                @lang('frontend.I_Agree_to_All')
                                                <a href="{{ Hyvikk::frontend('terms') }}">@lang('frontend.Terms_Conditions')</a>
                                                @lang('frontend.and')
                                                <a href="{{ Hyvikk::frontend('privacy_policy') }}">@lang('frontend.Privacy_Policies')</a>
                                            </label>
                                        </div>
                                        <span class="text-danger error-agree"></span>
                                    </div>

                                    {{-- LOGIN LINK --}}
                                    <div class="text-end d-none d-md-block mb-2">
                                        <p class="mb-0">
                                            @lang('frontend.Already_have')
                                            <a href="{{ route('log_in') }}" class="text-primary fw-semibold">
                                                @lang('frontend.login')
                                            </a>
                                        </p>
                                    </div>

                                    {{-- BUTTON --}}
                                    <div class="col-12 text-center mt-3">

                                        <button type="button" class="btn btn-warning px-5 py-2 fw-semibold register-user"
                                            style="transition:0.3s;">

                                            <span class="spinner-border spinner-border-sm d-none hide-3"></span>
                                            <span class="hide-4">@lang('frontend.sign_up')</span>

                                        </button>

                                    </div>

                                </div>
                            </form>
                            {{-- FORM END --}}

                        </div>
                    </div>
                    {{-- CARD END --}}

                </div>

            </div>

        </div>

    </div>
@endsection


@section('script')
    <script>
        function validateformat(input) {
            // Remove any non-alphabetic characters
            input.value = input.value.replace(/[^a-zA-Z\s]/g, '');
        }

        function validateformat1(input) {
            // Remove any non-alphabetic characters
            input.value = input.value.replace(/[^0-9]/g, '');
        }

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
@endsection
