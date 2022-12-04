<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
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
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $collection = Http::get('https://acs-hc-api-production.up.railway.app/api/grupo');
        $collectionGroup = Http::get('https://acs-hc-api-production.up.railway.app/api/grupo')->collect();
        
        return view('pages.dashboard', ['collection'=>$collection['alumnos']], ['collectionGroup'=>$collectionGroup]);
    }
}
