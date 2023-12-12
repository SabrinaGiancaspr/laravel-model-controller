<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie; // add models 
class PageController extends Controller
{
    public function index(){
        $movies = Movie::all();
        return view('guest.index', compact('movies'));
    }
}
