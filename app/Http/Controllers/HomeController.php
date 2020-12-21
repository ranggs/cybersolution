<?php

namespace App\Http\Controllers;

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
        return view('home');
    }

    public function ProcessLogin(){
        if(auth()->user()->id_role==1){ //admin
            return redirect(url('Admin'));
        }else if(auth()->user()->id_role==2){ //peserta
            return redirect(url('Peserta'));
        }

    }
}
