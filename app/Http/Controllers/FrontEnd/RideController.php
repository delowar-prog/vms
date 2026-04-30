<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Model\VehicleModel;
use Illuminate\Http\Request;

class RideController extends Controller
{
   public function search(Request $request)
{
    $distance = $request->distance_km;

    $vehicles = VehicleModel::all();

    foreach ($vehicles as $v) {
        $v->fare = $v->base_fare + ($distance * $v->per_km_rate);
    }

    return view('frontend.search-result', compact('vehicles', 'distance'));
}
}
