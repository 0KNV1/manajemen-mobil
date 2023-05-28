<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index($slug)
    {
        $item = Car::with(['type', 'brand'])->whereSlug($slug)->firstOrFail();
        $similiarcars = Car::with(['location', 'driver','type'])
            // ->where('type_id', $item->type_id)
            ->where('id', '!=', $item->id)
            ->get();

        return view('detail', [
            'item' => $item,
            'similiarcars' => $similiarcars
        ]);
    }
}
