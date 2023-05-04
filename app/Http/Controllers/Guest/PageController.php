<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

        $movies = Movie::all();

        return view('home', compact('movies'));
    }
    public function show($id){

        $movie = Movie::find($id);

        return view('movie', compact('movie'));
    }
    public function vote(){

        $movies = Movie::select('*')->orderBy('vote', 'desc')->get();

        return view('vote', compact('movies'));
    }
}
