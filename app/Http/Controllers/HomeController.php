<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
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
        $person = Auth::user();
        $property_id = $person->property_id;

        return view('home', compact('property_id'));
        // $person = Auth::user();
        // if($person->type == "teacher"){
        //     return redirect()->route('teacher-dashboard');
        // }else{
        //     return redirect()->route('student-dashboard');
        // }  
    }
}
