<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Packeg;
use App\Country;
use App\User;

class AdminHomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $search = Country::search('name')->get();
        $countries = Country::all();
        $packegs = Packeg::where('feature',1)->get();
        return view('admin.home',compact('users','packegs','countries','search'));
    }
}
