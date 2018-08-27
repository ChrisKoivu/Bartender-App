<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/* to access drink model */
use App\Drink;


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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         /* get posts for any auth user */
        $drinks = Drink::all()->toArray();
        
        return view('home', compact('drinks'));
    
    }
}
