<?php

namespace App\Http\Controllers;

use App\Models\Dish;

class HomeController extends Controller
{
    public function index()
    {
        $dishes = Dish::with('ingredients')->get();

        return view('home')
            ->with('dishes', $dishes);
    }
}
