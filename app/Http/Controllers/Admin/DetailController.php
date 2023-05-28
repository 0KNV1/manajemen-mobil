<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index($slug)
    {
        $car = Car::with(['type', 'driver','location'])->whereSlug($slug)->firstOrFail();
        $similiarCars = Car::with(['location', 'driver','type'])
            // ->where('type_id', $item->type_id)
            ->where('id', '!=', $car->id)
            ->get();

        return view('detail', [
            'car' => $car,
            'similiarCars' => $similiarCars
        ]);
    }
}
