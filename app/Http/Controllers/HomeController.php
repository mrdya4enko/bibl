<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\heading;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $headings = heading::all();

        return view('welcome', compact('headings'));
    }

    public function heading($id)
    {
        $headings = heading::all();
        $oneheding = heading::findOrFail($id);
        $oneheding->load('books');
//        dd($heading);
        return view('heading', compact('oneheding', 'headings'));
    }
}
