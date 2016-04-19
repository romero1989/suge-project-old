<?php

namespace App\Http\Controllers;
use Auth;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('dashboard');
    }

    public function dashboard() {
        $user = Auth::user();
        
        if (!$user->can('view.dashboard')) {
            return view('/errors/503');            
        } 
        
        return view('dashboard');
    }

}
