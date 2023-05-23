<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class HomeController extends Controller
{
    public function index(){
        $menuItems = config('data.nav');
        $movies = Movie::all();
        return view('home', compact('movies','menuItems'));
    }

    public function show($id)
    {
        $menuItems = config('data.nav');
        $movie = Movie::findOrFail($id);

        $rating = $movie->vote;
        $stars = $this->stars($rating);

        return view('show', compact('movie', 'menuItems', 'stars'));
    }

    public function stars($number)
    {
        $stars = floor($number / 2);
        //dd($stars);
        return $stars;
    }


}
