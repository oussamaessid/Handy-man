<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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
      //  return view('home');
     $user_type = Auth::user()->role_as;

       if($user_type == 'admin'){
            return view('home');
    }
        if($user_type =='writer'){
           return view('writer');
        }
        if($user_type =='provider'){
            return view('provider');
       }

}

  
}