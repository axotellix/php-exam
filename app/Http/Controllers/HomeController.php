<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use > models
use App\Models\Thing;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $things = Thing::all();
        return view('pages/home', ['things' => $things]);
    }
}
