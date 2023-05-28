<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class RentController extends Controller
{
    public function index(Request $request, $slug)
    {
        $car = Car::with(['type', 'location'])->whereSlug($slug)->firstOrFail();

        return view('rent', [
            'car' => $car
        ]);
    }
}
