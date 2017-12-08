<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BasicPage;

class BasicPageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
     public function show(Request $request, BasicPage $basicpage)
     {

        return view('basicpages.show', [
            'basicpage' => $basicpage,
        ]);
     }
}
