@extends('frontend.layouts.app')

@section('title')
    <title>@lang('frontend.about') | {{ Hyvikk::get('app_name') }}</title>
@endsection


@section('css')
   
@endsection
@section('content')
    
        <style>
            .main-section-background {
                position: relative;
                width: 100%;
                height: auto;
                background-image: url('assets/assets/images/header-back.png');
                background-repeat: no-repeat;
                background-position: right 0px;

            }
    .vehicle-card {
        background: #f8f9fa;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .vehicle-card h1 {
        font-size: 40px;
    }

    .car-img {
        max-height: 280px;
        width: 100%;
    }

    .badge.bg-success {
        font-size: 14px;
    }
        </style>

@foreach($vehicles as $v)
<div class="vehicle-card p-4 mb-4">
    <div class="row align-items-center">

        <!-- Left -->
        <div class="col-md-4">
            <h4 class="fw-bold text-primary">{{ $v->make_name }}</h4>
            <p class="text-muted mb-3">{{ $v->model_name }}, {{ $v->color_name }} or Similar</p>

            <span class="badge bg-success mb-3">Best Value</span>

            <ul class="list-unstyled text-muted" style="font-size: 20px;">
                <li>✔ Pickup Charges Included</li>
                <li>✔ Free Waiting Time</li>
                <li>✔ Baby seats <span class="badge bg-success">Free</span></li>
                <li>✔ Fixed Price—No Surprises</li>
                <li>✔ Clean, Comfortable cars</li>
                <li>✔ Experienced Drivers</li>
            </ul>
        </div>

        <!-- Image -->
        <div class="col-md-4 text-center">
            <img src="{{ $v->vehicle_image ? asset('assets/uploads/'.$v->vehicle_image) : asset('assets/images/default.png') }}" class="car-img w-100">
            
        </div>

        <!-- Price -->
        <div class="col-md-4 text-end">
            <span class="badge bg-warning text-light mb-2 fs-5">Total One-way Price</span>

            <h1 class="fw-bold">$ {{ number_format($v->fare, 2) }}</h1>

            <p class="mb-1">⭐ 4.9 | Private Transfers</p>
            <p class="text-muted">No Hidden Costs</p>

            <a href="#" class="btn btn-success w-100 mt-2">BOOK NOW</a>
        </div>

    </div>
</div>

@endforeach



@endsection
