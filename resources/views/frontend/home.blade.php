@extends('frontend.layouts.app')

@section('title')
    {{-- <title> @lang('frontend.home') | {{ Hyvikk::get('app_name') }} </title> --}}
    <title> VEHICLE MANAGEMENT </title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/assets/frontend/home.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets/frontend/home_custom.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endsection
{{-- <h1>Hello World {{ Hyvikk::get('app_name') }}</h1> --}}
@if (request()->is('home'))
    @section('css')
        <style>
            .main-section-background {
                display: unset;

            }

            /* hero */
        </style>
    @endsection
@endif

@section('content')
<section {{--
    style="width:100vw; max-width:100vw; margin-left:calc(50% - 50vw); margin-right:calc(50% - 50vw); overflow:hidden; padding:0;">
    --}}
    style="width:100vw; max-width:100vw; min-width:100vw; height:100vh; min-height:500px; max-height:900px;
    object-fit:cover; display:block;"
    {{-- style="width:100vw; max-width:100vw; min-width:100vw; height:100vh; min-height:600px; max-height:1000px;
    object-fit:cover; display:block;" --}} {{-- style="width:100vw; max-width:100vw; min-width:10vw; height:150vh;
    min-height:700px; max-height:1000px; object-fit:cover; display:block;" --}} 
    <div id="heroSlider"
        class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3000">

        <!-- Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <!-- Slides -->
        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="{{ asset('assets/assets/images/slider11.jpg') }}" class="d-block w-100" alt="Slider 1"
                    style="width:100vw; max-width:100vw; min-width:100vw; height:60vh; min-height:280px; max-height:700px; object-fit:cover; display:block;">
            </div>

            <div class="carousel-item">
                <img src="{{ asset('assets/assets/images/slider12.jpg') }}" class="d-block w-100" alt="Slider 2"
                    style="width:100vw; max-width:100vw; min-width:100vw; height:60vh; min-height:280px; max-height:700px; object-fit:cover; display:block;">
            </div>

            <div class="carousel-item">
                <img src="{{ asset('assets/assets/images/slider13.jpg') }}" class="d-block w-100" alt="Slider 3"
                    style="width:100vw; max-width:100vw; min-width:100vw; height:60vh; min-height:280px; max-height:700px; object-fit:cover; display:block;">
            </div>

        </div>

        <!-- Prev -->
        <button class="carousel-control-prev" type="button" data-bs-target="#heroSlider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"
                style="background-color:rgba(0,0,0,.35); border-radius:50%; padding:18px;"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <!-- Next -->
        <button class="carousel-control-next" type="button" data-bs-target="#heroSlider" data-bs-slide="next">
            <span class="carousel-control-next-icon"
                style="background-color:rgba(0,0,0,.35); border-radius:50%; padding:18px;"></span>
            <span class="visually-hidden">Next</span>
        </button>

    </div>
</section>


{{-- ------------ Booking section -------------- --}}
{{-- <section class="book-a-cab-detail" id="book_Sec" style="margin-top: 20px;">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="feet-img">
                    <img src="{{ asset('assets/assets/images/FLEET.png') }}" alt="Fleet">
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="container">

                    <div class="message-booking custom-alert"></div>

                    <div class="book-cab-form m-0">
                        <h1>Book Your Ride</h1>

                        <form class="row mt-2" method="POST" id="booking_form">
                            {!! csrf_field() !!}

                            <input type="hidden" name="booking_type" class="booking_type" value="oneway">

                            <div class="col-md-12 col-sm-12 col-lg-12 form-group book-for-label">
                                <div class="row" style="display:flex;align-items:center;">
                                    <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                                        <label for="inputEmail" class="form-label">@lang('frontend.book_for')</label>
                                    </div>
                                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xxl-8">
                                        <div class="btn-now" role="group">
                                            <button type="button" class="btn now book-now">
                                                @lang('frontend.book_for_now')
                                            </button>

                                            <button type="button" class="btn now active ms-3 book-later"
                                                data-radiotext="later">
                                                @lang('frontend.book_for_later')
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="load_radio_button"></div>

                            <div class="col-md-12 input-effect pickup-dropoff-address">
                                <input class="effect-22 form-control" type="text" placeholder="" name="pickup_address"
                                    id="pickup_address">
                                <label class="form-label"
                                    style="position:absolute;">@lang('frontend.pickup_address')</label>
                                <span class="focus-bg error-pickup_address"></span>
                            </div>

                            <div class="col-md-12 input-effect pickup-dropoff-address">
                                <input class="effect-22 form-control" type="text" placeholder="" name="dropoff_address"
                                    id="dropoff_address">
                                <label class="form-label"
                                    style="position:absolute;">@lang('frontend.dropoff_address')</label>
                                <span class="focus-bg error-dropoff_address"></span>
                            </div>

                            <div class="col-md-12 form-group date-time">
                                <div class="row">
                                    <div class="col-5 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                        <label for="inputState" id="current_data_time" class="form-label">
                                            @lang('frontend.Pickup_date_and_Time')
                                        </label>
                                    </div>
                                    <div class="col-7 col-sm-6 col-md-8 col-lg-8 col-xl-8 col-xxl-8 d-flex">
                                        <div class="datetime">
                                            <input type="text" class="form-control date" name="pickup_date"
                                                id="datepicker2" />
                                            <input type="text" class="form-control time has-content pickup_time"
                                                name="pickup_time">
                                        </div>
                                    </div>
                                    <span class="error-pickup_date_time"></span>
                                </div>
                            </div>

                            @if (Hyvikk::get('return_booking') == 1)
                            <div class="col-lg-12 mt-3 text-center">
                                <button type="button" class="btn active-btn" id="oneWayBtn">
                                    @lang('frontend.One_Way')
                                </button>
                                <button type="button" class="btn inactive-btn" id="returnWayBtn">
                                    @lang('frontend.Return_Way')
                                </button>

                                <div class="row form-group date-time1 d-none show-return-section">
                                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                        <label for="inputState" class="form-label"
                                            style="font-size:16px;font-weight:700;padding-right:21px;">
                                            @lang('frontend.return_pickup_date')
                                        </label>
                                    </div>
                                    <div class="col-6 col-sm-6 col-md-8 col-lg-8 col-xl-8 col-xxl-8 d-flex">
                                        <div class="datetime">
                                            <input type="text" class="form-control date1 return_pickup_date"
                                                id="datepicker4" name="return_pickup_date" />
                                            <input type="text" class="form-control time1 return_pickup_time"
                                                name="return_pickup_time">
                                        </div>
                                    </div>
                                    <span class="error-return_pickup_date_time"></span>
                                </div>
                            </div>
                            @endif

                            <div class="col-md-12 vehicle-type">
                                <div class="row">
                                    <div class="col-5 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4 vehicle-type-label">
                                        <label for="vehicle_type"
                                            class="form-label">@lang('frontend.Vehicle_Type')</label>
                                    </div>
                                    <div class="col-7 col-sm-6 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                                        <select class="form-select float-end custom-select v_type" name="vehicle_type"
                                            id="vehicle_type" aria-label="vehicle type" required>
                                            <option value="" disabled selected>@lang('frontend.vehicle_type')</option>
                                            @foreach ($vehicle_type as $type)
                                            <option value="{{ $type->id }}" {{ $type->id == old('vehicle_type') ?
                                                'selected' : '' }}>
                                                {{ $type->vehicletype }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <span class="focus-bg error-vehicle_type"></span>
                                </div>
                            </div>

                            <div class="col-md-12 vehicle-type">
                                <div class="row">
                                    <div class="col-5 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4 vehicle-type-label">
                                        <label for="vehicle" class="form-label">@lang('frontend.Select_Vehicle')</label>
                                    </div>
                                    <div class="col-7 col-sm-6 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                                        <select class="form-select float-end show_vehicle" name="vehicle" id="vehicle"
                                            required>
                                            <option value="" disabled selected>Select a vehicle</option>
                                        </select>
                                    </div>
                                    <span class="focus-bg error-vehicle"></span>
                                </div>
                            </div>

                            <div class="col-md-12 form-group num-person">
                                <div class="row">
                                    <div class="col-5 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4 num-person-label">
                                        <label for="no_of_person"
                                            class="form-label">@lang('frontend.no_of_person')</label>
                                    </div>
                                    <div
                                        class="col-7 col-sm-6 col-md-8 col-lg-8 col-xl-8 col-xxl-8 justify-content-lg-start num-person-input">
                                        <div class="number-input-container">
                                            <input type="number" class="form-control has-content" id="no_of_person"
                                                name="no_of_person" value="1" min="1" step="1" required>
                                            <div class="icon">
                                                <div class="increment"><i class="fas fa-sort-up increment-icon"></i>
                                                </div>
                                                <div class="decrement"><i class="fas fa-sort-down decrement-icon"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="focus-bg error-no_of_person"></span>
                                </div>
                            </div>

                            <div class="col-md-12 form-group cab-form-text-area">
                                <textarea class="form-control" id="note_textarea" name="note" rows="4" cols="30"
                                    placeholder="@lang('frontend.other_things')" style="resize: none; opacity: 0.5;"
                                    required>{{ old('note') }}</textarea>
                            </div>

                            @php($methods = json_decode(Hyvikk::payment('method')))
                            @if (Hyvikk::frontend('admin_approval') == 0 && Hyvikk::api('api_key') != null)
                            <div class="col-lg-12">
                                <div class="checkboxes flex-row-center">
                                    <label class="state custom-state">@lang('frontend.select_payment_method'):
                                        &nbsp;</label>
                                    @foreach ($methods as $index => $method)
                                    <div class="pretty p-default p-round">
                                        <input type="radio" name="method" id="method_{{ $index }}" value="{{ $method }}"
                                            @if ($method=='cash' ) checked @endif>
                                        <div class="state custom-state">
                                            <label for="method_{{ $index }}">{{ $method }}</label>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            @endif

                            <div class="col-md-12 book-cab-submit">
                                <button class="tab-button mx-auto mt-3 btn booking-save" type="button" id="booking">
                                    <div class="spinner-border text-light hide-13 d-none" role="status">
                                        <span class="sr-only"></span>
                                    </div>
                                    <div class="hide-14">
                                        @lang('frontend.book_now')
                                    </div>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 d-none d-sm-none d-md-none d-lg-block d-xl-block">
                <div class="car-img">
                    <img src="{{ asset('assets/assets/images/round.png') }}" class="round-shape" alt="Shape">
                    <img src="{{ asset('assets/assets/images/tesla_car_PNG58.png') }}" class="tesla-car-backimg"
                        alt="Tesla Car">
                </div>
            </div>

        </div>
    </div>
</section> --}}
<section class="book-a-cab-detail booking-lux-wrap" id="book_Sec">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="feet-img">
                    <img src="{{ asset('assets/assets/images/FLEET.png') }}" alt="fleet">
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="booking-form-holder">
                    <div class="message-booking custom-alert"></div>

                    <div class="book-cab-form m-0">
                        {{-- <span class="booking-top-badge">Premium Ride Booking</span> --}}
                        <h1>Book Your Taxi</h1>

                        <form class="row mt-2" method="POST" id="booking_form">
                            {!! csrf_field() !!}

                            <input type="hidden" name="booking_type" class="booking_type" value="oneway">

                            <div class="col-md-12 col-sm-12 col-lg-12 form-group book-for-label">
                                <div class="row" style="display:flex;align-items:center;">
                                    <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                                        <label for="inputEmail" class="form-label">@lang('frontend.book_for')</label>
                                    </div>
                                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xxl-8">
                                        <div class="btn-now" role="group">
                                            <div type="button" class="btn now book-now">
                                                @lang('frontend.book_for_now')
                                            </div>
                                            <div type="button" class="btn now active ms-3 book-later"
                                                data-radiotext="later">
                                                @lang('frontend.book_for_later')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="load_radio_button"></div>

                            <div class="col-md-12 input-effect pickup-dropoff-address">
                                <input class="effect-22 form-control" type="text" placeholder="" name="pickup_address"
                                    id="pickup_address">
                                <label class="form-label label-static">@lang('frontend.pickup_address')</label>
                                <span class="focus-bg error-pickup_address"></span>
                            </div>

                            <div class="col-md-12 input-effect pickup-dropoff-address">
                                <input class="effect-22 form-control" type="text" placeholder="" name="dropoff_address"
                                    id="dropoff_address">
                                <label class="form-label label-static">@lang('frontend.dropoff_address')</label>
                                <span class="focus-bg error-dropoff_address"></span>
                            </div>

                            <div class="col-md-12 form-group date-time">
                                <div class="row">
                                    <div class="col-5 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                        <label for="inputState" id="current_data_time" class="form-label">
                                            @lang('frontend.Pickup_date_and_Time')
                                        </label>
                                    </div>
                                    <div class="col-7 col-sm-6 col-md-8 col-lg-8 col-xl-8 col-xxl-8 d-flex">
                                        <div class="datetime">
                                            <input type="text" class="form-control date" name="pickup_date"
                                                id="datepicker2" />
                                            <input type="text" class="form-control time has-content pickup_time"
                                                name="pickup_time">
                                        </div>
                                    </div>
                                    <span class="error-pickup_date_time"></span>
                                </div>
                            </div>

                            @if (Hyvikk::get('return_booking') == 1)
                                <div>
                                    <div class="col-lg-12 mt-3 text-center">
                                        <button type="button" class="btn active-btn" id="oneWayBtn">
                                            @lang('frontend.One_Way')
                                        </button>
                                        <button type="button" class="btn inactive-btn" id="returnWayBtn">
                                            @lang('frontend.Return_Way')
                                        </button>

                                        <div class="row form-group date-time1 d-none show-return-section">
                                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                <label for="inputState" id="current_data_time" class="form-label"
                                                    style="font-size: 16px;font-weight: 700;padding-right: 21px;">
                                                    @lang('frontend.return_pickup_date')
                                                </label>
                                            </div>
                                            <div class="col-6 col-sm-6 col-md-8 col-lg-8 col-xl-8 col-xxl-8 d-flex">
                                                <div class="datetime">
                                                    <input type="text" class="form-control date1 return_pickup_date"
                                                        id="datepicker4" name="return_pickup_date" />
                                                    <input type="text" class="form-control time1 return_pickup_time"
                                                        name="return_pickup_time">
                                                </div>
                                            </div>
                                            <span class="error-return_pickup_date_time"></span>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <div class="col-md-12 vehicle-type">
                                <div class="row">
                                    <div class="col-5 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4 vehicle-type-label">
                                        <label for="inputEmail4"
                                            class="form-label">@lang('frontend.Vehicle_Type')</label>
                                    </div>
                                    <div class="col-7 col-sm-6 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                                        <select class="form-select float-end custom-select v_type" name="vehicle_type"
                                            id="vehicle_type" aria-label="vehicle type" required>
                                            <option value="" disabled selected>@lang('frontend.vehicle_type')</option>
                                            @foreach ($vehicle_type as $type)
                                                <option value="{{ $type->id }}" {{ $type->id == old('vehicle_type') ? 'selected' : '' }}>
                                                    {{ $type->vehicletype }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <span class="focus-bg error-vehicle_type"></span>
                                </div>
                            </div>

                            <div class="col-md-12 vehicle-type">
                                <div class="row">
                                    <div class="col-5 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4 vehicle-type-label">
                                        <label for="inputEmail4"
                                            class="form-label">@lang('frontend.Select_Vehicle')</label>
                                    </div>
                                    <div class="col-7 col-sm-6 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                                        <select class="form-select float-end show_vehicle" name="vehicle" required>
                                            <option value="" disabled selected>Select a vehicle</option>
                                        </select>
                                    </div>
                                    <span class="focus-bg error-vehicle"></span>
                                </div>
                            </div>

                            <div class="col-md-12 form-group num-person">
                                <div class="row">
                                    <div class="col-5 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4 num-person-label">
                                        <label for="inputState"
                                            class="form-label">@lang('frontend.no_of_person')</label>
                                    </div>
                                    <div
                                        class="col-7 col-sm-6 col-md-8 col-lg-8 col-xl-8 col-xxl-8 justify-content-lg-start num-person-input">
                                        <div class="number-input-container">
                                            <input type="text" class="form-control has-content" name="no_of_person"
                                                value="1" min="1" step="1" required>
                                            <div class="icon">
                                                <div class="increment"><i class="fas fa-sort-up increment-icon"></i>
                                                </div>
                                                <div class="decrement"><i class="fas fa-sort-down decrement-icon"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="focus-bg error-no_of_person"></span>
                                </div>
                            </div>

                            <div class="col-md-12 form-group cab-form-text-area">
                                <textarea class="form-control" id="note_textarea" rows="4" cols="30"
                                    placeholder="@lang('frontend.other_things')" style="resize: none;"
                                    required>{{ old('note') }}</textarea>
                            </div>

                            @php($methods = json_decode(Hyvikk::payment('method')))
                            @if (Hyvikk::frontend('admin_approval') == 0 && Hyvikk::api('api_key') != null)
                                <div class="col-lg-12">
                                    <div class="checkboxes flex-row-center">
                                        <label class="state custom-state">@lang('frontend.select_payment_method'):
                                            &nbsp;</label>
                                        @foreach ($methods as $method)
                                            <div class="pretty p-default p-round">
                                                <input type="radio" name="method" id="method" value="{{ $method }}" @if ($method == 'cash') checked @endif>
                                                <div class="state custom-state">
                                                    <label>{{ $method }}</label>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif

                            <div class="col-md-12 book-cab-submit">
                                <button class="tab-button mx-auto mt-3 btn booking-save" type="button" id="booking">
                                    <div class="spinner-border text-light hide-13 d-none" role="status">
                                        <span class="sr-only"></span>
                                    </div>
                                    <div class="hide-14">
                                        @lang('frontend.book_now')
                                    </div>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 d-none d-sm-none d-md-none d-lg-block d-xl-block">
                <div class="car-img">
                    <img src="{{ asset('assets/assets/images/round.png') }}" class="round-shape" alt="shape">
                    <img src="{{ asset('assets/assets/images/tesla_car_PNG58.png') }}" class="tesla-car-backimg"
                        alt="car">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ----------------- Vechicles Section ------------------- --}}
{{-- <section class="our-vehicles  mt-2 mt-sm-2 mt-md-3 mt-lg-5 mt-xl-5">
    <div class="container ">
        <div class="row">
            <div class="col-12 mt-5 mt-sm-2 mt-md-3 mt-lg-5 mt-xl-5">
                <div class="our-vehicle-heading">
                    <h1>@lang('frontend.our_vehicle')</h1>
                </div>
            </div>
            <div class="col-12 col-md-6 col-sm-12 col-lg-8">
                <div class="slideshow">
                    <div class="owl-carousel">

                        @if (isset($vehicle) && count($vehicle) > 0)
                        @foreach ($vehicle as $v)
                        <div class="slides">
                            <img src="{{ asset('assets/uploads/' . $v->vehicle_image) }} " style="width:100%;"
                                data-icon="{{ $v && $v->getMeta('icon') ? asset('assets/uploads/' . $v->icon) : asset('assets/assets/images/car_blue.png') }}"
                                data-make="{{ $v->make_name }}" data-model="{{ $v->model_name }}"
                                data-vid="{{ $v->id }}" data-passanger="{{ $v->types->seats }}"
                                data-mileage="{{ $v->mileage }}" data-actions="track-img">
                        </div>
                        @endforeach
                        @else
                        <div class="slides"><img src="{{ asset('assets/uploads/car1.png') }}" style="width:100%;">
                        </div>
                        @endif
                    </div>
                    <!-- <div class="owl-nav">
                                                                <button type="button" role="presentation" class="owl-prev">
                                                                    <span aria-label="Previous">‹</span>
                                                                </button>
                                                                <button type="button" role="presentation" class="owl-next">
                                                                    <span aria-label="Next">›</span>
                                                                </button>
                                                            </div> -->
                    <div class="car-slider-dots">
                        <div class="dots-line"></div>
                    </div>

                    <div id="counter"></div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-sm-12 col-lg-4">
                <div class="car-features">
                    <span class="show-make">-</span>
                    <h2 class="show-model">-</h2>
                    <div class="line"></div>
                    <div class="car-features-col">
                        <div class="row">
                            <div
                                class="col-6 col-md-6 col-sm-6 col-lg-6 col-xxl-6 px-2 px-sm-4 px-md-2 px-lg-2 px-xl-4 image-hover">
                                <div class="car-features-detail">
                                    <div class="tesla-dark-logo">
                                        <img src="{{ asset('assets/assets/images/car_blue.png') }}"
                                            class="show-icon-img" width="83px" height="107px">
                                        <p class="d-none show-icon-img1">
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-6 col-md-6 col-sm-6 col-lg-6 col-xxl-6 px-2 px-sm-4 px-md-2 px-lg-2 px-xl-4 ">
                                <div class="car-features-detail">
                                    <div class="passanger">
                                        <p style="font-size:32px;font-weight:500;padding-top:35px"
                                            class="show-passanger">0</p>
                                        <p style="padding-top:27px;">@lang('frontend.Passanger')</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div
                                class="col-6 col-md-6 col-sm-6 col-lg-6 col-xxl-6 px-2 px-sm-4 px-md-2 px-lg-2 px-xl-4 ">
                                <div class="car-features-detail">
                                    <div class="rating">
                                        <p style="font-size:32px;font-weight:500;padding-top:30px" class="set-ratings">
                                        </p>
                                        <p style="padding-top:33px;">@lang('frontend.Ratings')</p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-6 col-md-6 col-sm-6 col-lg-6 col-xxl-6 px-2 px-sm-4 px-md-2 px-lg-2 px-xl-4 ">
                                <div class="car-features-detail">
                                    <div class="mileage">
                                        <p class="mileage-space show-mileage"
                                            style="font-size:32px;font-weight:500;padding-top:30px;">0
                                        </p>
                                        <p>
                                            <span style="font-weight: normal;">km</span>
                                        </p>
                                        <p style="padding-top:19px;">@lang('frontend.Mileage')</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
{{-- ------------- Services section -------------- --}}
<section class="our-services">
    <div class="container  counter-parent">
        <div class="row">
            <div class="col-md-12 ">
                <div class="our-services-heading">
                    <h1>@lang('frontend.our_service')</h1>
                </div>
            </div>
        </div>
        <div id="counter1"></div>
        <div class="dots-line"></div>
        {{-- start service --}}
        <div class="owl-carousel owl-carousel-vertical " style="margin-top: 30px;position:relative;">
            @if (isset($company_services) && count($company_services) > 0)
                @foreach ($company_services as $service)
                    <div class="slides">
                        <div class="row">
                            <div class="col-12 col-lg-4 col-md-6 col-sm-12  order-lg-first  order-md-first order-sm-last">
                                <div class="services-content">
                                    <div class="services-1">
                                        <div class="row">
                                            <div class="col-md-8 ">
                                                <div class="services-1-heading">
                                                    <h3>{{ $service->title }}</h3>
                                                    <div class="line"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="services-1-truckimg">
                                                    <img src="{{ asset('assets/assets/images/service.png') }}">
                                                </div>
                                            </div>
                                            <div class="col-md-12 ">
                                                <div class="services-1-content">
                                                    <p>{{ $service->description }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-8 order-lg-last  order-lg-last order-sm-first">
                                <div class="services-1-img">

                                    @if ($service->image != null)
                                        <img src="{{ url('assets/uploads/' . $service->image) }}">
                                    @else
                                        <img src="{{ asset('assets/assets/images/Mask.png') }}">
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        {{-- end service --}}
    </div>
    {{-- </div>
    </div>
    </div> --}}
</section>
{{-- ------------ Testimonial section ------------ --}}

<section class="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 ">
                <div class="testimonial-heading">
                    <h1>@lang('frontend.testimonials')</h1>
                </div>
            </div>
        </div>
        <div>
            <div class="owl-carousel" style="position: relative;">

                @if (isset($testimonial) && count($testimonial) > 0)
                    @foreach ($testimonial as $t)
                        <div class="slides">
                            <div class="row">
                                <div class="col-lg-5 col-md-6 col-sm-12">
                                    <div class="testimonials-imgs" style="position: relative;">
                                        @if ($t->image != null)
                                            <img src="{{ url('assets/uploads/' . $t->image) }}" alt="Testimonial Image"
                                                class="testimonial-image">
                                        @else
                                            <img src="{{ asset('assets/assets/images/testimonial.png') }}">
                                        @endif


                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-6 col-sm-12">
                                    <div class="testimonial-content">
                                        <h2>{{ $t->name }}</h2>
                                        <div class="line"></div>
                                        <p>{{ $t->details }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif



            </div>
            <!-- <div class="testimonial-dots">
                                                                                                                                <div class="dots-line"></div>
                                                                                                                            </div> -->
        </div>

    </div>
    </div>
</section>

@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const heroSlider = document.querySelector('#heroSlider');
            if (heroSlider) {
                new bootstrap.Carousel(heroSlider, {
                    interval: 2000,
                    ride: 'carousel',
                    pause: false,
                    wrap: true
                });
            }
        });

        $(window).on('resize', function () {
            $('.hero-carousel').trigger('refresh.owl.carousel');
        });

        $(document).on("change", ".v_type", function () {
            if ($(this).val() != null) {
                if ($(".booking_type").val() == "return_way") {
                    var select_status = $(".select-radio").val();
                    var v_type = $(this).val();
                    var date = $(".date").val();
                    var time = $(".time").val();
                    var return_pickup_date = $(".return_pickup_date").val();
                    var return_pickup_time = $(".return_pickup_time").val();
                    var booking_type = "return_way";

                    show_vehicle(select_status, v_type, date, time, booking_type, return_pickup_date,
                        return_pickup_time);
                } else {
                    var select_status = $(".select-radio").val();
                    var v_type = $(this).val();
                    var date = $(".date").val();
                    var time = $(".time").val();
                    var booking_type = "one_way";

                    show_vehicle(select_status, v_type, date, time, booking_type, null, null);
                }
            }
        });

        function show_vehicle(status = null, v_type = null, date = null, time = null, booking_type = null,
            return_pickup_date = null, return_pickup_time = null) {
            $.ajax({
                url: "{{ url('get_free_vehicle') }}",
                type: "get",
                data: {
                    'status': status,
                    'type_id': v_type,
                    'date': date,
                    'time': time,
                    'booking_type': booking_type,
                    'return_pickup_date': return_pickup_date,
                    'return_pickup_time': return_pickup_time
                },
                success: function (data) {
                    var tblprint = "";
                    if (data.status === 100 && data.data.length > 0) {
                        tblprint += "<option value='' disabled selected>Select a vehicle</option>";
                        $.each(data.data, function (i, item) {
                            tblprint += "<option value='" + item.id + "'>" + item.model_name +
                                "</option>";
                        });
                    } else {
                        tblprint += "<option value='' disabled selected>No vehicle Found</option>";
                    }

                    $('.show_vehicle').html(tblprint);
                }
            });
        }

        $(".image-hover").mouseover(function () {
            var img = "{{ asset('assets/assets/images/car_blue.png') }}";
            var img1 = "{{ asset('assets/assets/images/car_white.png') }}";
            if (img == $(this).find('.show-icon-img1').text()) {
                $(this).find('.show-icon-img1').text(img1);
                $(this).find('img').attr('src', img1);
            }
        }).mouseout(function () {
            var img = "{{ asset('assets/assets/images/car_blue.png') }}";
            var img1 = "{{ asset('assets/assets/images/car_white.png') }}";
            if (img1 == $(this).find('.show-icon-img1').text()) {
                $(this).find('.show-icon-img1').text(img);
                $(this).find('img').attr('src', img);
            }
        });

        $(".image-container").mouseover(function () {
            $(this).attr('src', $(this).data("hover"));
        }).mouseout(function () {
            $(this).attr('src', $(this).data("src"));
        });

        function get_ratings(vid) {
            var url = "{{ url('get_ratings') }}";
            if (typeof jQuery === 'undefined') {
                return;
            }

            $.ajax({
                url: url,
                type: "get",
                data: {
                    "vid": vid
                },
                success: function (data) {
                    if (data && data.avg !== undefined) {
                        var print = `${data.avg}
                             <span style="font-weight: normal; padding-left: 5px;">/5</span>`;
                        $(".set-ratings").html(print);
                    }
                },
                error: function () {
                    return;
                }
            });
        }

        $(document).ready(function () {
            var oneWayBtn = document.getElementById("oneWayBtn");
            var returnWayBtn = document.getElementById("returnWayBtn");

            if (oneWayBtn && returnWayBtn) {
                oneWayBtn.addEventListener("click", function () {
                    this.classList.add("active-btn");
                    this.classList.remove("inactive-btn");
                    returnWayBtn.classList.add("inactive-btn");
                    returnWayBtn.classList.remove("active-btn");

                    $(".booking_type").val('oneway');
                    $(".show-return-section").addClass('d-none');

                    $('#vehicle_type').prop('selectedIndex', 0);
                    $('.show_vehicle').prop('selectedIndex', 0);
                });

                returnWayBtn.addEventListener("click", function () {
                    this.classList.add("active-btn");
                    this.classList.remove("inactive-btn");
                    oneWayBtn.classList.add("inactive-btn");
                    oneWayBtn.classList.remove("active-btn");

                    $(".booking_type").val('return_way');
                    $(".show-return-section").removeClass('d-none');

                    $('#vehicle_type').prop('selectedIndex', 0);
                    $('.show_vehicle').prop('selectedIndex', 0);
                });
            }
        });
    </script>
@endsection