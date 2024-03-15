<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;

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
        $medicine = Medicine::all();
        return view('home', ['medicine' => $medicine]);
    }
    public function manager()
    {
        return view('manager');
    }
    public function owner()
    {
        return view('owner');
    }
}
