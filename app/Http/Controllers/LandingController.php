<?php

namespace App\Http\Controllers;
use App\Models\Car;
use App\Models\Rent;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
    $cars = Car::with(['location', 'driver','type'])->latest()->take(4)->get()->reverse();
    $rents = Rent::select(['status'])->latest()->get()->reverse();
    return view('landing', [
        'cars' => $cars,
        'rents' => $rents,
    ]);
    }
}
