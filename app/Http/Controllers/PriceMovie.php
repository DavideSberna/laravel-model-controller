<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class PriceMovie extends Controller
{
    public function index(){
        $menuItems = config('data.nav');
        $movies = Movie::all();
        return view('price', compact('movies','menuItems'));
    }
}
