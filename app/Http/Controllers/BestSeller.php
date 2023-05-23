<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class BestSeller extends Controller
{
    public function index(){
        $menuItems = config('data.nav');
        $movies = Movie::all();
        return view('bestSeller', compact('movies','menuItems'));
    }
}
